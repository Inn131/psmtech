<?php
function psmtech_enqueue_styles() {
    // Enqueue parent theme style
   // wp_enqueue_style('psmtech-style', get_stylesheet_uri());

    // Enqueue extra style
    // wp_enqueue_style('psmtech-extra-style', get_theme_file_uri('style.css'));
    wp_enqueue_style('psmtech-extra-style', get_theme_file_uri('style.css'), array(), '1.1.8');

    // Enqueue child theme styles
    wp_enqueue_style('psmtech-child-bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('psmtech-child-animate-style', get_stylesheet_directory_uri() . '/css/animate.css');
    wp_enqueue_style('psmtech-child-short-style', get_stylesheet_directory_uri() . '/css/short.css');
    wp_enqueue_style('psmtech-child-main-style', get_stylesheet_directory_uri() . '/css/main.css');
    wp_enqueue_style('psmtech-child-rajdhani-style', get_stylesheet_directory_uri() . '/css/rajdhani.css');
    wp_enqueue_style('psmtech-child-rajdhani-style', get_stylesheet_directory_uri() . '/css/poppins.css');
    wp_enqueue_style('psmtech-child-fontello-style', get_stylesheet_directory_uri() . '/css/fontello.css');
    wp_enqueue_style('psmtech-child-slick-style', get_stylesheet_directory_uri() . '/css/slick.css');
    wp_enqueue_style('psmtech-child-twentytwenty-style', get_stylesheet_directory_uri() . '/css/twentytwenty.css');
    wp_enqueue_style('psmtech-child-megamenu-style', get_stylesheet_directory_uri() . '/css/megamenu.css');
    // wp_enqueue_style('psmtech-child-responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('psmtech-child-responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css', array(),'1.2.3');
    wp_enqueue_style('psmtech-child-revolution-style', get_stylesheet_directory_uri() . 'revolution/css/responsive.css');
    wp_enqueue_style('psmtech-child-coustom-animation-style', get_stylesheet_directory_uri() . '/css/coustom-animation.css');
    wp_enqueue_style('date-ui-style', get_stylesheet_directory_uri() . '/css/date-ui.css');
    
    
    

    // Enqueue custom JavaScript
    wp_enqueue_script('bootstrap-bundle', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('imagesloaded-min', get_stylesheet_directory_uri() . '/js/imagesloaded.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-3', get_stylesheet_directory_uri() . '/js/jquery-3.7.1.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-isotope', get_stylesheet_directory_uri() . '/js/jquery-isotope.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-migrate', get_stylesheet_directory_uri() . '/js/jquery-migrate-3.4.1.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-validate', get_stylesheet_directory_uri() . '/js/jquery-validate.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-waypoints', get_stylesheet_directory_uri() . '/js/jquery-waypoints.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-twentytwenty', get_stylesheet_directory_uri() . '/js/jquery.twentytwenty.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('numinate-min', get_stylesheet_directory_uri() . '/js/numinate.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('slick-min-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/custom.js', array('jquery'), '1.0', true);
    wp_enqueue_script('wow-js', get_stylesheet_directory_uri() . '/js/wow.js', array('jquery'), '1.0', true);
    wp_enqueue_script('form-js', get_stylesheet_directory_uri() . '/js/form-js.js', array('jquery'), '1.0.2', true);
    wp_enqueue_script('form-validate', get_stylesheet_directory_uri() . '/js/form-validate.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'psmtech_enqueue_styles');


function enqueue_local_fonts() {
    wp_enqueue_style('local-fonts-rajdhani', get_template_directory_uri() . '/css/rajdhani.css');
    wp_enqueue_style('local-fonts-poppins', get_template_directory_uri() . '/css/poppins.css');
}
add_action('wp_enqueue_scripts', 'enqueue_local_fonts');


function preload_fonts() {
    ?>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/rajdhani-v16-latin-700.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/poppins-v23-latin-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <?php
}
add_action('wp_head', 'preload_fonts');


function register_custom_templates($templates) {
    $custom_templates = array(
        'Home Template' => __('Home Template'),
        'About Template' => __('About Template'),
        'Client Template' => __('Client Template'),
        // 'Service Template' => __('Service Template'),
        // Add more templates here
    );
    $templates = array_merge($templates, $custom_templates);
    return $templates;
}
add_filter('theme_page_templates', 'register_custom_templates');

function load_custom_template($template) {
    global $post;
    $custom_templates = array(
        'home' => 'index.php',
        'about-us' => 'about-template.php',
        'our-clients' => 'client-template.php',
        // 'services' => 'service-template.php',
        // Add more template => file associations here
    );

    if (isset($post) && array_key_exists($post->post_name, $custom_templates)) {
        $template = get_stylesheet_directory() . '/' . $custom_templates[$post->post_name];
    }

    return $template;
}
add_filter('template_include', 'load_custom_template');


function custom_theme_setup() {
    register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'nepalbuzz' ),
            'footer'  => esc_html__( 'Footer Menu', 'nepalbuzz' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function custom_customize_register( $wp_customize ) {
    // Primary Menu
    $wp_customize->selective_refresh->add_partial( 'primary-menu', array(
        'selector' => '.primary-menu',
        'render_callback' => 'wp_nav_menu',
        'container_inclusive' => false,
        'fallback_refresh' => true,
    ) );

    // Footer Menu
    $wp_customize->selective_refresh->add_partial( 'footer-menu', array(
        'selector' => '.footer-menu',
        'render_callback' => 'wp_nav_menu',
        'container_inclusive' => false,
        'fallback_refresh' => true,
    ) );
}
add_action( 'customize_register', 'custom_customize_register' );

add_action('wp_footer', function () {
    echo '<script>
        document.addEventListener("DOMContentLoaded", function () {
            const footer = document.querySelector("footer");
            if (footer) {
                footer.setAttribute("class", "site-footer");
                footer.setAttribute("itemscope", "itemscope");
                footer.setAttribute("itemtype", "https://schema.org/WPFooter");
                footer.setAttribute("role", "contentinfo");
            }
        });
    </script>';
}, 100);


function custom_post_type_shortcode_function($atts) {
    $atts = shortcode_atts(
        array(
            'attribute_name' => 'logo-img',
        ),
        $atts
    );
    $args = array(
        'post_type' => 'logo-img', 
        'posts_per_page' => -1, 
        'order' => 'ASC'
    );
    $custom_query = new WP_Query($args);
    $output = '';
    if ($custom_query->have_posts()) {
        $output .= '<ul class="logo-Slider">';
        while ($custom_query->have_posts()) {
            $custom_query->the_post();
                if( have_rows('ex_logo_images') ):
                    while( have_rows('ex_logo_images') ) : the_row();
                        $img = get_sub_field('logo_imgs');
                         $output .= '<li style="display: flex; justify-content: center;"> <img style="object-fit: contain; padding: 5px;" width="180" height="130" src=' . $img . ' alt="manufacturer-logo"></li>';
                    endwhile;
                endif;
        }
        $output .= '</ul>';
        wp_reset_postdata(); 
    }
    return $output; 
}
add_shortcode('custom_post_type_shortcode', 'custom_post_type_shortcode_function');

add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');

// Contact Form Error Message
// Removing the default validation rules for text fields and textareas in Contact Form 7
remove_action('wpcf7_swv_create_schema', 'wpcf7_swv_add_text_rules', 10);
remove_action('wpcf7_swv_create_schema', 'wpcf7_swv_add_textarea_rules', 10);

add_filter('wpcf7_validate_text*', 'custom_cf7_validation_filter', 20, 2);
add_filter('wpcf7_validate_email*', 'custom_cf7_validation_filter', 20, 2);
add_filter('wpcf7_validate_tel*', 'custom_cf7_validation_filter', 20, 2);

function custom_cf7_validation_filter($result, $tag) {
    $name = $tag->name;

    switch ($name) {
        case 'contact-your-name':
            $value = isset($_POST['contact-your-name']) ? trim($_POST['contact-your-name']) : '';
            if (empty($value)) {
                $result->invalidate($tag, "Please Enter Your First Name.");
            } elseif (preg_match('/\d/', $value)) {
                $result->invalidate($tag, "Name Should Not Contain Numbers.");
            }
            break;
        case 'contact-last-name':
            $value = isset($_POST['contact-last-name']) ? trim($_POST['contact-last-name']) : '';
            if (empty($value)) {
                $result->invalidate($tag, "Please Enter Your Last Name.");
            } elseif (preg_match('/\d/', $value)) {
                $result->invalidate($tag, "Last Name Should Not Contain Numbers.");
            }
            break;        
        case 'contact-email':
            if (empty($_POST['contact-email'])) {
                $result->invalidate($tag, "Please Enter Your Email.");
            }
            break;        
        case 'contact-phone':
            $phone = isset($_POST['contact-phone']) ? trim($_POST['contact-phone']) : '';
            if (empty($phone)) {
                $result->invalidate($tag, "Please Enter Your Phone Number.");
            } 
            elseif (!preg_match('/^[0-9\-\+\s\(\)]+$/', $phone)) {
                $result->invalidate($tag, "Please Enter Valid Phone Number.");
            }
            break;
    }

    return $result;
}

add_filter('wpcf7_validate_text*', 'custom_cf7_validation_filter_2', 20, 2);
add_filter('wpcf7_validate_email*', 'custom_cf7_validation_filter_2', 20, 2);
add_filter('wpcf7_validate_tel*', 'custom_cf7_validation_filter_2', 20, 2);
add_filter('wpcf7_validate_date*', 'custom_cf7_validation_filter_2', 20, 2);

function custom_cf7_validation_filter_2($result, $tag) {
    $name = $tag->name;

    switch ($name) {
        case 'header-your-name':
            $value = isset($_POST['header-your-name']) ? trim($_POST['header-your-name']) : '';
            if (empty($value)) {
                $result->invalidate($tag, "Please Enter Your First Name.");
            } elseif (preg_match('/\d/', $value)) {
                $result->invalidate($tag, "Name Should Not Contain Numbers.");
            }
            break;
        case 'header-last-name':
            $value = isset($_POST['header-last-name']) ? trim($_POST['header-last-name']) : '';
            if (empty($value)) {
                $result->invalidate($tag, "Please Enter Your Last Name.");
            } elseif (preg_match('/\d/', $value)) {
                $result->invalidate($tag, "Last Name Should Not Contain Numbers.");
            }
            break;
        case 'header-company-name':
            $value = isset($_POST['header-company-name']) ? trim($_POST['header-company-name']) : '';
            if (empty($value)) {
                $result->invalidate($tag, "Please Enter Your Company Name.");
            } elseif (preg_match('/\d/', $value)) {
                $result->invalidate($tag, "Company Name Should Not Contain Numbers.");
            }
            break;
        case 'header-phone':
            $phone = isset($_POST['header-phone']) ? trim($_POST['header-phone']) : '';
            if (empty($phone)) {
                $result->invalidate($tag, "Please Enter Your Phone Number.");
            } 
            elseif (!preg_match('/^[0-9\-\+\s\(\)]+$/', $phone)) {
                $result->invalidate($tag, "Please Enter Valid Phone Number.");
            }
            break;
        case 'header-email':
            if (empty($_POST['header-email'])) {
                $result->invalidate($tag, "Please Enter Your Email.");
            }
            break;        
        case 'header-date':
            if ($name == 'header-date') {
                $value = isset($_POST[$name]) ? trim($_POST[$name]) : '';
                if (empty($value)) {
                    $result->invalidate($tag, "Please Select A Date & Time.");
                }
            }
            break;
    }
    return $result;
}

function enqueue_datetimepicker_assets() {
    wp_enqueue_script( 'jquery-ui-datepicker' );
    wp_enqueue_script( 'jquery-timepicker-addon', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js', array('jquery', 'jquery-ui-datepicker'), null, true );
    wp_enqueue_style( 'jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
    wp_enqueue_style( 'jquery-timepicker-addon-css', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_datetimepicker_assets' );



/**
 * Add branded logo loader to WordPress
 */
function add_branded_loader() {
    // Get your logo URL (uses custom logo if set, otherwise falls back to placeholder)
    $logo_url = 'https://psmtech.com/wp-content/uploads/2025/04/psmtech-logo.png';
    ?>
    <div class="logo-loader">
        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="pulse-logo">
        <div class="loader-progress"></div>
    </div>
    <style>
        .logo-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 999999;
            transition: opacity 0.5s ease;
        }
        .pulse-logo {
            width: 180px;
            height: auto;
            max-height: 80px;
            object-fit: contain;
            animation: pulse 1.5s ease-in-out infinite;
            margin-bottom: 20px;
        }
        .loader-progress {
            width: 200px;
            height: 3px;
            background: rgba(0,0,0,0.1);
            border-radius: 3px;
            overflow: hidden;
        }
        .loader-progress::after {
            content: '';
            display: block;
            width: 0;
            height: 100%;
            background: var(--base-blue);
            animation: progress 2s ease-in-out forwards;
        }
        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.9; }
            100% { transform: scale(1); opacity: 1; }
        }
        @keyframes progress {
            0% { width: 0; }
            80% { width: 80%; }
            100% { width: 100%; }
        }
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        window.addEventListener('load', function() {
            setTimeout(function() {
                var loader = document.querySelector('.logo-loader');
                if(loader) {
                    loader.style.opacity = '0';
                    setTimeout(function() { 
                        loader.style.display = 'none'; 
                    }, 500);
                }
            }, 1000);
        });
    });
    </script>
    <?php
}
add_action('wp_body_open', 'add_branded_loader');
