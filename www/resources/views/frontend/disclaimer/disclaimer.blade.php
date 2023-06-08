@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
<div class="page-header clearfix">
    <div class="page-header-inner clearfix">
        <div class="page-title">
            <h2>Disclaimer</h2>

            <style>
                .bread-crumb>a:hover,
                a:click {
                    text-decoration: none;
                }
            </style>

            <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                <h5 style="display: flex;"><a href="{{route('frontend.home')}}">Home</a> &nbsp; »
                    &nbsp; <ul>
                        <li class="active">
                            <a href="{{route('frontend.disclaimer')}}">Disclaimer</a>
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
                        <p>We publish the website ‘as is’ without any warranty of any kind, express or implied, as
                            to the operation of our site, the accuracy of the information or the products or
                            services referred to on the website (in so far as such warranties may be excluded under
                            any relevant law) and Shah Educational Academy shall not be liable for any losses or
                            damage that may result from use of the website as a consequence of any inaccuracies in,
                            or any omissions from, the information which the site may contain. Please read our
                            conditions of use carefully as by using the website you will be taken to have agreed to
                            be bound by them. We reserve the right to vary the conditions of use at any time and
                            will post any variations here. You are advised to review the conditions of use on a
                            regular basis as you will be deemed to have accepted variations if you continue to use
                            the website after they have been posted. We take every care and precaution to ensure
                            that information published on the website is accurate when posted and regularly updated,
                            but Shah Educational Academy does not guarantee its accuracy and we may change the
                            information at any time without notice. Any reference to any product or service which
                            has been or may be provided by Shah Educational Academy or any other company does not
                            amount to a promise that such product or service will be available at any time. Changes
                            to or improvements in such products or services may be made at any time without notice.
                            Images, trade marks and brands are protected by intellectual property laws and must not
                            be reproduced or appropriated in any manner without written. Unless specifically
                            prohibited by a notice published on any page, you may make a print copy of such parts of
                            the website as you may reasonably require for your own personal use provided that any
                            copy has attached to it any relevant proprietary notices and/or disclaimers. All other
                            use is prohibited. We are not responsible for the content of any other website from
                            which you have accessed the website or to which you may hyperlink from the website and
                            cannot be held liable for any loss or damage you incur as a result thereof. © Shah
                            Educational Academy </p>
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
        </div> <!-- END .content-wrapper-inner -->
    </div>
    <!-- END .content-wrapper -->
</div>

@endsection