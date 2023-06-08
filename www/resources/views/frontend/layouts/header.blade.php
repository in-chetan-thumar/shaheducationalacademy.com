<!-- BEGIN #header-wrapper -->
<div id="header-wrapper">
    <!-- BEGIN #header-border -->
    <div id="header-border">
        <!-- BEGIN #header-top -->
        <div id="header-top" class="clearfix">
            <!-- END #header-top -->
        </div>
        <!-- BEGIN #header-content-wrapper -->
        <div id="header-content-wrapper" class="clearfix">
            <div id="logo" class="site-title-image">
                <div>
                    <a class="logo" href="{{route('frontend.home')}}"><img
                            src="{{ asset('assets/frontend/images/logo.png') }}" alt="Shah Educational Academy"></a>
                </div>
            </div>
            <div class="right_phone_socialDiv">
                <div style="float: right;width:100%">
                    <ul class="social-icons clearfix">
                        <li><a target="_blank" href="https://www.facebook.com/seaclass"><span
                                    class="facebook-icon"></span></a></li>
                    </ul>
                </div>
                <div style="float: right;">
                    <ul class="top-right-nav clearfix">
                        <li class="phone-icon"><span class="blue_text_b">+91 - 9820418533 | 022 - 26051635</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--right_phone_socialDiv END-->
            <!-- END #header-content-wrapper -->
        </div>
    </div> <!-- END #header-content-wrapper -->

    <!-- BEGIN #main-menu-wrapper -->
    <div id="main-menu-wrapper" class="header-menu">

        <ul class="resmainmenu">
            <li role="presentation" class="">
                <a href="{{route('frontend.home')}}">
                    HOME
                    <span class="sf-sub-indicator"> »</span>
                </a>

            </li>
            <li role="presentation" class="who-we-are">
                <a href="/">
                    WHO WE ARE
                    <span class="sf-sub-indicator"> »</span>
                </a>

                <ul class="sub-menu">
                    <li role="presentation" class="">
                        <a href="{{route('frontend.who.we.are.directors.desk')}}">
                            DIRECTORS PROFILE
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                    <li role="presentation" class="">
                        <a href="{{route('frontend.who.we.are.sea.advantage')}}">
                            WHY SEA?
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                </ul>
            </li>
            <li role="presentation" class="courses">
                <a href="/">
                    COURSES
                    <span class="sf-sub-indicator"> »</span>
                </a>

                <ul class="sub-menu">
                    <li role="presentation" class="">
                        <a href="#">
                            UNDERGRADUATE COURSES
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                        <ul class="sub-menu">
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.f.y.j.c')}}">
                                    F.Y.J.C.
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.s.y.j.c')}}">
                                    S.Y.J.C
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a
                                    href="{{route('frontend.courses.isc.commerce')}}">
                                    ISC COMMERCE
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="">
                        <a href="/">
                            GRADUATE COURSES
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                        <ul class="sub-menu">
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.b.com')}}">
                                    B.COM
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.b.m.s')}}">
                                    B.M.S.
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.b.a.f')}}">
                                    B.A.F
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.b.b.i')}}">
                                    B.B.I
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.b.f.m')}}">
                                    B.F.M.
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="">
                        <a href="/">
                            PROFESSIONAL COURSES
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                        <ul class="sub-menu">
                            <li role="presentation" class="">
                                <a
                                    href="{{route('frontend.courses.chartered.accountancy.c.a')}}">
                                    CHARTERED ACCOUNTANCY (C.A.)
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a
                                    href="{{route('frontend.courses.company.secretary.c.s')}}">
                                    COMPANY SECRETARY (C.S.)
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.m.com')}}">
                                    M.COM
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="">
                        <a href="{{route('frontend.courses.test.series')}}">
                            TEST SERIES
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                    <li role="presentation" class="">
                        <a href="{{route('frontend.courses.crash.course')}}">
                            CRASH COURSE
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                    <li role="presentation" class="">
                        <a href="{{route('frontend.courses.seminars')}}">
                            SEMINARS
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                </ul>
            </li>
            <li role="presentation" class="result">
                <a href="{{route('frontend.result')}}">
                    RESULT
                    <span class="sf-sub-indicator"> »</span>
                </a>

            </li>
            <li role="presentation" class="sea-connect">
                <a href="/">
                    SEA CONNECT
                    <span class="sf-sub-indicator"> »</span>
                </a>

                <ul class="sub-menu">
                    <li role="presentation" class="">
                        <a href="{{route('frontend.sea.connect.question.papers')}}">
                            QUESTION PAPERS
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                    <li role="presentation" class="">
                        <a href="{{route('frontend.sea.connect.solutions')}}">
                            SOLUTIONS
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                    <li role="presentation" class="">
                        <a href="{{route('frontend.sea.connect.assignments')}}">
                            ASSIGNMENTS
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                </ul>
            </li>
            <li role="presentation" class="contact">
                <a href="{{route('frontend.contact')}}">
                    CONTACT
                    <span class="sf-sub-indicator"> »</span>
                </a>

            </li>
        </ul>

        <div class="mobile-container">
            <div class="topnav">

                <ul class="myLinks">
                    <li role="presentation" class="">
                        <a href="{{route('frontend.home')}}">
                            HOME
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                    <li role="presentation" class="who-we-are">
                        <a href="/">
                            WHO WE ARE
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                        <ul class="sub-menu">
                            <li role="presentation" class="">
                                <a href="{{route('frontend.who.we.are.directors.desk')}}">
                                    DIRECTORS PROFILE
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.who.we.are.sea.advantage')}}">
                                    WHY SEA?
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="courses">
                        <a href="/">
                            COURSES
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                        <ul class="sub-menu">
                            <li role="presentation" class="">
                                <a href="#">
                                    UNDERGRADUATE COURSES
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                                <ul class="sub-menu">
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.f.y.j.c')}}">
                                            F.Y.J.C.
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.s.y.j.c')}}">
                                            S.Y.J.C
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.isc.commerce')}}">
                                            ISC COMMERCE
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                </ul>
                            </li>
                            <li role="presentation" class="">
                                <a href="/">
                                    GRADUATE COURSES
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                                <ul class="sub-menu">
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.b.com')}}">
                                            B.COM
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.b.m.s')}}">
                                            B.M.S.
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.b.a.f')}}">
                                            B.A.F
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.b.b.i')}}">
                                            B.B.I
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.b.f.m')}}">
                                            B.F.M.
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                </ul>
                            </li>
                            <li role="presentation" class="">
                                <a href="/">
                                    PROFESSIONAL COURSES
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                                <ul class="sub-menu">
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.chartered.accountancy.c.a')}}">
                                            CHARTERED ACCOUNTANCY (C.A.)
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                    <li role="presentation" class="">
                                        <a
                                            href="{{route('frontend.courses.company.secretary.c.s')}}">
                                            COMPANY SECRETARY (C.S.)
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                    <li role="presentation" class="">
                                        <a href="{{route('frontend.courses.m.com')}}">
                                            M.COM
                                            <span class="sf-sub-indicator"> »</span>
                                        </a>

                                    </li>
                                </ul>
                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.test.series')}}">
                                    TEST SERIES
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.crash.course')}}">
                                    CRASH COURSE
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.courses.seminars')}}">
                                    SEMINARS
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="result">
                        <a href="{{route('frontend.result')}}">
                            RESULT
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                    <li role="presentation" class="sea-connect">
                        <a href="/">
                            SEA CONNECT
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                        <ul class="sub-menu">
                            <li role="presentation" class="">
                                <a href="{{route('frontend.sea.connect.question.papers')}}">
                                    QUESTION PAPERS
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.sea.connect.solutions')}}">
                                    SOLUTIONS
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                            <li role="presentation" class="">
                                <a href="{{route('frontend.sea.connect.assignments')}}">
                                    ASSIGNMENTS
                                    <span class="sf-sub-indicator"> »</span>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="contact">
                        <a href="{{route('frontend.contact')}}">
                            CONTACT
                            <span class="sf-sub-indicator"> »</span>
                        </a>

                    </li>
                    
                </ul>
            </div>
        </div>
        <a href="javascript:void(0);" class="icon">
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
        <div class="menu-btn-cross">&#215;</div> <!-- END #main-menu-wrapper -->
    </div>
