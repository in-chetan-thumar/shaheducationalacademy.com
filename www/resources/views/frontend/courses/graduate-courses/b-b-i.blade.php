@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>B.B.I</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{route('frontend.home')}}">Home</a> &nbsp; »
                        &nbsp;<a href="#"> Courses </a> &nbsp;»&nbsp; <a
                            href="#">Graduate
                            Courses</a> &nbsp;» &nbsp; <ul>
                            <li class="active">
                                <a href="{{route('frontend.courses.b.b.i')}}">B.B.I</a>
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
                            <style type="text/css" media="screen">
                                .g-recaptcha>div>div>iframe {
                                    transform: scale(0.7);
                                    margin-left: -47px;
                                }
                            </style>
                            <div class="txt-size-lheight">

                                <h2 class="keyword">BBI:</h2>

                                <h2 class="keyword">Bachelors In Banking and Insurance</h2>has been designed to develop
                                an understanding of the financial theory and analysis that are particularly practically
                                used in

                                <h2 class="keyword">banking and insurance sectors.</h2>The course develops the concepts
                                and skills that are required by financial analyst operating in this environment. BBI
                                also provides an understanding of contemporary financial problems and issues faced by
                                banking sector and Insurance companies.
                                <br>
                                <br><span class="text-bold-blue">&nbsp;Subjects Which We Teach:</span>

                                <ul class="moreData_nos">
                                    <li><span>Accounts</span></li>
                                    <li><span>Maths</span></li>
                                </ul>
                                {{-- <a href="http://www.shaheducationalacademy.com/courses/enquiry"><img alt=""
                                        src="http://lc.shaheducation.tiez.net/storage/app/media/uploaded-files/enquiry-btn.png"
                                        class="fr-fic fr-dii" data-result="success" style="margin-right: 10px;"></a>
                                <a href="http://www.shaheducationalacademy.com/courses/batch-timing">
                                    <img alt=""
                                        src="https://shaheducationalacademy.tiez.net/storage/app/media/uploaded-files/batchtime-btn.png"></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END .center-content -->
            </div>
            <!-- BEGIN .sidebar-right -->
            <!-- BEGIN .sidebar-right -->
            <div class="sidebar-right page-content">

                @component('frontend.components.announcement')
                @endcomponent

                {{-- @component('frontend.components.enquiry-form')
                @endcomponent --}}

                @component('frontend.components.quick-enquiry-link')
                @endcomponent

                <!-- END .sidebar-right -->
            </div> <!-- END .content-wrapper-inner -->
        </div>
        <!-- END .content-wrapper -->
    </div>
@endsection
