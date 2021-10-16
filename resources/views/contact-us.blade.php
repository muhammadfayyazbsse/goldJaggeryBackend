@extends('layout.app')

@section('content')
    <div class="site-overlay" id="site-overlay"></div>

    <div class="site-overlay site-overlay--cart" id="cart-overlay"></div>

    <div id="shopify-section-contact" class="shopify-section">

        <section class="contact">
            <header class="int-banner image-cover">
                <img
                    src="assets/images/contact.jpg"
                    class="lazyload image-cover_background"
                    alt=""/>
            </header>
            <div class="int-content">
                <div class="container int-container">
                    <div class="int-content_block">
                        <div class="section-callout section-callout--title">
                            <div class="section-callout_top">
                                <span class="section-callout_top_text">contact us</span>
                            </div>
                            <h1 class="section-callout_title">LET'S CONNECT</h1>
                            <p class="section-callout_description">Fill out the form below and we’ll get back to you soon.</p>
                        </div>
                        <form method="post" action="" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />
                            <div class="contact-form">



                                <div class="contact-form_row">
                                    <input type="text" name="contact[name]" class="contact-form_input border-top-input" placeholder="name"/>
                                </div>
                                <div class="contact-form_row">
                                    <input type="email" name="contact[email]" class="contact-form_input border-top-input" placeholder="email*" required/>
                                </div>





                                <div class="contact-form_row">
                                    <input type="text" name="contact[company-name]" class="contact-form_input border-top-input" placeholder="zip code/postal code*" required/>
                                </div>

                                <div class="contact-form_row">
                                    <input type="text" name="contact[name]" class="contact-form_input border-top-input" placeholder="reason of contact*"/>
                                </div>


                                <div class="contact-form_row">
                                    <textarea type="textarea" row="5"name="contact[message]" class="contact-form_input border-top-input" placeholder="message" required/></textarea>
                                </div>
                                <div class="contact-form_row contact-form_row--submit">
                                    <button type="submit" class="theme-button theme-button--outline-brown">
                                        <span class="theme-button_text">SUBMIT</span>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
