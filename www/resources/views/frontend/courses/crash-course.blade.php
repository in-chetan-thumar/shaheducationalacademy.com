@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>Crash course</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{route('frontend.home')}}">Home</a> &nbsp; »
                        &nbsp;<a href="#"> Courses </a> &nbsp;» &nbsp;
                        <ul>
                            <li class="active">
                                <a href="{{route('frontend.courses.crash.course')}}">Crash course</a>
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
                            <div class="txt-size-lheight">Crash Courses of SEA are specially developed for the students
                                who have tough time to manage the regular classes and at the last moment of exams feel
                                overstressed.
                                <br>
                                <br>With systematic study plan and key notes we make complete crash course for students
                                which helps them to clear the exams easily. At SEA, we provide special notes for crash
                                course and select past few years papers and concepts which are important in exams,
                                students can refer the same and appear for exams with confidence.
                                <br>
                                <br>

                                <h2 class="keyword">We take crash course for all the courses like SYJC, TY B.COm,
                                    TYBMS, TYBBI, TYBAF, and TYBFM</h2>
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
