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
                        src="assets/images/Mask Group 7 (1).png"

                        class="lazyload image-cover_background hero-background"
                        alt=""/>


                    <img
                        src="assets/images/Mask Group 7 (1).png"
                        class="lazyload image-cover_background hero-mobile-background"
                        alt=""/>


                    <div class="container">
                        <div class="section-callout section-callout--white">
                            <div class="section-callout_content">
                                <div class="section-callout_top">
                                    <span class="section-callout_top_text">feature</span>
                                </div>
                                <h1 class="section-callout_title">BACK TO THE EARTH</h1>
                                <p class="section-callout_description">Packaging that's good natured, made from renewable,
                                    plant-based, non-GMO materials.</p>
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

            </div>
            <!--slider end  -->
            <div class="home-hero-dots" style="display:none;">
                <div class="container" id="home-hero-dots-entry"></div>
            </div>
        </section>
    </div>


    <div id="shopify-section-blog" class="shopify-section">

        <section class="blog" id="blog">

            <div class="blog-tags">
                <div class="container">
                    <div class="mobile-active-blog-tag" id="mobile-active-blog-tag">
                        <span class="mobile-active-blog-tag_title">all</span>
                        <span class="mobile-active-blog-tag_arrow icon-arrow-down"></span>
                    </div>
                </div>
                <div class="blog-tags_list" id="blog-tags_list">
                    <div class="container">

                        <div class="blog-tag is-active no-tags-chosen" data-tag="all" data-blog-handle="blog">
                            <span class="blog-tag_title">all</span>
                            <div class="blog-tag_check"></div>
                        </div>

                        <div class="blog-tag" data-tag="lifestyle" data-blog-handle="blog">
                            <span class="blog-tag_title">lifestyle</span>
                            <div class="blog-tag_check"></div>
                        </div>

                        <div class="blog-tag" data-tag="sustainability" data-blog-handle="blog">
                            <span class="blog-tag_title">sustainability</span>
                            <div class="blog-tag_check"></div>
                        </div>

                        <div class="blog-tag" data-tag="reforestation" data-blog-handle="blog">
                            <span class="blog-tag_title">reforestation</span>
                            <div class="blog-tag_check"></div>
                        </div>

                        <div class="blog-tag" data-tag="supply chain" data-blog-handle="blog">
                            <span class="blog-tag_title">supply chain</span>
                            <div class="blog-tag_check"></div>
                        </div>

                        <a href="javascript:;" class="theme-button refresh-tags-button" data-blog-handle="blog">
                            <span class="theme-button_text">VIEW</span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="blog-articles">
                <div class="container">
                    <div class="row" id="blog-entry">


                        <div class="col-sm-6 col-md-4">
                            <a href="bloginner.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="assets/images/Almond_Butter_Jelly_Cups_02_600x.jpg"
                                         class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">article</p>

                                    <h5 class="article-default_title">Low-Sugar, Paleo Friendly Almond Butter Cups</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>


                        <div class="col-sm-6 col-md-4">
                            <a href="bloginner.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="assets/images/bouf_600x.jpg"
                                         class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">article</p>

                                    <h5 class="article-default_title">Chocolate Pomegranate Ginger Bark</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>
                        <div class="blog-clear blog-clear--two"></div>


                        <div class="col-sm-6 col-md-4">
                            <a href="bloginner.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="assets/images/AE-Ecuador-_9-26-17_-_9-of-10_600x.jpg"
                                         class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">Fair Trade</p>

                                    <h5 class="article-default_title">Stand with Small-Scale Farmers this World Fairtrade
                                        ...</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>


                        <div class="blog-clear blog-clear--main"></div>


                        <div class="col-sm-6 col-md-6">
                            <a href="bloginner.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="assets/images/Ecuador-blog-header_0ff52e3b-5579-451e-a003-c645a25c6c02_600x.jpg"
                                         class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">agroforestry</p>

                                    <h5 class="article-default_title">Agroforestry produces the best cacao in the world</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>
                        <div class="blog-clear blog-clear--two"></div>


                        <div class="col-sm-6 col-md-6">
                            <a href="bloginner.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="assets/images/Activism_Farmers_600x.jpg"
                                         class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">Fair Trade</p>

                                    <h5 class="article-default_title">You're not only buying chocolate, you're supporting
                                        ...</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>


                        <div class="blog-clear blog-clear--main"></div>


                        <div class="col-sm-6 col-md-4">
                            <a href="bloginner.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="assets/images/bouf_600x.jpg"
                                         class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">Alter Eco</p>

                                    <h5 class="article-default_title">Alter Eco's Commitment to Fighting Climate Change</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>
                        <div class="blog-clear blog-clear--two"></div>


                        <div class="col-sm-6 col-md-4">
                            <a href="bloginner.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="assets/images/Almond_Butter_Jelly_Cups_02_600x.jpg"
                                         class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">Coconut Oil</p>

                                    <h5 class="article-default_title">Fairtrade Coconut Oil: the story behind the
                                        creamine...</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>


                        <div class="col-sm-6 col-md-4">
                            <a href="bloginner.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="assets/images/Product2.jpg"
                                         class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">supply chain</p>

                                    <h5 class="article-default_title">Demystifying the Delicious: Coconut vs. Palm Oil</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>
                        <div class="blog-clear blog-clear--two"></div>

                        <div class="blog-clear blog-clear--main"></div>


                        <a href="javascript:;" class="theme-button blog-articles_load-more" data-blog-handle="blog">
                            <span class="theme-button_text">LOAD MORE</span>
                        </a>

                    </div>
                </div>
            </div>


        </section>
    </div>
@endsection
