@extends('layout.app')

@section('content')
    <div class="goldmain container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="gold-main-wrapper">
                    <div class="goldslider">

                        <ul id="lightSliderVertical">
                            <li data-thumb="assets/images/Product2.jpg">
                                <a href="assets/images/Product2.jpg" data-fancybox="gallery">
                                    <img src="assets/images/Product2.jpg" />
                                </a>
                            </li>
                            <li data-thumb="assets/images/Product2.jpg">
                                <a href="assets/images/Product2.jpg" data-fancybox="gallery">
                                    <img src="assets/images/Product2.jpg" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <span class="stamped-badge" data-rating="3.9" data-lang="" aria-label="Rated 3.9 out of 5 stars"><span class="stamped-starrating stamped-badge-starrating" aria-hidden="true"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>14<span> reviews</span></span>
                <h1>Gold product</h1>
                <h6>$60.00</h6>
                <hr>
                <h5 class="swatches__option-name"><strong>Size:</strong> <span id="selected-option-1" class="swatches__option-value">60 count</span></h5>
                <div class="qty-selection">
                    <h5>Quantity</h5>
                    <a class="down quantity-control-down" field="quantity" id="decrese">-</a>
                    <input min="1" type="text" name="quantity" id="quantity" class="quantity" value="1">
                    <a class="up quantity-control-up" field="quantity" id="inc">+</a>
                </div>
                <a href="#" class="add_to_cart_btn">
                    <span class="theme-button_text">Add to Cart</span>
                </a>
                <hr>
                <h6>80% cacao</h6>
                <p>Can't decide between Almond Butter and Hazelnut Butter? Then don't. This bundle is made up of one of each Nut Butter Bomb 9-count bag. Clean Ingredients, homemade taste.</p>
                <div class="faq-block js-accordion-container">

                    <div class="faq-acc faq-acc--first">
                        <h6 class="faq-acc_title js-accordion-title">Ingredients</h6>
                        <article class="faq-acc_body js-accordion-list"><p>
                                Almond Butter Bombs: *Organic cacao beans, *organic cocoa butter, organic almond butter, *organic agave fiber, *organic coconut oil, *organic raw cane sugar, organic butterfat, natural flavor, *organic vanilla beans. Hazelnut Butter Bombs: *Organic cacao beans, *organic cocoa butter, organic hazelnut butter, *organic agave fiber, *organic coconut oil, *organic raw cane sugar, organic butterfat, natural flavor, *organic vanilla beans.
                            </p>
                            <hr>
                            *Fair Trade Certified™ by Fair Trade USA, total 82.5% Fair Trade Ingredients.
                            80% cocoa chocolate shell.
                            Contains milk and coconut. May contain hazelnuts, almonds, and soy. Individuals who are allergic to these should not consume this product.
                            <hr>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h4 style="text-align:center;">Our other new product</h4>
            </div>
        </div>


        <div class="row">
            <div class="inner_product_img col-xs-12 col-md-4">
                <img src="assets/images/innerProduct.jpg">
                <h4><a href="">Classic Truffles</a></h4>
                <h4><a href="">from $65 </a></h4>

                <a href="#" class="add_to_cart_btn">
                    <span class="theme-button_text">Add to Cart</span>
                </a>
            </div>
            <div class="inner_product_img col-xs-12 col-md-4">
                <img src="assets/images/innerProduct.jpg">
                <h4><a href="">Classic Dark</a></h4>
                <h4><a href="">from $46 </a></h4>

                <a href="#" class="add_to_cart_btn">
                    <span class="theme-button_text">Add to Cart</span>
                </a>
            </div>
            <div class="inner_product_img col-xs-12 col-md-4">
                <img src="assets/images/innerProduct.jpg">
                <h4><a href="">Dark Truffles</a></h4>
                <h4><a href="">from $89 </a></h4>

                <a href="#" class="add_to_cart_btn">
                    <span class="theme-button_text">Add to Cart</span>
                </a>
            </div>
        </div>

    </div>
@endsection