</div>

<div class="slider clearfix">
    <div id="carousel-carousel64783055e223f" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-carousel64783055e223f" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-carousel64783055e223f" data-slide-to="1"></li>
            <li data-target="#carousel-carousel64783055e223f" data-slide-to="2"></li>
            <li data-target="#carousel-carousel64783055e223f" data-slide-to="3"></li>
            <li data-target="#carousel-carousel64783055e223f" data-slide-to="4"></li>
            <li data-target="#carousel-carousel64783055e223f" data-slide-to="5"></li>
            <li data-target="#carousel-carousel64783055e223f" data-slide-to="6"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('assets/frontend/images/5e8309fa386ea370030759.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/frontend/images/5e8309fa386ea572554429.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/frontend/images/5e8309fb177f5001659653.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/frontend/images/5e8309fb1dbe6640569805.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/frontend/images/5e8309fbcda85549725212.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/frontend/images/5e8309fc07a9e474712075.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/frontend/images/5e8309fc8d265347060366.jpg') }}" alt="">
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-carousel64783055e223f" role="button" data-slide="prev">
            <span class="icon icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-carousel64783055e223f" role="button" data-slide="next">
            <span class="icon icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--marquee start-->
<div style='padding:3px;' class='ptms_marquee'>
    <marquee style='color:#FFF;font:Arial;' scrollamount='2' scrolldelay='8' direction='left'
        onmouseover='this.stop()' onmouseout='this.start()'>
        <ul id="" class="menu menu-1 ">
            <li id="" class="menu-item menu-item-11 menu-item-level-0"><a
                    href="{{route('frontend.courses.f.y.j.c')}}" title=""
                    class="menu-title" target="_self">Undergraduate Courses</a></li>
            <li id="" class="menu-item menu-item-12 menu-item-level-0"><a
                    href="{{route('frontend.courses.b.com')}}" title=""
                    class="menu-title" target="_self">Graduate Courses</a></li>
            <li id="" class="menu-item menu-item-13 menu-item-level-0"><a
                    href="{{route('frontend.courses.chartered.accountancy.c.a')}}"
                    title="" class="menu-title" target="_self">Professional Courses</a></li>
        </ul>
    </marquee>
</div>
<div class="header-block-wrapper clearfix">
    <div class="abs_position_div">
        <div class="header-block-inner">
        </div>
    </div>
</div>
<!--marquee end-->
