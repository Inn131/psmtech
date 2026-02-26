<!--site-main start-->
<div class="site-main">  

<!--==================================================-->
<!-- Start PSM About Area Style two-->
<!--==================================================-->
<div class="about-area style-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <?php if( have_rows('your_premier_hospitality_technology_solution_section') ): ?>
                        <?php while( have_rows('your_premier_hospitality_technology_solution_section') ): the_row(); ?>

                            <?php 
                        // Get sub field values.
                            $your_premier_hospitality_technology_solution_first_text = get_sub_field('your_premier_hospitality_technology_solution_first_text');
                            $your_premier_hospitality_technology_solution_head = get_sub_field('your_premier_hospitality_technology_solution_head');
                            $your_premier_hospitality_technology_solution_description = get_sub_field('your_premier_hospitality_technology_solution_description');
                        //$your_premier_hospitality_technology_solution_link = get_sub_field('your_premier_hospitality_technology_solution_link');
                            $your_premier_hospitality_technology_solution_image = get_sub_field('your_premier_hospitality_technology_solution_image');
                            ?>
                            <div class="about-thumb">
                                <img src="<?php echo $your_premier_hospitality_technology_solution_image; ?>" alt="about-us">
                                
                                <?php if( have_rows('image_overlay_datas') ): ?>
                                    <?php while( have_rows('image_overlay_datas') ): the_row(); ?>
                                        <?php
                                        $image_text = get_sub_field('image_text');
                                        $image_description = get_sub_field('image_description');
                                        ?>

                                        <div class="about-conter-box">
                                            <div class="about-counter-title">
                                                <h4 style="margin-top:10px !important;"><?php echo esc_html($image_text); ?></h4>
                                                <p><?php echo esc_html($image_description); ?> </p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <div class="section-title left style-two">
                                <h4><?php echo $your_premier_hospitality_technology_solution_first_text;  ?></h4>
                                <h1><?php echo $your_premier_hospitality_technology_solution_head; ?></h1>
                                <p><?php echo $your_premier_hospitality_technology_solution_description; ?></p>
                            </div>
                            <?php 
                            $link = get_sub_field('your_premier_hospitality_technology_solution_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];

                                ?>
                                <div class="button-group">
                                                <a href="<?php echo esc_url( $link_url ); ?>" class="primary-button">
                                                    <?php echo esc_html( $link_title ); ?>                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </div>
                            <?php endif; ?>
                            
                            <div class="about-shape-two">
                                <img src="https://inngeniuspsm.com/psmtest/wp-content/uploads/2025/05/about-shape2.png" alt="">
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End PSM About Area Style One-->
<!--==================================================-->
<!-- procedure-section -->
<section class="inng-row procedure-section clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title center style-two">
            <?php if( have_rows('work_stages') ): ?>
                <?php while( have_rows('work_stages') ): the_row(); ?>
                    <?php 
                        // Get sub field values.
                    $work_stages_text = get_sub_field('work_stages_text'); 
                    $work_stages_head = get_sub_field('work_stages_head'); 
                    ?>
                    <div class="section-title center style-two">
                      <h4><?php echo $work_stages_text; ?></h4>
                      <h1><?php echo $work_stages_head; ?></h1>
                  </div>
                  <?php
              endwhile; 
          endif; 
          ?>
      </div>
  </div>
</div>
<!-- row -->
<div class="counter-area style-two">
    <div class="container">
        <div class="row align-items-center">
            <?php 
            for ($j = 1; $j <= 4; $j++) {
                if (have_rows('counter_section_' . $j)) :
                    while (have_rows('counter_section_' . $j)) : the_row();
                                        // Get sub field values.
                        $counter_number = get_sub_field('counter_number');
                        $counter_text = get_sub_field('counter_text');
                        ?> 
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-box">
                                <div class="counter-content">
                                    <h4><?php echo $counter_number; ?></h4>
                                    <p><?php echo $counter_text; ?></p>
                                </div>
                            </div>
                        </div>   
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php } 
            ?>
        </div>
    </div>
</div>
</div>
</section>

<!--==================================================-->
<!-- Start Toptech About Area Inner Style Two-->
<!--==================================================-->
<div class="about-area inner-style-two">
    <div class="container">
        <div class="row align-items-center">
            <?php if( have_rows('experience_us') ): ?>
                <?php while( have_rows('experience_us') ): the_row();  ?>
                    <?php 
                        // Get sub field values.
                    $experience_us_text = get_sub_field('experience_us_text'); 
                    $experience_us_head = get_sub_field('experience_us_head'); 
                    $experience_us_img = get_sub_field('experience_us_image'); 
                    ?>
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="about-thumb">
                                <img src="<?php echo $experience_us_img; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abour-right">
                            <div class="section-title left inner-style">
                                <h4><?php echo $experience_us_text; ?></h4>
                                <h1 style="margin-bottom: 0px;"><?php echo $experience_us_head; ?></h1>
                            </div>
                            <?php
                            $our_mission_and_values_tab_name_1 = get_sub_field('our_mission_and_values_tab_name_1');
                            $our_mission_and_values_tab_name_2 = get_sub_field('our_mission_and_values_tab_name_2');
                            $our_mission_and_values_all_text_1 = get_sub_field('our_mission_and_values_all_text_1');
                            $our_mission_and_values_all_text_2 = get_sub_field('our_mission_and_values_all_text_2');
                            ?>
                            <div class="about-single-box-main">

                                <div class="about-single-box">
                                    <div class="about-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="about-box-content">
                                        <h4><?php echo $our_mission_and_values_tab_name_1; ?></h4>
                                        <p><?php echo  $our_mission_and_values_all_text_1; ?></p>
                                    </div>
                                </div>                  
                                <div class="about-single-box">
                                    <div class="about-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="about-box-content">
                                        <h4><?php echo $our_mission_and_values_tab_name_2; ?></h4>
                                        <p><?php echo  $our_mission_and_values_all_text_2; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Toptech About Area Inner Style Two-->
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