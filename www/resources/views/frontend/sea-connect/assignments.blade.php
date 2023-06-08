@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>Assignments</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{ route('frontend.home') }}">Home</a> &nbsp; »
                        &nbsp; <a href="#"> Sea Connect </a> &nbsp;»
                        &nbsp; <ul>
                            <li class="active">
                                <a href="{{ route('frontend.sea.connect.assignments') }}">Assignments</a>
                            </li>
                        </ul>
                    </h5>
                </div>

                <div class="page-title-block">

                </div>
            </div>
            <div class="breadcrumbs clearfix">
            </div>
        </div>
    </div>

    <!-- BEGIN .content-wrapper -->
    <div class="content-wrapper clearfix">
        <!-- BEGIN .content-wrapper-inner -->
        <div class="content-wrapper-inner clearfix">

            <!-- BEGIN .center-content -->
            <div class="center-content page-content">
                <div class="widget content-block">
                    <div class="textwidget">
                        <div style="font-size: 15px; line-height: 26px;">
                            <p>
                                <br>
                            </p>

                            @if (isset($assignments) and !empty($assignments))
                                @foreach ($assignments as $assignment)
                                    <h3><img data-fr-image-pasted="true"
                                            src="{{ asset('assets/frontend/images/arrow.png') }}" data-result="success"
                                            class="fr-fic fr-dii"> {{ $assignment->title }}
                                        <a href="{{ env('APP_URL') . $assignment->document_url }}" rel="noopener noreferrer"
                                            target="_blank"><img data-fr-image-pasted="true"
                                                src="{{ asset('assets/frontend/images/download.png') }}"
                                                data-result="success" class="fr-fic fr-dii"></a>
                                        <a href="{{ env('APP_URL') . $assignment->document_url }}" rel="noopener noreferrer"
                                            target="_blank"><img data-fr-image-pasted="true"
                                                src="{{ asset('assets/frontend/images/checked.png') }}"
                                                data-result="success" class="fr-fic fr-dii"></a>
                                    </h3>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
                <!-- END .center-content -->
            </div>
            <!-- BEGIN .sidebar-right -->
            <div class="sidebar-right page-content">

                @component('frontend.components.announcement')
                @endcomponent

                @component('frontend.components.quick-enquiry-link')
                @endcomponent
                <!-- END .sidebar-right -->
            </div> <!-- END .content-wrapper-inner -->
        </div>
        <!-- END .content-wrapper -->
    </div>
@endsection
