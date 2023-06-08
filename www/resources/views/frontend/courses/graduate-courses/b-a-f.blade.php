@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>B.A.F</h2>

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
                                <a href="{{route('frontend.courses.b.a.f')}}">B.A.F</a>
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

                                <h2 class="keyword">BAF</h2>: The

                                <h2 class="keyword">Bachelor of Accounting and Finance</h2>course is designed to
                                produce qualified finance specialists and accountants. Students opting for BAF can opt
                                for a career in banking, investments, insurance and other financial services. At Shah
                                Educational Academy, we work towards moulding students in such a way that they rightly
                                fit the requirements of an ideal

                                <h2 class="keyword">Chartered Accountant or a Financial Analyst industry.</h2>Our
                                Faculties closely work with students ensuring that none of their doubts remain
                                unresolved.
                                <br>
                                <br><span class="text-bold-blue">Subjects Which We Teach:</span>

                                <ul class="moreData_nos">
                                    <li><span>Accounts</span></li>
                                    <li><span>Tax</span></li>
                                </ul>
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

            </div> <!-- END .content-wrapper-inner -->
        </div>
        <!-- END .content-wrapper -->
    </div>
@endsection
