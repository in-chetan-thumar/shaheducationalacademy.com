@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>Result</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{ route('frontend.home') }}">Home</a> &nbsp; »
                        Result </h5>
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

                                <section id="thumbwrapper1" class="gallery-img-content" data-gallery-id="1"
                                    data-content-per-page="5" data-rating-type="off">
                                    <input type="hidden" class="pagenum" value="1">
                                    <ul id="huge_it_gallery1" class="huge_it_gallery view-thumbnails">

                                        <div style="width:100%" id="galleryId">
                                            <div data-src="{{ asset('assets/frontend/images/5e9ece1b6bc05913371763.jpg') }}"
                                                data-sub-html="<h4 style='color: white;'></h4><p></p>">
                                                <a href="#">
                                                    <img class="img-responsive"
                                                        src="{{ asset('assets/frontend/images/thumb_44_100_70_0_0_auto.jpg') }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div data-src="{{ asset('assets/frontend/images/5e9ece3210e34777927378.png') }}"
                                                data-sub-html="<h4 style='color: white;'></h4><p></p>">
                                                <a href="#">
                                                    <img class="img-responsive"
                                                        src="{{ asset('assets/frontend/images/thumb_45_100_70_0_0_auto.png') }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div data-src="{{ asset('assets/frontend/images/5e9ece3568e38984947595.png') }}"
                                                data-sub-html="<h4 style='color: white;'></h4><p></p>">
                                                <a href="#">
                                                    <img class="img-responsive"
                                                        src="{{ asset('assets/frontend/images/thumb_46_100_70_0_0_auto.png') }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                        </div>

                                    </ul>
                                </section>
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
