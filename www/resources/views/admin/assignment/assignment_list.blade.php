@extends('admin.layouts.master')

@section('title')
    Assignment list
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb', ['li_1' => ['Dashboard' => route('root')]])
        @slot('title')
            Assignment list
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        @can('assignments.create')
                            <a href="{{ route('assignments.create') }}" onclick="showSaveModel(event)" class="btn btn-primary"><i
                                    class="mdi mdi-account-plus"></i>&nbsp;Add Assignment</a>
                        @endcan
                    </div>
                    <div class="float-start">
                        {!! Form::open([
                            'url' => route('assignments.index'),
                            'id' => 'form-search',
                            'class' => 'row row-cols-lg-auto g-3 align-items-center',
                            'method' => 'get',
                        ]) !!}
                        <div class="form-group">
                            {!! Form::text('query_str', request()->query('query_str'), [
                                'class' => 'form-control',
                                'placeholder' => 'Search by title',
                                'style="width: 330px;"',
                            ]) !!}
                        </div>
                        <div class="form-group">
                            @component('components.date-picker-component')
                            @endcomponent
                        </div>
                        <button type="submit" name="type" value="submit"
                            class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        &nbsp;
                        <a href="{{ route('assignments.index') }}" class="btn btn-secondary waves-effect waves-light">
                            Reset
                        </a>
                        {!! Form::close() !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        {!! $table !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="divOffcanvas">

        </div>
    </div>
@endsection
@section('script-bottom')
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/assignment.js') }}"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(e) {
            if (!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
@endsection
