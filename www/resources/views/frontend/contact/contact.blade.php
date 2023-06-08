@extends('frontend.layouts.master')
@section('title')
    Home
@endsection

@section('css')
    <style>
        label {
            display: inline !important;
        }

        .required {
            color: #df0e1b
        }

        .page-content select {
            padding: 8px !important;
        }

        #contact_form_right {
            width: 100% !important;
        }

        .form-control {
            color: #000 !important;
        }

        .invalid-feedback {
            color: #df0e1b;
            font-size: 13px !important;
            margin-top: -20px !important;
        }

        #contact_form_right div.invalid-feedback.is-valid {
            display: none !important;
        }
    </style>
@endsection
@section('section')
    <div class="page-header clearfix">
        <div class="page-header-inner clearfix">
            <div class="page-title">
                <h2>Contact</h2>

                <style>
                    .bread-crumb>a:hover,
                    a:click {
                        text-decoration: none;
                    }
                </style>

                <div class="bread-crumb" style="padding-top: 15px; padding-bottom: 15px;">
                    <h5 style="display: flex;"><a href="{{ route('frontend.home') }}">Home</a> &nbsp; »
                        Contact </h5>
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
                            <!-- BEGIN .inner-content-wrapper -->
                            <div class="inner-content-wrapper-">
                                <div role="form" class="wpcf7" id="wpcf7-f454-p451-o1" lang="en-US" dir="ltr">
                                    <div class="row">
                                        <div class="screen-reader-response"></div>
                                        <div class="col-md-6">
                                            <div id="contact_form_left">
                                                <p><strong style="color:#07193d;">Phone :-</strong>
                                                    <br> 022-26051635 / +91-9820418533
                                                </p>
                                                <p>
                                                    <strong style="color:#07193d;">Addresses :-</strong>
                                                </p>
                                                <p>
                                                    <strong style="color:#df0e1b;">Head office :-</strong>
                                                    <br> Shop 5,6,7, Hill Crest Society,
                                                    <br> Opposite Shiv Sagar Hotel,
                                                    <br> 16th Road, Bandra West,
                                                    <br> Mumbai - 400050
                                                    <br>
                                                </p>
                                                <p><strong style="color:#df0e1b;">Vile Parle Branch :-</strong>
                                                    <br> AVON Arcade,
                                                    <br> 1st Floor, A/121,
                                                    <br> Near Railway Station,
                                                    <br> Vile Parle West,
                                                    <br> Mumbai - 400056
                                                </p>
                                                <p></p>
                                                <p>
                                                    <strong style="color:#07193d;">Connect with us :- </strong>
                                                    <a href="https://www.facebook.com/seaclass" target="_blank">
                                                        <img width="25"
                                                            style="vertical-align: bottom; padding:0 0 3px 5px;"
                                                            src="{{ asset('assets/frontend/images/facebook-small.png') }}">
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="contact_form_right" class="captach-custome">

                                                {{-- <div class="flash-success">
                                                    Your Mail is sent successfully! We will get back to you.
                                                </div> --}}
                                                @if (Session::has('message'))
                                                    <div class="flash-success" style="display: block">
                                                        Your Mail is sent successfully! We will get back to you.
                                                    </div>
                                                @endif


                                                <div class="row">
                                                    {!! Form::open([
                                                        'url' => route('frontend.contact.store'),
                                                        'method' => 'POST',
                                                        'id' => 'contact-form',
                                                        // 'files' => true,
                                                    ]) !!}
                                                    <div class="col-md-12">
                                                        <div>
                                                            {!! Form::label('subject', 'Subject', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                                                            {!! Form::select('subject', config('constants.SUBJECT'), null, [
                                                                'class' => 'form-control form-select',
                                                                'placeholder' => 'Select one',
                                                                'style' => 'margin-bottom: 18px !important',
                                                            ]) !!}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div>
                                                            {!! Form::label('name', 'Name', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                                                            {!! Form::text('name', null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Enter name',
                                                                'style' => 'width: 100%',
                                                                'maxlength' => 50,
                                                            ]) !!}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div>
                                                            {!! Form::label('email', 'Email', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                                                            {!! Form::text('email', null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Enter email',
                                                                'style' => 'width: 100%',
                                                                'maxlength' => 50,
                                                            ]) !!}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div>
                                                            {!! Form::label('mobile', 'Mobile', ['style' => 'justify-content: right']) !!}
                                                            {!! Form::text('mobile', null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Enter mobile',
                                                                'style' => 'width: 100%',
                                                                'maxlength' => 10,
                                                            ]) !!}
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div>
                                                            {!! Form::label('message', 'Message', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                                                            {!! Form::textarea('message', null, [
                                                                'class' => 'form-control',
                                                                'rows' => 3,
                                                                'placeholder' => 'Enter message',
                                                                'style' => 'width: 100%',
                                                            ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        {!! Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'margin-bottom: 15px']) !!}
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}

                                            </div>
                                        </div>
                                    </div>

                                    <!-- END .inner-content-wrapper -->
                                </div>
                            </div>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                            <script type="text/javascript"
                                src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
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

@section('script')
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ContactRequest', '#contact-form') !!}

    <script>
        // $(document).on('click', function() {
        //   $('.invalid-feedback').each(function() {
        //     if ($(this).text().trim().length === 0) {
        //       $(this).hide();
        //     }
        //   });
        // });
    </script>
@endsection
