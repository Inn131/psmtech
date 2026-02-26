<?php 
get_header(); 
$post_id = get_the_ID();
?>

<!-- page-title -->
<?php 
if (have_rows('portfolios_details')) :
    while (have_rows('portfolios_details')) : the_row(); // Added 'the_row()' function
    	$portfolios_banner_image = get_sub_field('portfolios_banner_image'); 
    	$portfolios_banner_text = get_sub_field('portfolios_banner_text');
?>
		<div class="inng-page-title-row style2" style="background: url(<?php echo $portfolios_banner_image; ?>); background-position: center; background-size: cover;">
		    <div class="inng-page-title-row-inner">
		        <div class="container">
		            <div class="row align-items-center">
		                <div class="col-xl-7 col-lg-8 col-md-10 col-sm-12 me-auto">
		                    <div class="inng-page-title-row-heading">
		                        <div class="banner-vertical-block"></div>
		                        <div class="page-title-heading">
		                            <h2 class="title postTitle"><?php the_title(); ?></h2>
		                            <p><?php echo $portfolios_banner_text; ?></p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>                    
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<!-- page-title end-->
	
	<!--site-main start-->
<div class="site-main">
	<!-- sidebar -->
    <div class="inng-row sidebar inng-sidebar-left inng-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
	            <div class="col-md-8 protfoliDetailsLeft1 inng-box-col-wrapper project_item" data-match="<?php echo esc_attr($category_classes); ?>">
	                <!-- featured-imagebox-portfolio -->
	                <div class="featured-imagebox featured-imagebox-portfolio style1">
	                    <!-- featured-thumbnail -->
	                    <div class="featured-thumbnail"> 
	                        <img style="height: 310px; width: 100%; object-fit: cover;" class="img-fluid" src="<?php the_field('protfolios_image'); ?>" alt="image"> 
	                    </div>
	                    <?php if( have_rows('portfolios_details_content') ): ?>
                                <?php while( have_rows('portfolios_details_content') ): the_row(); ?>
                                    <?php
                                        $portfolio_details_text = get_sub_field('portfolio_details_text');
                                    ?>
                                    <div style="padding-top: 10px;" class="PortfolioDetailsContent1"><?php echo $portfolio_details_text; ?></div>
                                    <?php
                                endwhile;
                            endif;
                        ?>
	                </div><!-- featured-imagebox-portfolio end-->
	            </div>
	            <div class="col-md-4  widget-area sidebar-right widget_border">
	            	<aside class="widget widget-recent-post with-title widget-nav-menu">
                        <h3 class="widget-title">More Portfolio</h3>
                        <ul class="widget-post inng-recent-post-list widget-menu">
                        	<?php 
							    $query_args = array( 
							        'category__in'   => $cat_ids,
							        'post_type'      => 'portfolios',
							        'posts_per_page'  => '-1',
							        'post__not_in'    => array($post_id),
							        'order'           => 'ASC'
							    );
							    $related_cats_post = new WP_Query( $query_args );
							    if($related_cats_post->have_posts()):?>
							        <?php
							        while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
							        	<li class="moreServiceLinkMain PortfolioDetailsList1" data-name="<?php the_title(); ?>"><a class="moreServiceLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				        		<?php endwhile;
						        wp_reset_postdata();?>
						    <?php endif;?>
                        </ul>
                    </aside>
	            </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->   
</div>
<!--site-main end-->
<?php get_footer(); ?>