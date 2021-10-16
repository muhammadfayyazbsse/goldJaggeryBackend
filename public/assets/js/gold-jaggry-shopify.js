window.slate = window.slate || {};
window.theme = window.theme || {};

/*================ Slate/Shopify ================*/
/**
 * A11y Helpers
 * -----------------------------------------------------------------------------
 * A collection of useful functions that help make your theme more accessible
 * to users with visual impairments.
 *
 *
 * @namespace a11y
 */

slate.a11y = {

  /**
   * For use when focus shifts to a container rather than a link
   * eg for In-page links, after scroll, focus shifts to content area so that
   * next `tab` is where user expects if focusing a link, just $link.focus();
   *
   * @param {JQuery} $element - The element to be acted upon
   */
  pageLinkFocus: function($element) {
    var focusClass = 'js-focus-hidden';

    $element.first()
      .attr('tabIndex', '-1')
      .focus()
      .addClass(focusClass)
      .one('blur', callback);

    function callback() {
      $element.first()
        .removeClass(focusClass)
        .removeAttr('tabindex');
    }
  },

  /**
   * If there's a hash in the url, focus the appropriate element
   */
  focusHash: function() {
    var hash = window.location.hash;

    // is there a hash in the url? is it an element on the page?
    if (hash && document.getElementById(hash.slice(1))) {
      this.pageLinkFocus($(hash));
    }
  },

  /**
   * When an in-page (url w/hash) link is clicked, focus the appropriate element
   */
  bindInPageLinks: function() {
    $('a[href*=#]').on('click', function(evt) {
      this.pageLinkFocus($(evt.currentTarget.hash));
    }.bind(this));
  },

  /**
   * Traps the focus in a particular container
   *
   * @param {object} options - Options to be used
   * @param {jQuery} options.$container - Container to trap focus within
   * @param {jQuery} options.$elementToFocus - Element to be focused when focus leaves container
   * @param {string} options.namespace - Namespace used for new focus event handler
   */
  trapFocus: function(options) {
    var eventName = options.eventNamespace
      ? 'focusin.' + options.eventNamespace
      : 'focusin';

    if (!options.$elementToFocus) {
      options.$elementToFocus = options.$container;
    }

    options.$container.attr('tabindex', '-1');
    options.$elementToFocus.focus();

    $(document).on(eventName, function(evt) {
      if (options.$container[0] !== evt.target && !options.$container.has(evt.target).length) {
        options.$container.focus();
      }
    });
  },

  /**
   * Removes the trap of focus in a particular container
   *
   * @param {object} options - Options to be used
   * @param {jQuery} options.$container - Container to trap focus within
   * @param {string} options.namespace - Namespace used for new focus event handler
   */
  removeTrapFocus: function(options) {
    var eventName = options.namespace
      ? 'focusin.' + options.namespace
      : 'focusin';

    if (options.$container && options.$container.length) {
      options.$container.removeAttr('tabindex');
    }

    $(document).off(eventName);
  }
};

/**
 * Customer Addresses Script
 * ------------------------------------------------------------------------------
 * A file that contains scripts highly couple code to the Customer Addresses
 * template.
 *
 * @namespace customerAddresses
 */

theme.customerAddresses = (function() {
  var $newAddressForm = $('#AddressNewForm');

  if (!$newAddressForm.length) {
    return;
  }

  // Initialize observers on address selectors, defined in shopify_common.js
  if (Shopify) {
    new Shopify.CountryProvinceSelector('AddressCountryNew', 'AddressProvinceNew', {
      hideElement: 'AddressProvinceContainerNew'
    });
  }

  // Initialize each edit form's country/province selector
  $('.address-country-option').each(function() {
    var formId = $(this).data('form-id');
    var countrySelector = 'AddressCountry_' + formId;
    var provinceSelector = 'AddressProvince_' + formId;
    var containerSelector = 'AddressProvinceContainer_' + formId;

    new Shopify.CountryProvinceSelector(countrySelector, provinceSelector, {
      hideElement: containerSelector
    });
  });

  // Toggle new/edit address forms
  $('.address-new-toggle').on('click', function() {
    $newAddressForm.toggleClass('hide');
  });

  $('.address-edit-toggle').on('click', function() {
    var formId = $(this).data('form-id');
    $('#EditAddress_' + formId).toggleClass('hide');
  });

  $('.address-delete').on('click', function() {
    var $el = $(this);
    var formId = $el.data('form-id');
    var confirmMessage = $el.data('confirm-message');
    if (confirm(confirmMessage || 'Are you sure you wish to delete this address?')) {
      Shopify.postLink('/account/addresses/' + formId, {parameters: {_method: 'delete'}});
    }
  });
})();

