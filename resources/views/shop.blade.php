@extends('layout.app')

@section('content')
    <!-- END OF NAV  -->
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
    </div>

    <!-- products -->
    <section class="collection">







        <div class="collection-products">
            <div class="container">
                <div class="row collection-products_row">
                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                       58% Cocoa
                      </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                           58% Cocoa
                          </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>
                    <div class="clear row-divider small"></div>


                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>
                    <div class="clear row-divider medium"></div>


                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>
                    <div class="clear row-divider small"></div>

                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>

                    </div>
                    <div class="clear row-divider medium"></div>
                    <div class="clear row-divider small"></div>

                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>
                    <div class="clear row-divider small"></div>

                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>
                    <div class="clear row-divider medium"></div>

                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>

                    </div>

                    <div class="clear row-divider small"></div>


                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>

                    </div>
                    <div class="clear row-divider medium"></div>



                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>

                    </div>


                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>
                    </div>

                    <div class="clear row-divider small"></div>

                    <div class="col-sm-6 col-md-4 collection-products_col">
                        <div class="product-default product-default--three-col-border-right">
                            <a href="innerProduct.html" class="">
                                <img src="assets/images/Product2.jpg" alt="Classic Dark Truffles Package" class="product-default_image"/>
                                <h6 class="product-default_title">Classic Dark Truffles</h6>
                                <span class="product-default_percent">
                               58% Cocoa
                              </span>
                                <p class="product-default_excerpt">Deep, dark and creamy, its virtues will melt your defences.
                                </p>
                            </a>
                            <a href="innerproduct.html" class="add_to_cart_btn">
                                <span class="theme-button_text">Add to Cart</span>
                            </a>
                        </div>

                    </div>
                    <div class="clear row-divider medium"></div>
                </div>
            </div>
    </section>
@endsection
