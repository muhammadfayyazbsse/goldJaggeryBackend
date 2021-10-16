<script src="https://cdnjs.cloudflare.com/ajax/libs/alchemyjs/0.4.2/scripts/vendor.js"></script>
<script src={{asset('assets/js/jquery.min.js')}}''></script>
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


    });
</script>
