@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>WHY SEA?</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{route('frontend.home')}}">Home</a> &nbsp; »
                        &nbsp; <a href="#">Who We Are</a> &nbsp; »
                        &nbsp; <ul>
                            <li class="active">
                                <a href="{{ route('frontend.who.we.are.sea.advantage') }}">WHY SEA?</a>
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
                            <p>Shah Educational Academy</p>

                            <ul class="moreData-wsea">
                                <li>SEA provides knowledge based teaching</li>
                                <li>SEA has experienced &amp; dedicated faculties</li>
                                <li>SEA has a history of generating good results</li>
                                <li>SEA is preferred by rankers</li>
                                <li>SEA provides updated course material</li>
                                <li>SEA provides a systematic study plan</li>
                                <li>SEA provides regular guidance &amp; motivation</li>
                                <li>SEA completes course in time &amp; allows self-study</li>
                                <li>SEA provides facility of thorough practise through regular test &amp; evaluation
                                </li>
                                <li>SEA provides facility of revision lectures &amp; small batches&nbsp;</li>
                                <li>

                                    <h2 class="keyword">Toppers</h2>In

                                    <h2 class="keyword">Leading Colleges Of Bandra And Vile Parle</h2>Are Part Of SEA
                                </li>
                            </ul>

                            <p><strong>Management Team:</strong> Shah educational academy has group of faculties and
                                visionary teachers who render their best experience and skills in the enrichment of
                                students and education system of SEA.</p>

                            <ul class="moreData-wsea">
                                <li><span class="text-normal-blue">Prof Sharad Shah</span>: Qualified CA and more than
                                    30 years of active experience in educational field</li>
                                <li><span class="text-normal-blue">Prof Anish Shah:</span> Qualified with Masters in
                                    Commerce, more than 20 years of experience</li>
                                <li><span class="text-normal-blue">Prof Ankur Shah:</span> Qualified MBA, M.Com, IPCC
                                    group 1, has experience of more than 12 years in the educational coaching</li>
                                <li><span class="text-normal-blue">Prof Yogesh Shah :</span> CA by profile and more
                                    than 20 years of rich experience in the growing of education system</li>
                                <li><span class="text-normal-blue">Prof Kelkar Avdhoot:</span> He is our Maths
                                    specialist with more than 20 years’ experience</li>
                                <li><span class="text-normal-blue">Prof Mavani :</span> Bsc (hons) DPS with more than
                                    20 years of teaching experience</li>
                                <li><span class="text-normal-blue">Prof Paresh Vithlani :</span> Maths faculty with
                                    more than 20 years of practical experience</li>
                                <li><span class="text-normal-blue">Prof Seema Patkar:</span> Our OC and SP faculty with
                                    more than 10 years of active experience</li>
                                <li><span class="text-normal-blue">Prof Ashish Kothari:</span>CA with 10 years of
                                    Accounts teaching experience</li>
                                <li><span class="text-normal-blue">Prof Tejas Joshi:</span>Law faculty with 10 years of
                                    practical experience</li>
                                <li><span class="text-normal-blue">Prof Laukik Shah:</span> CS by profession with more
                                    than 10 years of experience </li>
                            </ul>

                            <span class="text-bold-blue">Mission:</span>
                            <p>SEA’s ultimate mission is to make every stone a diamond! Creating excellent students with
                                skills and knowledge is the
                                highest priority of our institute. Imparting wisdom along with knowledge and education
                                is what we firmly believe in.
                                Thus, success in life of each student under SEA is our main goal.
                            </p>
                            <span class="text-bold-blue">Vision:</span>
                            <p>Our vision is to grow into the educational sector of India and set a benchmark for
                                excellence and quality educational
                                system which can help our students to achieve great success in life and to mentor our
                                students to achieve their desired
                                career success with our educational experience.</p>
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
