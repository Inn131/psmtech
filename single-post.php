<?php 
get_header(); 
$post_id = get_the_ID();
?>
<!--site-main start-->
<div class="site-main"> 
	<?php 
	if (have_rows('blog_banner_section')) :
    while (have_rows('blog_banner_section')) : the_row(); // Added 'the_row()' function
    $blog_details_banner_image = get_sub_field('blog_details_banner_image'); 
    $blog_details_banner_text = get_sub_field('blog_details_banner_text');
    ?>
    <div class="inng-page-title-row style2 pt-2 pb-2">
    	<div class="inng-page-title-row-inner">
    		<div class="container">
    			<div class="row align-items-center">
    				<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 me-auto">
    					<div class="inng-page-title-row-heading">
    						<div class="page-title-heading">
    							<h2 class="title postTitle"><?php the_title(); ?></h2>		                            
    						</div>
    						<div class="page-title-description">		                            
    							<p><?php echo $blog_details_banner_text; ?></p>
    						</div>
    					</div>
    				</div>   
    				<?php
    				if(!empty($blog_details_banner_image))
    				{
    					?> 
    					<div class="col-xl-4 col-lg-4 col-md-10 col-sm-12 me-auto">
    						<div class="inng-page-title-row-heading mobile">
    							<div class="banner-vertical-block">
    								<img src="<?php echo $blog_details_banner_image ?>" alt="banner-img">
    							</div>
    						</div>
    					</div>
    				<?php } ?>
    			</div>
    		</div>
    	</div>                    
    </div>
<?php endwhile; ?>
<?php endif; ?>
<!-- page-title end-->
<div class="services-details-area single-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-12">
						<?php
						$left_image = get_field('blog_details_left_image');
						if (!empty($left_image)) :
							?>
							<img width="1170" height="550" class="img-fluid" src="<?php echo esc_url($left_image); ?>" alt="blog-img">
						<?php endif; ?>
						<div class="post-meta">
							<?php
							$admin_name = get_field('blog_admin_name');
							if (!empty($admin_name)) :
								?>
								<span class="inng-meta-line byline"><i class="icon-user-male text-base-skin"></i><?php echo esc_html($admin_name); ?></span>
							<?php endif; ?>
							<?php
							
							$comments_count = get_comments_number();
							if (!empty($comments_count)) :
								?>
								<span class="inng-meta-line comments-links"><i class="icon-comment text-base-skin"></i><?php echo esc_html($comments_count); ?> Comments</span>
							<?php endif; ?>
						</div>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-12">
						<div class="widget-sidber">
							<div id="searchSection">
								<input type="text" class="input-text" id="searchInput" placeholder="Search...">
							</div>
						</div>
						<div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4>Categories</h4>

								<div class="widget-category">
									<ul>
										<?php 
					        // Get all categories
										$categories = get_categories();

					        // Check if there are any categories
										if (!empty($categories)) {

											foreach ($categories as $category) {
												echo '<li><a href="' . get_category_link($category->term_id) . '"><i class="fa fa-solid fa-tag"></i>' . esc_html($category->name) . '</a></li>';
											}

										} else {
											echo 'No categories found.';
										}
										?>
									</ul>
								</div>
							</div>
						</div>
						<div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4 class="widget-title">Recent Post</h4>
								<ul class="widget-post inng-recent-post-list">
									<?php 
									$cat_ids= '';
									$query_args = array( 
										'category__in'   => $cat_ids,
										'post_type'      => 'post',
										'posts_per_page'  => '-1',
										'post__not_in'    => array($post_id),
										'order'           => 'ASC'
									);
									$related_cats_post = new WP_Query( $query_args );
									if($related_cats_post->have_posts()):?>
										<?php
										while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
											<li>
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
												<div class="post-detail">
													<span class="post-date"><i class="icon-calendar"></i><?php echo the_field('blog_date'); ?></span>
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</div>
											</li>
										<?php endwhile;
										wp_reset_postdata();?>
									<?php endif;?>
								</ul>
							</div>
						</div>
						<div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4 class="widget-title">Tags</h4>
								<div class="tagcloud">
									<?php 
						        // Get all tags
									$tags = get_tags();

						        // Check if there are any tags
									if (!empty($tags)) {
										foreach ($tags as $tag) {
											echo '<a href="' . get_tag_link($tag->term_id) . '">' . esc_html($tag->name) . '</a>';
										}
									} else {
										echo 'No tags found.';
									}
									?>
								</div>
							</div>
						</div>
						<div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4 class="widget-title">Follow Us</h4>
								<div class="social-icons">
									<a href="<?php the_field('facebook_link'); ?>" target="_blank" class="icon fb"><i class="fab fa-facebook-f"></i></a>

									<a href="<?php the_field('twitter_link'); ?>" target="_blank" class="icon x"><i class="fab fa-x-twitter"></i></a>

									<a href="<?php the_field('linkedin_link'); ?>" target="_blank" class="icon li"><i class="fab fa-linkedin-in"></i></a>

									<a href="<?php the_field('instagram_link'); ?>" target="_blank" class="icon ig"><i class="fab fa-instagram"></i></a>									
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
</div>

</div><!--site-main end-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$('#searchInput').on('keyup', function() {
			var searchText = $(this).val().toLowerCase();
			$('.content-area').each(function() {
				var textToSearch = $(this).text().toLowerCase();
				if (textToSearch.indexOf(searchText) === -1) {
					$(this).hide();
				} else {
					$(this).show();
				}
			});
		});
	});
</script>

<?php get_footer(); ?>