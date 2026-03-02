<div class="site-main">
<section>
  <?php if( have_rows('service_banner') ): ?>
    <?php while( have_rows('service_banner') ): the_row(); ?>

      <?php 
            // Get sub field values.
      $banner_main = get_sub_field('banner_img');
      $banner_text = get_sub_field('banner_text');
      ?> 

      <div class="inng-page-title-row style2">
        <div class="inng-page-title-row-inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 me-auto">
                <div class="inng-page-title-row-heading">
                  <div class="page-title-heading">                    
                    <h2 class="title postTitle"><?php the_title(); ?></h2>                                
                  </div>
                  <div class="page-title-description">                                
                    <p><?php echo $banner_text; ?></p>
                  </div>
                </div>
              </div>    
              <div class="col-xl-4 col-lg-4 col-md-10 col-sm-12 me-auto">
                <div class="inng-page-title-row-heading mobile">
                    <div class="banner-vertical-block">
                        <img src="<?php echo $banner_main ?>" style="background-repeat: no-repeat;
                background-size: cover;
                background-position: center center; object-fit: contain;">
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>                    
    </div>
  <?php endwhile; ?>
<?php endif; ?>
</section>


<!--site-main start-->
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
                $detail_page_link = get_field('detail_page_link');
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


                        <a href="<?php echo the_permalink(); ?>" class="service-learn-more" style="background: var(--gradient-blue);">
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
</div>