<!-- slick slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


<!--site-main start-->
<div class="site-main">
<!-- Banner start-->
<!--==================================================-->
<!-- Start PSM Hero Area Style One-->
<!--==================================================-->
<div class="modern-banner-slider">
    <div class="slider-container">
        <?php 
        for ($i = 1; $i <= 2; $i++) {
            if (have_rows('home_banner_image_and_content_' . $i)) :
                while (have_rows('home_banner_image_and_content_' . $i)) : the_row();
                    $home_banner_first_text = get_sub_field('home_banner_first_text');
                    $home_banner_head = get_sub_field('home_banner_head');
                    $home_banner_decription = get_sub_field('home_banner_decription');
                    $home_banner_image = get_sub_field('home_banner_image');
                    ?> 
                    <div class="slider-item">
                        <div class="slider-content-wrapper">
                            <div class="slider-content-container">
                                <div class="slider-content">
                                    <div class="content-inner">
                                        <span class="banner-badge"><?php echo $home_banner_first_text; ?></span>
                                        <h1 class="banner-title"><?php echo $home_banner_head; ?></h1>
                                        <div class="banner-description"><?php echo $home_banner_decription; ?></div>
                                        
                                        <?php 
                                        $link1 = get_sub_field('home_banner_get_in_touch_link');
                                        if( $link1 ): 
                                            $link_url = $link1['url'];
                                            $link_title = $link1['title'];
                                            ?>
                                            <div class="button-group">
                                                <a href="<?php echo esc_url( $link_url ); ?>" class="primary-button">
                                                    <?php echo esc_html( $link_title ); ?>
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="slider-image">
                                    <div class="image-highlight-container">
                                        <div class="image-wrapper">
                                            <div class="image-glass-effect"></div>
                                            <img src="<?php echo $home_banner_image; ?>" alt="banner-slider-img" class="featured-image">
                                            
                                            <div class="floating-dots"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php } ?>
    </div>
    <div class="slider-controls">
        <div class="slider-dots"></div>
    </div>
</div>
<!--==================================================-->
<!-- End PSM Hero Area Style One-->
<!--==================================================-->
<!-- Banner End -->



<!--==================================================-->
<!-- Start PSM Service Area Style Three-->
<!--==================================================-->
<section class="services-showcase">
    <div class="container">

        <?php if(have_rows('our_service_home')): while(have_rows('our_service_home')): the_row(); ?>
            <div class="section-header">
                <span class="section-badge"><?php the_sub_field('our_service_text'); ?></span>
                <h2 class="section-heading"><?php the_sub_field('our_service_head'); ?></h2>
                <div class="vibrant-divider">
                    <div class="divider-dot"></div>
                </div>
            </div>
        <?php endwhile; endif; ?>

        <div class="services-grid">
            <?php 
            $services = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'orderby' => 'menu_order'
            ));
            
            while($services->have_posts()): $services->the_post();
                $icon = get_field('service_logo_image');
                $excerpt = get_field('service_home_and_about_section');
                ?>
                <article class="service-card">
                    <div class="card-image-wrapper">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large', array(
                                'class' => 'service-featured-image',
                                'alt' => get_the_title()
                            )); ?>
                        <?php endif; ?>
                        <div class="image-overlay"></div>
                    </div>
                    
                    <div class="card-content">
                        <?php if($icon): ?>
                            <div class="service-icon">
                                <img src="<?php echo esc_url($icon); ?>" alt="<?php the_title(); ?> icon">
                            </div>
                        <?php endif; ?>
                        
                        <h3 class="service-title"><?php the_title(); ?></h3>
                        
                        <div class="service-description">
                            <?php echo wp_kses_post($excerpt); ?>
                        </div>


                        <a href="<?php the_permalink(); ?>" class="service-learn-more" style="background: var(--gradient-blue);">
                            <span>Discover Service</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white">
                                <path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!--==================================================-->
<!-- End PSM Service Area Style Three-->
<!--==================================================-->

<!--==================================================-->
<!-- Start Manufacturer Certifications-->
<!--==================================================-->
<div class="contact-area style-three manufacturer-certifications">
    <div class="container">
        <div class="row add-white-bg align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="single-contact-box">
                    <div class="contact-contetn">
                        <h1><?php the_field('logo_img_head');  ?></h1>
                    </div>
                    <p><?php the_field('logo_img_text');  ?></p>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <?php
                echo do_shortcode('[custom_post_type_shortcode attribute_name="some_value"]');
                ?>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Manufacturer Certifications-->
<!--==================================================-->