/**
 * Password Template Script
 * ------------------------------------------------------------------------------
 * A file that contains scripts highly couple code to the Password template.
 *
 * @namespace password
 */

theme.customerLogin = (function() {
  var config = {
    recoverPasswordForm: '#RecoverPassword',
    hideRecoverPasswordLink: '#HideRecoverPasswordLink'
  };

  if (!$(config.recoverPasswordForm).length) {
    return;
  }

  checkUrlHash();
  resetPasswordSuccess();

  $(config.recoverPasswordForm).on('click', onShowHidePasswordForm);
  $(config.hideRecoverPasswordLink).on('click', onShowHidePasswordForm);

  function onShowHidePasswordForm(evt) {
    evt.preventDefault();
    toggleRecoverPasswordForm();
  }

  function checkUrlHash() {
    var hash = window.location.hash;

    // Allow deep linking to recover password form
    if (hash === '#recover') {
      toggleRecoverPasswordForm();
    }
  }

  /**
   *  Show/Hide recover password form
   */
  function toggleRecoverPasswordForm() {
    $('#RecoverPasswordForm').toggleClass('hide');
    $('#CustomerLoginForm').toggleClass('hide');
  }

  /**
   *  Show reset password success message
   */
  function resetPasswordSuccess() {
    var $formState = $('.reset-password-success');

    // check if reset password form was successfully submited.
    if (!$formState.length) {
      return;
    }

    // show success message
    $('#ResetSuccess').removeClass('hide');
  }
})();


