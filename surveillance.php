<?php
/* Template Name: Surveillance Template */

get_header(); 

global $post;

?>
<!-- Font Awesome 6 (Free CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php
$surveillance_hero_content = get_field('surveillance_hero_content', $post->ID);

// echo '<pre>'; print_r($surveillance_hero_content); echo '</pre>';
?>

<?php if ($surveillance_hero_content && !empty($surveillance_hero_content['title'])) : ?>
<!-- ══ HERO ══ -->
<section class="surv2-hero">
    <div class="container">
        <!-- left: text panel -->
        <div class="surv2-hero-textpanel">
            <h1 class="surv2-hero-h1">
                <?php echo esc_html($surveillance_hero_content['title']); ?>
            </h1>
            <p class="surv2-hero-desc">
                <?php echo esc_html($surveillance_hero_content['description']); ?>
            </p>
            <?php if (!empty($surveillance_hero_content['tags']) && is_array($surveillance_hero_content['tags'])) : ?>
            <div class="surv2-hero-pills">
                <?php foreach ($surveillance_hero_content['tags'] as $index => $tag) : ?>
                    <span class="surv2-pill <?php echo ($index === 3) ? 'surv2-pill--r' : ''; ?>">
                        <?php echo esc_html($tag['tag_title']); ?>
                    </span>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <!-- right: image panel -->
        <div class="surv2-hero-imgpanel">
            <?php if (!empty($surveillance_hero_content['image'])) : ?>
            <img src="<?php echo esc_url($surveillance_hero_content['image']); ?>" 
                 alt="Hotel surveillance system"/>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php
$what_we_offer = get_field('what_we_offer', $post->ID);

// Remove debug output in production
// echo '<pre>'; print_r($what_we_offer); echo '</pre>';
?>

<?php if ($what_we_offer && isset($what_we_offer['list']) && is_array($what_we_offer['list'])) : ?>
<!-- ══ SERVICE FEATURES ══ -->
<section class="surv2-sec surv2-bg-l">
    <div class="surv2-wrap container">
        <div class="surv2-hd">
            <div class="surv2-hd-row">
                <div class="surv2-hd-line"></div>
                <span class="surv2-hd-tag"><?php echo esc_html($what_we_offer['sub_title']); ?></span>
            </div>
            <h2 class="surv2-hd-title"><?php echo esc_html($what_we_offer['title']); ?></h2>
            <p class="surv2-hd-body"><?php echo esc_html($what_we_offer['description']); ?></p>
        </div>
        <div class="surv2-feat-rows">
            <?php 
            foreach ($what_we_offer['list'] as $index => $item) : 
                $num = sprintf('%02d', $index + 1); // 01, 02, 03, 04 format
                $icon_class = 'surv2-fr-s' . ($index + 1);
            ?>
            <div class="surv2-feat-row <?php echo $icon_class; ?>">
                <div class="surv2-feat-side">
                    <span class="surv2-feat-side-ico"><?php echo $item['icon']; ?></span>
                    <span class="surv2-feat-side-num"><?php echo $num; ?></span>
                </div>
                <div class="surv2-feat-content">
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
$surveillance_why_us = get_field('surveillance_why_us', $post->ID);
// echo '<pre>'; print_r($surveillance_why_us); echo '</pre>';
?>

<?php if ($surveillance_why_us && isset($surveillance_why_us['list']) && is_array($surveillance_why_us['list'])) : ?>
<!-- ══ WHY CHOOSE ══ -->
<section class="surv2-sec surv2-bg-w">
    <div class="surv2-wrap container">
        <div class="surv2-hd">
            <div class="surv2-hd-row">
                <div class="surv2-hd-line"></div>
                <span class="surv2-hd-tag"><?php echo esc_html($surveillance_why_us['sub_title']); ?></span>
            </div>
            <h2 class="surv2-hd-title"><?php echo esc_html($surveillance_why_us['title']); ?></h2>
            <p class="surv2-hd-body"><?php echo esc_html($surveillance_why_us['description']); ?></p>
        </div>
        <div class="surv2-why-grid">
            <?php 
            foreach ($surveillance_why_us['list'] as $index => $item) : 
            ?>
            <div class="surv2-why-card">
                <div class="surv2-why-ico"><?php echo $item['icon']; ?></div>
                <h4><?php echo esc_html($item['title']); ?></h4>
                <p><?php echo esc_html($item['description']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php
$surveillance_cta_content = get_field('surveillance_cta_content', $post->ID);

// echo '<pre>'; print_r($surveillance_cta_content); echo '</pre>';
?>

<?php if ($surveillance_cta_content && !empty($surveillance_cta_content['title'])) : ?>
<!-- ══ CTA ══ -->
<section class="surv2-cta">
    <div class="surv2-wrap container">
        <div class="surv2-cta-inner">
            <div class="surv2-cta-imgside">
                <?php if (!empty($surveillance_cta_content['image'])) : ?>
                <img src="<?php echo esc_url($surveillance_cta_content['image']); ?>"
                     alt="Security control room professional"/>
                <?php endif; ?>
                <?php if (!empty($surveillance_cta_content['tagline'])) : ?>
                <div class="surv2-cta-imgside-text">
                    <blockquote><?php echo esc_html($surveillance_cta_content['tagline']); ?></blockquote>
                </div>
                <?php endif; ?>
            </div>
            <div class="surv2-cta-textside">
                <h2 class="surv2-cta-h2"><?php echo esc_html($surveillance_cta_content['title']); ?></h2>
                <p class="surv2-cta-body"><?php echo esc_html($surveillance_cta_content['description']); ?></p>
                <div class="surv2-cta-actions">
                    <?php if (!empty($surveillance_cta_content['button']['url'])) : ?>
                    <a href="<?php echo esc_url($surveillance_cta_content['button']['url']); ?>" 
                       class="surv2-btn-a"
                       <?php if (!empty($surveillance_cta_content['button']['target'])) : ?>
                       target="<?php echo esc_attr($surveillance_cta_content['button']['target']); ?>"
                       <?php endif; ?>>
                        <?php echo esc_html($surveillance_cta_content['button']['title']); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                    
                    <?php if (!empty($surveillance_cta_content['button_2']['url'])) : ?>
                    <a href="<?php echo esc_url($surveillance_cta_content['button_2']['url']); ?>" 
                       class="surv2-btn-b"
                       <?php if (!empty($surveillance_cta_content['button_2']['target'])) : ?>
                       target="<?php echo esc_attr($surveillance_cta_content['button_2']['target']); ?>"
                       <?php endif; ?>>
                        <?php echo esc_html($surveillance_cta_content['button_2']['title']); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php

get_footer();
?>