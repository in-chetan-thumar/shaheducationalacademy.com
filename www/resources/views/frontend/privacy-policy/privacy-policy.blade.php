@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
<div class="page-header clearfix">
    <div class="page-header-inner clearfix">
        <div class="page-title">
            <h2>Privacy Policy</h2>

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
                            <a href="{{route('frontend.privacy.policy')}}">Privacy Policy</a>
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
                        <p>Your privacy is of great importance to us. As a user of this web site (the “Site”), you
                            are valued by us and we will take appropriate measures to protect the information
                            provided by and collected from you on the Site in connection with the functions,
                            facilities, products and services offered on our Site. As our business changes and
                            grows, so will this policy. Please check back periodically for additions and changes.
                            Information we collect and how we use it We only request and use information absolutely
                            essential to respond to your requests for information on our services and to inform you
                            of services we think may be of interest to you. Our site uses your IP address (an IP
                            address identifies the type of browser you are using i.e. Netscape; Internet Explorer by
                            assigning a unique number) for general system administration to serve you better by
                            diagnosing problems with our server. We will not collect any information about
                            individuals, except where it is specifically and knowingly provided by them. Examples of
                            such information are: Your name Your mobile telephone number Your email address The
                            information collected will be used to send you the information you have requested and to
                            provide information that may be useful to you. We may share non-personal aggregate
                            statistics (group) data about our site visitors’ traffic patterns with partners or other
                            parties. However, we do not sell or share any information about individual users.
                            ‘Cookies’ At times, we may use a feature of your browser to send your computer a
                            “cookie”. Cookies are used by thousands of web sites in order to enhance your web
                            experience. A cookie is a small data file that assigns a unique anonymous number to your
                            browser from a web server and is stored on your computer’s hard drive. Cookies can not
                            damage or read information stored on your hard drive. Cookies make your web experience
                            more enjoyable by storing passwords and preferences. You can adjust your browser
                            settings to refuse all cookies or to inform you when a cookie is being placed on your
                            hard drive. However, your election not to accept cookies may diminish your experience
                            with the Site because of additional time needed to repeatedly enter information. Policy
                            Changes Any changes to this policy will be posted here. Shah Educational Academy will
                            maintain the confidentiality of the information it collects. We maintain internal
                            practices that help protect the security and confidentiality of this information by
                            limiting employee access to and use of this information. </p>
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