/*================ GLOBAL ================*/
var themeCarousels = (function() {
    var homeHeroCarousel = $("#home-hero .owl-carousel"),
        productCarousel = $("#product-carousel"),
        blogCarousel = $("#blog-carousel .owl-carousel"),
        testimonialCarousel = $("#testimonials .owl-carousel"),
        productImageCarousel = $(".product_image-carousel"),
        coopCarousel = $("#coop-carousel .owl-carousel");

    if(homeHeroCarousel.length) {
        homeHeroCarousel.owlCarousel({
            loop: true,
            items: 1,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 7500,
            autoplayHoverPause: true,
            dotsContainer: "#home-hero-dots-entry",
            autoHeight:true
        });
    }
    if(productCarousel.length) {
        productCarousel.owlCarousel({
            loop: true,
            items: 3,
            nav: true,
            navText: [
                '<div class="product-carousel_arrow product-carousel_arrow--left icon-arrow-left"></div>',
                '<div class="product-carousel_arrow icon-arrow-right"></div>'
            ],
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    }
    if(blogCarousel.length) {
        blogCarousel.owlCarousel({
            loop: true,
            items: 1,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 7500,
            autoplayHoverPause: true
        });
    }
    if(testimonialCarousel.length) {
        testimonialCarousel.owlCarousel({
            loop:true, 
            items:1,
            nav:true,
            dots:false,
            autoplay: true,
            autoplayTimeout: 7500,
            autoplayHoverPause: true,
            dotsContainer: "#testimonial-carousel-entry",
            navText: [
                '',
                '<div class="testimonial_next"><span class="testimonial_next_text">NEXT TESTIMONIAL</span><span class="icon-arrow-right testimonial_next_arrow"></span></div>'
            ]
        });
    }
    if(coopCarousel.length) {
        var slideNumContainer = $("#coop-carousel-active-slide");
        coopCarousel.owlCarousel({
            loop: true,
            items: 1,
            nav: true,
            navText: [
                '<div class="coop-carousel_arrow coop-carousel_arrow--left icon-arrow-left"></div>',
                '<div class="coop-carousel_arrow icon-arrow-right"></div>'
            ],
            dots: false,
            autoplay: true,
            autoplayTimeout: 7500,
            autoplayHoverPause: true,
            navContainer: "#coop-carousel-nav-entry"
        });
        coopCarousel.on('changed.owl.carousel', function(e) {
            setTimeout(function() {
                var slideNum = $(".owl-item.active").find('.int-content_image-block').attr('data-slide-num');
                slideNumContainer.text(slideNum);
            }, 50);
        });
    }
    if(productImageCarousel.length) {
        productImageCarousel.owlCarousel({
            loop: true,
            items: 1,
            dots: true,
            autoplay: false,
            autoplayTimeout: 7500,
            autoplayHoverPause: true
        });
    }
})();
var navbarEvents = (function() {
    var navbar = $("#navbar"),
        dropdownLinks = $("#navbar .navbar_bottom_link"),
        dropdowns = $("#navbar .nav-dropdown"),
        siteOverlay = $("#site-overlay"),
        flyoutButton = $(".flyout-button"),
        navDropdownMenu = $("#nav-dropdown-menu"),
        mobileBackButtons = $(".back-to-dropdown-menu"),
        mobileNavLinks = $(".nav-dropdown-menu_link"),
        activeDropdown = null;

    if(dropdownLinks.length) dropdownLinks.click(activateDropdown);
    siteOverlay.click(function() {
        dropdowns.removeClass('is-active');
        dropdownLinks.removeClass('dropdown-is-active');
        activeDropdown = null;
        flyoutButton.removeClass('is-active');
        navDropdownMenu.removeClass('is-active');
        siteOverlay.stop().fadeOut(250);
        $('body').removeClass('no-scroll-fixed');
    });

    if(mobileNavLinks.length) mobileNavLinks.click(activateDropdownMobile);
    if(flyoutButton.length) flyoutButton.click(activateDropdownMenu);
    if(mobileBackButtons.length) mobileBackButtons.click(function() {
        var dropdown = $(this).parents('.nav-dropdown');
        activeDropdown = null;
        dropdown.removeClass('is-active');
        navDropdownMenu.addClass('is-active');
    });

    function activateDropdown() {
        var linkId = $(this).attr('data-id');
        if(activeDropdown && linkId === activeDropdown.attr('data-id')) {
            dropdowns.removeClass('is-active');
            dropdownLinks.removeClass('dropdown-is-active');
            activeDropdown = null;
            siteOverlay.stop().fadeOut(250);
        } else {
            dropdowns.removeClass('is-active');
            dropdownLinks.removeClass('dropdown-is-active');

            var nextDropdown = null;
            for(var i=0;i<dropdowns.length;i++) {
                if(linkId === dropdowns[i].getAttribute('data-id')) {
                    nextDropdown = $(dropdowns[i]);
                    break;
                }
            }
            $(this).addClass('dropdown-is-active');
            activeDropdown = nextDropdown;
            nextDropdown.addClass('is-active');
            siteOverlay.stop().fadeIn(250);
        }
    }

    function activateDropdownMenu() {
        if(flyoutButton.hasClass('is-active')) {
            flyoutButton.removeClass('is-active');
            navDropdownMenu.removeClass('is-active');
            dropdowns.removeClass('is-active');
            siteOverlay.hide();
            $('body').removeClass('no-scroll-fixed');
        } else {
            siteOverlay.show();
            dropdowns.removeClass('is-active');
            flyoutButton.addClass('is-active');
            navDropdownMenu.addClass('is-active');
            $('body').addClass('no-scroll-fixed');
        }
    }

    function activateDropdownMobile() {
        var linkId = $(this).attr('data-id');
        dropdowns.removeClass('is-active');
        dropdownLinks.removeClass('dropdown-is-active');

        var nextDropdown = null;
        for (var i = 0; i < dropdowns.length; i++) {
            if (linkId === dropdowns[i].getAttribute('data-id')) {
                nextDropdown = $(dropdowns[i]);
                break;
            }
        }
        $(this).addClass('dropdown-is-active');
        activeDropdown = nextDropdown;
        nextDropdown.addClass('is-active');
        navDropdownMenu.removeClass('is-active');
    }
})();
var universalAccordions = (function() {
    var accTitles = $(".js-accordion-title");

    if(accTitles.length) accTitles.click(accordionClick);

    function accordionClick() {
        if($(this).hasClass('js-accordion-title--mobile') && $(window).width() > Number($(this).attr('data-active-px'))) {
            return;
        }
        var accContainer = $(this).parents(".js-accordion-container"),
            accTitles = accContainer.find(".js-accordion-title"),
            accLists = accContainer.find(".js-accordion-list");
        if($(this).hasClass('is-active')) {
            accTitles.removeClass('is-active');
            accLists.stop().slideUp(300);
        } else {
            accTitles.removeClass('is-active');
            accLists.slideUp(300);
            $(this).addClass('is-active');
            $(this).next().stop().slideDown(300);
        }
    }
})();

var customSelects = (function() {
    var cSelects = $(".c-select"),
        cSelectTitles = $(".c-select .c-select_title"),
        cSelectItems = $(".c-select_menu_item");

    $(document).click(function() {
        if(cSelects.length) {
            cSelects.find('.c-select_menu').stop().slideUp(250);
            cSelects.removeClass('is-active');
        }
    })

    if(cSelectTitles.length) cSelectTitles.click(function(e) {
        e.stopPropagation();
        var title = $(this),
            parent = title.parent(),
            menu = title.next();
        if(parent.hasClass('is-active')) {
            parent.removeClass('is-active');
            menu.stop().slideUp(250);
        } else {
            parent.addClass('is-active');
            menu.stop().slideDown(250);
        }
    });
    if(cSelectItems.length) $(document).on('click', '.c-select_menu_item', function(e) {
        e.stopPropagation();
        var container = $(this).parents('.c-select'),
            titleChosen = container.find('.c-select_chosen'),
            select = container.find('select');

        container.find('.c-select_menu_item').removeClass('is-active');
        $(this).addClass('is-active');
        titleChosen.text($(this).text());
        select.val($(this).attr('data-value'));
        select.change();
        container.removeClass('is-active');
        container.find('.c-select_menu').stop().slideUp(250);
    }); 
})();

var customQuantity = (function() {
    var cQuantityModifiers = $(".c-quantity_modifier");

    if(cQuantityModifiers.length) cQuantityModifiers.click(function() {
        var cQuantity = $(this).parents('.c-quantity');
        var quantityField = cQuantity.find('input');
        var currentAmountEl = cQuantity.find('.js-quantity-current-amount');
        var currentAmount = Number(currentAmountEl.text());
        if($(this).hasClass('plus')) {
            currentAmount += 1;
        } else {
            if((currentAmount - 1) > -1) {
                currentAmount -= 1;
            } else {
                currentAmount = 0;
            }
        }

        currentAmountEl.text(currentAmount);
        quantityField.val(currentAmount);
    });
})();
var shareSidebar = (function() {
    var links = $(".share-sidebar .share-link"),
        topScrollButtons = $(".scroll-to-top");

    if(topScrollButtons.length) topScrollButtons.click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 350);
    });

	for(var i=0;i<links.length;i++) {
		var thisLink = $(links[i]),
			shareUrl = "";
		if(thisLink.hasClass('twitter')) {
			shareUrl = 'https://twitter.com/share?url=' + window.location.href;
		} else if(thisLink.hasClass('facebook')) {
			shareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + window.location.href;
		}
		thisLink.attr('href', shareUrl);
	}
})();
var addToCart = (function () {
    var productForm = $(".product-options_form");

    productForm.attr('action', '#');
    productForm.submit(addItem);

    function addItem(e) {
        e.preventDefault();
        var submitSpan = $(this).find('.product-submit-span');
        submitSpan.text("ADDING");
        $.ajax({
            type: "POST",
            url: '/cart/add.js',
            data: $(this).serialize(),
            success: function (resp) {
                getCart.activate(null, true);
                submitSpan.text("ADDED!");
                setTimeout(function () {
                    submitSpan.text("ADD TO BAG");
                }, 1500);
                $(".product-default").removeClass('is-active');
                $(".product-dropdown").removeClass('is-active');
            },
            error: function () {
                submitSpan.text("SOLD OUT");
            },
            dataType: 'json'
        })
    }
})();

