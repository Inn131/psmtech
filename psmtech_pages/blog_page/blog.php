<!--site-main start-->
<div class="site-main"> 

<!-- page-title -->
<section>
    <?php if( have_rows('blog_listing_banner_section') ): ?>
        <?php while( have_rows('blog_listing_banner_section') ): the_row(); ?>
            <?php 
            // Get sub field values.
            $blog_listing_banner_image = get_sub_field('blog_listing_banner_image');
            $blog_listing_banner_text = get_sub_field('blog_listing_banner_text');
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
                            <p><?php echo $blog_listing_banner_text; ?></p>
                        </div>
                    </div>
                </div>    
                <div class="col-xl-4 col-lg-4 col-md-10 col-sm-12 me-auto">
                    <div class="inng-page-title-row-heading mobile">
                        <div class="banner-vertical-block">
                            <img src="<?php echo $blog_listing_banner_image ?>" style="background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center center; clip-path: polygon(40% 0, 100% 0, 100% 100%, 0% 100%);">
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
<!-- page-title end-->


<!--==================================================-->
<!-- Start Toptech Blog Grid-->
<!--==================================================-->
<div class="blog-grid-area">
    <div class="container">
        <div class="row">

            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'post_type' => 'post',
                        'posts_per_page' => 10, // Number of posts per page
                        'paged' => $paged,
                        'order' => 'ASC',
                    );

            $blog_query = new WP_Query($args);
            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
                    $blog_date = get_field('blog_date');
                    $blog_admin_name = get_field('blog_admin_name');
                    $blog_comments = get_field('blog_comments');

$comments_count = get_comments_number();


                    $blog_details_left_image = get_field('blog_details_left_image');
                    $blog_text = get_field('blog_text');
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-box">
                            <div class="blog-thumb">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                            <div class="blog-category">
                                <a href="#"><?php echo $blog_date; ?></a>
                            </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="inng-postbox-desc-footer">
                                    <p><?php echo $blog_text; ?></p>
                                </div>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="fas fa-angle-right"></i></a>
                                <div class="blog-meta">
                                    <span><?php echo $blog_admin_name; ?></span>
                                    <span>Comments (<?php echo $comments_count; ?>)</span>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <?php
                endwhile;
                ?>    

                <nav class="pagination pagination-block">
                    <?php
                    echo paginate_links(array(
                        'total' => $blog_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                                'prev_text' => '&laquo;', // Custom previous arrow HTML
                                'next_text' => '&raquo;', // Custom next arrow HTML
                            ));
                            ?>
                        </nav>

                    <?php else :
                        echo 'No posts found';
                    endif;
                    wp_reset_postdata();
                    ?>
                    <!-- post end -->   


                </div>
            </div>
        </div>
<!--==================================================-->
<!-- End Toptech Blog Grid-->
<!--==================================================-->

</div>
<!--site-main END-->

<script>
    jQuery(document).ready(function() {
      jQuery('#searchInput').on('keyup', function() {
        var searchText = jQuery(this).val().toLowerCase();
    jQuery('.searchContent .entry-content').each(function() { // Targeting post content specifically
      var textToSearch = jQuery(this).text().toLowerCase(); // Search within post content
      if (textToSearch.indexOf(searchText) === -1) {
        jQuery(this).closest('.searchContent').hide(); // Hide the entire post if content doesn't match
    } else {
        jQuery(this).closest('.searchContent').show(); // Show the post if content matches
    }
});
});
  });
</script>
<script>
    jQuery(document).ready(function() {
      jQuery('.blogDateFormat').each(function() {
    var dateText = jQuery(this).text(); // Get the text content of the element

    // Split the text by space to separate the month and day
    var dateParts = dateText.split(' ');

    if (dateParts.length >= 2) {
      // Rearrange the parts to change "jul 2" to "2 jul"
      var modifiedDate = dateParts[1] + ' ' + dateParts[0];
      jQuery(this).text(modifiedDate.trim()); // Use trim() to remove extra spaces
  }
});
  });


</script>

