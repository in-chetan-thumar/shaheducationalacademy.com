@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>B.F.M.</h2>

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
                                <a href="{{route('frontend.courses.b.f.m')}}">B.F.M.</a>
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
                            <div class="txt-size-lheight">

                                <h2 class="keyword">BFM</h2>: The

                                <h2 class="keyword">Bachelors Of Finance</h2>&nbsp;degree introduces students to the
                                global Economy and institutional aspects of financial systems. There is a vast coverage
                                of the specialized financial institutions, their asset classes, and the

                                <h2 class="keyword">Stock Markets</h2>&nbsp;in which the different assets are traded.

                                <h2 class="keyword">BFM Course</h2>&nbsp;includes financial markets, valuation issues,
                                international trade and finance, financial modelling and

                                <h2 class="keyword">financial management</h2>&nbsp;The Bachelors of Finance program
                                comprises a range of courses in finance, economics, mathematics and statistics.
                                <br>
                                <br><span class="text-bold-blue">Subjects Which We Teach:</span>

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

                @component('frontend.components.quick-enquiry-link')
                @endcomponent
                <!-- END .sidebar-right -->
            </div> <!-- END .content-wrapper-inner -->
        </div>
        <!-- END .content-wrapper -->
    </div>
@endsection
