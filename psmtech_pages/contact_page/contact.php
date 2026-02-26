<!--site-main start-->
<div class="site-main">

<!--==================================================-->
<!-- Start Toptech Contact Style Three-->
<!--==================================================-->
<div class="team-details-area">
    <div class="container">
        <div class="row inner-contact">

            <div class="col-lg-4">
                <div class="team-details-right">
                    <div class="team-details-content">
                        <div class="team-member-title">
                            <h4>Let’s Get Started Now!</h4>
                        </div>

                    </div>
                    <?php if( have_rows('contact_data') ): ?>
                        <?php while( have_rows('contact_data') ): the_row(); ?>
                            <?php
                            $phone = get_sub_field('phone');
                            $email = get_sub_field('email');
                            $address = get_sub_field('address');
                            $map_link = get_sub_field('google_map_link');
                            $time = get_sub_field('time');
                            ?>
                            <div class="row add-bg">
                                <div class="col-lg-12 col-md-6">
                                    <div class="contact-info-box">
                                        <div class="contact-info-icon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h4>Location</h4>
                                            <p><a href="<?php echo esc_url($map_link); ?>" target="_blank"><?php echo esc_html($address); ?></a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="contact-info-box">
                                        <div class="contact-info-icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h4>Call us Any time</h4>
                                            <p><a href="tel:<?php echo $phone; ?>"><?php echo esc_html($phone); ?></a></p>
                                        </div>
                                    </div>
                                </div>                  
                                <div class="col-lg-12 col-md-6">
                                    <div class="contact-info-box">
                                        <div class="contact-info-icon">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h4>Send E-Mail</h4>
                                            <p><a href="mailto:<?php echo $email; ?>"><?php echo esc_html($email); ?></a></p>
                                        </div>
                                    </div>
                                </div>                      

                                <div class="col-lg-12 col-md-6">
                                    <div class="contact-info-box">
                                        <div class="contact-info-icon">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h4>Office Time</h4>
                                            <p><?php echo esc_html($time); ?></p>
                                        </div>
                                    </div>
                                </div>                                      
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>


                </div>
            </div>
                        <div class="col-lg-8">
                <div class="team-thumb">
                    <?php if( have_rows('contact_data') ): ?>
                        <?php while( have_rows('contact_data') ): the_row(); ?>
                            <?php 
                            $contact_form_shortcode = get_sub_field('contact_form_shortcode');
                            ?>
                            <div class="contact-contetn">
                                <h4>Write to Us Anytime</h4>
                            </div>
                            <?php echo do_shortcode($contact_form_shortcode) ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Toptech Contact Area Style Three-->
<!--==================================================-->
<!--google_map-->
<div id="google_map" class="google_map">
    <div class="map_container">
        <div id="map">
            <?php if( have_rows('google_map') ): 
                while( have_rows('google_map') ): the_row(); 
                    $google_map_location = get_sub_field('google_map_location');
                    echo $google_map_location;
                endwhile; 
            endif; ?>
        </div>
    </div>
</div>
</div>
<!--site-main end-->

