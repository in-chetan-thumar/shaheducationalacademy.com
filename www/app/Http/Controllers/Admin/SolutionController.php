<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SolutionRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('solution-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.solution.solution_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        try {
            $data['error'] = false;
            $data['view'] = view('admin.solution.offcanvas')->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolutionRequest $request)
    {
        try {
            DB::beginTransaction();
            $params = [];
            $params = $request->validated();
            if ($request->has('file')) {
                $fileDir = config('constants.SOLUTION_DOC_PATH');

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['document'] = basename($request->file('file')->store($fileDir));
            }
            $solution = resolve('solution-repo')->create($params);
            if (!empty($solution)) {
                $data['error'] = false;
                $data['message'] = 'Solution stored successfully.';
                $data['view'] = resolve('solution-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $solution = resolve('solution-repo')->findByID($id);
            $data = [];
            $data['error'] = false;
            $data['view'] = view('admin.solution.offcanvas', compact('solution'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolutionRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $params = [];
            $params = $request->validated();
            $solution = resolve('solution-repo')->findById($id);
            if ($request->has('file')) {
                $fileDir = config('constants.SOLUTION_DOC_PATH');
                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                File::delete(config('constants.SOLUTION_DOC_URL') . $solution->document);
                $params['document'] = basename($request->file('file')->store($fileDir));
            }
            $solution->update($params);
            if ($solution) {
                $data['error'] = false;
                $data['message'] = 'Solution updated successfully.';
                $data['view'] = resolve('solution-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $solution = resolve('solution-repo')->findById($id);
            if (!empty($solution)) {
                File::delete(config('constants.SOLUTION_DOC_URL') . $solution->document);
                $solution->delete();
                toastr()->success('Solution deleted successfully..!');
                return redirect()->route('solutions.index');
            } else {
                toastr()->error('Solution not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('solutions.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['start_date'] =  $request->start_date ?? null;
            $params['end_date'] =  $request->end_date ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }

        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        } else {
            $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        }

        return $params;
    }
}
