<?php
/* Template Name: Telephony Template */

get_header(); 

global $post;
?>
<!-- Font Awesome 6 (Free CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php
$telephony_hero_content = get_field('telephony_hero_content', $post->ID);

// echo '<pre>'; print_r($telephony_hero_content); echo '</pre>';
?>

<?php if ($telephony_hero_content && !empty($telephony_hero_content['title'])) : ?>
<!-- ══ HERO ══ -->
<section class="tel2-hero">
    <div class="tel2-hero-bg">
        <?php if (!empty($telephony_hero_content['image'])) : ?>
        <img src="<?php echo esc_url($telephony_hero_content['image']); ?>" 
             alt="<?php echo $telephony_hero_content['title']; ?>"/>
        <?php endif; ?>
    </div>
    <div class="tel2-hero-slice"></div>
    <div class="tel2-hero-inner container">
        <div class="tel2-hero-content">
            <div>
                <h1 class="tel2-hero-h1">
                    <?php 
                    $title_parts = explode(' ', $telephony_hero_content['title']);
                    $telephony_pos = array_search('Telephony', $title_parts);
                    if ($telephony_pos !== false) {
                        $title_parts[$telephony_pos] = '<em>' . $title_parts[$telephony_pos] . '</em>';
                    }
                    echo implode(' ', $title_parts);
                    ?>
                </h1>
                <p class="tel2-hero-desc">
                    <?php echo esc_html($telephony_hero_content['description']); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php
$telephony_solutions = get_field('telephony_solutions', $post->ID);

// echo '<pre>'; print_r($telephony_solutions); echo '</pre>';
?>

<?php if ($telephony_solutions && isset($telephony_solutions['list']) && is_array($telephony_solutions['list'])) : ?>
<!-- ══ TELEPHONY TYPES ══ -->
<section class="tel2-sec tel2-bg-l">
    <div class="tel2-wrap container">
        <div class="tel2-lrow">
            <div class="tel2-lrow-bar"></div>
            <span class="tel2-lrow-txt"><?php echo esc_html($telephony_solutions['sub_title']); ?></span>
        </div>
        <h2 class="tel2-title"><?php echo esc_html($telephony_solutions['title']); ?></h2>
        <p class="tel2-body" style="margin-bottom:44px;">
            <?php echo esc_html($telephony_solutions['description']); ?>
        </p>
        
        <div class="tel2-types-wrap">
            <!-- timeline -->
            <div class="tel2-timeline">
                <?php foreach ($telephony_solutions['list'] as $index => $solution) : ?>
                <div class="tel2-tl-item">
                    <div class="tel2-tl-dot">
                        <div class="tel2-tl-dot-inner"></div>
                    </div>
                    <h3><?php echo esc_html($solution['title']); ?></h3>
                    <p><?php echo esc_html($solution['description']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- stacked images -->
            <div class="tel2-types-imgs">
                <?php foreach ($telephony_solutions['list'] as $index => $solution) : ?>
                <?php if (!empty($solution['image'])) : ?>
                <div class="tel2-type-img-item">
                    <img src="<?php echo esc_url($solution['image']); ?>" 
                         alt="<?php echo esc_attr($solution['title']); ?>"/>
                    <div class="tel2-type-img-item-over"></div>
                    <span class="tel2-type-img-label"><?php echo esc_html($solution['title']); ?></span>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$why_telephony_content = get_field('why_telephony_content', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($why_telephony_content); echo '</pre>';
?>

<?php if ($why_telephony_content && isset($why_telephony_content['list']) && is_array($why_telephony_content['list'])) : ?>
<!-- ══ WHY CHOOSE ══ -->
<section class="tel2-sec tel2-bg-w">
    <div class="tel2-wrap container">
        <div class="tel2-lrow">
            <div class="tel2-lrow-bar"></div>
            <span class="tel2-lrow-txt"><?php echo esc_html($why_telephony_content['sub_title']); ?></span>
        </div>
        <h2 class="tel2-title"><?php echo esc_html($why_telephony_content['title']); ?></h2>
        <p class="tel2-body" style="margin-bottom:0;">
            <?php echo esc_html($why_telephony_content['description']); ?>
        </p>
        
        <div class="tel2-why-grid">
            <?php 
            $icon_modifiers = ['', 'tel2-why-ico-wrap--r', 'tel2-why-ico-wrap--d', 'tel2-why-ico-wrap--a'];
            
            foreach ($why_telephony_content['list'] as $index => $item) : 
                $icon_class = !empty($item['icon']) ? '' : 'tel2-why-ico-wrap';
                $icon_modifier = $icon_modifiers[$index];
            ?>
            <div class="tel2-why-card">
                <div class="tel2-why-ico-wrap <?php echo $icon_modifier; ?>">
                    <?php echo $item['icon']; ?>
                </div>
                <div class="tel2-why-content">
                    <h3><?php echo esc_html($item['title']); ?></h3>
                    <p><?php echo esc_html($item['description']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php
$telephony_cta_content = get_field('telephony_cta_content', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($telephony_cta_content); echo '</pre>';
?>

<?php if ($telephony_cta_content && !empty($telephony_cta_content['title'])) : ?>
<!-- ══ CTA ══ -->
<section class="tel2-cta">
    <div class="tel2-wrap container">
        <div class="tel2-cta-box">
            <div class="tel2-cta-left">
                <h2 class="tel2-cta-h2"><?php echo esc_html($telephony_cta_content['title']); ?></h2>
                <p class="tel2-cta-body"><?php echo esc_html($telephony_cta_content['description']); ?></p>
                <div class="tel2-cta-btns">
                    <?php if (!empty($telephony_cta_content['button']['url'])) : ?>
                    <a href="<?php echo esc_url($telephony_cta_content['button']['url']); ?>" 
                       class="tel2-btn-a"
                       <?php if (!empty($telephony_cta_content['button']['target'])) : ?>
                       target="<?php echo esc_attr($telephony_cta_content['button']['target']); ?>"
                       <?php endif; ?>>
                        <?php echo esc_html($telephony_cta_content['button']['title']); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="tel2-cta-right">
                <?php if (!empty($telephony_cta_content['image'])) : ?>
                <img src="<?php echo esc_url($telephony_cta_content['image']); ?>" 
                     alt="<?php echo esc_html($telephony_cta_content['title']); ?>"/>
                <?php endif; ?>
                <?php if (!empty($telephony_cta_content['tagline'])) : ?>
                <div class="tel2-cta-right-quote">
                    <p><?php echo esc_html($telephony_cta_content['tagline']); ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

 <?php

 get_footer();
?>