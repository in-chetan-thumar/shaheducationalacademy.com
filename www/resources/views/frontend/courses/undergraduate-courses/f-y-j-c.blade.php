@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>F.Y.J.C.</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{route('frontend.home')}}">Home</a> &nbsp; »
                        &nbsp;<a href="#"> Courses </a> &nbsp;»&nbsp; <a
                            href="#">Undergraduate
                            Courses</a> &nbsp;» &nbsp; <ul>
                            <li class="active">
                                <a
                                    href="{{route('frontend.courses.f.y.j.c')}}">F.Y.J.C.</a>
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
                            <!-- START .main-content-wrapper -->
                            <div class="txt-size-lheight">

                                <h2 class="keyword">FYJC</h2>:

                                <h2 class="keyword">First Year Jr. College</h2>I.e. 11th grade in which students take
                                admission after clearing 10th or SSC board examination. FYJC consist of basic commercial
                                subjects which makes students aware about commerce and economics to choose right career.
                                <br>Sea moulds the students with right coaching for new subjects and area of
                                complications in Jr. College with academic guidance.
                            </div>
                            <div class="txt-size-lheight">
                                <br><span class="text-bold-blue">Subjects Which We Teach:</span>

                                <ul class="moreData_nos">
                                    <li><span>Accounts</span></li>
                                    <li><span>Maths</span></li>
                                    <li><span>Eco</span></li>
                                    <li><span>OC</span></li>
                                    <li><span>SP</span></li>
                                </ul>

                                {{-- <p>
                                </p> --}}
                                {{-- <a href="http://www.shaheducationalacademy.com/courses/enquiry"><img alt=""
                                        src="http://lc.shaheducation.tiez.net/storage/app/media/uploaded-files/enquiry-btn.png"
                                        class="fr-fic fr-dii" data-result="success" style="margin-right: 10px;"></a>
                                <a href="http://www.shaheducationalacademy.com/courses/batch-timing">
                                    <img alt=""
                                        src="https://shaheducationalacademy.tiez.net/storage/app/media/uploaded-files/batchtime-btn.png"></a> --}}
                                <p>
                                    <br>
                                </p>
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
            </div>
            <!-- END .sidebar-right -->
        </div> <!-- END .content-wrapper-inner -->
    </div>
@endsection