var getCart = (function () {
    var ajaxCart = $("#ajax-cart"),
        cartAmounts = $(".cart-amount"),
        cartIconAmount = $(".cart-icon-amount"),
        cartTotal = $("#ajax-cart #cart-total"),
        cartLinks = $(".cart-link"),
        overlay = $("#cart-overlay"),
        cartItemTemplate = $("#cart-item-template").html(),
        itemsEntry = $("#ajax-cart .items-entry");

    //change default tags since they are the same as liquid
    var customTags = ['<%', '%>'];
    Mustache.parse(cartItemTemplate, customTags);
    Mustache.tags = customTags;

    //disable cart icon link if javascript enabled
    cartLinks.attr('href', 'javascript:;');
    cartLinks.click(activateCart);
    ajaxCart.click(function (e) { e.stopPropagation(); });
    ajaxCart.on("click", ".remove-item", removeCartItem);
    overlay.click(activateCart);

    function activateCart(e, fetchCart) {
        if (e) e.stopPropagation();
        if (ajaxCart.attr('data-active') === "true") {
            ajaxCart.fadeOut(200);
            ajaxCart.attr('data-active', 'false');
            $('body').removeClass('no-scroll-fixed');
            overlay.fadeOut(200);
        } else {
            ajaxCart.fadeIn(200);
            ajaxCart.attr('data-active', 'true');
            $('body').addClass('no-scroll-fixed');
            overlay.fadeIn(200);
            if (fetchCart) {
                getCart();
            }
        }
    }

    function getCart() {
        ajaxCart.addClass('loading');
        itemsEntry.html('');
        //get cart from shopify
        $.get('/cart.js', function (resp) {
            ajaxCart.removeClass('loading');
            if (resp.items.length > 0) {
                var newItems = document.createDocumentFragment();
                for (var i = 0; i < resp.items.length; i++) {
                    //create new element, add to doc frag
                    newItems.appendChild(createCartElement(resp.items[i], i));
                }
                //append frag to cart
                itemsEntry.html(newItems);
                updateCartInfo(resp.item_count, "$" + ((resp.total_price / 100).toFixed(2)));
            } else {
                updateCartInfo(0)
            }
        }, 'json');

        function createCartElement(item, index) {
            //create new element
            var div = document.createElement('div');
            div.setAttribute('class', 'ajax-cart_item');

            //render mustache template with prepped item
            prepItemObject();
            div.innerHTML = Mustache.render(cartItemTemplate, item);

            return div;

            function prepItemObject() {
                item.title = item.title.split('-')[0];
                item.displayPrice = (item.price / 100).toFixed(2);
                item.line_number = index + 1;
            }
        }
    }

    function updateCartInfo(itemAmount, totalPrice) {
        if (itemAmount) {
            cartAmounts.text(itemAmount);
            cartIconAmount.show();
        } else {
            cartAmounts.text('0');
            itemsEntry.html('<div class="ajax-cart_no-items"><p class="ajax-cart_no-items_text">No items in bag!</p></div>');
            cartTotal.text('$0.00');
            cartIconAmount.hide();
        }
        if (totalPrice) cartTotal.text(totalPrice);
    }

    function removeCartItem() {
        var itemId = $(this).attr('data-id'),
            cartItem = $(this).parents('.ajax-cart_item');

        cartItem.fadeOut(200);
        $.post('/cart/change.js', { quantity: 0, id: itemId }, function () {
            $.get('/cart.js', function (resp) {
                updateCartInfo(resp.items.length, "$" + ((resp.total_price / 100).toFixed(2)));
            }, 'json');
        }, 'json');
    }

    getCart();

    return {
        activate: activateCart
    }
})();

