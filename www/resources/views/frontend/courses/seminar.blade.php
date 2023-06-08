@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>Seminars</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{route('frontend.home')}}">Home</a> &nbsp; » &nbsp;<a
                            href="#"> Courses </a> &nbsp;» &nbsp; <ul>
                            <li class="active">
                                <a href="{{ route('frontend.courses.seminars') }}">Seminars</a>
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
                            <div class="txt-size-lheight">In the era of constant changes in the educational system and
                                demand for practical knowledge it is important to know the value of education and its
                                practical use, but it’s not an easy process for all.
                                <br>
                                <br>At Shah Educational Academy we help students with our educational mentoring and

                                <h2 class="keyword">career guidance seminar</h2> based on the possible strength and interest
                                of the students desired career.
                                <br>
                                <br>At SEA we have

                                <h2 class="keyword">career counselling and motivational seminar</h2> which helps students to
                                decide what is best for them.
                                <br>
                                <br>Some of the common questions like courses available in colleges? Which college to
                                choose? How much percentage required? What is the benefit of choosing the respective course
                                over the other courses? etc. is explained in details to you by our excellent speakers who
                                are experienced in the educational field.
                                <br>
                                <br>Our seminars help you to be very sure and clear in taking decision about the career and
                                courses in which they can excel, which makes SEA Proud for contributing in success of our
                                students
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
