@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>Directors Profile</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{route('frontend.home')}}">Home</a> &nbsp; »
                        &nbsp; <a href="#">Who We Are</a> &nbsp; »
                        Directors Profile </h5>
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
                            <div class="inner-content-wrapper">
                                <div class="txt-size-lheight">
                                    <h2 class="keyword">Mr Sharad Shah</h2><br>
                                    B.com, CA<br>
                                    Managing Director/ Founder <br><br>
                                    <div class="director_pic">
                                        <img alt=""
                                            src="http://shaheducationalacademy.tiez.net//storage/app/media/uploaded-files/sharad-shah.jpg">
                                    </div>

                                    Mr Sharad Shah is the founder and pillar of Shah Educational Academy. After having
                                    taught at leading colleges like
                                    <h2 class="keyword">MMK</h2> and coaching institutes, he decided to develop his own
                                    method of teaching and followed a simple philosophy for academic success that has
                                    reaped rich rewards for thousands of students today.
                                    His active involvement in building SEA’s unique approach, involving personalized
                                    educational service that delivers unbounded value, has been a milestone.<br /><br />

                                    Mr. Sharad has successfully combined his collective experiences in diverse fields to
                                    strategize, plan and effectively
                                    implement sustainable education coaching models. His passion for quality coaching
                                    has created new horizon in education
                                    through successful track record.<br /><br />

                                    The future of <h2 class="keyword">Shah Educational Academy</h2> is shaped through
                                    his continuous thirst for challenging
                                    ‘Education beyond Boundaries’. He has over the years – brick by brick – built a
                                    vibrant education support base through
                                    “knowledge base” initiatives and a student oriented service delivery platform.
                                </div>
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

                @component('frontend.components.quick-enquiry-link')
                @endcomponent
                <!-- END .sidebar-right -->
            </div> <!-- END .content-wrapper-inner -->
        </div>
        <!-- END .content-wrapper -->
    </div>
    <!-- BEGIN #footer-wrapper -->
@endsection
