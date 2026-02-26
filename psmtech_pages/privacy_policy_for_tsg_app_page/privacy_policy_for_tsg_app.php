<section>
    <?php if( have_rows('about_banner') ): ?>
        <?php while( have_rows('about_banner') ): the_row(); ?>

            <?php 
            // Get sub field values.
            $banner_main = get_sub_field('banner_img');
            $banner_head = get_sub_field('banner_head');
            $banner_text = get_sub_field('banner_text');
            ?> 

            <div class="inng-page-title-row" style="background-image: url(<?php echo $banner_main; ?>); background-position: center; background-size: cover;">
                <div class="inng-page-title-row-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 col-sm-12 me-auto">
                                <div class="inng-page-title-row-heading">
                                    <div class="banner-vertical-block"></div>
                                    <div class="page-title-heading">
                                        <h2 class="title"><?php echo $banner_head; ?></h2>
                                        <p><?php echo $banner_text; ?></p>
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
<div class="site-main">
    <!--service-section_1-->
    <section class="inng-row service-section_1 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-11 col-md-12 m-auto">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>our services</h3>
                            <h2 class="title">Our best <span class="text-base-secondskin">services</span></h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row">
                <?php 
                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 3, // Number of services to display
                    'order' => 'ASC'
                );

                $services_query = new WP_Query($args);

                if ($services_query->have_posts()) :
                    while ($services_query->have_posts()) : $services_query->the_post();
                        $service_logo_image = get_field('service_logo_image');
                        $service_home_and_about_section = get_field('service_home_and_about_section');
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-icon-box -->
                    <div class="featured-icon-box style1">
                        <div class="featured-icon">
                            <div class="inng-icon inng-icon_element-onlytxt inng-icon_element-color-whitecolor inng-icon_element-style-rounded inng-icon_element-size-lg">
                                <img src="<?php echo $service_logo_image; ?>" >
                            </div>
                            <div class="inng-service-icon-dots"></div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                            <div class="featured-desc">
                                <p><?php echo $service_home_and_about_section; ?></p>
                            </div>
                            <div class="inng-footer">
                                <a class="inng-btn btn-inline inng-btn-size-md inng-icon-btn-right inng-btn-color-skincolor" href="<?php the_permalink(); ?>">View details</a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <?php endwhile;
                else :
                    echo 'No services found';
                endif;
                wp_reset_postdata();
                ?>
            </div>

        </div>
    </section>
    <!--service-section_1 end-->
    <!--about-section-->
    <section class="inng-row about-section bg-base-grey clearfix">
        <div class="container">
            <div class="row d-flex align-items-center">
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
                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <!-- inng_single_image-wrapper -->
                            <div class="inng_single_image-wrapper">
                                <img width="514" height="495" class="img-fluid" src="<?php echo $your_premier_hospitality_technology_solution_image; ?>" alt="single_01">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12">
                            <div class="pl-30 res-991-pl-0 res-991-pt-20">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3><?php echo $your_premier_hospitality_technology_solution_first_text;  ?></h3>
                                        <h2 class="title"><?php echo $your_premier_hospitality_technology_solution_head; ?></h2>
                                    </div>
                                </div><!-- section title end -->
                                <?php echo $your_premier_hospitality_technology_solution_description; ?>
                                <?php 
                                $link = get_sub_field('your_premier_hospitality_technology_solution_link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];

                                ?>
                                    <a class="inng-btn inng-btn-size-md inng-btn-shape-squar inng-btn-style-fill inng-icon-btn-right inng-btn-color-skincolor mt-10" tabindex="0" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--about-section end-->
    <!-- procedure-section -->
    <section class="inng-row procedure-section clearfix">
        <div class="container">
            <div class="row">
                <?php if( have_rows('work_stages') ): ?>
                    <?php while( have_rows('work_stages') ): the_row(); ?>

                        <?php 
                        // Get sub field values.
                            $work_stages_text = get_sub_field('work_stages_text'); 
                            $work_stages_head = get_sub_field('work_stages_head'); 
                        ?>
                        <div class="col-lg-7 col-md-8 col-sm-10 m-auto">
                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3><?php echo $work_stages_text; ?></h3>
                                    <h2 class="title"><?php echo $work_stages_head; ?></h2>
                                </div>
                            </div>
                            <!-- section title end -->
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- row -->
            <div class="col-lg-12">
                <div class="featuredbox-number processbox">
                    <div class="row">
                        <?php 
                            $args = array(
                                'post_type' => 'service',
                                'posts_per_page' => 4, 
                                'order' => 'DESC',
                            );

                            $services_query = new WP_Query($args);

                        if ($services_query->have_posts()) :
                            while ($services_query->have_posts()) : $services_query->the_post();
                                    $service_home_and_about_section = get_field('service_home_and_about_section');
                                ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- featured-imagebox -->
                                    <div class="featured-icon-box icon-align-top-content style2">
                                        <div class="featured-icon">
                                            <div class="inng-icon inng-icon_element-border inng-icon_element-color-skincolor inng-icon_element-size-xl inng-icon_element-style-rounded">
                                                <i class="icon-looped-square-outline"></i>
                                                <span class="inng-num"></span>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3><?php the_title(); ?></h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p><?php echo $service_home_and_about_section; ?></p>
                                            </div>
                                        </div>
                                    </div><!-- featured-imagebox end-->
                                </div>
                            <?php 
                                endwhile;
                                wp_reset_postdata(); 
                        endif;
                        ?>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- procedure-section end -->
    <!--fid-section-->
    <!-- <section class="inng-row fid-section bg-base-grey clearfix">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 col-md-12">
                    <div class="row g-0 inng-vertical_sep">
                        <?php 
                            for ($i = 1; $i <= 4; $i++) {
                                if (have_rows('counter_section_' . $i)) :
                                    while (have_rows('counter_section_' . $i)) : the_row();
                                        // Get sub field values.
                                        $counter_number = get_sub_field('counter_number');
                                        $counter_text = get_sub_field('counter_text');
                                        ?> 
                                        <div class="col-lg-3 col-md-6 col-sm-6 inng-box-col-wrapper counterNumberMain">
                                            <div class="inng-fid inside inng-fid-with-icon style1">
                                                <div class="inng-fid-contents">
                                                    <h4 class="inng-fid-inner counterNumberInner">
                                                        <span class="numinate counterNumber">
                                                            <?php echo $counter_number; ?>
                                                        </span>
                                                    </h4>
                                                    <h3 class="inng-fid-title"><?php echo $counter_text; ?></h3>
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
    </section> -->
    <!--fid-section end-->

    <!--tab-section-->
    <section class="inng-row tab-section clearfix">
        <div class="container">
            <div class="row d-flex align-items-center">
                <?php if( have_rows('experience_us') ): ?>
                    <?php while( have_rows('experience_us') ): the_row();  ?>
                        <?php 
                        // Get sub field values.
                            $experience_us_text = get_sub_field('experience_us_text'); 
                            $experience_us_head = get_sub_field('experience_us_head'); 
                            $experience_us_img = get_sub_field('experience_us_image'); 
                        ?>
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <!-- inng_single_image-wrapper -->
                            <div class="inng_single_image-wrapper pr-20">
                                <img width="570" height="510" class="img-fluid" src="<?php echo $experience_us_img; ?>" alt="single-img-10">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="pt-15 res-991-pt-0 res-991-mt-40 res-991-pb-25">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-heade">
                                        <h3><?php echo $experience_us_text; ?></h3>
                                        <h2 class="title"><?php echo $experience_us_head; ?></h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="inng-tabs inng-tab-style-03">
                                    <?php
                                        $our_mission_and_values_tab_name_1 = get_sub_field('our_mission_and_values_tab_name_1');
                                        $our_mission_and_values_tab_name_2 = get_sub_field('our_mission_and_values_tab_name_2');
                                        $our_mission_and_values_all_text_1 = get_sub_field('our_mission_and_values_all_text_1');
                                        $our_mission_and_values_all_text_2 = get_sub_field('our_mission_and_values_all_text_2');
                                     ?>
                                    <ul class="tabs">
                                        <li class="tab tabName tab1"><a href="javascript:void(0)"><?php echo $our_mission_and_values_tab_name_1; ?></a></li>
                                        <li class="tab tabName tab2"><a href="javascript:void(0)"><?php echo $our_mission_and_values_tab_name_2; ?></a></li>
                                    </ul>
                                    <div class="content-tab">
                                        <!-- content-inner -->
                                        <div class="content-inner tabContent tab1">
                                            <?php echo  $our_mission_and_values_all_text_1; ?>
                                        </div>
                                        <!-- content-inner end-->
                                        <!-- content-inner -->
                                        <div class="content-inner tabContent tab2">
                                            <?php echo  $our_mission_and_values_all_text_2; ?>
                                        </div>
                                        <!-- content-inner end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--tab-section end-->
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