<?php
/* Template Name: Fiber Connectivity Solutions Template */

get_header(); 

global $post;
?>
<!-- Font Awesome 6 (Free CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php
$fcs_hero_content = get_field('fcs_hero_content', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($fcs_hero_content); echo '</pre>';
?>

<?php if ($fcs_hero_content && !empty($fcs_hero_content['title']) && isset($fcs_hero_content['statistics']) && is_array($fcs_hero_content['statistics'])) : ?>
<!-- ══ SECTION 1 · HERO ══════════════════════════ -->
<section class="fcs-hero">
    <div class="fcs-hero-inner container">
        <div class="fcs-hero-left">
            <h1 class="fcs-hero-h1">
                <?php 
                echo $fcs_hero_content['title'];
                ?>
            </h1>
            <p class="fcs-hero-desc">
                <?php echo esc_html($fcs_hero_content['description']); ?>
            </p>
        </div>
        <div class="fcs-hero-specs">
            <?php 
            $default_icons = ['🔌', '🔵', '⚡'];
            foreach ($fcs_hero_content['statistics'] as $index => $stat) : 
                $icon = !empty($stat['icon']) ? $stat['icon'] : $default_icons[$index];
            ?>
            <div class="fcs-spec-pill">
                <span class="fcs-spec-icon"><?php echo $stat['icon']; ?></span>
                <div class="fcs-spec-info">
                    <div class="fcs-spec-name"><?php echo esc_html($stat['title']); ?></div>
                    <div class="fcs-spec-sub"><?php echo esc_html($stat['description']); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$fcs_about_content = get_field('fcs_about_content', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($fcs_about_content); echo '</pre>';
?>

<?php if ($fcs_about_content && !empty($fcs_about_content['title'])) : ?>
<!-- ══ SECTION 2 · OVERVIEW ══════════════════════ -->
<section class="fcs-overview">
    <div class="fcs-overview-inner container">
        <div class="fcs-overview-img-col">
            <div class="fcs-dot-deco"></div>
            <div class="fcs-overview-img-frame">
                <?php if (!empty($fcs_about_content['image'])) : ?>
                <img src="<?php echo esc_url($fcs_about_content['image']); ?>"
                     alt="Fiber optic patch panel network management"/>
                <?php endif; ?>
            </div>
        </div>

        <div class="fcs-overview-text">
            <div class="fcs-eyebrow">
                <span class="fcs-eyebrow-line"></span>
                <?php echo esc_html($fcs_about_content['sub_title']); ?>
            </div>
            <h2 class="fcs-overview-h2"><?php echo esc_html($fcs_about_content['title']); ?></h2>
            
            <?php echo $fcs_about_content['description']; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$products_list = get_field('products_list', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($products_list); echo '</pre>';
?>

<?php if ($products_list && isset($products_list['list']) && is_array($products_list['list'])) : ?>
<!-- ══ SECTION 3 · PRODUCTS ══════════════════════ -->
<section class="fcs-products">
    <div class="fcs-products-inner container">
        <div class="fcs-products-head">
            <div class="fcs-eyebrow" style="justify-content:center;">
                <span class="fcs-eyebrow-line"></span>
                <?php echo esc_html($products_list['sub_title']); ?>
                <span class="fcs-eyebrow-line"></span>
            </div>
            <h2 class="fcs-products-h2"><?php echo esc_html($products_list['title']); ?></h2>
            <p class="fcs-products-sub"><?php echo esc_html($products_list['description']); ?></p>
        </div>

        <div class="fcs-products-grid">
            <?php foreach ($products_list['list'] as $index => $product) : 
                $is_aqua = ($index === 1); // Second product gets aqua styling
            ?>
            <div class="fcs-prod-card">
                <div class="fcs-prod-card-img-wrap">
                    <?php if (!empty($product['image'])) : ?>
                    <img src="<?php echo esc_url($product['image']); ?>"
                         alt="<?php echo esc_attr($product['title']); ?>"/>
                    <?php endif; ?>
                </div>
                <div class="fcs-prod-card-body">
                    <h3 class="fcs-prod-card-title"><?php echo esc_html($product['title']); ?></h3>
                    <p class="fcs-prod-card-desc"><?php echo esc_html($product['description']); ?></p>
                    
                    <?php if (!empty($product['list']) && is_array($product['list'])) : ?>
                    <div class="fcs-prod-card-specs">
                        <?php foreach ($product['list'] as $spec) : ?>
                        <?php if (isset($spec['title']) && !empty($spec['title'])) : ?>
                        <div class="fcs-prod-spec-row">
                            <span class="fcs-prod-spec-dot <?php echo $is_aqua ? 'fcs-prod-spec-dot-aqua' : ''; ?>"></span>
                            <?php echo esc_html($spec['title']); ?>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>



<?php
$fcs_cta_content = get_field('fcs_cta_content', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($fcs_cta_content); echo '</pre>';
?>

<?php if ($fcs_cta_content && !empty($fcs_cta_content['title'])) : ?>
<!-- ══ SECTION 4 · CTA ════════════════════════════ -->
<section class="fcs-cta">
    <div class="container">
        <div class="fcs-cta-inner">
            <div class="fcs-cta-lines">
                <span></span><span></span><span></span>
            </div>
            <div class="fcs-cta-left">
                <h2 class="fcs-cta-h2"><?php echo esc_html($fcs_cta_content['title']); ?></h2>
                <p class="fcs-cta-p"><?php echo esc_html($fcs_cta_content['description']); ?></p>
                <?php if (!empty($fcs_cta_content['button']['url'])) : ?>
                <a href="<?php echo esc_url($fcs_cta_content['button']['url']); ?>" 
                   class="fcs-cta-btn"
                   <?php if (!empty($fcs_cta_content['button']['target'])) : ?>
                   target="<?php echo esc_attr($fcs_cta_content['button']['target']); ?>"
                   <?php endif; ?>>
                    <?php echo esc_html($fcs_cta_content['button']['title']); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                </a>
                <?php endif; ?>
            </div>
            <div class="fcs-cta-right">
                <?php if (!empty($fcs_cta_content['image'])) : ?>
                <img class="fcs-cta-img"
                     src="<?php echo esc_url($fcs_cta_content['image']); ?>"
                     alt="<?php echo esc_html($fcs_cta_content['title']); ?>"/>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


 <?php

 get_footer();
?>