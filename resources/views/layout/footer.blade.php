<footer id="footer" class="footer">
    <div id="storeHider3" class="footer-top">
        <div class="container">
            <div id="storeHider" class="row">
                <div class="col-md-12">
                    <h1 class="footer-top_title">FIND US IN YOUR NEIGHBOURHOOD.</h1>
                </div>
            </div>
            <div id="storeHider2" class="row">
                <div class="col-md-4">
                    <p class="footer-top_description">Enter your postcode to find a store near you.</p>
                </div>
                <div class="col-md-8 footer_form-column">
                    <form method="get" action="" class="footer_form" id="zip-footer-form">
                        <div class="footer_form_input-container">
                            <input type="text" placeholder="Enter your postal code" class="footer_input"/>
                        </div>
                        <div class="footer_form_input-container footer_form_input-container--button">
                            <button type="submit" class="theme-button theme-button--outline footer_form_button">
                                <span class="theme-button_text">FIND YOUR STORE</span>
                                <span class="theme-button_text theme-button_text--mobile">FIND YOUR STORE</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                var str = window.location.href;
                var n = str.includes("store-locator");
                if (n == true) {
                    document.getElementById("storeHider").style.display = "none";
                    document.getElementById("storeHider2").style.display = "none";
                    document.getElementById("storeHider3").style.padding = "0px 0 60px 0";
                }
            </script>

            <div class="row footer-top_logo-row">


                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="footer_store-logo footer_store-logo-0">

                        <img src="assets/images/client1.png" class="footer_store-logo_image"
                             alt="Alter Eco Stores Logo 0"/>

                    </div>
                </div>


                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="footer_store-logo footer_store-logo-1">

                        <img src="assets/images/client2.png" class="footer_store-logo_image"
                             alt="Alter Eco Stores Logo 1"/>

                    </div>
                </div>


                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="footer_store-logo footer_store-logo-2">

                        <img src="assets/images/client3.png" class="footer_store-logo_image"
                             alt="Alter Eco Stores Logo 2"/>

                    </div>
                </div>


                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="footer_store-logo footer_store-logo-3">

                        <img src="assets/images/client4.png" class="footer_store-logo_image"
                             alt="Alter Eco Stores Logo 3"/>

                    </div>
                </div>


                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="footer_store-logo footer_store-logo-4">

                        <img src="assets/images/client5.png" class="footer_store-logo_image"
                             alt="Alter Eco Stores Logo 4"/>

                    </div>
                </div>


                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="footer_store-logo footer_store-logo-5">

                        <img src="assets/images/client6.png" class="footer_store-logo_image"
                             alt="Alter Eco Stores Logo 5"/>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-middle">
        <img src="assets/images/bottomline.png" alt="Tear Texture" class="footer-tear"/>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="footer-middle_title">Save 15% off your first order.</h2>
                    <p class="footer-middle_description">Sign up and receive coupons, recipes and more.</p>
                </div>
                <div class="col-md-4">

                    <form style="margin-top:20px;" id="email_signup"
                          class="footer-middle_input-container klaviyo_styling klaviyo_standard_embed_Ly6zCU"
                          action="http://manage.kmail-lists.com/subscriptions/subscribe"
                          data-ajax-submit="//manage.kmail-lists.com/ajax/subscriptions/subscribe" method="GET"
                          target="_blank" novalidate="novalidate">
                        <input type="hidden" name="g" value="MrS7y9">
                        <div style="display:inline-block;" class="klaviyo_field_group">
                            <input type="email" value="" name="email" id="k_id_email" placeholder="Your email"
                                   class="footer_input"/>
                        </div>
                        <div class="klaviyo_messages" style="display:inline-block;">
                            <div class="success_message" style="display:none;"></div>
                            <div class="error_message" style="display:none;"></div>
                        </div>
                        <div style="display:inline-block;" class="klaviyo_form_actions">
                            <button style="background:rgba(0,0,0,0);" type="submit"
                                    class="footer-middle_form-submit klaviyo_submit_button"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom js-accordion-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="index.html" class="footer-bottom_logo">
                        <img src="assets/images/logo.png" alt="Footer Alter Eco Logo"
                             class="footer-bottom_logo_image"/>
                    </a>
                </div>
                <div class="col-sm-3 footer-bottom_list-col-1">
                    <div class="footer-bottom_list">
                        <h6 class="footer-bottom_list_title footer-bottom_list_title--top js-accordion-title js-accordion-title--mobile"
                            data-active-px="767"><b>Products</b>
                        </h6>
                        <div class="footer-bottom_linklist js-accordion-list">

                            <a href="shop.html" class="footer-bottom_link">bars</a>

                            <a href="shop.html" class="footer-bottom_link">truffles</a>

                            <a href="shop.html" class="footer-bottom_link">grass fed</a>

                            <div class="footer-bottom_linklist--mobile">
                                <a href="shop.html" class="footer-bottom_link">all products</a>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <h6 class="footer-bottom_list_title footer-bottom_list_title--desktop"></h6>
                        <div class="footer-bottom_linklist">

                            <a href="shop.html" class="footer-bottom_link">all products</a>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-bottom_list">
                        <h6 class="footer-bottom_list_title js-accordion-title js-accordion-title--mobile"
                            data-active-px="767">
                            <b>Get in touch</b>
                            <i class="fa fa-angle-down footer-bottom_title_arrow"></i>
                        </h6>
                        <div class="footer-bottom_linklist js-accordion-list">
                            <a href="contact-us.html" class="footer-bottom_link">contact us</a>
                            <a href="faq.html" class="footer-bottom_link">FAQ</a>
                            <a href="privacy-policy.html" class="footer-bottom_link">privacy policy</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-bottom_list">
                        <h6 class="footer-bottom_list_title js-accordion-title js-accordion-title--mobile"
                            data-active-px="767"><b>
                                More</b>
                            <i class="fa fa-angle-down footer-bottom_title_arrow"></i>
                        </h6>
                        <div class="footer-bottom_linklist js-accordion-list">

                            <a href="blog.html" class="footer-bottom_link">blog</a>
                            <a href="blog.html" class="footer-bottom_link">news</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-copyright-social-row">
                <div class="col-sm-7 col-md-8 col-lg-9 footer-bottom_copyright--desktop">
                    <p class="footer-bottom_copyright">&copy;2021&nbsp;Gold All Rights Reserved</p>
                </div>
                <div class="col-sm-5 col-md-4 col-lg-3">
                    <div class="footer-bottom_social-container">
                        <h6 class="footer-bottom_social-text">FIND US ON</h6>
                        <div class="footer-bottom_social">
                            <a href="" class="footer-bottom_social_link" target="_blank"
                               rel="noopener noreferrer"><i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="" class="footer-bottom_social_link" target="_blank"
                               rel="noopener noreferrer"><i class="fab fa-instagram-square"></i>
                            </a>
                            <a href="" class="footer-bottom_social_link" target="_blank"
                               rel="noopener noreferrer"><i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="footer-bottom_social_link" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-pinterest"></i>
                            </a>
                            <a href="" class="footer-bottom_social_link" target="_blank"
                               rel="noopener noreferrer"><i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-8 col-lg-9 footer-bottom_copyright--mobile">
                    <p class="footer-bottom_copyright">&copy;2021&nbsp;Alter Eco All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
