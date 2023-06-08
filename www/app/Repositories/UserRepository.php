<?php


namespace App\Repositories;


use App\Models\City;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(User $model)
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

        $user = $this->model->create($params);

        $user->assignRole($params['role']);

        return $user;
    }

    // Update recoard
    public function update($params, $id)
    {
        $user = $this->findByID($id)->update($params);

        // Update role
        if ($user) {
            DB::table('model_has_roles')->where('model_id', $id)->delete();
            $this->findByID($id)->syncRoles($params['role']);
        }
        return $user;
    }

    // Change Password
    public function changePassword($params, $id)
    {
        $user = $this->findByID($id)->update($params);

        return $user;
    }

    public function updateProfile($params, $id)
    {
        return $this->findByID($id)->update($params);

    }

    public function filter($params)
    {


        $this->model = $this->model->when(!empty($params['query_str']), function ($query) use ($params) {
            $query->when(!empty($params['role']), function ($query) use ($params) {
                $query->whereHas('roles', function ($query) use ($params) {
                    $query->where('id', $params['role']);
                });
            })->whereHas('roles', function ($query) {
                $query->where('name','<>',config('constants.SUPER_ADMIN'));
            })->where('name', 'LIKE', '%' . $params['query_str'] . "%")->orWhere('email', 'LIKE', '%' . $params['query_str'] . "%");
        });


        $this->model = $this->model->when(!empty($params['role']), function ($query) use ($params) {
            $query->whereHas('roles', function ($query) use ($params) {
                $query->where('id', $params['role']);
            });
        });

        $this->model = $this->model->whereHas('roles', function ($query) {
            $query->where('name','<>',config('constants.SUPER_ADMIN'));
        });

        $this->model = $this->model->when(!empty($params['start_date'] && !empty($params['end_date'])), function ($q) use ($params) {
            return $q->whereBetween('created_at', [$params['start_date'], $params['end_date']]);
        });

        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);

    }

    public function changeStatus($id)
    {
        $user = $this->findByID($id);
        if ($user->is_active == 'Y') {
            $user->is_active = 'N';
        } else {
            $user->is_active = 'Y';
        }

        return $user->save();
    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.user.table', compact('tableData'))->render();
    }

}
