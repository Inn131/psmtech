<!--site-main start-->
<div class="site-main">
    <section>
        <?php if( have_rows('product_banner') ): ?>
            <?php while( have_rows('product_banner') ): the_row(); ?>

                <?php 
            // Get sub field values.
                $banner_main = get_sub_field('banner_img');
                $banner_text = get_sub_field('banner_text');
                ?> 
                <div class="inng-page-title-row style2 pt-2">
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

                            <div class="button-group mb-3">
                                <a href="#" class="primary-button" id="scroll-popup-btn">
                                    Schedule A Meeting                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
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
<!--product-section-->
<section class="ai-product-showcase">
    <div class="container">
        <!-- Section Header -->
        <div class="ai-header">
            <?php if (have_rows('our_service_home')) : ?>
                <?php while (have_rows('our_service_home')) : the_row(); ?>
                    <h2 class="ai-title"><?php echo esc_html(get_sub_field('our_service_head')); ?></h2>
                    <div class="vibrant-divider">
                        <div class="divider-dot"></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- Product List -->
        <div class="ai-product-list">
            <?php 
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'date'
            );
            $product_query = new WP_Query($args);
            
            if ($product_query->have_posts()) : 
                while ($product_query->have_posts()) : $product_query->the_post();
                    $product_image = get_field('product_home_image');
                    $description = get_field('product_home_description');
                    $product_home_feature_list_1 = get_field('product_home_feature_list_1');
                    $product_home_feature_list_2 = get_field('product_home_feature_list_2');
                    $product_home_feature_list_3 = get_field('product_home_feature_list_3');
                    $product_home_feature_list_4 = get_field('product_home_feature_list_4');
                    ?>
                    <div class="ai-product-card">
                        <div class="ai-card-content">
                            <div class="content-wrapper">
                                <h3><?php the_title(); ?></h3>
                                <div class="animated-underline"></div>
                                <p class="ai-card-description"><?php echo wp_kses_post($description); ?></p>
                                
                                <div class="ai-features">
                                    <?php if(!empty($product_home_feature_list_1)): ?>
                                        <div class="ai-feature-item">
                                            <div class="ai-feature-icon" style="background: var(--light-blue);">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--base-blue)">
                                                    <path d="M5 12l5 5L20 7" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span><?php echo $product_home_feature_list_1; ?></span>
                                        </div>
                                    <?php endif; ?>                                    
                                    <?php if(!empty($product_home_feature_list_2)): ?>
                                        <div class="ai-feature-item">
                                            <div class="ai-feature-icon" style="background: var(--light-blue);">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--base-blue)">
                                                    <path d="M5 12l5 5L20 7" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span><?php echo $product_home_feature_list_2; ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($product_home_feature_list_3)): ?>
                                        <div class="ai-feature-item">
                                            <div class="ai-feature-icon" style="background: var(--light-blue);">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--base-blue)">
                                                    <path d="M5 12l5 5L20 7" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span><?php echo $product_home_feature_list_3; ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($product_home_feature_list_4)): ?>
                                        <div class="ai-feature-item">
                                            <div class="ai-feature-icon" style="background: var(--light-blue);">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--base-blue)">
                                                    <path d="M5 12l5 5L20 7" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <span><?php echo $product_home_feature_list_4; ?></span>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="ai-learn-more" style="background: var(--gradient-blue);">
                                    <span>Learn More</span>
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white">
                                        <path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <div class="ai-card-image">
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($product_image); ?>" alt="<?php the_title(); ?>">
                                <div class="image-highlight" style="background: var(--gradient-blue);"></div>
                                <div class="floating-dots"></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; 
            else : ?>
                <p class="no-products">No products found</p>
            <?php endif; 
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!--product-section end-->
</div>