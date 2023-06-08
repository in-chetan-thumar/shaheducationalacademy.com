<?php


namespace App\Repositories;


use App\Models\Solution;

class SolutionRepository
{
    public $model;

    /**
     * SolutionRepository constructor.
     */
    public function __construct(Solution $model)
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
        $solution = $this->model->create($params);
        return $solution;
    }

    // Update recoard
    public function update($params, $id)
    {
        $solution = $this->findByID($id)->update($params);
        return $solution;
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
            ->paginate(config('constants.PER_PAGE'), ['*'], 'page', !empty($params['page']) ? $params['page'] : '')
            ->setPath($params['path']);
        }
    }

    public function changeStatus($id)
    {
        $solution = $this->findByID($id);
        if ($solution->is_active == 'Y') {
            $solution->is_active = 'N';
        } else {
            $solution->is_active = 'Y';
        }

        return $solution->save();
    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.solution.table', compact('tableData'))->render();
    }

    public function object(){
        return $this->filter(['return_type'=>'object']);
    }
}
