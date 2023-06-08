<?php


namespace App\Repositories;

use App\Models\Contact;

class ContactRepository
{
    public $model;

    /**
     * ContactRepository constructor.
     */
    public function __construct(Contact $model)
    {
        return $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }

    // Create new recoard
    public function create($params)
    {
        $contact = $this->model->create($params);
        return $contact;
    }

    // Update recoard
    public function update($params, $id)
    {
        $contact = $this->findByID($id)->update($params);
        return $contact;
    }

    public function filter($params)
    {
        $params['return_type'] = $params['return_type'] ?? '';
        $params['start_date'] = $params['start_date'] ?? '';
        $params['end_date'] = $params['end_date'] ?? '';

        $this->model = $this->model->when(!empty($params['query_str']), function ($query) use ($params) {
            $query->where('subject', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('name', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('email', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('mobile', 'LIKE', '%' . $params['query_str'] . "%");
        });

        $this->model = $this->model->when(!empty($params['start_date'] && !empty($params['end_date'])), function ($q) use ($params) {
            return $q->whereBetween('created_at', [$params['start_date'], $params['end_date']]);
        });

        if ($params['return_type'] == 'object') {
            return $this->model->orderBy('created_at', 'desc')->get();
        } else {

            return $this->model
                ->latest()
                ->paginate(config('constants.PER_PAGE'), ['*'], 'page', !empty($params['page']) ? $params['page'] : '')
                ->setPath($params['path']);
        }
    }

    public function changeStatus($id)
    {
        $contact = $this->findByID($id);
        if ($contact->is_active == 'Y') {
            $contact->is_active = 'N';
        } else {
            $contact->is_active = 'Y';
        }

        return $contact->save();
    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.contact.table', compact('tableData'))->render();
    }

    public function object()
    {
        return $this->filter(['return_type' => 'object']);
    }
}
