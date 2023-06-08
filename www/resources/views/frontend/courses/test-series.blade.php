@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>Test series</h2>

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
                                <a href="{{route('frontend.courses.test.series')}}">Test series</a>
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
                            <div class="inner-content-wrapper">After studying throughout the year, it’s important to
                                check what is the core strength and weakness of our students in varied subjects so that
                                they can improve before the final exams. Shah Educational Academy is committed not only
                                for coaching but for testing student’s real calibre and scope of improvement with our

                                <h2 class="keyword">SEA ADVANTAGE TEST SERIES.</h2>&nbsp; Sea Advantage Test Series is
                                a pre

                                <h2 class="keyword">board exam</h2>&nbsp;held by Shah Educationl Academy to check the
                                hard work of teachers and students of SEA. Here are some of the highlights of how Sea
                                Advantage Test Series work-

                                <ul class="moreData_nos">
                                    <li>

                                        <h2 class="keyword">Maharashtra Board Moderators</h2>&nbsp;with years of
                                        experience give mentoring session and guidance to students on how to appear for
                                        paper and which are the areas to focus, from presentation to number of words
                                        every query of students are solved in these sessions.
                                    </li>
                                    <li>After mentoring SEA organizes a

                                        <h2 class="keyword">Pre Board Exam i.e A Mock Test</h2>&nbsp;at actual board
                                        centre’s with strict moderators of board exams.
                                    </li>
                                    <li>Papers are set as per actual board pattern with bar code and category wise by

                                        <h2 class="keyword">Board Paper setters.</h2>&nbsp;
                                    </li>
                                    <li>Students have to

                                        <h2 class="keyword">appear for the Board Exam</h2>&nbsp;at respective centre
                                        and as per board rules and regulations. By creating real board exam atmosphere
                                        we make students psychologically ready and prepared for the final exams.
                                    </li>
                                    <li>Students papers are checked by

                                        <h2 class="keyword">board paper checker</h2>&nbsp;with proper remarks so that
                                        students can improve the weak subjects and strong subjects can be made better.
                                    </li>
                                    <li>Through this students have exact picture and process idea of board exams and at
                                        the last moment they just have to work on the subjects which are weak.</li>
                                </ul>SEA takes care of the queries and solves all the respective doubts of students pre
                                and post Advantage Test Series and thus help them to develop more and more confidence to
                                appear for the final board exam.

                                <a href="{{ asset('assets/frontend/images/test_serise_1.png') }}"><img
                                        class="aligncenter size-full fr-fic fr-dii"
                                        src="{{ asset('assets/frontend/images/test_serise_1.png') }}" alt=""></a>
                                <a href="{{ asset('assets/frontend/images/test_serise_2.png') }}"><img
                                        class="aligncenter size-full fr-fic fr-dii"
                                        src="{{ asset('assets/frontend/images/test_serise_2.png') }}" alt=""></a>
                                <a href="{{ asset('assets/frontend/images/test_serise_3.png') }}"><img
                                        class="aligncenter size-full fr-fic fr-dii"
                                        src="{{ asset('assets/frontend/images/test_serise_3.png') }}" alt=""></a>
                                <!-- END .inner-content-wrapper -->
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
