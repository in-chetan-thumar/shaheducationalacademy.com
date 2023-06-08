@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>S.Y.J.C.</h2>

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
                                    href="{{route('frontend.courses.s.y.j.c')}}">S.Y.J.C.</a>
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
                            <div>

                                <h2 class="keyword">SYJC</h2>: It Is

                                <h2 class="keyword">Second Year Of Jr. College,</h2>12th Standard- Examinations Of SYJC
                                is taken by respective

                                <h2 class="keyword">Maharashtra Board.</h2>It is very important year for the students,
                                as the whole career of the student can be based on this year’s score. Students who want
                                to get their preferred colleges and career in graduation needs to score well in all
                                subjects of SYJC.SEA makes their efforts easy. <span class="text-bold-blue">Subjects
                                    Which We Teach:</span>

                                <ul class="moreData_nos">
                                    <li>Accounts</li>
                                    <li>Maths</li>
                                    <li>Eco</li>
                                    <li>OC</li>
                                    <li>SP</li>
                                </ul>

                                {{-- <p>
                                    <a href="http://www.shaheducationalacademy.com/courses/enquiry"><img alt=""
                                            src="http://lc.shaheducation.tiez.net/storage/app/media/uploaded-files/enquiry-btn.png"
                                            class="fr-fic fr-dii" data-result="success" style="margin-right: 10px;"></a>
                                    <a href="http://www.shaheducationalacademy.com/courses/batch-timing">
                                        <img alt=""
                                            src="https://shaheducationalacademy.tiez.net/storage/app/media/uploaded-files/batchtime-btn.png"></a>
                                </p> --}}
                                <p>
                                    <a href="{{ asset('assets/frontend/images/syjc_banner.png') }}"><img
                                            class="aligncenter size-full fr-fic fr-dii"
                                            src="{{ asset('assets/frontend/images/syjc_banner.png') }}" alt=""></a>
                                    <a href="{{ asset('assets/frontend/images/batch_timings.png') }}"><img
                                            class="aligncenter size-full fr-fic fr-dii"
                                            src="{{ asset('assets/frontend/images/batch_timings.png') }}"
                                            alt=""></a>
                                    <a href="{{ asset('assets/frontend/images/price_combo.png') }}"><img
                                            class="aligncenter size-full fr-fic fr-dii"
                                            src="{{ asset('assets/frontend/images/price_combo.png') }}" alt=""></a>
                                    <a href="{{ asset('assets/frontend/images/combo.png') }}"><img
                                            class="aligncenter size-full fr-fic fr-dii"
                                            src="{{ asset('assets/frontend/images/combo.png') }}" alt=""></a>
                                </p>

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
