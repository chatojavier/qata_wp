var menuBtn=document.querySelector(".menu-btn"),menuLinkContact=document.querySelector(".menu-nav__item .contact"),menuBtnBurger=document.querySelector(".menu-btn__burger"),nav=document.querySelector(".nav"),menuNav=document.querySelector(".menu-nav"),menuNavItem=document.querySelectorAll(".menu-nav__item"),showMenu=!1;function scrollFunction(){document.body.scrollTop>100||document.documentElement.scrollTop>100?(document.querySelector("img.logo").style.height="2.5rem",document.querySelector(".fixed-bar").style.padding="1rem 5vw",document.querySelector(".menu-btn").style.top="1.75rem"):(document.querySelector("img.logo").removeAttribute("style"),document.querySelector(".fixed-bar").removeAttribute("style"),document.querySelector(".menu-btn").removeAttribute("style")),document.querySelectorAll(".item").length<1&&window.innerHeight<window.innerWidth&&(document.body.scrollTop>window.innerHeight-200||document.documentElement.scrollTop>window.innerHeight-200?document.querySelector("header.header").style.display="block":document.querySelector("header.header").removeAttribute("style"),document.body.scrollTop>window.innerHeight||document.documentElement.scrollTop>window.innerHeight?document.querySelector("header.header").style.opacity="1":document.querySelector("header.header").style.opacity="0")}function preloadImages(e){var t;preloadImages.cache||(preloadImages.cache=[]);for(var o=0;o<e.length;o++){var n=e[o].getAttribute("data-src"),r=e[o].getAttribute("data-srcset");(t=new Image).src=n,t.srcset=r,preloadImages.cache.push(t)}}function addLoadEvent(e){var t=window.onload;"function"!=typeof window.onload?window.onload=e:window.onload=function(){t&&t(),e()}}function hoverImg(e,t){for(var o=0;o<e.length;o++)e[o].addEventListener("mouseover",function(){var e=this.getAttribute("data-src"),o=this.getAttribute("data-srcset");t.src=e,t.srcset=o,t.classList.add("opacity-100"),t.classList.remove("opacity-0")}),e[o].addEventListener("mouseout",function(){t.classList.add("opacity-0"),t.classList.remove("opacity-100")})}if(menuBtn.addEventListener("click",function(){if(!1===showMenu){menuBtnBurger.classList.add("open"),nav.classList.add("open"),menuNav.classList.add("open");for(var e=0;e<menuNavItem.length;e++)menuNavItem[e].classList.add("open");document.body.setAttribute("style","overflow: hidden"),showMenu=!0}else{menuBtnBurger.classList.remove("open"),nav.classList.remove("open"),menuNav.classList.remove("open");for(e=0;e<menuNavItem.length;e++)menuNavItem[e].classList.remove("open");document.body.removeAttribute("style"),showMenu=!1}}),menuLinkContact.addEventListener("click",function(){menuBtnBurger.classList.remove("open"),nav.classList.remove("open"),menuNav.classList.remove("open");for(var e=0;e<menuNavItem.length;e++)menuNavItem[e].classList.remove("open");document.body.removeAttribute("style"),showMenu=!1}),window.onscroll=function(){scrollFunction()},document.querySelectorAll(".block-categories").length>0){var categoryLinkList=document.querySelectorAll(".block-categories__card__list a"),categoryImgContainer=document.querySelector(".block-categories__img__change");addLoadEvent(preloadImages(categoryLinkList)),hoverImg(categoryLinkList,categoryImgContainer)}if(document.body.classList.contains("products")){var headerLinkList=document.querySelectorAll(".header-card__list a"),headerImgContainer=document.querySelector(".header-hero__img__change");addLoadEvent(preloadImages(headerLinkList)),hoverImg(headerLinkList,headerImgContainer)}if(document.querySelectorAll(".header-slider__carousel").length>0){var headerSwiper=new Swiper(".header-slider__carousel",{slidesPerView:"auto",spaceBetween:!1,centeredSlides:!1,loop:!0,loopedSlides:4,speed:500,updateOnWindowResize:!0,autoplay:{delay:2500},preloadImages:!1,lazy:{loadPrevNext:!0,loadOnTransitionStart:!0},updateOnImagesReady:!1}),headerLabelSwiper=new Swiper(".header-slider__label",{slidesPerView:"auto",spaceBetween:!1,centeredSlides:!1,loop:!0,loopedSlides:4,speed:500,allowTouchMove:!1}),headerSlide=document.querySelectorAll(".header-slider__carousel .swiper-slide");slideNextPrev(headerSlide,headerSwiper,headerLabelSwiper)}if(document.querySelectorAll(".product-slider__carousel").length>0){var nrSlides=document.querySelectorAll(".product-slider__carousel__item");if(nrSlides.length>1)var options={slidesPerView:"auto",spaceBetween:!1,centeredSlides:!0,loop:!0,loopedSlides:4,speed:500,updateOnWindowResize:!0,preloadImages:!1,lazy:{loadPrevNext:!0,loadOnTransitionStart:!0},updateOnImagesReady:!1};else options={slidesPerView:"auto",loop:!1,lazy:!0,centeredSlides:!0};var productSwiper=new Swiper(".product-slider__carousel",options),productLabelSwiper=new Swiper(".product-slider__label",{slidesPerView:"auto",spaceBetween:!1,centeredSlides:!1,loop:!0,loopedSlides:4,speed:500,allowTouchMove:!1}),productSlide=document.querySelectorAll(".product-slider__carousel .swiper-slide");slideNextPrev(productSlide,productSwiper,productLabelSwiper)}if(document.querySelectorAll(".item-slider__carousel").length>0){var itemSwiper=new Swiper(".item-slider__carousel",{slidesPerView:1,spaceBetween:!1,centeredSlides:!0,speed:500,updateOnWindowResize:!0,loop:!0,loopedSlides:4,preloadImages:!1,lazy:!0,updateOnImagesReady:!1}),thumbSwiper=new Swiper(".thumb-slider__carousel",{slidesPerView:4,spaceBetween:16,centeredSlides:!0,speed:500,updateOnWindowResize:!0,slideToClickedSlide:!0,navigation:{nextEl:".thumb-slider-next",prevEl:".thumb-slider-prev"},loop:!0,loopedSlides:4,touchRatio:.2});itemSwiper.controller.control=thumbSwiper,thumbSwiper.controller.control=itemSwiper}function slideNextPrev(e,t,o){for(var n=0;n<e.length;n++)!function(o){e[o].addEventListener("click",function(){e[o].classList.contains("swiper-slide-next")?(console.log("next"),t.slideNext(500),event.preventDefault()):e[o].classList.contains("swiper-slide-prev")?(console.log("prev"),t.slidePrev(500),event.preventDefault()):console.log("active")})}(n);void 0!==o&&(t.controller.control=o)}if(null!==document.querySelector(".card-item__sizes__table")){var itemColorContainer=document.querySelector(".card-item__colors"),itemSizeContainer=document.querySelector(".card-item__sizes");itemColorContainer.style.display="block",itemColorContainer.style.width="100%",itemSizeContainer.style.display="block",itemSizeContainer.style.width="100%"}var userIg="qatalpaca",reqURL="https://www.instagram.com/"+userIg+"/?__a=1";function loadInstagramData(e,t){getJSON(reqURL,function(o){console.log("entre");var n={thumbURLsmall:o.graphql.user.edge_owner_to_timeline_media.edges[t].node.thumbnail_resources[0].src,thumbURLmedium:o.graphql.user.edge_owner_to_timeline_media.edges[t].node.thumbnail_resources[2].src,pubId:o.graphql.user.edge_owner_to_timeline_media.edges[t].node.shortcode,likes:o.graphql.user.edge_owner_to_timeline_media.edges[t].node.edge_liked_by.count,comments:o.graphql.user.edge_owner_to_timeline_media.edges[t].node.edge_media_to_comment.count},r=n.thumbURLsmall,a=n.thumbURLmedium,i="https://www.instagram.com/p/"+n.pubId,s=n.likes,l=n.comments;e.innerHTML+=`\n                    <a href="${i}" target="_blank">\n                        <figure class="insta-container__item">\n                            <div class="insta-container__img">\n                                <img src="${r}" srcset="${a}" alt="">\n                            </div>\n                            <div class="insta-container__over">\n                                <div class="insta-container__counters">\n                                    <div class="insta-container__counters__likes">\n                                        <i class="far fa-heart"></i>\n                                        <span class="counter">${s}</span>\n                                    </div>`+(l>0?`<div class="insta-container__counters__comments">\n                            <i class="far fa-comment"></i>\n                            <span class="counter">${l}</span>\n                        </div>`:"")+"</div>\n                            </div>\n                        </figure>\n                    </a>\n                ",t===nroPubs-1&&(e.innerHTML+=getSocialIcons)})}var getSocialIcons='<div class="social-icons">\n            <a href="https://www.facebook.com/qatalpaca" target="_blank"><i class="fab fa-facebook-f"></i></a>\n            <a href="https://www.instagram.com/qatalpaca/" target="_blank"><i class="fab fa-instagram"></i></a>\n        </div>',igContainer=document.querySelector(".insta-container"),nroPubs=4;function igLoopPubs(e){for(var t=0;t<e;t++)loadInstagramData(igContainer,t)}function getJSON(e,t){var o=new XMLHttpRequest;o.open("GET",e,!0),o.onload=function(e){if(4===o.readyState)if(200===o.status){var n=o.responseText;t(JSON.parse(n))}else console.error(o.statusText)},o.onerror=function(e){console.error(o.statusText)},o.send(null)}igLoopPubs(nroPubs);