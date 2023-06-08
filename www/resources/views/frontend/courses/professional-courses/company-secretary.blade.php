@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>Company Secretary (C.S.)</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{route('frontend.home')}}">Home</a> &nbsp; »
                        &nbsp;<a href="#"> Courses </a> &nbsp;»&nbsp; <a
                            href="#">Professional
                            Courses</a> &nbsp;» &nbsp; <ul>
                            <li class="active">
                                <a href="{{route('frontend.courses.company.secretary.c.s')}}">Company
                                    Secretary (C.S.)</a>
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
                            <div class="txt-size-lheight"><strong style="color: #07193d; font-size: 17px;">Who is a
                                    company secretary?</strong>

                                <ol>
                                    <li>An Expert in Corporate Law, Company and Securities Law</li>
                                    <li>A vital link between the company and its:

                                        <ul>
                                            <li>Board of Directors</li>
                                            <li>Share Holders</li>
                                            <li>Government Authorities</li>
                                        </ul>
                                    </li>
                                    <li>Compliance officer of the Company and In House Legal Counsel.</li>
                                </ol>
                                <br><strong style="color: #07193d; font-size: 17px;">What Services does a CS offer? OR
                                    What is the role of a CS in the Company?</strong>

                                <ol>
                                    <li>Corporate Governance and Secretarial Services.</li>
                                    <li>Corporate Laws Advisory and Representation Services</li>
                                    <li>Financial Market Services</li>
                                    <li>Management Services</li>
                                </ol>
                                <br><strong style="color: #07193d; font-size: 17px;">Career as a Company
                                    Secretary</strong>

                                <ol>
                                    <li>Companies with a paid up share capital of Rs 5 Crores or more and Companies that
                                        are listed in the stock exchange are compulsorily required to appoint a full
                                        time CS.</li>
                                    <li>CS is also eligible for appointment to Superior Posts in the Central Government
                                    </li>
                                    <li>Self Employed Consultant</li>
                                    <li>Package of 4-5Lakhs initially at the entry level in the profession. There is no
                                        upper limit with the growth in experience and expertise</li>
                                </ol>
                                <br>
                                <div class="table-responsive">

                                    <table class="table" id="resp-table-new">
                                        <tbody>
                                            <tr>
                                                <td><strong style="color:#07193d; font-size:17px;">Foundation
                                                        Level</strong></td>
                                                <td><strong style="color:#07193d; font-size:17px;">Executive
                                                        Level</strong></td>
                                                <td><strong style="color:#07193d; font-size:17px;">Professional
                                                        Level</strong></td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <ol>
                                                        <li>English and Business Communication</li>
                                                        <li>Economics and Statistics</li>
                                                        <li>Financial Accounting</li>
                                                        <li>Elements of Business Laws and Management</li>
                                                    </ol>
                                                </td>
                                                <td valign="top"><strong style="color:#07193d; font-size: 13px;">MODULE
                                                        I</strong>

                                                    <ol>
                                                        <li>General and Commercial Laws</li>
                                                        <li>Company Accounts, Cost and Management Accounting</li>
                                                        <li>Tax Laws</li>
                                                    </ol>
                                                </td>
                                                <td valign="top"><strong style="color:#07193d; font-size: 13px;">MODULE
                                                        I</strong>

                                                    <ol>
                                                        <li>Company Secretarial Practice</li>
                                                        <li>Drafting, Appearances and Pleadings</li>
                                                    </ol>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <br>
                                                </td>
                                                <td><strong style="color:#07193d; font-size: 13px;">MODULE II</strong>

                                                    <ol>
                                                        <li>Company Law</li>
                                                        <li>Economic and Labour Laws</li>
                                                        <li>Securities Laws and Compliances</li>
                                                    </ol>
                                                </td>
                                                <td valign="top"><strong style="color:#07193d; font-size: 13px;">MODULE
                                                        II</strong>

                                                    <ol>
                                                        <li>Financial, Treasury and Forex Management</li>
                                                        <li>Corporate Restructuring &amp; Insolvency</li>
                                                    </ol>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <br>
                                                </td>
                                                <td>
                                                    <br>
                                                </td>
                                                <td><strong style="color:#07193d; font-size: 13px;">MODULE III</strong>

                                                    <ol>
                                                        <li>Strategic Management, Alliances and International Trade</li>
                                                        <li>.Advanced Tax Laws and Practice</li>
                                                    </ol>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <br>
                                                </td>
                                                <td>
                                                    <br>
                                                </td>
                                                <td><strong style="color:#07193d; font-size: 13px;">MODULE IV</strong>

                                                    <ol>
                                                        <li>Due Diligence and Corporate Compliance Management</li>
                                                        <li>Governance, Business Ethics and Sustainability</li>
                                                    </ol>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
