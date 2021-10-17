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
                        @if($errors->any() || Session::get('error') )
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Wrong!</strong> {{$errors->first()}} {{Session::get('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="post" action="{{route('doLogin')}}" id="contact_form" accept-charset="UTF-8" class="contact-form">
                            @csrf
                            <div class="contact-form">
                                <div class="contact-form_row">
                                    <input type="email" name="email" class="contact-form_input border-top-input" placeholder="email*" required/>
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
