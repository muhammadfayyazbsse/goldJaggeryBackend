@extends('layout.app')

@section('content')
    <div class="login_content">
        <div class="int-content">
            <div class="container int-container">
                <div class="int-content_block">
                    <div class="section-callout section-callout--title">
                        <div class="section-callout_top">
                        <span class="section-callout_top_text">
                            Register
                        </span>
                        </div>
                        @if(count($errors) > 0 )
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Wrong!</strong> {{$errors->first()}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <form method="post" action="{{route('doRegister')}}" id="contact_form" accept-charset="UTF-8" class="contact-form">
                            @csrf
                            <div class="contact-form">
                                <div class="contact-form_row">
                                    <input type="text" name="first_name" class="contact-form_input border-top-input" placeholder="First Name" required/>
                                </div>
                                <div class="contact-form_row">
                                    <input type="text" name="last_name" class="contact-form_input border-top-input" placeholder="Last Name" required/>
                                </div>
                                <div class="contact-form_row">
                                    <input type="tel" name="phone" pattern="[0-9]{4}[0-9]{7}"
                                           title="Phone number with 0-9 and total digit length is 11" class="contact-form_input border-top-input" placeholder="phone number*" required/>
                                </div>
                                <div class="contact-form_row">
                                    <input type="email" name="email" class="contact-form_input border-top-input" placeholder="email*" required/>
                                </div>
                                <div class="contact-form_row">
                                    <input type="password" name="password" class="contact-form_input border-top-input" placeholder="password" required/>
                                </div>

                                <div class="contact-form_row contact-form_row--submit">
                                    <button type="submit" class="theme-button theme-button--outline-brown">
                                        <span class="theme-button_text">Sign Up</span>
                                    </button>
                                </div>
                            </div>
                        </form>                        <div class="section-callout_top">
                        <span class="section-callout_top_text">
                            or
                        </span>
                        </div>
                        <!-- Trigger/Open The Modal -->
                        <a href="{{route('login')}}" class="btn_newlogin" id="myBtn">Login</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
