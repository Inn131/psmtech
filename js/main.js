
// Slider JS Start
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.modern-banner-slider');
    const container = slider.querySelector('.slider-container');
    const items = Array.from(slider.querySelectorAll('.slider-item'));
    const dotsContainer = slider.querySelector('.slider-dots');
    
    let currentIndex = 0;
    let intervalId;
    const slideInterval = 5000; // 5 seconds
    let isAnimating = false;
    const animationDuration = 600;
    let isDragging = false;
    let startPosX = 0;
    let currentTranslate = 0;

    // Initialize slider
    function initSlider() {
        items.forEach((item, index) => {
            item.style.transform = `translateX(${index * 100}%)`;
            item.classList.toggle('active', index === 0);
            item.dataset.index = index;
        });
        createDots();
        startAutoPlay();
        addEventListeners();
    }
    
    // Create dots navigation
    function createDots() {
        dotsContainer.innerHTML = '';
        items.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (index === currentIndex) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });
    }
    
    // Navigation functions
    function goToSlide(index) {
        if (isAnimating || index === currentIndex) return;
        isAnimating = true;
        // Update active classes
        items[currentIndex].classList.remove('active');
        items[index].classList.add('active');
        // Update dots
        const dots = slider.querySelectorAll('.dot');
        dots[currentIndex].classList.remove('active');
        dots[index].classList.add('active');
        // Animate all slides
        items.forEach((item, i) => {
            item.style.transition = `transform ${animationDuration}ms ease`;
            item.style.transform = `translateX(${(i - index) * 100}%)`;
        });
        setTimeout(() => {
            isAnimating = false;
            currentIndex = index;
        }, animationDuration);
        resetAutoPlay();
    }
    
    function nextSlide() {
        goToSlide((currentIndex + 1) % items.length);
    }
    
    function prevSlide() {
        goToSlide((currentIndex - 1 + items.length) % items.length);
    }
    
    // Mouse & Touch Drag Functionality
    function startDrag(e) {
        if (isAnimating) return;
        isDragging = true;
        startPosX = e.type.includes('mouse') ? e.pageX : e.touches[0].pageX;
        currentTranslate = 0;
        // Disable transitions while dragging
        items.forEach(item => {
            item.style.transition = 'none';
        });
        container.style.cursor = 'grabbing';
        stopAutoPlay();
    }

    function duringDrag(e) {
        if (!isDragging) return;
        const currentPosition = e.type.includes('mouse') ? e.pageX : e.touches[0].pageX;
        currentTranslate = currentPosition - startPosX;
        // Move all slides accordingly
        items.forEach((item, i) => {
            item.style.transform = `translateX(${(i - currentIndex) * 100 + (currentTranslate / container.offsetWidth) * 100}%)`;
        });
    }

    function endDrag() {
        if (!isDragging) return;
        isDragging = false;
        container.style.cursor = '';
        // If drag distance is more than 25% of slider width, change slide
        if (currentTranslate < -container.offsetWidth / 4 && currentIndex < items.length - 1) {
            nextSlide();
        } else if (currentTranslate > container.offsetWidth / 4 && currentIndex > 0) {
            prevSlide();
        } else {
            // Snap back to current slide
            items.forEach((item, i) => {
                item.style.transition = `transform ${animationDuration}ms ease`;
                item.style.transform = `translateX(${(i - currentIndex) * 100}%)`;
            });
        }
        resetAutoPlay();
    }
    
    // Auto-play functionality
    function startAutoPlay() {
        stopAutoPlay();
        intervalId = setInterval(nextSlide, slideInterval);
    }
    
    function stopAutoPlay() {
        clearInterval(intervalId);
    }
    
    function resetAutoPlay() {
        stopAutoPlay();
        startAutoPlay();
    }
    
    // Pause on hover functionality
    function pauseOnHover() {
        slider.addEventListener('mouseenter', stopAutoPlay);
        slider.addEventListener('mouseleave', startAutoPlay);
    }
    
    // Add event listeners
    function addEventListeners() {
        // Mouse events
        container.addEventListener('mousedown', startDrag);
        container.addEventListener('mousemove', duringDrag);
        container.addEventListener('mouseup', endDrag);
        container.addEventListener('mouseleave', endDrag);
        
        // Touch events
        container.addEventListener('touchstart', startDrag, { passive: true });
        container.addEventListener('touchmove', duringDrag, { passive: true });
        container.addEventListener('touchend', endDrag, { passive: true });
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') nextSlide();
            else if (e.key === 'ArrowLeft') prevSlide();
        });
        
        // Pause on hover
        pauseOnHover();
    }
    
    // Initialize the slider
    initSlider();
});

// Slider JS End
/*------------------------------------------------------------------------------*/
/* Fixed-header
/*------------------------------------------------------------------------------*/

    $(window).scroll(function(){
        

        if ( matchMedia( 'only screen and (min-width: 1200px)' ).matches ) 
        {
            if ($(window).scrollTop() >= 50 ) {
                $('.headerBottom').addClass('fixed-header');
            }
            else {
                $('.headerBottom').removeClass('fixed-header');
            }
        }
    });

