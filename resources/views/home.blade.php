@extends('layout.app')

@section('content')
    <div class="site-overlay" id="site-overlay"></div>

    <div class="site-overlay site-overlay--cart" id="cart-overlay"></div>

    <div id="shopify-section-home-hero" class="shopify-section">

        <section id="home-hero" class="image-cover">
            <img src="assets/images/theme-decoration.png" alt="alter eco background decoration"
                 class="image-cover_background theme-decoration-background"/>
            <!-- slider start -->
            <div class="owl-carousel" id="main-slider">



                <div class="home-hero-carousel-slide image-cover">

                    <img
                        src="assets/images/demian-tejeda-benitez-z3Mg-MMM4mM-unsplash.jpg"

                        class="lazyload image-cover_background hero-background"
                        alt=""/>


                    <img
                        src="assets/images/demian-tejeda-benitez-z3Mg-MMM4mM-unsplash.jpg"
                        class="lazyload image-cover_background hero-mobile-background"
                        alt=""/>


                    <div class="container">
                        <div class="section-callout section-callout--white">
                            <div class="section-callout_content">
                                <div class="section-callout_top">
                                    <span class="section-callout_top_text">feature</span>
                                </div>
                                <h1 class="section-callout_title">BACK TO THE EARTH</h1>
                                <p class="section-callout_description">Packaging that's good natured, made from renewable, plant-based, non-GMO materials.</p>
                                <a href="" class="theme-button section-callout_button home-hero_desktop">
                                    <span class="theme-button_text">LEARN MORE</span>
                                </a>
                            </div>
                        </div>
                        <div class="home-hero_mobile">

                            <div class="home-hero-carousel_prop"></div>

                            <a href="" class="theme-button home-hero_mobile-button">
                                <span class="theme-button_text">LEARN MORE</span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="home-hero-carousel-slide image-cover">

                    <img
                        src="assets/images/banner1.jpg"
                        srcset="assets/images/banner1.jpg"
                        data-size="auto"
                        data-srcset="assets/images/banner1.jpg"
                        class="lazyload image-cover_background hero-background"
                        alt=""/>


                    <img
                        src="assets/images/banner1.jpg"
                        class="lazyload image-cover_background hero-mobile-background"
                        alt=""/>


                    <div class="container container--right">
                        <div class="section-callout">
                            <div class="section-callout_content">
                                <div class="section-callout_top">
                                    <span class="section-callout_top_text">regenerative cocoa</span>
                                </div>
                                <h1 class="section-callout_title">ALTER Eco Foundation</h1>
                                <p class="section-callout_description">Regenerative agriculture can reverse climate Change.
                                    That’s why we’re launching a Foundation.</p>
                                <a href="shop.html" class="theme-button section-callout_button home-hero_desktop">
                                    <span class="theme-button_text">LEARN More</span>
                                </a>
                            </div>
                        </div>
                        <div class="home-hero_mobile">

                            <div class="home-hero-carousel_prop"></div>

                            <a href="#" class="theme-button home-hero_mobile-button">
                                <span class="theme-button_text">BROWSE</span>
                            </a>
                        </div>
                    </div>

                </div>


                <div class="home-hero-carousel-slide image-cover">

                    <img
                        src="assets/images/banner2.jpg"
                        srcset="assets/images/banner2.jpg"
                        data-size="auto"
                        data-srcset="assets/images/banner2.jpg"
                        class="lazyload image-cover_background hero-background"
                        alt=""/>


                    <img
                        src="assets/images/banner2.jpg"
                        class="lazyload image-cover_background hero-mobile-background"
                        alt=""/>


                    <div class="container container--right">
                        <div class="section-callout">
                            <div class="section-callout_content">
                                <div class="section-callout_top">
                                    <span class="section-callout_top_text">regenerative cocoa</span>
                                </div>
                                <h1 class="section-callout_title">ALTER Eco Foundation</h1>
                                <p class="section-callout_description">Regenerative agriculture can reverse climate Change.
                                    That’s why we’re launching a Foundation.</p>
                                <a href="shop.html" class="theme-button section-callout_button home-hero_desktop">
                                    <span class="theme-button_text">LEARN More</span>
                                </a>
                            </div>
                        </div>
                        <div class="home-hero_mobile">

                            <div class="home-hero-carousel_prop"></div>

                            <a href="#" class="theme-button home-hero_mobile-button">
                                <span class="theme-button_text">BROWSE</span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="home-hero-carousel-slide image-cover">

                    <img
                        src="assets/images/banner3.jpg"
                        srcset="assets/images/banner3.jpg"
                        data-size="auto"
                        data-srcset="assets/images/banner3.jpg"
                        class="lazyload image-cover_background hero-background"
                        alt=""/>


                    <img
                        src="assets/images/banner3.jpg"
                        class="lazyload image-cover_background hero-mobile-background"
                        alt=""/>


                    <div class="container container--right">
                        <div class="section-callout">
                            <div class="section-callout_content">
                                <div class="section-callout_top">
                                    <span class="section-callout_top_text">regenerative cocoa</span>
                                </div>
                                <h1 class="section-callout_title">ALTER Eco Foundation</h1>
                                <p class="section-callout_description">Regenerative agriculture can reverse climate Change.
                                    That’s why we’re launching a Foundation.</p>
                                <a href="shop.html" class="theme-button section-callout_button home-hero_desktop">
                                    <span class="theme-button_text">LEARN More</span>
                                </a>
                            </div>
                        </div>
                        <div class="home-hero_mobile">

                            <div class="home-hero-carousel_prop"></div>

                            <a href="#" class="theme-button home-hero_mobile-button">
                                <span class="theme-button_text">BROWSE</span>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
            <!--slider end  -->
            <div class="home-hero-dots" style="display:none;">
                <div class="container" id="home-hero-dots-entry"></div>
            </div>
        </section>
        <section class="home-banner">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <a href="shop.html" class="home-banner_offer home-banner_offer--border">
                            <h6 class="home-banner_offer_title">100% Organic and Fairtrade</h6>
                            <span class="home-banner_offer_link">Browse</span>
                            <span class="home-banner_offer_arrow icon-arrow-right"></span>
                        </a>
                    </div>
                    <div class="col-md-6 home-banner_col-right">
                        <a href="our-story.html" class="home-banner_offer">
                            <h6 class="home-banner_offer_title">It's true: chocolate can restore the rainforest.</h6>
                            <span class="home-banner_offer_link">LEARN MORE</span>
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div id="shopify-section-home-products" class="shopify-section">

        <section id="home-products" class="home-products">

            <div class="home-products_top">
                <div class="container">
                    <h2 class="home-products_top_title">Shop Best Sellers</h2>
                    <div class="home-products_top_buttons">
                        <a href="" class="home-products_top_button">
                            <span class="theme-button_text">ALL BARS</span>
                        </a>
                        <a href="" class="home-products_top_button">
                            <span class="theme-button_text">ALL TRUFFLES</span>
                        </a>
                        <a href="#" class="home-products_top_button">
                            <span class="theme-button_text"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- product slider -->

            <div class="home-products_main">
                <div class="carousel-container">
                    <div class="owl-carousel" id="product-carousel">


                        <div class="carousel-product">
                            <p class="home-product_info">Best Seller</p>
                            <a href="{{route('inner-product')}}" class="product-default product-default--carousel">
                                <img src="assets/images/Product2.jpg" alt="Deep Dark Salted Burnt Caramel Package"
                                     class="product-default_image"/>
                                <h6 class="product-default_title">Deep Dark Salted Burnt Caramel</h6>
                                <span class="product-default_percent">
                                70% Cocoa
                            </span>
                                <p class="product-default_excerpt">Taste the depth and crunch only real caramel can
                                    deliver.</p>
                                <a href="{{route('inner-product')}}" class="add_to_cart_btn">
                                    <span class="theme-button_text">Add to Cart</span>
                                </a>
                            </a>
                        </div>


                        <div class="carousel-product">
                            <p class="home-product_info">Silky</p>
                            <a href="{{route('inner-product')}}" class="product-default product-default--carousel">
                                <img src="assets/images/Product2.jpg" alt="Sea Salt Truffles Package"
                                     class="product-default_image"/>
                                <h6 class="product-default_title">Sea Salt Truffles</h6>
                                <span class="product-default_percent">
                                58% Cocoa
                            </span>
                                <p class="product-default_excerpt">Savor the subtle crunch, then let the centre melt
                                    away. </p>
                                <a href="{{route('inner-product')}}" class="add_to_cart_btn">
                                    <span class="theme-button_text">Add to Cart</span>
                                </a>
                            </a>
                        </div>


                        <div class="carousel-product">
                            <p class="home-product_info">Classic</p>
                            <a href="{{route('inner-product')}}" class="product-default product-default--carousel">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package"
                                     class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                                58% Cocoa
                            </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your
                                    defences.
                                </p>
                                <a href="{{route('inner-product')}}" class="add_to_cart_btn">
                                    <span class="theme-button_text">Add to Cart</span>
                                </a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end product slider -->
            <div class="product-dropdowns product-dropdowns--carousel">


                <div class="product-dropdown product-dropdown--carousel" id="product-dropdown--636587638842"
                     data-id="636587638842">
                    <div class="product-dropdown_content">
                        <div class="container">
                            <div class="product-dropdown_table">
                                <div class="product-dropdown_col product-dropdown_col--left">
                                    <div style="height:1px;opacity:0;"></div>
                                    <img
                                        src=""
                                        srcset=""
                                        data-size="auto"
                                        data-srcset=""
                                        class="lazyload product-dropdown_image"
                                        alt="Deep Dark Salted Burnt Caramel"/>
                                </div>
                                <div class="product-dropdown_col product-dropdown_col--right">
                                    <a href="javascript:;"
                                       class="custom-x product-dropdown_close product-dropdown_close--top">
                                        <span class="icon-arrow-right custom-x_icon"></span>
                                        <span class="icon-arrow-left custom-x_icon custom-x_icon--right"></span>
                                    </a>
                                    <div class="product-options product-options--dropdown">
                                        <div class="section-callout">
                                            <div class="section-callout_top">
                                <span class="section-callout_top_text">
                                    70% Cocoa
                                </span>
                                            </div>
                                            <h1 class="section-callout_title">Deep Dark Salted Burnt Caramel</h1>
                                            <form action="https://altereco.com.au/cart/add" method="post"
                                                  class="product-options_form">
                                                <div class="product-options_inputs">
                                                    <label class="product-options_label">Size:</label>
                                                    <div class="product-options_inputs_two-options">

                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_option js-product-single-option is-active"
                                                           data-value="Single%20Bar">
                                                            <span class="product-options_inputs_two-options_option_text">Single Bar</span>
                                                        </a>
                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_divider">
                                                            <span class="product-options_inputs_two-options_option_text">or</span>
                                                        </a>
                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_option js-product-single-option"
                                                           data-value="12%20-%20Pack">
                                                            <span class="product-options_inputs_two-options_option_text">12 - Pack</span>
                                                        </a>
                                                    </div>

                                                    <!-- hidden variants (actual variants) -->
                                                    <select class="js-product-options-select" name="id[]"
                                                            style="display:none;">


                                                        <option
                                                            selected="selected"
                                                            value="7737255755834"
                                                            data-option="Single%20Bar"
                                                            data-price="$3.99"
                                                            data-compare-price=""
                                                            data-raw-price="399"
                                                            data-raw-compare-price="">
                                                            Single Bar - $3.99
                                                        </option>
                                                        <option
                                                            value="7737255788602"
                                                            data-option="12%20-%20Pack"
                                                            data-price="$44.28"
                                                            data-compare-price="$47.88"
                                                            data-raw-price="4428"
                                                            data-raw-compare-price="4788">
                                                            12 - Pack - $44.28
                                                        </option>
                                                    </select>

                                                    <div class="product-options_inputs_mobile-break">
                                                        <label class="product-options_label">Quantity:</label>
                                                        <div class="c-quantity c-quantity--product">
                                                            <div class="c-quantity_modifier c-quantity_modifier--minus">
                                                                <span class="c-quantity_modifier_text">–</span>
                                                            </div>
                                                            <span class="c-quantity_current-amount js-quantity-current-amount">1</span>
                                                            <div class="c-quantity_modifier c-quantity_modifier--plus plus">
                                                                <span class="c-quantity_modifier_text">+</span>
                                                            </div>
                                                            <input type="number" name="quantity" value="1"
                                                                   class="c-quantity_input"/>
                                                        </div>

                                                        <span class="product-options_price js-product-options_price">$3.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-options_message">
                                                    <span class="product-options_message_text">BUY A LARGER PACK AND SAVE!</span>
                                                </div>
                                                <div class="product-options_buttons">
                                                    <a href="apps/store-locator.html" class="product-options_buttons_link">FIND
                                                        IN STORES</a>

                                                    <button type="submit"
                                                            class="theme-button theme-button--outline-white product-options_buttons_submit">
                                                        <span class="theme-button_text product-submit-span">ADD TO BAG</span>
                                                    </button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <a href="javascript:;"
                                       class="custom-x product-dropdown_close product-dropdown_close--bottom">
                                        <span class="icon-arrow-right custom-x_icon"></span>
                                        <span class="icon-arrow-left custom-x_icon custom-x_icon--right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="product-dropdown product-dropdown--carousel" id="product-dropdown--636601794618"
                     data-id="636601794618">
                    <div class="product-dropdown_content">
                        <div class="container">
                            <div class="product-dropdown_table">
                                <div class="product-dropdown_col product-dropdown_col--left">
                                    <div style="height:1px;opacity:0;"></div>
                                    <img
                                        src=""
                                        srcset=""
                                        data-size="auto"
                                        data-srcset=""
                                        class="lazyload product-dropdown_image"
                                        alt="Sea Salt Truffles"/>
                                </div>
                                <div class="product-dropdown_col product-dropdown_col--right">
                                    <a href="javascript:;"
                                       class="custom-x product-dropdown_close product-dropdown_close--top">
                                        <span class="icon-arrow-right custom-x_icon"></span>
                                        <span class="icon-arrow-left custom-x_icon custom-x_icon--right"></span>
                                    </a>
                                    <div class="product-options product-options--dropdown">
                                        <div class="section-callout">
                                            <div class="section-callout_top">
                                <span class="section-callout_top_text">
                                    58% Cocoa
                                </span>
                                            </div>
                                            <h1 class="section-callout_title">Sea Salt Truffles</h1>
                                            <form action="https://altereco.com.au/cart/add" method="post"
                                                  class="product-options_form">
                                                <div class="product-options_inputs">


                                                    <label class="product-options_label">Size:</label>
                                                    <div class="product-options_inputs_two-options">
                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_option js-product-single-option is-active"
                                                           data-value="10%20-%20Count">
                                                            <span class="product-options_inputs_two-options_option_text">10 - Count</span>
                                                        </a>
                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_divider">
                                                            <span class="product-options_inputs_two-options_option_text">or</span>
                                                        </a>
                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_option js-product-single-option"
                                                           data-value="8%20-%20Pack">
                                                            <span class="product-options_inputs_two-options_option_text">8 - Pack</span>
                                                        </a>
                                                    </div>

                                                    <!-- hidden variants (actual variants) -->
                                                    <select class="js-product-options-select" name="id[]"
                                                            style="display:none;">
                                                        <option
                                                            selected="selected"
                                                            value="7737366020154"
                                                            data-option="10%20-%20Count"
                                                            data-price="$7.99"
                                                            data-compare-price=""
                                                            data-raw-price="799"
                                                            data-raw-compare-price="">
                                                            10 - Count - $7.99
                                                        </option>
                                                        <option

                                                            value="7737366052922"
                                                            data-option="8%20-%20Pack"
                                                            data-price="$59.92"
                                                            data-compare-price="$63.92"
                                                            data-raw-price="5992"
                                                            data-raw-compare-price="6392">
                                                            8 - Pack - $59.92
                                                        </option>
                                                    </select>

                                                    <div class="product-options_inputs_mobile-break">
                                                        <label class="product-options_label">Quantity:</label>
                                                        <div class="c-quantity c-quantity--product">
                                                            <div class="c-quantity_modifier c-quantity_modifier--minus">
                                                                <span class="c-quantity_modifier_text">–</span>
                                                            </div>
                                                            <span class="c-quantity_current-amount js-quantity-current-amount">1</span>
                                                            <div class="c-quantity_modifier c-quantity_modifier--plus plus">
                                                                <span class="c-quantity_modifier_text">+</span>
                                                            </div>
                                                            <input type="number" name="quantity" value="1"
                                                                   class="c-quantity_input"/>
                                                        </div>

                                                        <span class="product-options_price js-product-options_price">$7.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-options_message">
                                                    <span class="product-options_message_text">BUY A LARGER PACK AND SAVE!</span>
                                                </div>
                                                <div class="product-options_buttons">
                                                    <a href="apps/store-locator.html" class="product-options_buttons_link">FIND
                                                        IN STORES</a>

                                                    <button type="submit"
                                                            class="theme-button theme-button--outline-white product-options_buttons_submit">
                                                        <span class="theme-button_text product-submit-span">ADD TO BAG</span>
                                                    </button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <a href="javascript:;"
                                       class="custom-x product-dropdown_close product-dropdown_close--bottom">
                                        <span class="icon-arrow-right custom-x_icon"></span>
                                        <span class="icon-arrow-left custom-x_icon custom-x_icon--right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="product-dropdown product-dropdown--carousel" id="product-dropdown--636593471546"
                     data-id="636593471546">
                    <div class="product-dropdown_content">
                        <div class="container">
                            <div class="product-dropdown_table">
                                <div class="product-dropdown_col product-dropdown_col--left">
                                    <div style="height:1px;opacity:0;"></div>
                                    <img
                                        src=""
                                        srcset=""
                                        data-size="auto"
                                        data-srcset=""
                                        class="lazyload product-dropdown_image"
                                        alt="Deepest Dark Super Blackout"/>
                                </div>
                                <div class="product-dropdown_col product-dropdown_col--right">
                                    <a href="javascript:;"
                                       class="custom-x product-dropdown_close product-dropdown_close--top">
                                        <span class="icon-arrow-right custom-x_icon"></span>
                                        <span class="icon-arrow-left custom-x_icon custom-x_icon--right"></span>
                                    </a>
                                    <div class="product-options product-options--dropdown">
                                        <div class="section-callout">
                                            <div class="section-callout_top">
                                <span class="section-callout_top_text">
                                    90% Cocoa
                                </span>
                                            </div>
                                            <h1 class="section-callout_title">Deepest Dark Super Blackout</h1>
                                            <form action="https://altereco.com.au/cart/add" method="post"
                                                  class="product-options_form">
                                                <div class="product-options_inputs">


                                                    <label class="product-options_label">Size:</label>
                                                    <div class="product-options_inputs_two-options">

                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_option js-product-single-option is-active"
                                                           data-value="Single%20Bar">
                                                            <span class="product-options_inputs_two-options_option_text">Single Bar</span>
                                                        </a>

                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_divider">
                                                            <span class="product-options_inputs_two-options_option_text">or</span>
                                                        </a>


                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_option js-product-single-option"
                                                           data-value="12%20-%20Pack">
                                                            <span class="product-options_inputs_two-options_option_text">12 - Pack</span>
                                                        </a>


                                                    </div>

                                                    <!-- hidden variants (actual variants) -->
                                                    <select class="js-product-options-select" name="id[]"
                                                            style="display:none;">


                                                        <option
                                                            selected="selected"
                                                            value="7737311264826"
                                                            data-option="Single%20Bar"
                                                            data-price="$3.99"
                                                            data-compare-price=""
                                                            data-raw-price="399"
                                                            data-raw-compare-price="">
                                                            Single Bar - $3.99
                                                        </option>


                                                        <option

                                                            value="7737311297594"
                                                            data-option="12%20-%20Pack"
                                                            data-price="$44.28"
                                                            data-compare-price="$47.88"
                                                            data-raw-price="4428"
                                                            data-raw-compare-price="4788">
                                                            12 - Pack - $44.28
                                                        </option>


                                                    </select>

                                                    <div class="product-options_inputs_mobile-break">
                                                        <label class="product-options_label">Quantity:</label>
                                                        <div class="c-quantity c-quantity--product">
                                                            <div class="c-quantity_modifier c-quantity_modifier--minus">
                                                                <span class="c-quantity_modifier_text">–</span>
                                                            </div>
                                                            <span class="c-quantity_current-amount js-quantity-current-amount">1</span>
                                                            <div class="c-quantity_modifier c-quantity_modifier--plus plus">
                                                                <span class="c-quantity_modifier_text">+</span>
                                                            </div>
                                                            <input type="number" name="quantity" value="1"
                                                                   class="c-quantity_input"/>
                                                        </div>

                                                        <span class="product-options_price js-product-options_price">$3.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-options_message">
                                                    <span class="product-options_message_text">BUY A LARGER PACK AND SAVE!</span>
                                                </div>
                                                <div class="product-options_buttons">
                                                    <a href="" class="product-options_buttons_link">FIND IN STORES</a>

                                                    <button type="submit"
                                                            class="theme-button theme-button--outline-white product-options_buttons_submit">
                                                        <span class="theme-button_text product-submit-span">ADD TO BAG</span>
                                                    </button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <a href="javascript:;"
                                       class="custom-x product-dropdown_close product-dropdown_close--bottom">
                                        <span class="icon-arrow-right custom-x_icon"></span>
                                        <span class="icon-arrow-left custom-x_icon custom-x_icon--right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="product-dropdown product-dropdown--carousel" id="product-dropdown--636580397114"
                     data-id="636580397114">
                    <div class="product-dropdown_content">
                        <div class="container">
                            <div class="product-dropdown_table">
                                <div class="product-dropdown_col product-dropdown_col--left">
                                    <div style="height:1px;opacity:0;"></div>
                                    <img
                                        src=""
                                        srcset=""
                                        data-size="auto"
                                        data-srcset=""
                                        class="lazyload product-dropdown_image"
                                        alt="Classic Dark Truffles"/>
                                </div>
                                <div class="product-dropdown_col product-dropdown_col--right">
                                    <a href="javascript:;"
                                       class="custom-x product-dropdown_close product-dropdown_close--top">
                                        <span class="icon-arrow-right custom-x_icon"></span>
                                        <span class="icon-arrow-left custom-x_icon custom-x_icon--right"></span>
                                    </a>
                                    <div class="product-options product-options--dropdown">
                                        <div class="section-callout">
                                            <div class="section-callout_top">
                                <span class="section-callout_top_text">
                                    58% Cocoa
                                </span>
                                            </div>
                                            <h1 class="section-callout_title">Classic Dark Truffles</h1>
                                            <form action="https://altereco.com.au/cart/add" method="post"
                                                  class="product-options_form">
                                                <div class="product-options_inputs">


                                                    <label class="product-options_label">Size:</label>
                                                    <div class="product-options_inputs_two-options">

                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_option js-product-single-option is-active"
                                                           data-value="10%20-%20Count">
                                                            <span class="product-options_inputs_two-options_option_text">10 - Count</span>
                                                        </a>

                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_divider">
                                                            <span class="product-options_inputs_two-options_option_text">or</span>
                                                        </a>


                                                        <a href="javascript:;"
                                                           class="product-options_inputs_two-options_option js-product-single-option"
                                                           data-value="8%20-%20Pack">
                                                            <span class="product-options_inputs_two-options_option_text">8 - Pack</span>
                                                        </a>


                                                    </div>

                                                    <!-- hidden variants (actual variants) -->
                                                    <select class="js-product-options-select" name="id[]"
                                                            style="display:none;">


                                                        <option
                                                            selected="selected"
                                                            value="7737210175546"
                                                            data-option="10%20-%20Count"
                                                            data-price="$7.99"
                                                            data-compare-price=""
                                                            data-raw-price="799"
                                                            data-raw-compare-price="">
                                                            10 - Count - $7.99
                                                        </option>


                                                        <option

                                                            value="7737210208314"
                                                            data-option="8%20-%20Pack"
                                                            data-price="$59.92"
                                                            data-compare-price="$63.92"
                                                            data-raw-price="5992"
                                                            data-raw-compare-price="6392">
                                                            8 - Pack - $59.92
                                                        </option>


                                                    </select>

                                                    <div class="product-options_inputs_mobile-break">
                                                        <label class="product-options_label">Quantity:</label>
                                                        <div class="c-quantity c-quantity--product">
                                                            <div class="c-quantity_modifier c-quantity_modifier--minus">
                                                                <span class="c-quantity_modifier_text">–</span>
                                                            </div>
                                                            <span class="c-quantity_current-amount js-quantity-current-amount">1</span>
                                                            <div class="c-quantity_modifier c-quantity_modifier--plus plus">
                                                                <span class="c-quantity_modifier_text">+</span>
                                                            </div>
                                                            <input type="number" name="quantity" value="1"
                                                                   class="c-quantity_input"/>
                                                        </div>

                                                        <span class="product-options_price js-product-options_price">$7.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-options_message">
                                                    <span class="product-options_message_text">BUY A LARGER PACK AND SAVE!</span>
                                                </div>
                                                <div class="product-options_buttons">
                                                    <a href="" class="product-options_buttons_link">FIND IN STORES</a>

                                                    <button type="submit"
                                                            class="theme-button theme-button--outline-white product-options_buttons_submit">
                                                        <span class="theme-button_text product-submit-span">ADD TO BAG</span>
                                                    </button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <a href="javascript:;"
                                       class="custom-x product-dropdown_close product-dropdown_close--bottom">
                                        <span class="icon-arrow-right custom-x_icon"></span>
                                        <span class="icon-arrow-left custom-x_icon custom-x_icon--right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="home-product_mobile-options">
                    <h6 class="home-product_mobile-options_title">Find more great eats:</h6>

                    <div class="c-select c-select--dropdown">
                        <div class="c-select_title">
                            <div id="default" class="c-select_chosen">Explore our products</div>
                            <span class="icon-arrow-down c-select_arrow"></span>
                        </div>
                        <ul class="c-select_menu">


                            <li class="c-select_menu_item c-select_menu_item--link">
                                <a href="" class="c-select_menu_item_link">ALL BARS</a>
                            </li>


                            <li class="c-select_menu_item c-select_menu_item--link">
                                <a href="" class="c-select_menu_item_link">ALL TRUFFLES</a>
                            </li>


                            <li class="c-select_menu_item c-select_menu_item--link">
                                <a href="#" class="c-select_menu_item_link"></a>
                            </li>


                        </ul>
                        <select name="" class="c-select_select">

                            <option value="" selected="selected">Explore our products</option>


                        </select>
                    </div>


                    <script>
                        if (document.URL.indexOf("press?blogtype=award") >= 0) {
                            document.getElementById("default").innerHTML = "Awards";

                            var items = document.getElementsByClassName("c-select_menu_item");

                            for (i = 0; i < items.length; i++) {
                                if (items[i].classList.contains('is-active')) {
                                    items[i].classList.toggle('is-active');
                                }
                                if (items[i].innerHTML === "Awards") {
                                    items[i].classList.toggle('is-active');
                                }
                            }

                            var options = document.getElementsByTagName("option");

                            for (i = 0; i < options.length; i++) {
                                if (options[i].innerHTML === "All Categories") {
                                    options[i].selected = "";
                                }
                                if (options[i].innerHTML === "Awards") {
                                    options[i].selected = "selected";
                                }
                            }
                        }
                    </script>

                </div>
            </div>
        </section>
    </div>
    <div id="shopify-section-home-bottom" class="shopify-section">

        <section id="home-bottom" class="home-bottom">
            <div class="home-bottom_main image-cover">
                <img
                    src="assets/images/butterbanner.jpg"
                    srcset="assets/images/butterbanner.jpg"
                    data-size="auto"
                    data-srcset="assets/images/butterbanner.jpg"
                    class="lazyload image-cover_background"
                    alt=""/>
                <div class="container">
                    <div class="section-callout">
                        <div class="section-callout_top">
                            <span class="section-callout_top_text">full circle sustainability</span>
                        </div>
                        <div class="section-callout_richtext"><p></p>
                            <p></p>
                            <p>HOW WE</p>
                            <p>CHOOSE TO</p>
                            <p><a href="" title="Choose Clean Ingredients"><strong>EAT,</strong></a> <a href=""
                                                                                                        title="Regenerate the Earth"><strong>FARM</strong></a>
                                AND</p>
                            <p><a href="" title="Eliminate Waste"><strong>SELL</strong></a> FOOD</p>
                            <p>CAN MAKE</p>
                            <p>LIFE BETTER</p>
                            <p>FOR <a href="" title="Invest In Farmers"><strong>EVERYONE</strong></a></p></div>
                    </div>
                </div>
            </div>
            <div class="home-bottom_bottom">
                <div class="container">
                    <img
                        src="assets/images/salt.png"
                        class="lazyload home-bottom_display-pic"
                        alt=""/>
                </div>
            </div>
        </section>
    </div>
@endsection
