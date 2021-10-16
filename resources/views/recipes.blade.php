@extends('layout.app')

@section('content')
    <div class="site-overlay" id="site-overlay"></div>

    <div class="site-overlay site-overlay--cart" id="cart-overlay"></div>


    <div id="shopify-section-recipes" class="shopify-section">

        <section class="blog" id="blog">
            <section id="blog-carousel" class="blog-carousel">
                <div class="owl-carousel">


                    <div class="blog-carousel-slide image-cover">
                        <img
                            src="../../cdn.shopify.com/s/files/1/0072/8334/3418/files/Cluster-Chocolate-Bark_v3_1600xecd2.jpg?v=1528847317"
                            srcset="//cdn.shopify.com/s/files/1/0072/8334/3418/files/Cluster-Chocolate-Bark_v3_1000x.jpg?v=1528847317"
                            data-size="auto"
                            data-srcset="//cdn.shopify.com/s/files/1/0072/8334/3418/files/Cluster-Chocolate-Bark_v3_1600x.jpg?v=1528847317 1200w, //cdn.shopify.com/s/files/1/0072/8334/3418/files/Cluster-Chocolate-Bark_v3_1300x.jpg?v=1528847317 1000w, //cdn.shopify.com/s/files/1/0072/8334/3418/files/Cluster-Chocolate-Bark_v3_1000x.jpg?v=1528847317 800w"
                            class="lazyload image-cover_background"
                            alt=""/>
                        <div class="blog-slide_content">
                            <div class="container">
                                <div class="section-callout">
                                    <div class="section-callout_top">
                                        <span class="section-callout_top_text">featured</span>
                                    </div>
                                    <a href="recipes/coconut-clusters-and-popcorn-bark.html" class="section-callout_title">Coconut Clusters and Popcorn Bark</a>
                                    <p class="section-callout_description">Three ingredients are all you need for this delicious vegan Coconut Cluster and Popcorn Bark. Treat yourself to a great anytime snack.</p>
                                    <a href="recipes/coconut-clusters-and-popcorn-bark.html" class="section-callout_link">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


            <div class="blog-tags">
                <div class="container">
                    <div class="mobile-active-blog-tag" id="mobile-active-blog-tag">
                        <span class="mobile-active-blog-tag_title">all</span>
                        <span class="mobile-active-blog-tag_arrow icon-arrow-down"></span>
                    </div>
                </div>
                <div class="blog-tags_list blog-tags_list--recipes" id="blog-tags_list">
                    <div class="container">

                        <div class="blog-tag is-active no-tags-chosen" data-tag="all" data-blog-handle="recipes">
                            <span class="blog-tag_title">all</span>
                            <div class="blog-tag_check"></div>
                        </div>

                        <div class="blog-tag" data-tag="bars" data-blog-handle="recipes">
                            <span class="blog-tag_title">bars</span>
                            <div class="blog-tag_check"></div>
                        </div>

                        <div class="blog-tag" data-tag="clusters" data-blog-handle="recipes">
                            <span class="blog-tag_title">clusters</span>
                            <div class="blog-tag_check"></div>
                        </div>

                        <!--<form method="get" action="/search" class="blog-tags_form">
                            <input type="text" name="q" class="blog-tags_form_input border-input" placeholder="search"/>
                            <input type="hidden" name="type" value="article">
                            <button type="submit" class="blog-tags_form_submit">
                                <img src="//cdn.shopify.com/s/files/1/0072/8334/3418/t/6/assets/material-search.png?v=1521855140312281911" class="blog-tags_form_submit_icon" alt="Submit search"/>
                            </button>
                        </form>-->
                        <a href="javascript:;" class="theme-button refresh-tags-button" data-blog-handle="recipes">
                            <span class="theme-button_text">VIEW</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <form method="get" action="https://altereco.com.au/search" class="blog-tags_form blog-tags_form--mobile">
                    <input type="text" name="q" class="blog-tags_form_input border-input" placeholder="search"/>
                    <input type="hidden" name="type" value="article">
                    <button type="submit" class="blog-tags_form_submit">
                        <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/t/6/assets/material-search5d6d.png?v=1521855140312281911" class="blog-tags_form_submit_icon" alt="Submit search"/>
                    </button>
                </form>
            </div>


            <div class="blog-articles">
                <div class="container">
                    <div class="row" id="blog-entry">





                        <div class="col-sm-6 col-md-4">
                            <a href="recipes/paleo-snickers-bites.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/articles/Snickers-Bites_02_web_600x6c22.jpg?v=1558571887" class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">Paleo Recipes</p>

                                    <h5 class="article-default_title">Paleo Snickers Bites</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>






                        <div class="col-sm-6 col-md-4">
                            <a href="recipes/vegan-chocolate-avocado-mousse-1.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/articles/Chocolate-Mousse_01_web_600x9b77.jpg?v=1556322475" class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">article</p>

                                    <h5 class="article-default_title">Vegan Chocolate Avocado Mousse</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>
                        <div class="blog-clear blog-clear--two"></div>





                        <div class="col-sm-6 col-md-4">
                            <a href="recipes/super-blackout-almond-butter-eggs.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/articles/Easter-Eggs_02_web_600x27c6.jpg?v=1555112091" class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">chocolates</p>

                                    <h5 class="article-default_title">Super Blackout Almond Butter Eggs</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>


                        <div class="blog-clear blog-clear--main"></div>





                        <div class="col-sm-6 col-md-6">
                            <a href="recipes/gluten-free-almond-butter-chocolate-spider-cookies.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/articles/Chocolate_Truffle_Spider_Cookies_web_600xa38b.jpg?v=1526065379" class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">chocolates</p>

                                    <h5 class="article-default_title">Gluten Free Almond Butter Chocolate Spider Cookies</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>
                        <div class="blog-clear blog-clear--two"></div>





                        <div class="col-sm-6 col-md-6">
                            <a href="recipes/vegan-salted-chocolate-chip-cookies.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/articles/bouf_fcbd5474-ec7d-48d4-b6c6-9e02f31664bc_600x58c6.jpg?v=1548451670" class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">article</p>

                                    <h5 class="article-default_title">Vegan Salted Chocolate Chip Cookies</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>


                        <div class="blog-clear blog-clear--main"></div>





                        <div class="col-sm-6 col-md-4">
                            <a href="recipes/vegan-dark-chocolate-pumpkin-bread.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/articles/bouf_11dc03ad-1726-4394-bfdd-c7df9f3a7994_600xedd7.jpg?v=1548448362" class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">article</p>

                                    <h5 class="article-default_title">Vegan Dark Chocolate Pumpkin Bread</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>
                        <div class="blog-clear blog-clear--two"></div>





                        <div class="col-sm-6 col-md-4">
                            <a href="recipes/strawberry-salt-malt-smores-1.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/articles/bouf_e569c900-04c9-4b81-8d5d-aaf07718b93a_600xdf9e.jpg?v=1548447458" class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">article</p>

                                    <h5 class="article-default_title">Strawberry Salt & Malt S'mores</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>






                        <div class="col-sm-6 col-md-4">
                            <a href="recipes/salted-pretzel-chocolate-chip-cookies.html" class="single-blog-post article-default article-default--gray">
                                <div class="article-default_image image-cover">

                                    <img src="../../cdn.shopify.com/s/files/1/0072/8334/3418/articles/bouf_45f53352-0d1f-4611-80e4-c97500ca67a8_600x7bef.jpg?v=1548446654" class="article-default_image_src image-cover_background"/>

                                </div>
                                <div class="article-default_info">

                                    <p class="article-default_category">article</p>

                                    <h5 class="article-default_title">Salted Pretzel Chocolate Chip Cookies</h5>
                                    <span class="article-default_link">read more</span>
                                </div>
                            </a>

                        </div>
                        <div class="blog-clear blog-clear--two"></div>

                        <div class="blog-clear blog-clear--main"></div>



                        <a href="javascript:;" class="theme-button blog-articles_load-more" data-blog-handle="recipes">
                            <span class="theme-button_text">LOAD MORE</span>
                        </a>

                    </div>
                </div>
            </div>



        </section>
    </div>
@endsection
