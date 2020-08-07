/* ---- Menu Burger Button ---- */  

    var menuBtn = document.querySelector('.menu-btn');
    var menuLinkContact = document.querySelector('.menu-nav__item .contact');
    var menuBtnBurger = document.querySelector('.menu-btn__burger');
    var nav = document.querySelector('.nav');
    var menuNav = document.querySelector('.menu-nav');
    var menuNavItem = document.querySelectorAll('.menu-nav__item');

    var showMenu = false; 

    menuBtn.addEventListener('click', function() {
        if (showMenu === false) {
            menuBtnBurger.classList.add('open');
            nav.classList.add('open');
            menuNav.classList.add('open');
            for(var i = 0; i < menuNavItem.length; i++) {
                menuNavItem[i].classList.add('open');
            };
            document.body.setAttribute('style', 'overflow: hidden');
            showMenu = true;
        } else {
            menuBtnBurger.classList.remove('open');
            nav.classList.remove('open');
            menuNav.classList.remove('open');
            for(var i = 0; i < menuNavItem.length; i++) {
                menuNavItem[i].classList.remove('open');
            };
            document.body.removeAttribute('style');
            showMenu = false;
        }
    });

    menuLinkContact.addEventListener('click', function(){
        menuBtnBurger.classList.remove('open');
        nav.classList.remove('open');
        menuNav.classList.remove('open');
        for(var i = 0; i < menuNavItem.length; i++) {
            menuNavItem[i].classList.remove('open');
        };
        document.body.removeAttribute('style');
        showMenu = false;
    });

/* ---- Shrink Navbar ---- */

// When the user scrolls down 100px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.querySelector("img.logo").style.height = "2.5rem";
        document.querySelector(".fixed-bar").style.padding = "1rem 5vw";
        document.querySelector(".menu-btn").style.top = "1.75rem";
    } else {
        document.querySelector("img.logo").removeAttribute("style");
        document.querySelector(".fixed-bar").removeAttribute("style");
        document.querySelector(".menu-btn").removeAttribute("style");
    }
    if (document.querySelectorAll(".item").length < 1) {
        if (document.body.scrollTop > (window.innerHeight - 200) || document.documentElement.scrollTop > (window.innerHeight - 200)) {
            document.querySelector("header.header").style.display = "block";
        } else {
            document.querySelector("header.header").removeAttribute("style");
        }
        if (document.body.scrollTop > window.innerHeight || document.documentElement.scrollTop > window.innerHeight) {
            document.querySelector("header.header").style.opacity = "1";
        } else {
            document.querySelector("header.header").style.opacity = "0";
        }
    }
}


/* ---- Category Hover Image change ---- */

//Load images in cache
function preloadImages(linkList) {
    if (!preloadImages.cache) {
        preloadImages.cache = [];
    }
    var img;
    for (var i = 0; i < linkList.length; i++) {
        var linkSrc = linkList[i].getAttribute("data-src");
        var linkSrcset = linkList[i].getAttribute("data-srcset");
        img = new Image();
        img.src = linkSrc;
        img.srcset = linkSrcset;
        preloadImages.cache.push(img);
    }
}
//Delaying preloading until after the page loads
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}

//Load image hover
function hoverImg(linkList, imgContainer) {
    for(var i = 0; i < linkList.length; i++) {
        linkList[i].addEventListener("mouseover", function() {
            var linkSrc = this.getAttribute("data-src");
            var linkSrcset = this.getAttribute("data-srcset");
            imgContainer.src=linkSrc;
            imgContainer.srcset=linkSrcset;
            imgContainer.classList.add("opacity-100");
            imgContainer.classList.remove("opacity-0");
        });
        linkList[i].addEventListener("mouseout", function() {
            imgContainer.classList.add("opacity-0");
            imgContainer.classList.remove("opacity-100");
        });
    }
};

if (document.querySelectorAll('.block-categories').length > 0) {
    var categoryLinkList = document.querySelectorAll(".block-categories__card__list a");
    var categoryImgContainer = document.querySelector(".block-categories__img__change");
    //Callback Load images in cache
    addLoadEvent(preloadImages(categoryLinkList));
    //Callback Load Image Hover
    hoverImg(categoryLinkList, categoryImgContainer);
};
if (document.body.classList.contains('products')) {
    var headerLinkList = document.querySelectorAll(".header-card__list a");
    var headerImgContainer = document.querySelector(".header-hero__img__change");
    //Callback Load images in cache
    addLoadEvent(preloadImages(headerLinkList));
    //Callback Load Image Hover
    hoverImg(headerLinkList, headerImgContainer);
}



/* ---- Start Swipper Slider Config ---- */

