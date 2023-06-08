@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>ISC Commerce</h2>

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
                                <a href="{{route('frontend.courses.isc.commerce')}}">ISC
                                    Commerce</a>
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
                            <div class="inner-content-wrapper">

                                <p><span class="text-bold-blue">Why ISC ?:</span>
                                    <br>The Indian School Certification Examination(ISC) is a 2-year program offered by
                                    the Council for the Indian School Certificate Examinations (CISCE).The course aims
                                    to prepare students to face challenges in a dynamic world, where the focus is on
                                    providing a sound knowledge base that is the foundation for any the course of study
                                    in higher education.
                                    <br>
                                    <br>Along with this the ISC also enhances the overall personality development of
                                    students and makes them sensitive to social issues through a series of programs.
                                    <br>
                                    <br>In Senior Secondary ISC XI and XII, five options are offered. An increasing
                                    emphasis is placed on the importance of personal responsibility for work and by the
                                    time they complete ISC – XII, students are expected to be capable of meeting the
                                    demands of college life
                                </p>
                            </div>
                            <div class="table-responsive">

                                <table class="table no-border-table" id="resp-table-new">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div style="border: 1px solid #eee; padding: 5px;">

                                                    <ul class="moreData_nos">
                                                        <li><span>English</span></li>
                                                        <li><span>Accounts</span></li>
                                                        <li><span>Economics</span></li>
                                                        <li><span>Commerce</span></li>
                                                        <li><span>Mathematics</span></li>
                                                        <li><span>Business Studies</span></li>
                                                    </ul>
                                                </div>
                                                <div style="margin-top: 20px; border: 1px solid #eee; padding: 5px;">

                                                    <ul class="moreData_nos">
                                                        <li><span>30 years of experience in commerce</span></li>
                                                        <li><span>Highly qualified and experienced faculty</span></li>
                                                        <li><span>Comprehensive study material</span></li>
                                                        <li><span>Small Batches</span></li>
                                                        <li><span>Exceptional Results</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>

                                                <h2 class="keyword"><strong style="color:#07193d; font-size:16px;">Our
                                                        Flagship Courses</strong></h2>
                                                <br>
                                                <br><span style="color:#d91e1e;"><strong>ACME</strong> – Reach the ISC
                                                    pinnacle</span>

                                                <ul class="moreData_nobullets isc-ul">
                                                    <li>One of our most intriguing courses designed exclusively for ISC
                                                        – commerce.</li>
                                                    <li>Subjects : Accounting, Commerce, Mathematics, Economics</li>
                                                    <li>The one stop solution for ISC commerce , ACME addresses all the
                                                        challenges of the curriculum leading to academic excellence</li>
                                                    <li>Grades: XI – XII</li>
                                                </ul><span style="color:#d91e1e;"><strong>EMA</strong> – Learner’s
                                                    module</span>

                                                <ul class="moreData_nobullets isc-ul">
                                                    <li>Another offering from SEA , EMA is apt for a comprehensive ISC –
                                                        commerce solution</li>
                                                    <li>Subjects: Economics, Accounting and Mathematics</li>
                                                    <li>Grades: XI – XII</li>
                                                </ul><span style="color:#d91e1e;"><strong>Accounts &amp;
                                                        Mathematics&nbsp;</strong> – The core</span>

                                                <ul class="moreData_nobullets isc-ul">
                                                    <li>At SEA, we ensure the transition from a phobia subject to an
                                                        interesting one. With exceptionally experienced tutors learn
                                                        mathematics and accounting in the most unique way.</li>
                                                    <li>Subject: Mathematics and Accounts</li>
                                                    <li>Grades: XI – XII</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
