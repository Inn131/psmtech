<?php 
get_header(); 
$post_id = get_the_ID();
?>

<!--site-main start-->
<div class="site-main">
<!-- page-title -->
<?php 
if (have_rows('servive_details_banner_section')) :
    while (have_rows('servive_details_banner_section')) : the_row(); // Added 'the_row()' function
    $servive_details_banner_image = get_sub_field('servive_details_banner_image'); 
    $servive_details_banner_description = get_sub_field('servive_details_banner_description');
    $service_logo_image = get_field('service_logo_image');
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
    							<p><?php echo $servive_details_banner_description; ?></p>
    						</div>
    					</div>
    				</div>    
    				<div class="col-xl-4 col-lg-4 col-md-10 col-sm-12 me-auto" style="display: flex; justify-content: center;">
    					<div class="inng-page-title-row-heading mobile">
    						<div class="banner-vertical-block">
    							<img src="<?php echo $servive_details_banner_image ?>" alt="service-img" style="height: 150px;">
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


<!--==================================================-->
<!-- Strat Toptech Service Details Area -->
<!--==================================================-->
<div class="services-details-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-12">
						<?php 
						if (have_rows('service_details_right_section')) :
				    while (have_rows('service_details_right_section')) : the_row(); // Added 'the_row()' function
				    $service_details_right_image = get_sub_field('service_details_right_image'); 
				    $service_details_right_head = get_sub_field('service_details_right_head'); 
				    $service_details_right_text = get_sub_field('service_details_right_text'); 
				    $service_details_right_list = get_sub_field('service_details_right_list'); 
				    $service_details_last_head = get_sub_field('service_details_last_head'); 
				    $service_details_last_text = get_sub_field('service_details_last_text'); 
				    ?>
				    <div class="services-details-thumb">
				    	<img src="<?php echo $service_details_right_image; ?>" alt="Service-image">
				    </div>
				    <div class="services-details-content">
				    	<?php if (!empty($service_details_right_head)) : ?>
				    		<h4 class="services-details-title"><?php echo $service_details_right_head; ?></h4>
				    	<?php endif; ?>
				    </div>
				    <!-- inng-service-classic-content -->
				    <div class="inng-service-classic-content">
				    	<?php if (!empty($service_details_right_text)) : ?>
				    		<p class="services-details-desc"><?php echo $service_details_right_text; ?></p>
				    	<?php endif; ?>
				    	<?php if (!empty($service_details_right_list)) : ?>
				    		<div class="row services-details-text">
				    			<div class="col-md-12">
				    				<?php echo $service_details_right_list; ?>
				    			</div>
				    		</div>
				    	<?php endif; ?>
				    	<div class="pt-10 services-details-title">
				    		<?php if (!empty($service_details_last_head)) : ?>
				    			<h2><?php echo $service_details_last_head; ?></h2>
				    		<?php endif; ?>
				    		<?php if (!empty($service_details_last_text)) : ?>
				    			<p class="services-details-desc"><?php echo $service_details_last_text; ?></p>
				    		<?php endif; ?>
				    	</div>
				    </div><!-- inng-service-classic-content end -->

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="col-lg-4">
	<div class="row">
		<div class="col-lg-12">
			<div class="widget-sidber">
				<div class="widget-sidber-content">
					<h4>Our Services</h4>
				</div>
				<div class="widget-category">
					<ul>
						<?php 
						$post_id = get_the_ID();
						$cat_ids = array();
						$categories = get_the_category( $post_id );
						if(!empty($categories) && !is_wp_error($categories)):
							foreach ($categories as $category):
								array_push($cat_ids, $category->term_id);
							endforeach;
						endif;
						$current_post_type = get_post_type($post_id);
						$query_args = array( 
							'category__in'   => $cat_ids,
							'post_type'      => $current_post_type,
							'posts_per_page'  => '-1',
							'order'           => 'DESC'
						);
						$related_cats_post = new WP_Query( $query_args );
						if($related_cats_post->have_posts()):?>
							<?php
							while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
								<li class="moreServiceLinkMain" data-name="<?php the_title(); ?>"><a class="moreServiceLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile;
							wp_reset_postdata();?>
						<?php endif;?>
					</ul>
				</div>
			</div>						
			<div class="widget-sidber-contact-box">
				<div class="widget-sidber-contact">
					<i class="fa fa-phone"></i>
				</div>
				<?php
				$field_key = "field_65fdc9b8623b6";
				$phone_number = get_field_object($field_key);    
				if( $phone_number ): ?> 
					<p class="widget-sidber-contact-text">Call Us Anytime</p>
					<h3 class="widget-sidber-contact-number"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo $phone_number['value']; ?>"><?php echo $phone_number['value']; ?></a></h3>
				<?php endif; ?>
				<?php
				$field_key = "field_65fdcab8ef6a7";
				$email_address = get_field_object($field_key);    
				if( $email_address ): ?> 
					<span class="widget-sidber-contact-gmail"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $email_address['value']; ?>"><?php echo $email_address['value']; ?></a></span>
				<?php endif; ?>

				<div class="button-group mt-3">
					<a href="https://psmtech.com/contact-us/" target="_blank" class="primary-button" >
						Contact Us                                                   <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</a>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!--==================================================-->
<!-- End Toptech Service Details Area -->
<!--==================================================-->



</div>
<!--site-main end-->
<script type="text/javascript">
	
	jQuery(document).ready(function() {
		var postTitleText = jQuery('.postTitle').text();
    // alert(postTitleText);

		jQuery('.moreServiceLinkMain').each(function() {
			var serviceName = $(this).data('name'); 
        //alert(serviceName);
        //alert(serviceName == postTitleText);

			if (serviceName == postTitleText) {
            $(this).addClass('active'); // Add class to the current element inside the loop
        }
    });
	});



</script>
<?php get_footer(); ?>