if (document.querySelectorAll('.header-slider__carousel').length > 0) {

    
    // Header Pics Slider Config
    var headerSwiper = new Swiper ('.header-slider__carousel', {
        // Optional parameters
        slidesPerView: 'auto',
        spaceBetween: false,
        centeredSlides: false,
        loop: true,
        loopedSlides: 4,
        speed: 500,
        updateOnWindowResize: true,
        autoplay: {
            delay: 2500,
        },
        // Disable preloading of all images
        preloadImages: false,
        // Enable lazy loading
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
        },
        // Disable load again images loaded
        updateOnImagesReady: false,

    });


    //Header Label Slider Config
    var headerLabelSwiper = new Swiper ('.header-slider__label', {
        // Optional parameters
        slidesPerView: 'auto',
        spaceBetween: false,
        centeredSlides: false,
        loop: true,
        loopedSlides: 4,
        speed: 500,
        allowTouchMove: false,

    });
    
    //function next prev
    var headerSlide = document.querySelectorAll('.header-slider__carousel .swiper-slide');
    slideNextPrev(headerSlide, headerSwiper, headerLabelSwiper);

};
    
if (document.querySelectorAll('.product-slider__carousel').length > 0) {

    // Product Pics Slider Config
    var nrSlides = document.querySelectorAll ('.product-slider__carousel__item');
    if(nrSlides.length > 1) {
        var options = {
            // Optional parameters
            slidesPerView: 'auto',
            spaceBetween: false,
            centeredSlides: true,
            loop: true,
            loopedSlides: 4,
            speed: 500,
            updateOnWindowResize: true,
            // Disable preloading of all images
            preloadImages: false,
            // Enable lazy loading
            lazy: {
                loadPrevNext: true,
                loadOnTransitionStart: true,
            },
            // Disable load again images loaded
            updateOnImagesReady: false,
        }
    } else {
        var options = {
            slidesPerView: 'auto',
            loop: false,
            lazy: true,
            centeredSlides: true,
        }
    }
    var productSwiper = new Swiper ('.product-slider__carousel', options);

    // Product Label Slider Config
    var productLabelSwiper = new Swiper ('.product-slider__label', {
        // Optional parameters
        slidesPerView: 'auto',
        spaceBetween: false,
        centeredSlides: false,
        loop: true,
        loopedSlides: 4,
        speed: 500,
        allowTouchMove: false,

    });

    //function next prev
    var productSlide = document.querySelectorAll('.product-slider__carousel .swiper-slide');
    slideNextPrev(productSlide, productSwiper, productLabelSwiper);

};

if (document.querySelectorAll('.item-slider__carousel').length > 0) {
    
    // Item Pics Slider Config
    var itemSwiper = new Swiper ('.item-slider__carousel', {
        // Optional parameters
        slidesPerView: 1,
        spaceBetween: false,
        centeredSlides: true,
        speed: 500,
        updateOnWindowResize: true,
        loop: true,
        loopedSlides: 4,
        // Disable preloading of all images
        preloadImages: false,
        // Enable lazy loading
        lazy: true,
        // Disable load again images loaded
        updateOnImagesReady: false,
    });


    var thumbSwiper = new Swiper ('.thumb-slider__carousel', {
        // Optional parameters
        slidesPerView: 4,
        spaceBetween: 16,
        centeredSlides: true,
        speed: 500,
        updateOnWindowResize: true,
        slideToClickedSlide: true,
        navigation: {
            nextEl: '.thumb-slider-next',
            prevEl: '.thumb-slider-prev',
          },
        loop: true,
        loopedSlides: 4,
        touchRatio: 0.2,

    });

    //function next prev
    itemSwiper.controller.control = thumbSwiper;
    thumbSwiper.controller.control = itemSwiper;

}

    // Next Slide Function Header Slider

        //function next prev
        function slideNextPrev(slides, picSwiper, labelSwiper) {
            for(var i = 0; i < slides.length; i++) {
                (function (index) {
                    slides[index].addEventListener('click', function() {
                        if(slides[index].classList.contains('swiper-slide-next')) {
                            console.log ('next')
                            picSwiper.slideNext(500);
                            event.preventDefault();
                        } else if (slides[index].classList.contains('swiper-slide-prev')) {
                            console.log ('prev')
                            picSwiper.slidePrev(500);
                            event.preventDefault();
                        } else {
                            console.log ('active')
                        }
                    });
                }) (i)
            };
            // link between img and label slides 
            if(typeof labelSwiper !== 'undefined') {
                picSwiper.controller.control = labelSwiper;
            };
        };

/* ---- End Swipper Slider Config ---- */

/* ---- Config Insta Elfsight pligin ---- */
        
setTimeout(function() {
    var elfLogo = document.querySelector('.eapps-instagram-feed.eapps-widget > a');
    var overlay = document.querySelectorAll('.eapps-instagram-feed-posts-item-overlay')

    elfLogo.parentNode.removeChild(elfLogo);
    
    for (var overElem of overlay)
    overElem.style.background = 'rgba(217, 200, 158, 0.8)';

}, 2500);

/* ---- ITEM PAGE change to block ---- */
if (document.querySelector('.card-item__sizes__table') !== null) {
    var itemColorContainer = document.querySelector('.card-item__colors');
    var itemSizeContainer = document.querySelector('.card-item__sizes');
    itemColorContainer.style.display = 'block';
    itemColorContainer.style.width = '100%';
    itemSizeContainer.style.display = 'block';
    itemSizeContainer.style.width = '100%';
}