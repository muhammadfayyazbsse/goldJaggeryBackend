<div class="announcement-bar" role="region" aria-label="Announcement">
    <p class="announcement-bar__message">15% OFF VALENTINE’S DAY COLLECTION || CODE: BEMINE15 || YOU’RE $65 AWAY FROM FREE SHIPPING</p>
</div>
<nav id="navbar" class="navbar">
    <div id="shopify-section-navbar" class="shopify-section">

        <div id="navBar" class="navbar-main">
            <div class="container navbar-container">
                <div class="flyout-button">
                    <div class="flyout-button_bar flyout-button_bar--top"></div>
                    <div class="flyout-button_bar flyout-button_bar--bottom"></div>
                </div>
                <a href="index.html" class="navbar_logo">
                    <img src="assets/images/logo.png"
                         alt="Alter Eco Logo" class="navbar_logo_image">
                </a>
                <div class="navbar_top">
                    <div class="navbar_top_block">
                        <a href="/" class="navbar_top_inline-block storeLocator">
                            <span class="navbar_top_link">My Bag</span>
                            <span class="goldbag"><i class="fas fa-shopping-bag"></i></span>
                        </a>
                        <a href="{{route('login')}}" class="navbar_top_inline-block storeLocator">
                            <span class="navbar_top_link">Login</span>
                            <span class="goldbag"><i class="fas fa-user"></i></span>
                        </a>
                    </div>
                </div>
                <div class="navbar_bottom">
                    <div class="navbar_bottom_links">
                        <a href="javascript:;" class="navbar_bottom_link" data-id="shop">shop</a>
                        <a href="javascript:;" class="navbar_bottom_link navbar_bottom_link--middle" data-id="inside">our story</a>
                        <a href="javascript:;" class="navbar_bottom_link" data-id="community">blog</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.onscroll = function changeNav() {
                var navBar = document.getElementById('navBar'),
                    navBarHeight = navBar.getBoundingClientRect().height;

                var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;

                if (scrollTop <= navBarHeight) {
                    navBar.className = ('navbar-main');
                } else if (scrollTop >= navBarHeight) {
                    navBar.className = ('navbar-main scroll');
                }
            }
        </script>
    </div>
    <div class="navbar-tear">
        <img src="assets/images/bottomline.png"
             class="navbar-tear_image" alt="Navbar Tear">
    </div>
    <div id="shopify-section-nav-dropdown-menu" class="shopify-section">

        <div class="nav-dropdown-menu" id="nav-dropdown-menu">
            <div class="container">
                <a href="javascript:void(0)" class="nav-dropdown-menu_link" data-id="shop">shop</a>
                <a href="javascript:void(0)" class="nav-dropdown-menu_link" data-id="inside">our story</a>
                <a href="javascript:void(0)" class="nav-dropdown-menu_link" data-id="community">blog</a>
            </div>
        </div>
    </div>
    <div id="shopify-section-nav-dropdown-inside" class="shopify-section">

        <aside class="nav-dropdown" data-id="inside">
            <div class="nav-dropdown_mobile-banner">
                <div class="nav-dropdown_mobile-banner_arrow back-to-dropdown-menu">
                    <img src="assets/images/white_arrow.png"
                         class="nav-dropdown_mobile-banner_arrow_image" alt="Back to Menu">
                </div>
                <span class="nav-dropdown_mobile-banner_text">our story</span>
            </div>
            <div class="nav-dropdown_left-background image-cover">
                <img src="assets/images/Super_Nav_Topo_Lines-Activism_1200x.jpg"
                     class="image-cover_background lazyloaded" alt="">
            </div>
            <div class="container">
                <div class="nav-dropdown_left-col nav-dropdown_left-col--alt">
                    <div class="nav-dropdown_left-col_alt-block">
                        <h4 class="left-col_title">Our Mission</h4>
                        <p class="left-col_description">is to pioneer a full circle approach to eating, farming, and
                            doing business and to inspire others to do the same.</p>
                    </div>
                    <div class="nav-dropdown_left-col_alt-block nav-dropdown_left-col_alt-block--float-right">
                        <h4 class="left-col_title left-col_title--border-bottom">Full Circle Sustainability</h4>
                        <div class="left-col_block-links">

                            <a href="our-story.html" class="left-col_block-link">
                                <img src="assets/images/white_arrow.png"
                                     alt="Material Arrow Forward" class="block-link_icon">
                                <span class="block-link_title">CHOOSE CLEAN INGREDIENTS</span>
                            </a>

                            <a href="our-story.html" class="left-col_block-link">
                                <img src="assets/images/white_arrow.png"
                                     alt="Material Arrow Forward" class="block-link_icon">
                                <span class="block-link_title">INVEST IN FARMERS</span>
                            </a>

                            <a href="our-story.html" class="left-col_block-link">
                                <img src="assets/images/white_arrow.png"
                                     alt="Material Arrow Forward" class="block-link_icon">
                                <span class="block-link_title">REGENERATE THE EARTH</span>
                            </a>

                            <a href="our-story.html" class="left-col_block-link">
                                <img src="assets/images/white_arrow.png"
                                     alt="Material Arrow Forward" class="block-link_icon">
                                <span class="block-link_title">ELIMINATE WASTE</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="nav-dropdown_right-col nav-dropdown_right-col--alt">
                    <div class="nav-dropdown_right-col_top nav-dropdown_right-col_top--alt">
                        <div class="top-content">
                            <div class="top-content_links">
                                <a href="our-story"
                                   class="top-content_link top-content_link--first top-content_link--top top-content_link--alt">OUR
                                    STORY</a>
                            </div>
                            <div class="top-content_links">
                                <a href="our-story.html"
                                   class="top-content_link top-content_link--first top-content_link--alt">B
                                    CORPORATION</a>
                            </div>
                        </div>

                        <script>
                            var linkArray = document.getElementsByClassName("top-content_link");
                            for (var i = 0; i < linkArray.length; i++) {
                                if (linkArray[i].innerHTML === "") {
                                    linkArray[i].style.display = "none";
                                }
                            }
                        </script>

                    </div>
                    <a href="our-story.html" class="nav-dropdown_right-col_bottom">
                        <article class="nav-dropdown_right-col_richtext nav-dropdown_right-col_richtext--alt">
                            <p>2021 IMPACT<br>REPORT</p>
                            <img src="assets/images/arrow.png"
                                 alt="Go to page" class="nav-dropdown_right-col_arrow">
                        </article>
                        <img src="assets/images/small.png"
                             alt="New Different Chocolates"
                             class="nav-dropdown_right-col_image nav-dropdown_right-col_image--smallest">
                    </a>
                </div>
            </div>
        </aside>
    </div>
    <div id="shopify-section-nav-dropdown-community" class="shopify-section">

        <aside class="nav-dropdown" data-id="community">
            <div class="nav-dropdown_mobile-banner">
                <div class="nav-dropdown_mobile-banner_arrow back-to-dropdown-menu">
                    <img src="assets/images/white_arrow.png"
                         class="nav-dropdown_mobile-banner_arrow_image" alt="Back to Menu">
                </div>
                <span class="nav-dropdown_mobile-banner_text">blog</span>
            </div>
            <div class="container">
                <div class="nav-dropdown_left-col">
                    <a href="blog.html" class="nav-dropdown_left-col_block">
                        <div class="nav-dropdown_col-content">
                            <img src="assets/images/Chocolate-Chunk-Cookies-Nav-Recipe_600x.jpg"
                                 alt="Shop RECIPES" class="nav-dropdown_col-content_image">
                            <h6 class="nav-dropdown_col-content_title">RECIPES</h6>
                        </div>
                    </a>
                    <a href="blog.html" class="nav-dropdown_left-col_block">
                        <div class="nav-dropdown_col-content">
                            <img src="assets/images/Blog_600x.jpg"
                                 alt="Shop BLOG" class="nav-dropdown_col-content_image">
                            <h6 class="nav-dropdown_col-content_title">BLOG</h6>
                        </div>
                    </a>
                    <a href="blog.html" class="nav-dropdown_left-col_block">
                        <div class="nav-dropdown_col-content">
                            <img src="assets/images/Supernav-Good-neighbor_600x.jpg"
                                 alt="Shop BEING A GOOD NEIGHBOUR" class="nav-dropdown_col-content_image">
                            <h6 class="nav-dropdown_col-content_title">BEING A GOOD NEIGHBOUR</h6>
                        </div>
                    </a>
                </div>
                <div class="nav-dropdown_right-col">
                    <div class="nav-dropdown_right-col_top">
                        <div class="top-content">
                            <div class="top-content_links">
                                <a href="blog.html"
                                   class="top-content_link top-content_link--first top-content_link--top">PRESS</a>
                            </div>
                            <div class="top-content_links">
                                <a href="blog.html" class="top-content_link top-content_link--first">AWARDS</a>
                            </div>
                        </div>
                    </div>
                    <a href="blog.html" class="nav-dropdown_right-col_bottom">
                        <article class="nav-dropdown_right-col_richtext nav-dropdown_right-col_richtext--wider">
                            <p><strong>Featured<br></strong></p>
                            <p></p>
                            <p>Vegan Mint Strawberry Brownies</p>
                            <img src="assets/images/arrow.png"
                                 alt="Go to page" class="nav-dropdown_right-col_arrow">
                        </article>
                        <img src="assets/images/small.png"
                             alt="New Different Chocolates"
                             class="nav-dropdown_right-col_image nav-dropdown_right-col_image--smaller">
                    </a>
                </div>
            </div>
        </aside>
    </div>
    <div id="shopify-section-nav-dropdown-shop" class="shopify-section">

        <aside class="nav-dropdown" data-id="shop">
            <div class="nav-dropdown_mobile-banner">
                <div class="nav-dropdown_mobile-banner_arrow back-to-dropdown-menu">
                    <img src="assets/images/white_arrow.png"
                         class="nav-dropdown_mobile-banner_arrow_image" alt="Back to Menu">
                </div>
                <span class="nav-dropdown_mobile-banner_text">shop</span>
            </div>
            <div class="container">
                <div class="nav-dropdown_left-col">
                    <a href="shop.html" class="nav-dropdown_left-col_block">
                        <div class="nav-dropdown_col-content">
                            <img src="assets/images/shop-chocolate-bars_SuperNav_600x.jpg"
                                 alt="Shop BARS" class="nav-dropdown_col-content_image">
                            <h6 class="nav-dropdown_col-content_title">BARS</h6>
                        </div>
                    </a>
                    <a href="shop.html" class="nav-dropdown_left-col_block">
                        <div class="nav-dropdown_col-content">
                            <img src="assets/images/shop-caramel-truffles-Super_Nav_600x.jpg"
                                 alt="Shop TRUFFLES" class="nav-dropdown_col-content_image">
                            <h6 class="nav-dropdown_col-content_title">TRUFFLES</h6>
                        </div>
                    </a>
                    <a href="shop.html" class="nav-dropdown_left-col_block">
                        <div class="nav-dropdown_col-content">
                            <img src="assets/images/ezgif.com-gif-maker (1).png"
                                 alt="Shop GRASS FED MILK" class="nav-dropdown_col-content_image">
                            <h6 class="nav-dropdown_col-content_title">GRASS FED MILK</h6>
                        </div>
                    </a>
                </div>
                <div class="nav-dropdown_right-col">
                    <div class="nav-dropdown_right-col_top">
                        <div class="top-content">
                            <div class="top-content_links">
                                <a href="shop.html"
                                   class="top-content_link top-content_link--first top-content_link--top">BROWSE ALL</a>
                                <a href="shop.html" class="top-content_link top-content_link--top" style="display: none;"></a>
                            </div>
                            <div class="top-content_links">
                                <a href="" class="top-content_link top-content_link--first top-content_link--third"
                                   style="display: none;"></a>
                                <a href="" class="top-content_link" style="display: none;"></a>
                            </div>
                        </div>

                        <script>
                            var linkArray = document.getElementsByClassName("top-content_link");
                            for (var i = 0; i < linkArray.length; i++) {
                                if (linkArray[i].innerHTML === "") {
                                    linkArray[i].style.display = "none";
                                }
                            }
                        </script>

                    </div>
                    <a href="shop.html" class="nav-dropdown_right-col_bottom">
                        <article class="nav-dropdown_right-col_richtext">
                            <p></p>
                            <p></p>
                            <p>Superdark&nbsp;</p>
                            <p>Truffles</p>
                            <img src="assets/images/arrow.png"
                                 alt="Go to page" class="nav-dropdown_right-col_arrow">
                        </article>
                        <img src="assets/images/small.png"
                             alt="New Different Chocolates" class="nav-dropdown_right-col_image">
                    </a>
                </div>
            </div>
        </aside>
    </div>
</nav>
