@extends('layout.app')

@section('content')
    <div class="login_content">
        <div class="int-content">
            <div class="container int-container">
                <div class="int-content_block">
                    <div class="section-callout section-callout--title">
                        <div class="section-callout_top">
                        <span class="section-callout_top_text">
                            login
                        </span>
                        </div>
                        <form method="post" action="" id="contact_form" accept-charset="UTF-8" class="contact-form">
                            <div class="contact-form">
                                <div class="contact-form_row">
                                    <input type="email" name="contact[email]" class="contact-form_input border-top-input" placeholder="email*" required/>
                                </div>
                                <div class="contact-form_row">
                                    <input type="password" name="password" class="contact-form_input border-top-input" placeholder="password" required/>
                                </div>

                                <div class="contact-form_row contact-form_row--submit">
                                    <button type="submit" class="theme-button theme-button--outline-brown">
                                        <span class="theme-button_text">Sign in</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="section-callout_top">
                        <span class="section-callout_top_text">
                            or
                        </span>
                        </div>
                        <!-- Trigger/Open The Modal -->
                        <a href="{{route('register')}}" class="btn_newlogin" id="myBtn">Sign Up</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
