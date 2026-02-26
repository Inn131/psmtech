<?php 
get_header(); 
$post_id = get_the_ID();
?>
<!--site-main start-->
<div class="site-main">
<!-- page-title -->
<?php 
if (have_rows('product_details_banner_section')) :
    while (have_rows('product_details_banner_section')) : the_row(); // Added 'the_row()' function
    $product_details_banner_images = get_sub_field('product_details_banner_images'); 
    $product_details_banner_text = get_sub_field('product_details_banner_text');
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
    							<p><?php echo $product_details_banner_text; ?></p>
    						</div>
    					</div>
    				</div>    
    				<div class="col-xl-4 col-lg-4 col-md-10 col-sm-12 me-auto mobile" style="display: flex; justify-content: center;">
    					<div class="inng-page-title-row-heading mobile">
    						<div class="banner-vertical-block">
    							<img src="<?php echo $product_details_banner_images ?>" alt="product-img" style="height: 150px;">
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


<!-- sidebar -->
<!--==================================================-->
<!-- Strat Toptech Service Details Area -->
<!--==================================================-->
<div class="services-details-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-12">
						<!-- Only For Bank Reconcile Table Start-->
						<?php if (have_rows('detail_page_table_data')) :
							while (have_rows('detail_page_table_data')) : the_row();
								$table_data = get_sub_field('table_data');
								if($table_data === 'Yes'){
									?>
									<div class="wcu-inner-wrapper">
										<div class="row d-flex align-items-center">

											<div class="col-xl-12 col-lg-12 bank-reconcile-data-table wow fadeInUp">
												<?php
												$data = [
													[
														'date' => '09/22 Mon',
														'room_revenue' => '$2,450.00',
														'pms_visa_mc' => '$1,800.00',
														'pms_amex' => '$400.00',
														'direct_bill' => '$250.00',
														'bank_visa_mc' => '$1,800.00',
														'bank_amex' => '$400.00',
														'merchant_amex' => '$0.00',
														'status' => 'matched',
														'details' => [
															'PMS Deposit Date: 12 Sep 2025',
															'Bank Deposit Date: 12 Sep 2025'
														]
													],
													[
														'date' => '09/23 Tues',
														'room_revenue' => '$3,000.00',
														'pms_visa_mc' => '$2,200.00',
														'pms_amex' => '$600.00',
														'direct_bill' => '$200.00',
														'bank_visa_mc' => '$2,100.00',
														'bank_amex' => '$500.00',
														'merchant_amex' => '$0.00',
														'status' => 'unmatched',
														'details' => [
															'PMS Deposit Date: 11 Sep 2025',
															'<br>Bank Deposit Date: 12 Sep 2025',
															'Smart Suggestion: Possible delay in Visa settlement'
														]
													],
													[
														'date' => '09/25 Wed',
														'room_revenue' => '$1,750.00',
														'pms_visa_mc' => '$1,300.00',
														'pms_amex' => '$350.00',
														'direct_bill' => '$100.00',
														'bank_visa_mc' => '--',
														'bank_amex' => '--',
														'merchant_amex' => '--',
														'status' => 'pending',
														'details' => [
															'PMS Deposit Date: 10 Sep 2025',
															'Bank Deposit: Pending'
														]
													]
												];

												$status_map = [
													'matched' => ['label' => '✅ Matched', 'class' => 'matched'],
													'unmatched' => ['label' => '❌ Unmatched', 'class' => 'unmatched'],
													'pending' => ['label' => '⏳ In Process', 'class' => 'pending'],
												];
												?>

												<div class="transaction-table-box" style="overflow: auto;">
													<table class="transaction-table">
														<thead>
															<tr>
																<th>Date</th>
																<th>Room Revenue</th>
																<th>PMS Visa <br>+ DS + MC</th>
																<th>PMS Amex</th>
																<th>Direct Bill</th>
																<th>Bank Visa <br> + DS + MC</th>
																<th>Bank Amex</th>
																<th>Merchant <br>Amex</th>
																<th>Status</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($data as $row): ?>
																<tr class="<?php echo $status_map[$row['status']]['class']; ?>">
																	<td><?php echo $row['date']; ?></td>
																	<td><?php echo $row['room_revenue']; ?></td>
																	<td><?php echo $row['pms_visa_mc']; ?></td>
																	<td><?php echo $row['pms_amex']; ?></td>
																	<td><?php echo $row['direct_bill']; ?></td>
																	<td><?php echo $row['bank_visa_mc']; ?></td>
																	<td><?php echo $row['bank_amex']; ?></td>
																	<td><?php echo $row['merchant_amex']; ?></td>
																	<td><?php echo $status_map[$row['status']]['label']; ?></td>
																</tr>
																<tr class="details">
																	<td colspan="9">
																		<div class="details-slide">
																			<!-- Your details content here -->
																			<?php echo implode(' | ', $row['details']); ?>
																		</div>
																	</td>
																</tr>
															<?php endforeach; ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							<?php endwhile; ?>
						<?php endif; ?>
						<!-- Only For Bank Reconcile Table Start-->
						<?php if (have_rows('product_details_right_section')) :
				    while (have_rows('product_details_right_section')) : the_row(); // Added 'the_row()' function
				    $product_details_right_side_1st_image = get_sub_field('product_details_right_side_1st_image');
				    $product_details_right_side_1st_head = get_sub_field('product_details_right_side_1st_head');
				    $product_details_right_side_1st_text = get_sub_field('product_details_right_side_1st_text');
				    $product_details_right_side_2nd_content = get_sub_field('product_details_right_side_2nd_content');
				    $product_details_right_side_2nd_image = get_sub_field('product_details_right_side_2nd_image');
				    $product_details_right_side_3rd_content = get_sub_field('product_details_right_side_3rd_content');
				    $product_details_right_side_3nd_image = get_sub_field('product_details_right_side_3nd_image');
				    $product_details_right_side_2nd_content_extra = get_sub_field('product_details_right_side_2nd_content_extra');
				        //$product_detailsextra_text = get_sub_field('product_detailsextra_text');
				    ?>
				    <?php if (!empty($product_details_right_side_1st_image)) : ?>
				    	<div class="services-details-thumb">
				    		<img src="<?php echo $product_details_right_side_1st_image; ?>" alt="Service-image">
				    	</div>
				    <?php endif; ?>

				    <?php 
				    if (have_rows('ota_page_content')) :
				    while (have_rows('ota_page_content')) : the_row(); // Added 'the_row()' function
				    $ota_timeline_content = get_sub_field('ota_timeline_content');
				    if($ota_timeline_content == 'Yes')
				    {
				    ?>
				    <section class="timeline-container section-padding">
				    	<div class="timeline">
				    		<!-- first_timeline START-->
				    		<?php
				    		if (have_rows('first_timeline')) :
				    			while (have_rows('first_timeline')) : the_row(); 


				    				$first_timeline_main_title = get_sub_field('main_title');
				    				$first_timeline_title = get_sub_field('title');
				    				$first_timeline_description = get_sub_field('description');
				    				$first_timeline_list_one = get_sub_field('list_one');
				    				$first_timeline_list_two = get_sub_field('list_two');
				    				$first_timeline_list_three = get_sub_field('list_three');
				    				$first_timeline_list_four = get_sub_field('list_four');
				    				$first_timeline_image = get_sub_field('image');
				    				?>
				    				<div class="timeline-card visible">
				    					<div class="timeline-card-content">
				    						<div class="timeline-card-icon">
				    							<i class="fas fa-long-arrow-alt-left"></i>
				    						</div>
				    						<p class="timeline-card-subtitle"><?php echo $first_timeline_title; ?></p>
				    						<p class="timeline-card-description"><?php echo $first_timeline_description; ?></p>
				    						<ul class="timeline-feature-list">
				    							<?php if(!empty($first_timeline_list_one)){ ?>

				    								<li><?php echo $first_timeline_list_one; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($first_timeline_list_two))
				    							{
				    								?>
				    								<li><?php echo $first_timeline_list_two; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($first_timeline_list_three))
				    							{
				    								?>
				    								<li><?php echo $first_timeline_list_three; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($first_timeline_list_four))
				    							{
				    								?>
				    								<li><?php echo $first_timeline_list_four; ?></li>
				    							<?php } ?>

				    						</ul>
				    					</div>
				    					<div class="timeline-card-head">
				    						<h3 class="timeline-card-title"><?php echo $first_timeline_main_title; ?></h3> 
				    						<img src="<?php echo esc_url($first_timeline_image); ?>" alt="<?php echo $first_timeline_main_title; ?>">                   
				    					</div>
				    				</div>
				    			<?php endwhile; ?>
				    		<?php endif; ?>
				    		<!-- first_timeline END-->

				    		<!-- second_timeline START-->
				    		<?php
				    		if (have_rows('second_timeline')) :
				    			while (have_rows('second_timeline')) : the_row(); 

				    				$second_timeline_main_title = get_sub_field('main_title');
				    				$second_timeline_title = get_sub_field('title');
				    				$second_timeline_description = get_sub_field('description');
				    				$second_timeline_list_one = get_sub_field('list_one');
				    				$second_timeline_list_two = get_sub_field('list_two');
				    				$second_timeline_list_three = get_sub_field('list_three');
				    				$second_timeline_list_four = get_sub_field('list_four');
				    				$second_timeline_image = get_sub_field('image');
				    				?>
				    				<div class="timeline-card visible">
				    					<div class="timeline-card-content">
				    						<div class="timeline-card-icon">
				    							<i class="fas fa-long-arrow-alt-left"></i>
				    						</div>
				    						<p class="timeline-card-subtitle"><?php echo $second_timeline_title; ?></p>
				    						<p class="timeline-card-description"><?php echo $second_timeline_description; ?></p>
				    						<ul class="timeline-feature-list">
				    							<?php if(!empty($second_timeline_list_one)){ ?>

				    								<li><?php echo $second_timeline_list_one; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($second_timeline_list_two))
				    							{
				    								?>
				    								<li><?php echo $second_timeline_list_two; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($second_timeline_list_three))
				    							{
				    								?>
				    								<li><?php echo $second_timeline_list_three; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($second_timeline_list_four))
				    							{
				    								?>
				    								<li><?php echo $second_timeline_list_four; ?></li>
				    							<?php } ?>

				    						</ul>
				    					</div>
				    					<div class="timeline-card-head">
				    						<h3 class="timeline-card-title"><?php echo $second_timeline_main_title; ?></h3> 
				    						<img src="<?php echo esc_url($second_timeline_image); ?>" alt="<?php echo $second_timeline_main_title; ?>">                   
				    					</div>
				    				</div>
				    			<?php endwhile; ?>
				    		<?php endif; ?>
				    		<!-- second_timeline END-->

				    		<!-- third_timeline START-->
				    		<?php
				    		if (have_rows('third_timeline')) :
				    			while (have_rows('third_timeline')) : the_row(); 

				    				$third_timeline_main_title = get_sub_field('main_title');
				    				$third_timeline_title = get_sub_field('title');
				    				$third_timeline_description = get_sub_field('description');
				    				$third_timeline_list_one = get_sub_field('list_one');
				    				$third_timeline_list_two = get_sub_field('list_two');
				    				$third_timeline_list_three = get_sub_field('list_three');
				    				$third_timeline_list_four = get_sub_field('list_four');
				    				$third_timeline_image = get_sub_field('image');
				    				?>
				    				<div class="timeline-card visible">
				    					<div class="timeline-card-content">
				    						<div class="timeline-card-icon">
				    							<i class="fas fa-long-arrow-alt-left"></i>
				    						</div>
				    						<p class="timeline-card-subtitle"><?php echo $third_timeline_title; ?></p>
				    						<p class="timeline-card-description"><?php echo $third_timeline_description; ?></p>
				    						<ul class="timeline-feature-list">
				    							<?php if(!empty($third_timeline_list_one)){ ?>

				    								<li><?php echo $third_timeline_list_one; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($third_timeline_list_two))
				    							{
				    								?>
				    								<li><?php echo $third_timeline_list_two; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($third_timeline_list_three))
				    							{
				    								?>
				    								<li><?php echo $third_timeline_list_three; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($third_timeline_list_four))
				    							{
				    								?>
				    								<li><?php echo $third_timeline_list_four; ?></li>
				    							<?php } ?>

				    						</ul>
				    					</div>
				    					<div class="timeline-card-head">
				    						<h3 class="timeline-card-title"><?php echo $third_timeline_main_title; ?></h3> 
				    						<img src="<?php echo esc_url($third_timeline_image); ?>" alt="<?php echo $third_timeline_main_title; ?>">                   
				    					</div>
				    				</div>
				    			<?php endwhile; ?>
				    		<?php endif; ?>
				    		<!-- third_timeline END-->
				    		<!-- fourth_timeline START-->
				    		<?php
				    		if (have_rows('fourth_timeline')) :
				    			while (have_rows('fourth_timeline')) : the_row(); 

				    				$fourth_timeline_main_title = get_sub_field('main_title');
				    				$fourth_timeline_title = get_sub_field('title');
				    				$fourth_timeline_description = get_sub_field('description');
				    				$fourth_timeline_list_one = get_sub_field('list_one');
				    				$fourth_timeline_list_two = get_sub_field('list_two');
				    				$fourth_timeline_list_three = get_sub_field('list_three');
				    				$fourth_timeline_list_four = get_sub_field('list_four');
				    				$fourth_timeline_image = get_sub_field('image');
				    				?>
				    				<div class="timeline-card visible">
				    					<div class="timeline-card-content">
				    						<div class="timeline-card-icon">
				    							<i class="fas fa-long-arrow-alt-left"></i>
				    						</div>
				    						<p class="timeline-card-subtitle"><?php echo $fourth_timeline_title; ?></p>
				    						<p class="timeline-card-description"><?php echo $fourth_timeline_description; ?></p>
				    						<ul class="timeline-feature-list">
				    							<?php if(!empty($fourth_timeline_list_one)){ ?>

				    								<li><?php echo $fourth_timeline_list_one; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($fourth_timeline_list_two))
				    							{
				    								?>
				    								<li><?php echo $fourth_timeline_list_two; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($fourth_timeline_list_three))
				    							{
				    								?>
				    								<li><?php echo $fourth_timeline_list_three; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($fourth_timeline_list_four))
				    							{
				    								?>
				    								<li><?php echo $fourth_timeline_list_four; ?></li>
				    							<?php } ?>

				    						</ul>
				    					</div>
				    					<div class="timeline-card-head">
				    						<h3 class="timeline-card-title"><?php echo $fourth_timeline_main_title; ?></h3> 
				    						<img src="<?php echo esc_url($fourth_timeline_image); ?>" alt="<?php echo $fourth_timeline_main_title; ?>">                   
				    					</div>
				    				</div>
				    			<?php endwhile; ?>
				    		<?php endif; ?>
				    		<!-- fourth_timeline END-->

				    		<!-- fifth_timeline START-->
				    		<?php
				    		if (have_rows('fifth_timeline')) :
				    			while (have_rows('fifth_timeline')) : the_row(); 

				    				$fifth_timeline_main_title = get_sub_field('main_title');
				    				$fifth_timeline_title = get_sub_field('title');
				    				$fifth_timeline_description = get_sub_field('description');
				    				$fifth_timeline_list_one = get_sub_field('list_one');
				    				$fifth_timeline_list_two = get_sub_field('list_two');
				    				$fifth_timeline_list_three = get_sub_field('list_three');
				    				$fifth_timeline_list_four = get_sub_field('list_four');
				    				$fifth_timeline_image = get_sub_field('image');
				    				?>
				    				<div class="timeline-card visible">
				    					<div class="timeline-card-content">
				    						<div class="timeline-card-icon">
				    							<i class="fas fa-long-arrow-alt-left"></i>
				    						</div>
				    						<p class="timeline-card-subtitle"><?php echo $fifth_timeline_title; ?></p>
				    						<p class="timeline-card-description"><?php echo $fifth_timeline_description; ?></p>
				    						<ul class="timeline-feature-list">
				    							<?php if(!empty($fifth_timeline_list_one)){ ?>

				    								<li><?php echo $fifth_timeline_list_one; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($fifth_timeline_list_two))
				    							{
				    								?>
				    								<li><?php echo $fifth_timeline_list_two; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($fifth_timeline_list_three))
				    							{
				    								?>
				    								<li><?php echo $fifth_timeline_list_three; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($fifth_timeline_list_four))
				    							{
				    								?>
				    								<li><?php echo $fifth_timeline_list_four; ?></li>
				    							<?php } ?>

				    						</ul>
				    					</div>
				    					<div class="timeline-card-head">
				    						<h3 class="timeline-card-title"><?php echo $fifth_timeline_main_title; ?></h3> 
				    						<img src="<?php echo esc_url($fifth_timeline_image); ?>" alt="<?php echo $fifth_timeline_main_title; ?>">                   
				    					</div>
				    				</div>
				    			<?php endwhile; ?>
				    		<?php endif; ?>
				    		<!-- fifth_timeline END-->

				    		<!-- sixth_timeline START-->
				    		<?php
				    		if (have_rows('sixth_timeline')) :
				    			while (have_rows('sixth_timeline')) : the_row(); 

				    				$sixth_timeline_main_title = get_sub_field('main_title');
				    				$sixth_timeline_title = get_sub_field('title');
				    				$sixth_timeline_description = get_sub_field('description');
				    				$sixth_timeline_list_one = get_sub_field('list_one');
				    				$sixth_timeline_list_two = get_sub_field('list_two');
				    				$sixth_timeline_list_three = get_sub_field('list_three');
				    				$sixth_timeline_list_four = get_sub_field('list_four');
				    				$sixth_timeline_image = get_sub_field('image');
				    				?>
				    				<div class="timeline-card visible">
				    					<div class="timeline-card-content">
				    						<div class="timeline-card-icon">
				    							<i class="fas fa-long-arrow-alt-left"></i>
				    						</div>
				    						<p class="timeline-card-subtitle"><?php echo $sixth_timeline_title; ?></p>
				    						<p class="timeline-card-description"><?php echo $sixth_timeline_description; ?></p>
				    						<ul class="timeline-feature-list">
				    							<?php if(!empty($sixth_timeline_list_one)){ ?>

				    								<li><?php echo $sixth_timeline_list_one; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($sixth_timeline_list_two))
				    							{
				    								?>
				    								<li><?php echo $sixth_timeline_list_two; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($sixth_timeline_list_three))
				    							{
				    								?>
				    								<li><?php echo $sixth_timeline_list_three; ?></li>
				    								<?php 
				    							} 
				    							if(!empty($sixth_timeline_list_four))
				    							{
				    								?>
				    								<li><?php echo $sixth_timeline_list_four; ?></li>
				    							<?php } ?>

				    						</ul>
				    					</div>
				    					<div class="timeline-card-head">
				    						<h3 class="timeline-card-title"><?php echo $sixth_timeline_main_title; ?></h3> 
				    						<img src="<?php echo esc_url($sixth_timeline_image); ?>" alt="<?php echo $sixth_timeline_main_title; ?>">                   
				    					</div>
				    				</div>
				    			<?php endwhile; ?>
				    		<?php endif; ?>
				    		<!-- sixth_timeline END-->
				    	</div>
				    </section>
				<?php } ?>

				<?php endwhile; ?>
			<?php endif; ?>



			<div class="services-details-content">
				<?php if (!empty($product_details_right_side_1st_head)) : ?>
					<h4 class="services-details-title"><?php echo $product_details_right_side_1st_head; ?></h4>
				<?php endif; ?>
				<?php if (!empty($product_details_right_side_1st_text)) : ?>
					<p class="services-details-desc"><?php echo $product_details_right_side_1st_text; ?></p>
				<?php endif; ?>
			</div>
<!-- inng-service-classic-content -->
<div class="inng-service-classic-content">
	<div class="row">

		<?php if (!empty($product_details_right_side_2nd_content)) : ?>
			<div class="col-md-7">

				<?php echo $product_details_right_side_2nd_content; ?>
			</div>
		<?php endif; ?>

		<?php if (!empty($product_details_right_side_2nd_image)) : ?>
			<div class="col-md-5">
				<img width="450" height="500" class="img-fluid" src="<?php echo $product_details_right_side_2nd_image; ?>" alt="single-img-11">
			</div>
		<?php endif; ?>

		<?php if (!empty($product_details_right_side_2nd_content)) : ?>
			<div class="inng-horizontal_sep width-100 mt-20 mb-20 res-991-mt-15"></div>
		<?php endif; ?>
	</div>

</div><!-- inng-service-classic-content end -->

<div class="row">
	<div class="col-md-5">
		<div class="inng_single_image-wrapper res-767-mt-30">
			<?php if (!empty($product_details_right_side_3nd_image)) : ?>
				<img width="450" height="500" class="img-fluid" src="<?php echo $product_details_right_side_3nd_image; ?>">
			<?php endif; ?>
		</div>
	</div>
	<div class="col-md-7">
		<?php if (!empty($product_details_right_side_3rd_content)) : ?>
			<?php echo $product_details_right_side_3rd_content; ?>
		<?php endif; ?>
	</div>
	<?php if (!empty($product_details_right_side_2nd_content_extra)) : ?>
		<?php echo $product_details_right_side_2nd_content_extra; ?>
	<?php endif; ?>
</div>


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
					<h4>More Products</h4>
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
								<li class="moreServiceLinkMain" data-name="<?php the_title(); ?>"><a class="moreServiceLink" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></li>
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
					<a href="#" class="primary-button" id="scroll-popup-btn">
						Schedule A Meeting                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</a>
				</div>
			</div>

			<?php if (have_rows('product_ota_link')) :
				    while (have_rows('product_ota_link')) : the_row(); // Added 'the_row()' function
				    $ota_link = get_sub_field('ota_link');

				    if ( ! empty( $ota_link ) ) :
				    	?>			    	

				    	<div class="button-group mt-3">
				    		<a href="<?php echo esc_url( $ota_link ); ?>" target="_blank" class="primary-button" >
				    			OTA Sign Up                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				    				<path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
				    			</svg>
				    		</a>
				    	</div>
				    <?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php if (have_rows('product_ota_link')) :
				    while (have_rows('product_ota_link')) : the_row(); // Added 'the_row()' function
				    $android_app_link = get_sub_field('android_app_link');
				    $ios_app_link = get_sub_field('ios_app_link');
				    if ( ! empty( $android_app_link ) || ! empty( $ios_app_link ) ) :
				    	?>
				    <div class="row">
				    	<div class="col-lg-12 col-md-6">
				    		<div class="service-details-icon-box">
				    			<div class="service-details-box-content">
				    				<h4>Contact Us for custom event management web and apps</h4>
				    			</div>
				    			<div class="row app-image">
				    				<?php
				    				if ( ! empty( $android_app_link )) :
				    					?>
				    					<div class="col-lg-6">
				    						<a href="<?php echo esc_url($android_app_link); ?>" target="_blank" ><img src="https://psmtech.inngeniuspsm.com/wp-content/uploads/2025/05/Android.png"></a>
				    					</div>
				    				<?php endif; ?>
				    				<?php
				    				if (! empty( $ios_app_link ) ) :
				    					?>
				    					<div class="col-lg-6">
				    						<a href="<?php echo esc_url($ios_app_link); ?>" target="_blank"><img src="https://psmtech.inngeniuspsm.com/wp-content/uploads/2025/05/IOS.png"></a>
				    					</div>
				    				<?php endif; ?>
				    			</div>

				    		</div>
				    	</div>							
				    </div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

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
    //alert(postTitleText);

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