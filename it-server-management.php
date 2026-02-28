<?php
/* Template Name: IT Server Management Template */

get_header(); 

global $post;

?>
<!-- Font Awesome 6 (Free CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php
$it_hero_content = get_field('it_hero_content', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($it_hero_content); echo '</pre>';
?>

<?php if ($it_hero_content && !empty($it_hero_content['title']) && isset($it_hero_content['statistics']) && is_array($it_hero_content['statistics'])) : ?>
<!-- ══ SECTION 1 · HERO ══════════════════════ -->
<section class="itsm-hero">
    <div class="itsm-hero-top">
        <div class="itsm-hero-content container">
            <div class="itsm-hero-left">
                <h1 class="itsm-hero-h1">
                    <?php echo esc_html($it_hero_content['title']); ?>
                </h1>
                <p class="itsm-hero-desc">
                    <?php echo esc_html($it_hero_content['description']); ?>
                </p>
            </div>
            <div class="itsm-hero-right">
                <?php foreach ($it_hero_content['statistics'] as $stat) : ?>
                <div class="itsm-hero-stat">
                    <div class="itsm-hero-stat-num"><?php echo $stat['title']; ?></div>
                    <div class="itsm-hero-stat-lbl"><?php echo esc_html($stat['description']); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$it_about_content = get_field('it_about_content', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($it_about_content); echo '</pre>';
?>

<?php if ($it_about_content && !empty($it_about_content['title'])) : ?>
<!-- ══ SECTION 2 · ABOUT ══════════════════════ -->
<section class="itsm-about">
    <div class="itsm-about-inner container">
        <div class="itsm-about-img-col">
            <?php if (!empty($it_about_content['image'])) : ?>
            <img class="itsm-about-img-main"
                 src="<?php echo esc_url($it_about_content['image']); ?>"
                 alt="Hotel IT server room"/>
            <?php endif; ?>
        </div>
        <div class="itsm-about-text-col">
            <p class="itsm-section-eyebrow"><?php echo esc_html($it_about_content['sub_title']); ?></p>
            <h2 class="itsm-about-h2"><?php echo esc_html($it_about_content['title']); ?></h2>
            <?php echo $it_about_content['description']; ?>
            
            <?php if (!empty($it_about_content['check_list']) && is_array($it_about_content['check_list'])) : ?>
            <ul class="itsm-about-checklist">
                <?php foreach ($it_about_content['check_list'] as $item) : ?>
                <?php if (isset($item['title']) && !empty($item['title'])) : ?>
                <li>
                    <span class="itsm-check-icon">✓</span>
                    <?php echo esc_html($item['title']); ?>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$why_psm_it = get_field('why_psm_it', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($why_psm_it); echo '</pre>';
?>

<?php if ($why_psm_it && isset($why_psm_it['list']) && is_array($why_psm_it['list'])) : ?>
<!-- ══ SECTION 3 · SERVICES ══════════════════ -->
<section class="itsm-services">
    <div class="itsm-services-inner container">
        <div class="itsm-services-header">
            <div>
                <p class="itsm-section-eyebrow"><?php echo esc_html($why_psm_it['sub_title']); ?></p>
                <h2 class="itsm-services-h2"><?php echo esc_html($why_psm_it['title']); ?></h2>
            </div>
            <p class="itsm-services-sub"><?php echo esc_html($why_psm_it['description']); ?></p>
        </div>

        <div class="itsm-cards-grid">
            <?php 
            $default_icons = ['👨‍💻', '☁️', '⚡', '🔍', '📞'];
            $icon_colors = ['itsm-icon-blue', 'itsm-icon-blue', 'itsm-icon-red', 'itsm-icon-green', 'itsm-icon-blue'];
            
            foreach ($why_psm_it['list'] as $index => $item) : 
                $num = sprintf('%02d', $index + 1);
                $icon = !empty($item['icon']) ? $item['icon'] : $default_icons[$index];
                $icon_color = $icon_colors[$index];
                $is_featured = ($index === 0);
            ?>
            
            <?php if ($is_featured) : ?>
            <!-- Featured card -->
            <div class="itsm-card itsm-card-featured">
                <?php if (!empty($why_psm_it['image'])) : ?>
                <img class="itsm-card-featured-img"
                     src="<?php echo esc_url($why_psm_it['image']); ?>"
                     alt="<?php echo esc_attr($item['title']); ?>"/>
                <?php endif; ?>
                <div>
                    <p class="itsm-card-num"><?php echo $num; ?></p>
                    <div class="itsm-card-icon-wrap <?php echo $icon_color; ?>" style="background:rgba(255,255,255,.1)">
                        <?php echo $item['icon']; ?>
                    </div>
                    <h3 class="itsm-card-title"><?php echo esc_html($item['title']); ?></h3>
                    <p class="itsm-card-text"><?php echo esc_html($item['description']); ?></p>
                </div>
            </div>
            <?php else : ?>
            <!-- Regular card -->
            <div class="itsm-card">
                <p class="itsm-card-num"><?php echo $num; ?></p>
                <div class="itsm-card-icon-wrap <?php echo $icon_color; ?>">
                    <?php echo $item['icon']; ?>
                </div>
                <h3 class="itsm-card-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="itsm-card-text"><?php echo esc_html($item['description']); ?></p>
            </div>
            <?php endif; ?>
            
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php
$it_cta_content = get_field('it_cta_content', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($it_cta_content); echo '</pre>';
?>

<?php if ($it_cta_content && !empty($it_cta_content['title'])) : ?>
<!-- ══ SECTION 4 · CTA ══════════════════════ -->
<section class="itsm-cta">
    <div class="container">
        <div class="itsm-cta-inner">
            <div class="itsm-cta-left">
                <h2 class="itsm-cta-h2"><?php echo esc_html($it_cta_content['title']); ?></h2>
                <p class="itsm-cta-p"><?php echo esc_html($it_cta_content['description']); ?></p>
                <?php if (!empty($it_cta_content['button']['url'])) : ?>
                <a href="<?php echo esc_url($it_cta_content['button']['url']); ?>" 
                   class="itsm-cta-btn"
                   <?php if (!empty($it_cta_content['button']['target'])) : ?>
                   target="<?php echo esc_attr($it_cta_content['button']['target']); ?>"
                   <?php endif; ?>>
                    <?php echo esc_html($it_cta_content['button']['title']); ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="itsm-cta-right">
                <?php if (!empty($it_cta_content['image'])) : ?>
                <img class="itsm-cta-img"
                     src="<?php echo esc_url($it_cta_content['image']); ?>"
                     alt="Hotel team at front desk with reliable IT"/>
                <?php endif; ?>
                <div class="itsm-cta-right-overlay"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


 <?php

 get_footer();
?>