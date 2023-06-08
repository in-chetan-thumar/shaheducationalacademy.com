@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>B.Com</h2>

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
                                <a href="{{route('frontend.courses.b.com')}}">B.Com</a>
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

                                <h2 class="keyword">B.com</h2>:

                                <h2 class="keyword">B.com</h2>Undoubtedly the most popular course when it comes to
                                students deciding to graduate in commerce related field. B.Com or B.Com (Hons.) helps
                                students grasp the very basics of commerce and enables them to get a broad overview of
                                how the concepts are applied. B.Com helps students gain managerial skills and
                                simultaneously be exposed to general business principles, organizational behaviour and
                                other facets so as to aid in making them a better professional. Some major subjects
                                during B.Com are: Accountancy, Income Tax, Law.
                                <br>
                                <br><span class="text-bold-blue">Subjects Which We Teach:</span>

                                <ul class="moreData_nos">
                                    <li><span>Accountancy</span></li>
                                    <li><span>Income Tax</span></li>
                                    <li><span>BM</span></li>
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