/*------------------------------------------------------------------------------*/
/* Menu
/*------------------------------------------------------------------------------*/
        
        var menu = {
        initialize: function() {
            this.Menuhover();
        },

        Menuhover : function(){
            var getNav = $("nav.main-menu"),
                getWindow = $(window).width(),
                getHeight = $(window).height(),
                getIn = getNav.find("ul.menu").data("in"),
                getOut = getNav.find("ul.menu").data("out");
            
            if ( matchMedia( 'only screen and (max-width: 1200px)' ).matches ) {
                                                     
                // Enable click event
                $("nav.main-menu ul.menu").each(function(){
                    
                    // Dropdown Fade Toggle
                    $("a.mega-menu-link", this).on('click', function (e) {
                        e.preventDefault();
                        var t = $(this);
                        t.toggleClass('active').next('ul').toggleClass('active');
                    });   

                    // Megamenu style
                    $(".megamenu-fw", this).each(function(){
                        $(".col-menu", this).each(function(){
                            $(".title", this).off("click");
                            $(".title", this).on("click", function(){
                                $(this).closest(".col-menu").find(".content").stop().toggleClass('active');
                                $(this).closest(".col-menu").toggleClass("active");
                                return false;
                                e.preventDefault();
                                
                            });

                        });
                    });  
                    
                }); 
            }
        },
    };

    
    $('.btn-show-menu-mobile').on('click', function(e){
        $(this).toggleClass('is-active'); 
        $('.menu-mobile').toggleClass('show'); 
        return false;
        e.preventDefault();  
    });

    // Initialize
    $(document).ready(function(){
        menu.initialize();

    });

/*------------------------------------------------------------------------------*/
/* Animation on scroll: Number rotator
/*------------------------------------------------------------------------------*/
    
    $("[data-appear-animation]").each(function() {
    var self      = $(this);
    var animation = self.data("appear-animation");
    var delay     = (self.data("appear-animation-delay") ? self.data("appear-animation-delay") : 0);
        
        if( $(window).width() > 959 ) {
            self.html('0');
            self.waypoint(function(direction) {
                if( !self.hasClass('completed') ){
                    var from     = self.data('from');
                    var to       = self.data('to');
                    var interval = self.data('interval');
                    self.numinate({
                        format: '%counter%',
                        from: from,
                        to: to,
                        runningInterval: 2000,
                        stepUnit: interval,
                        onComplete: function(elem) {
                            self.addClass('completed');
                        }
                    });
                }
            }, { offset:'85%' });
        } else {
            if( animation == 'animateWidth' ) {
                self.css('width', self.data("width"));
            }
        }
    });

/*------------------------------------------------------------------------------*/
/* Slick_slider
/*------------------------------------------------------------------------------*/
    $(".slick_slider").slick({
        speed: 1000,
        infinite: true,
        arrows: false,
        dots: false,                   
        autoplay: false,
        centerMode : false,

        responsive: [{

            breakpoint: 1360,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3
            }
        },
        {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3
            }
        },
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

/*------------------------------------------------------------------------------*/
/* Tab
/*------------------------------------------------------------------------------*/ 

    $('.inng-tabs').each(function() {
    $(this).children('.content-tab').children().hide();
    $(this).children('.content-tab').children().first().show();
    $(this).find('.tabs').children('li').on('click', function(e) {  
        var liActive = $(this).index(),
        contentActive = $(this).siblings().removeClass('active').parents('.inng-tabs').children('.content-tab').children().eq(liActive);
        contentActive.addClass('active').fadeIn('slow');
        contentActive.siblings().removeClass('active');
        $(this).addClass('active').parents('.inng-tabs').children('.content-tab').children().eq(liActive).siblings().hide();
        e.preventDefault();
    });
});


/*------------------------------------------------------------------------------*/
/* Accordion
/*------------------------------------------------------------------------------*/

    var allPanels = $('.accordion > .toggle').children('.toggle-content').hide();

    $('.toggle-title').on('click',function(e) {

        e.preventDefault();
        var $this = $(this);
            $this.parent().parent().find('.toggle .toggle-title a').removeClass('active');

        if ($this.next().hasClass('show')) {

            $this.next().removeClass('show');   
            $this.next().slideUp('easeInExpo');

        } else {
            $this.parent().parent().find('.toggle .toggle-content').removeClass('show');
            $this.parent().parent().find('.toggle .toggle-content').slideUp('easeInExpo');
            $this.next().toggleClass('show');
            $this.next().removeClass('show');
            $this.next().slideToggle('easeInExpo');
           $this.next().parent().children().children().addClass('active');

        }

    });

/*------------------------------------------------------------------------------*/
/* Isotope
/*------------------------------------------------------------------------------*/

   $(function () {

        if ( $().isotope ) {           
            var $container = $('.isotope-project');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.project_item',
                    transitionDuration: '1s',
                    layoutMode: 'fitRows'
                });
            });

            $('.portfolio-filter li').on('click',function() {                           
                var selector = $(this).find("a").attr('data-filter');
                $('.portfolio-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });
        };

   });

/*------------------------------------------------------------------------------*/
/* Back to top
/*------------------------------------------------------------------------------*/

 jQuery(document).ready(function() {
    jQuery('.tm_coverimgbox_wrapper').each(function(){
        var parentDiv = jQuery(this);
                
            parentDiv.children('.tm_coverbox_contents').hover(function () {
                parentDiv.find('.tm_coverbox_img').removeClass('active');
                jQuery(this).next('.tm_coverbox_img').addClass('active');
            });
    });
    
 });