<!--site-main start-->
<div class="site-main">   
<section>
    <?php if( have_rows('client_page') ): ?>
        <?php while( have_rows('client_page') ): the_row(); ?>

            <?php 
            // Get sub field values.
            $page_description = get_sub_field('page_description');
            $page_image = get_sub_field('page_image');
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
                            <p><?php echo $page_description; ?></p>
                        </div>
                    </div>
                </div>    
                <div class="col-xl-4 col-lg-4 col-md-10 col-sm-12 me-auto">
                    <div class="inng-page-title-row-heading mobile">
                        <div class="banner-vertical-block">
                            <img src="<?php echo $page_image ?>" style="background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center center; clip-path: polygon(40% 0, 100% 0, 100% 100%, 0% 100%); object-fit: cover;">
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


    <!--==================================================-->
<!-- Start Client Section-->
<!--==================================================-->
<section class="clients-section clients-page">
    <div class="container">
        <?php
// The Query
        $the_query = new \WP_Query($args = array(
           'post_type' => 'our-clients',
           'order'            => 'ASC',
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
<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery('.counterNumber').each(function () {
            jQuery(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    jQuery(this).text(Math.ceil(now));
                }
            });
        });

        // Append span after first child
        jQuery(".counterNumberMain:first-child .counterNumberInner").append("<span class='ml_15'> k</span>");

        // Append span after last child
        jQuery(".counterNumberMain:last-child .counterNumberInner").append("<span class='ml_15'> k+</span>");
    });
</script>
<script>
    jQuery(document).ready(function(){
        jQuery('.tabContent').not(':first').hide();
        jQuery('.tab').click(function(){
            jQuery('.tab').removeClass('active');
            $(this).addClass('active');
            jQuery('.tabContent').hide();
            var tabIndex = $(this).index();
            jQuery('.tabContent').eq(tabIndex).show();
        });

        // Make the first tab active by default
        jQuery('.tab').first().addClass('active');
        jQuery('.tabContent').first().show();
    });

</script>