<!--==================================================-->
<!-- Start Psmtech Experience-->
<!--==================================================-->
<div class="contact-area style-three">
    <div class="container">
        <div class="row add-white-bg align-items-center">
            <div class="col-lg-3 col-md-12">
                <div class="single-contact-box">
                    <div class="contact-contetn">
                        <h1><?php the_field('psmtech_experience_head');  ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <?php
                    // The Query
                $the_query = new \WP_Query($args = array(
                   'post_type' => 'psm-tech-experience',
                   'order'            => 'ASC',
               ) );
                    // The Loop
                if ( $the_query->have_posts() ) {
                 while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class="row" style="padding: 20px 0 20px 0;">
                        <div class="col-md-3 mobile-45">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="object-fit: contain; padding: 5px; border-right: 1px solid #ee1b25;" width="180" height="130" class="img-fluid" alt="<?php echo get_the_title(); ?>">
                        </div>
                        <div class="col-md-9 mobile-55">
                            <?php
                            $gallery = get_post_gallery( get_the_ID(), false );

                            if ( !empty( $gallery['ids'] ) ) {
                             $ids = explode( ',', $gallery['ids'] );
                             ?>

                             <ul class="experience-logoSlide experience-images">

                                <?php
                                foreach ( $ids as $id ) {
                                 $img_url = wp_get_attachment_url( $id );
                                 $alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
                                 ?>
                                 <li style="display: flex; justify-content: center;">
                                     <img class="experience-img" style="object-fit: contain; padding: 5px;" width="180" height="130" loading="lazy" src="<?php echo esc_url( $img_url ); ?>" alt="gallery-img">
                                 </li>
                                 <?php
                             }
                             ?>
                         </ul>
                     <?php } ?>
                 </div>
             </div>
             <?php
         }                 

     } else {
    // no posts found
     }
     /* Restore original Post Data */
     wp_reset_postdata();
     ?> 

 </div>
</div>
</div>
</div>
<!--==================================================-->
<!-- End Psmtech Experience-->
<!--==================================================-->

<!--==================================================-->
<!-- End Psmtech Channel Partners-->
<!--==================================================-->
<div class="contact-area style-three channel-partners">
    <div class="container">
        <div class="row add-white-bg align-items-center">
            <h1><?php the_field('psmtech_channel_partner_head');  ?></h1>
            <div class="col-lg-12 col-md-12">
                <?php the_field('psmtech_channel_partner_icon'); ?>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Psmtech Channel Partners-->
<!--==================================================-->

<!--==================================================-->
<!-- Start Client Section-->
<!--==================================================-->
<section class="clients-section">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('client_section_heading')) :
              while (have_rows('client_section_heading')) : the_row();
                $sub_title = get_sub_field('sub_title'); 
                $heading = get_sub_field('heading');
                ?>
                <div class="col-lg-6">
                  <div class="section-title style-two">
                    <h4><?php echo $sub_title; ?></h4>
                    <h1><?php echo $heading; ?></h1>
                </div>
            </div>
            <div class="col-lg-6 client-btn">
                <?php
                $page_link = get_sub_field('more_client_page_link');
                ?>

                <div class="button-group" style="justify-content: flex-end;">
                    <a href="<?php echo esc_url($page_link); ?>" class="primary-button">
                        Our Clients                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <?php
        endwhile; 
    endif; 
    ?>
</div>

<?php
// The Query
$the_query = new \WP_Query($args = array(
   'post_type' => 'our-clients',
   'order'            => 'ASC',
   'posts_per_page' => 12, 
) );
?>
<div class="clients-container">
    <?php
                    // The Loop
    if ( $the_query->have_posts() ) {
     while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <a href="<?php echo esc_url(the_field('client_site_link')) ?>" target="_blank">                
            <div class="client-card">
              <h4><?php echo get_the_title(); ?></h4>
              <p><?php the_field('client_address'); ?></p>
          </div>
      </a>
      

      <?php
  }                 

} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?> 
</div>
</div>
</section>
<!--==================================================-->
<!-- End Client Section-->
<!--==================================================-->



</div>
<!--site-main end-->

<script type="text/javascript">
    $(document).ready(function() {


        /*Banner Slider*/
        $('.homeBannerInner').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,
            arrows: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });        


        
        jQuery(document).ready(function($) {
          $('.logo-Slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    },
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
    }
}
]
});
      });



        $('.experience-images').slick({
            autoplay: true,
            autoplaySpeed: 2500,
            infinite: true,
            dots: false,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                  breakpoint: 320,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

        /*Blog Slider*/

        $('.blog_slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });


        /*Blog Text Height*/
        var h3height = 0;
        $('.blogText21').each(function() {
            if(h3height < $(this).height()){
                h3height = $(this).height();
            };
        });
        $('.blogText21').height(h3height);


        /*Protfolio Tab Filter*/
        $('.portfolio-tab a').on('click', function(e) {
            e.preventDefault();

            var filterValue = $(this).data('filter');

            $('.project_item').each(function() {
                var projectItemValue = $(this).data('match');
                var valuesArray = projectItemValue.split(' ');

                if (filterValue === "all" || valuesArray.includes(filterValue)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        /*product-des-height*/
        var h3height = 0;
        jQuery('.product_home_description').each(function() {
            if(h3height < $(this).height()){
                h3height = $(this).height();
            };
        });
        jQuery('.product_home_description').height(h3height);


        document.querySelectorAll('.portfolio-tab').forEach(tab => {
          tab.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');
            document.querySelectorAll('.item').forEach(item => {
              if (filter === 'all' || item.classList.contains(filter)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });

    // Set active class
            document.querySelectorAll('.portfolio-tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
      });


    })
</script>