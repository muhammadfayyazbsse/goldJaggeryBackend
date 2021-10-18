<script src="https://cdnjs.cloudflare.com/ajax/libs/alchemyjs/0.4.2/scripts/vendor.js"></script>
<script src={{asset('assets/js/jquery.min.js')}}></script>
<script src={{asset('assets/js/owl.carousel.min.js')}}></script>
<script src={{asset('assets/js/gold-jaggry-shopify.js')}}></script>
<script>
    $(document).ready(function () {
        $('#main-slider').owlCarousel({
            autoplay: true,
            loop: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('#product-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            dots: false,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

        $('#inc').on('click',function (){
            let quantity = parseInt($('#quantity').val());
            if (quantity <= 100)
            {
                $('#quantity').val(quantity+1)
            }
        })
        $('#decrese').on('click',function (){
            let quantity = parseInt($('#quantity').val());
            if (quantity >= 1)
            {
                $('#quantity').val(quantity-1)
            }
        })


    });
</script>


<script>
    $ = jQuery;
    $( document ).ready(function() {

        $h_slider_options =  {
            gallery: true,
            item: 1,
            loop:true,
            slideMargin: 0,
            thumbItem: 6,
            galleryMargin: 10,
            thumbMargin: 10,
        };

        $v_slider_options = {
            gallery: true,
            item: 1,
            loop:true,
            slideMargin: 0,
            thumbItem: 6,
            galleryMargin: 10,
            thumbMargin: 10,
            vertical: true
        };

        h_slider = $('#lightSlider').lightSlider($h_slider_options);
        v_slider = $('#lightSliderVertical').lightSlider($v_slider_options);

        $selector = '#lightSlider li:not(".clone") a';
        $selector += ',#lightSliderVertical li:not(".clone") a';
        $().fancybox({
            selector : $selector,
            backFocus : false,
            buttons : [
                'slideShow',
                'share',
                'zoom',
                'fullScreen',
                'thumbs',
                'download',
                'close'
            ]
        });
    });

    $( window ).resize(function() {
        slider.destroy();
        h_slider = $('#ocassions-slider').lightSlider(h_slider_options);
    });
</script>
<script>
    var coll = document.getElementsByClassName("js-accordion-title");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>
