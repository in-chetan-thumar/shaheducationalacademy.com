<?php


namespace App\Repositories;


use App\Models\Assignment;

class AssignmentRepository
{
    public $model;

    /**
     * AssignmentRepository constructor.
     */
    public function __construct(Assignment $model)
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
        $assignment = $this->model->create($params);
        return $assignment;
    }

    // Update recoard
    public function update($params, $id)
    {
        $assignment = $this->findByID($id)->update($params);

        return $assignment;
    }

    public function filter($params)
    {
        $params['return_type'] = $params['return_type'] ?? '' ;
        $params['start_date'] = $params['start_date'] ?? '' ;
        $params['end_date'] = $params['end_date'] ?? '' ;

        $this->model = $this->model->when(!empty($params['query_str']), function ($query) use ($params) {
            $query->where('title', 'LIKE', '%' . $params['query_str'] . "%");
        });


        $this->model = $this->model->when(!empty($params['start_date'] && !empty($params['end_date'])), function ($q) use ($params) {
            return $q->whereBetween('created_at', [$params['start_date'], $params['end_date']]);
        });


        if ($params['return_type'] == 'object') {
            return $this->model->orderBy('created_at','desc')->get();
        } else {
        
        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);
        }
    }

    public function changeStatus($id)
    {
        $assignment = $this->findByID($id);
        if ($assignment->is_active == 'Y') {
            $assignment->is_active = 'N';
        } else {
            $assignment->is_active = 'Y';
        }

        return $assignment->save();
    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.assignment.table', compact('tableData'))->render();
    }

    public function object(){
        return $this->filter(['return_type'=>'object']);
    }

}
