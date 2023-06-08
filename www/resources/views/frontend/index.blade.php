@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <!-- BEGIN .content-wrapper -->
    <div class="content-wrapper clearfix">
        <!-- BEGIN .content-wrapper-inner -->
        <div class="content-wrapper-inner clearfix">

            <!-- BEGIN .center-content -->
            <div class="center-content page-content">
                <div class="widget content-block">
                    <div class="textwidget">
                        <div style="font-size: 15px; line-height: 26px;">
                            <p>
                                Welcome to Shah Educational Academy. If you are looking for a guide who can lead you
                                into the right direction, then you have come to the right place! Shah Educational
                                Academy stands as a leading coaching institute since 1986.
                            </p>

                            <p style="margin-top:1rem;">
                                At SEA we train you for Undergraduate Courses (F.Y.J.C., S.Y.J.C.), Graduate Courses
                                (B.COM, B.M.S, B.A.F, B.B.I, B.F.M) and along with that; Professional Courses (C.A.,
                                C.S., M com) are also undertaken by us. (Coaching Classes for FYJC, SYJC, BCOM, BMS,
                                BAF, BBI, BFM, CA, CS, M.Com in Mumbai, Bandra, Vile parle)
                            </p>

                            <p style="margin-top:1rem;">
                                <b style="font-weight:bolder;">What we believe at SEA is that not only hard work but,
                                    smart work too is necessary for excellent educational success.</b> That is why we
                                provide our students with early completion of courses, revision after regular intervals,
                                limited students in one batch-hence individual attention to each student, and SEA
                                Advantage Test Series -which builds up students’ confidence for exams.
                            </p>

                            <p style="margin-top:1rem;">
                                SEA has set benchmark since years, for its simple success mantra, to give results and
                                quality of knowledge with practical guidance and mentoring students. We have gained
                                confidence of students over the years and is still growing.
                            </p>

                            <p style="margin-top:1rem;">
                                Shah Educational Academy is committed to establish world class educational and training
                                institute by creating career oriented educational coaching for our students. At SEA we
                                have made winning formula of success, for our students to succeed in their career. This
                                makes SEA a preferred choice of students since 1986.
                            </p>
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