/*================ MODULES ================*/
var productVariantOptions = (function() {
	var variantSelects = $(".js-product-options-select");
	var singleOptions = $(".js-product-single-option");

	if(variantSelects.length) variantSelects.change(function() {
		var priceField = $(this).parents('.product-options_inputs').find('.js-product-options_price');
		var selectOptions = $(this).children();

		for(var i=0;i<selectOptions.length;i++) {
			if(selectOptions[i].value === this.value) {
				priceField.text(selectOptions[i].getAttribute('data-price'));
				break;
			}
		}
	});

	if(singleOptions.length) singleOptions.click(singleOptionClick);

	function singleOptionClick() {
		var value = this.getAttribute('data-value');
		var varSelect = $(this).parents('.product-options_inputs').find('.js-product-options-select');
		var varSelectOptions = $(varSelect).children();
		var scopedSingleOptions = $(this).parents('.product-options_inputs').find('.js-product-single-option');

		//remove/add active class
		scopedSingleOptions.removeClass('is-active');
		$(this).addClass('is-active');

		//find option in master variant options select, update value
		var foundOption = false;
		var optionPrice = "";
		for(var i=0;i<varSelectOptions.length;i++) {
			if(varSelectOptions[i].getAttribute('data-option') === value) {
				$(varSelect).val(varSelectOptions[i].getAttribute('value'));
				optionPrice = varSelectOptions[i].getAttribute('data-price');
				foundOption = true;
				break;
			}
		}

		//update submit button, update price
		var submitBtn = $(this).parents('.product-options').find('.product-options_buttons_submit');
		if(!foundOption) {
			submitBtn.attr('disabled', 'disabled').find('span').text('SOLD OUT');
		} else {
			submitBtn.removeAttr('disabled').find('span').text('ADD TO BAG');
			$(this).parents('.product-options_inputs').find('.js-product-options_price').text(optionPrice);
		}
	}
})();
var productAddDropdown = (function() {
    var productDefaultButtons = $(".product-default_button"),
        productDropdownClose = $(".product-dropdown_close");
        activeDropdownId = true;

    var productPageDropdown = $(".product-dropdown--fixed");
    var productPageDropdownButton = $(".product-mobile-fixed-add");

    if(productPageDropdown.length) {
        productPageDropdownButton.click(function() {
            productPageDropdown.addClass('is-active');
        })
    }

    if(productDefaultButtons.length) productDefaultButtons.click(activateDropdown);
    if(productDropdownClose.length) productDropdownClose.click(function() {
        if($(this).hasClass('product-dropdown_close--is-fixed') || $(window).width() <= 767) {
            productPageDropdown.removeClass('is-active');
            $(".product-default").removeClass('is-active');
            $(".product-dropdown").removeClass('is-active');
        } else {
            var activeDropdown = $(activeDropdownId);
            activeDropdownId = null;
            activeDropdown.stop().slideUp(350);
            $(".product-default").removeClass('is-active');
        }
    });

    $(window).resize(function() {
        window.requestAnimationFrame(function() {
            if(activeDropdownId) {
                $(".product-default").removeClass('is-active');
                $(".product-dropdown").removeClass('is-active');
                $(activeDropdownId).hide();
                activateDropdownId = null;
            }
        });
    });

    function activateDropdown(e) {
        e.preventDefault();
        var nextId = "#product-dropdown--" + $(this).attr('data-id'),
            nextDropdown = $(nextId);
        $(".product-default").removeClass('is-active');
        $(".product-dropdown").removeClass('is-active');
        if($(window).width() <= 767) {
            nextDropdown.addClass('is-active');
            return;
        }
        //check for active dropdown
        if(activeDropdownId) {
            var activeDropdown = $(activeDropdownId);
            activeDropdown.stop().slideUp(350);
            if(activeDropdownId === nextId) {
                activeDropdownId = null;
                return;
            }
        }
        //change active dropdown/product snippet
        nextDropdown.addClass('is-active');
        $(this).parents('.product-default').addClass('is-active');
        activeDropdownId = nextId;
        if(!nextDropdown.hasClass('product-dropdown--carousel')) {
            var parentCol = $(this).parents('.collection-products_col');
            var nextParentEl = parentCol.next();
            var placeAfterEl = null;
            var breakPoint = "medium";
            //find row clear element to place dropdown before, depending on screen width
            if($(window).width() <= 991 && $(window).width() > 768) {
                breakPoint = "small";
            } else if($(window).width() <= 768) {
                breakPoint = false;
            }
            //crawl through collection-products DOM tree, find el to place dropdown before
            var count = 0;
            while(true) {
                if(count > 100) break;
                count += 1;
                if(!breakPoint) {
                    placeAfterEl = nextParentEl;
                    break;
                }
                if(nextParentEl.hasClass(breakPoint)) {
                    placeAfterEl = nextParentEl;
                    break; 
                } else {
                    var nextEl = nextParentEl.next();
                    if(nextEl.length <= 0) {
                        placeAfterEl = null;
                        break;
                    }
                    nextParentEl = nextEl;
                }
            }
            if($(window).width() <= 768 && placeAfterEl.hasClass('col-md-8')) {
                nextDropdown.addClass('product-dropdown--last-el');
                if(placeAfterEl) placeAfterEl.after(nextDropdown);
            } else {
                if(placeAfterEl) placeAfterEl.before(nextDropdown);
            }
        }
        nextDropdown.stop().slideDown(350);
        setTimeout(function() {
            $("html, body").animate({
                scrollTop: (nextDropdown.offset().top - 200) + "px"
            }, 300);
        }, 250);
    }
})();
var blogPage = (function() {
    var mobileDropdown = $("#mobile-active-blog-tag"),
        blogTagsList = $("#blog-tags_list"),
        activeTags = [],
        blogTags = $(".blog-tag"),
        mobileActiveTagTitle = $(".mobile-active-blog-tag_title"),
        mobileFetchButton = $(".refresh-tags-button"),
        pressSubmitBtn = $(".press-options_submit"),
        pressSelect = $(".press-options_select select"),
        blogEntryRow = $("#blog-entry");
  

    if(blogTags.length) blogTags.click(manageTags);

    if(mobileFetchButton.length) mobileFetchButton.click(function() {
        blogTagsList.stop().removeClass('is-active').slideUp(225);
        mobileDropdown.removeClass('is-active');
        fetchPosts(null, true, $(this).attr('data-blog-handle'));
    });
  
    if(pressSelect.length) pressSelect.change(function() {
        if(pressSelect.val() === "all") {
            activeTags = [];
        } else {
            activeTags = [pressSelect.val()];
        }
        fetchPosts(null, true, "press");
      	
    });
  
  	if(document.URL.indexOf("press?blogtype=award") >= 0){
      $.get("/blogs/press/tagged/Awards?view=load_more_press&page=1", function(resp) {
            if(/(Please Log In)/ig.test(resp)) {
                blogEntryRow.html("<div class='blog-entry_no-posts'>no posts found</div>");
            } else {
                if(!true) button.hide();
                if(true) blogEntryRow.html("");
                blogEntryRow.append(resp);
                setTimeout(function () {
                    $(".single-blog-post").removeClass('is-hidden');
                }, 15);
            }
        });
    }
  	  
    $(document).on('click', '.blog-articles_load-more', fetchPosts);

    if(mobileDropdown.length) mobileDropdown.click(function() {
        if($(this).hasClass('is-active')) {
            blogTagsList.stop().removeClass('is-active').slideUp(225);
            $(this).removeClass('is-active');
        } else {
            blogTagsList.stop().slideDown(225).addClass('is-active');
            $(this).addClass('is-active');
        }
    });

    function fetchPosts(e, clear, blogHandle) {
        var nextPageNum = ($(".single-blog-post").length/8) + 1,
            baseUrl = "/blogs/",
            button = $(this);
      
      
        if(blogHandle) {
            baseUrl += blogHandle;
        } else {
            baseUrl += $(this).attr('data-blog-handle');
        }
        if(clear) {
            nextPageNum = 1;
        } else {
            button.find("span").text("LOADING"); 
        }
        if(activeTags.length) {
            baseUrl += "/tagged/" + activeTags.join("+");
        }
      	
      	
      	
        //assign correct blog template to fetch from
        if(blogHandle === "press" || $(this).attr('data-blog-handle') === "press") {
            baseUrl += "?view=load_more_press";
        } else {
            baseUrl += "?view=load_more";
        }
      
      
        $.get(baseUrl + "&page=" + nextPageNum, function(resp) {
            if(/(Please Log In)/ig.test(resp)) {
                blogEntryRow.html("<div class='blog-entry_no-posts'>no posts found</div>");
            } else {
                if(!clear) button.hide();
                if(clear) blogEntryRow.html("");
                blogEntryRow.append(resp);
                setTimeout(function () {
                    $(".single-blog-post").removeClass('is-hidden');
                }, 15);
            }
        });
    }

    function manageTags() {
        var tag = $(this).attr('data-tag'),
            tagIndex = activeTags.indexOf(tag);
      
        if($(this).hasClass('blog-tag--search')) {
            $('.blog-tag--search').removeClass('is-active');
            $(this).addClass('is-active');
            $('.search-hidden-input').attr('value', tag);
            mobileActiveTagTitle.text(tag);
        } else {
            if (tag === "all") {
                //if all is chosen, revert to default state
                blogTags.removeClass('is-active');
                $(this).addClass('is-active');
                activeTags = [];
            } else if (tagIndex !== -1) {
                //if tag clicked is active, remove from arr
                if (tagIndex === 0) {
                    activeTags.shift();
                } else activeTags.pop();
                $(this).removeClass('is-active');
            } else if (activeTags.length > 1) {
                //if already 2 tags active (can't filter more than 2 tags for shopify) remove oldest add newest
                var shiftedTag = activeTags.shift();
                for (var i = 0; i < blogTags.length; i++) {
                    var thisTag = $(blogTags[i]);
                    if (thisTag.attr('data-tag') === shiftedTag) {
                        thisTag.removeClass('is-active');
                        break;
                    }
                }
                activeTags.push(tag);
                $(this).addClass('is-active');
            } else {
                activeTags.push(tag);
                $(this).addClass('is-active');
            }
            if (activeTags.length) {
                $(".no-tags-chosen").removeClass('is-active');
                mobileActiveTagTitle.text(activeTags[0]);
            } else {
                $(".no-tags-chosen").addClass('is-active');
                mobileActiveTagTitle.text("all");
            }
            if ($(window).width() > 991) {
                fetchPosts(null, true, $(this).attr('data-blog-handle'));
            }
        }
    }
})();
var contactForm = (function() {
    var countrySelect = $(".js-country-select"),
        countrySelectEl = countrySelect.find('select'),
        stateSelect = $(".js-state-select"),
        countryJson = [];
    
  
    if(countrySelect.length) {
      
      $.get("//cdn.shopify.com/s/files/1/0072/8334/3418/t/6/assets/countries.json?v=570198983201724427", function(resp) {

            var countryOptions = "",
                countryItems = "";
	
            countryJson = resp.countries;

            resp.countries.forEach(function(country, index) {
                countryOptions += '<option value="' + "United States" + '"' + '>' + "United States" + '</option>';
                countryItems += '<li class="c-select_menu_item" data-value="' + "United States" + '">' + "United States" + '</li>';
            });
            countrySelect.find('select').html(countryOptions);
            countrySelect.find('.c-select_menu').html(countryItems);
        });
        countrySelectEl.change(function() {
            var newCountry = this.value,
                states = null;
        
            if(countryJson.length) {
                countryJson.forEach(function(country) {
                    if(country.name === newCountry) {
                        states = country.provinces;
                    }
                });
                if(states) {
                    var stateOptions = "",
                        stateItems = "";
                    states.forEach(function(state) {
                        stateOptions += '<option value="' + state.name + '"' + '>' + state.name + '</option>';
                        stateItems += '<li class="c-select_menu_item" data-value="' + state.name + '">' + state.name + '</li>';
                    });
                    stateSelect.find('select').html(stateOptions);
                    stateSelect.find('.c-select_menu').html(stateItems);
                }
            }
        });
    }
})();
var cartPage = (function() {
    var editButtons = $(".js-cart-edit");

    if(editButtons.length) editButtons.click(function() {
        var item = $(this).parents('.ajax-cart_item');
        $(this).parent().hide();
        item.parent().find('.ajax-cart_update-button').show();
        item.find('.ajax-cart_c-quantity').show();
    });
})();
var ethosPage = (function() {
    var popupButton = $(".js-ethos-popup-button");
    var popup = $(".ethos-popup");
    var popupCloseButton = $(".ethos-popup_close");

    if(popupButton.length) popupButton.click(function() {
        if(popup.hasClass('is-active')) {
            popup.removeClass('is-active');
            popupCloseButton.removeClass('is-active');
            $('body').removeClass('no-scroll-fixed');
        } else {
            popup.addClass('is-active');
            popupCloseButton.addClass('is-active');
            popup.scrollTop(0);
            setTimeout(function() {
                $('body').addClass('no-scroll-fixed');
            }, 350);
        }
    });
})();
//forgot password form
var forgotPassword = (function () {
	var forgotBtn = $("#forgot-password"),
		loginForm = $("#login-form"),
		forgotForm = $("#forgot-password-form"),
		sentEmail = $("#successful-post");

	if (forgotBtn.length) forgotBtn.click(function () {
		loginForm.hide();
		forgotForm.show();
		$("#login-header").text('RECOVER PASSWORD');
	});

	if (sentEmail.length) $("#form-reset-success").html("<p><em>Reset Password Email Sent!</em></p>");
})();

//open/closing add/edit addresses
var accountPage = (function () {
	var addBtn = $("#add-address"),
		cancelBtn = $("#cancel-address-form"),
		addressForm = $("#address-form"),
		addressErrors = $("#address-form-errors"),
		editAddressBtn = $(".edit-address-link"),
		cancelEditBtn = $(".cancel-edit-address");

	if (editAddressBtn.length) editAddressBtn.click(editAddress);
	if (addressErrors.length) addressForm.slideDown();

	if (cancelBtn.length) cancelBtn.click(function () {
		addressForm.slideUp();
	});

	if (addBtn.length) addBtn.click(function () {
		addressForm.slideDown();
	});

	if (cancelEditBtn.length) cancelEditBtn.click(function () {
		$(this).parents('.edit-address').slideUp();
	});

	function editAddress() {
		$(this).parents('.customer-address').find('.edit-address').slideDown();
	}
})();	
var collectionPage = (function() {
    var headerArrow = $(".collection-header_arrow");
    var productsRow = $(".collection-products_row");

    if(headerArrow.length) headerArrow.click(function() {
        $("html, body").animate({
            scrollTop: (productsRow.offset().top - 140) + "px"
        }, 300);
    });
})();

$(document).ready(function() {

  // Common a11y fixes
  slate.a11y.pageLinkFocus($(window.location.hash));
  window.author = "Connor Handy - 2018";
  $('.in-page-link').on('click', function(evt) {
    slate.a11y.pageLinkFocus($(evt.currentTarget.hash));
  });
});



$('#zip-footer-form').submit(function(event) {
  event.preventDefault();
  var zipCode = $('#zip-footer-form .footer_input').val();
  window.location.href = 'https://alter-eco-foods.myshopify.com/apps/store-locator?zipcode=' + zipCode;
});


if (window.location.pathname === '/apps/store-locator') {
  let url = new URL(window.location.href);
  let searchParams = new URLSearchParams(url.search);
  var result = searchParams.get('zipcode');
  console.log(result)
  $('#address_search').val(result);
  
  setTimeout( function() {
   $('.search_bar button').click();
  }, 250);

}
