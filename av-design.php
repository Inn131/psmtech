<?php
/* Template Name: A/V Design Template */

get_header(); 

global $post;
$av_hero_content = get_field('av_hero_content', $post->ID);
?>
<!-- Font Awesome 6 (Free CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php
if(!empty($av_hero_content))
{
  ?>
  <!-- ══ HERO ══ -->
  <section class="av-hero">
    <div class="av-hero-glow1"></div>
    <div class="av-hero-glow2"></div>
    <div class="av-hero-wrap container">
      <!-- left text -->
      <div class="av-hero-left">
        <h1 class="av-hero-h1">
          <?php 
                // Split the title to insert the span around the second part
          $title_parts = explode(' for ', $av_hero_content['title']);
          echo $title_parts[0] . '<br/>';
          echo '<span>' . trim(str_replace($title_parts[0], '', $av_hero_content['title'])) . '</span>';
          ?>
        </h1>
        <p class="av-hero-desc">
          <?php echo $av_hero_content['description']; ?>
        </p>
      </div>

      <!-- right: image tiles grid -->
      <div class="av-hero-right">
        <div class="av-hero-tiles">
          <?php foreach ($av_hero_content['tags'] as $tag): ?>
            <div class="av-hero-tile">
              <img src="<?php echo esc_url($tag['image']); ?>" 
              alt="<?php echo esc_attr($tag['tag_title']); ?>"/>
              <span class="av-hero-tile-label"><?php echo $tag['tag_title']; ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php
$av_about_content = get_field('av_about_content', $post->ID);

// Ensure data exists
if ($av_about_content && isset($av_about_content['image']) && isset($av_about_content['sub_title'])) {
  ?>
  <!-- ══ INTRO / OVERVIEW ══ -->
  <section class="av-sec av-bg-w">
    <div class="av-wrap container">
      <div class="av-intro-grid">
        <div class="av-intro-img-col">
          <img class="av-intro-img"
          src="<?php echo esc_url($av_about_content['image']); ?>"
          alt="<?php echo esc_html($av_about_content['title']); ?>"/>
        </div>
        <div>
          <div class="av-lrow">
            <div class="av-lrow-bar"></div>
            <span class="av-lrow-txt"><?php echo esc_html($av_about_content['sub_title']); ?></span>
          </div>
          <h2 class="av-sec-title"><?php echo esc_html($av_about_content['title']); ?></h2>
          
          <?php echo $av_about_content['description']; ?>
          
          
          <?php if (!empty($av_about_content['check_list']) && is_array($av_about_content['check_list'])) : ?>
          <ul class="av-check-list">
            <?php foreach ($av_about_content['check_list'] as $item) : ?>
              <?php if (isset($item['title']) && !empty($item['title'])) : ?>
              <li>
                <div class="av-check-dot">
                  <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3">
                    <path d="M20 6L9 17l-5-5"/>
                  </svg>
                </div>
                <?php echo esc_html($item['title']); ?>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
</section>
<?php
}
?>

<?php
$av_solutions = get_field('av_solutions', $post->ID);


// echo '<pre>'; print_r($av_solutions); echo '</pre>';
?>

<?php if ($av_solutions && isset($av_solutions['list']) && is_array($av_solutions['list'])) : ?>
<!-- ══ SOLUTIONS ══ -->
<section class="av-sec av-bg-l">
  <div class="av-wrap container">
    <div class="av-lrow">
      <div class="av-lrow-bar"></div>
      <span class="av-lrow-txt"><?php echo esc_html($av_solutions['sub_title']); ?></span>
    </div>
    <h2 class="av-sec-title"><?php echo esc_html($av_solutions['title']); ?></h2>
    <p class="av-sec-body"><?php echo esc_html($av_solutions['description']); ?></p>

    <div class="av-sol-grid">
      <?php foreach ($av_solutions['list'] as $index => $solution) : 
          $card_index = $index + 1; // 1-based for CSS classes
          ?>
          <div class="av-sol-card">
            <div class="av-sol-top-bar av-sol-bar-<?php echo $card_index; ?>"></div>
            <div class="av-sol-img-wrap">
              <img class="av-sol-img"
              src="<?php echo esc_url($solution['image']); ?>"
              alt="<?php echo esc_attr($solution['title']); ?>"/>
              <div class="av-sol-img-overlay"></div>
              <span class="av-sol-img-label"><?php echo esc_html($solution['title']); ?></span>
            </div>
            <div class="av-sol-body">
              <div class="av-sol-head">
                <h3><?php echo esc_html($solution['title']); ?></h3>
              </div>
              <p><?php echo esc_html($solution['description']); ?></p>
              <span class="av-sol-pill av-pill-<?php echo $card_index; ?>">
                <?php echo esc_html($solution['sub_title']); ?>
              </span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>


<?php
$why_choose_us = get_field('why_choose_us', $post->ID);

// echo '<pre>'; print_r($why_choose_us); echo '</pre>';
?>

<?php if ($why_choose_us && isset($why_choose_us['list']) && is_array($why_choose_us['list'])) : ?>
<!-- ══ WHY CHOOSE ══ -->
<section class="av-sec av-bg-w">
  <div class="av-wrap container">
    <div class="av-lrow">
      <div class="av-lrow-bar"></div>
      <span class="av-lrow-txt"><?php echo esc_html($why_choose_us['sub_title']); ?></span>
    </div>
    <h2 class="av-sec-title"><?php echo esc_html($why_choose_us['title']); ?></h2>
    <p class="av-sec-body"><?php echo esc_html($why_choose_us['description']); ?></p>
    
    <div class="av-why-grid">
      <?php foreach ($why_choose_us['list'] as $index => $item) : 
          $num = sprintf('%02d', $index + 1); // 01, 02, 03 format
          ?>
          <div class="av-why-item">
            <div class="av-why-num"><?php echo $num; ?></div>
            <h4><?php echo esc_html($item['title']); ?></h4>
            <p><?php echo esc_html($item['description']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
$av_cta_content = get_field('av_cta_content', $post->ID);

// echo '<pre>'; print_r($av_cta_content); echo '</pre>';
?>

<?php if ($av_cta_content && !empty($av_cta_content['title'])) : ?>
  <!-- ══ CTA ══ -->
  <section class="av-cta">
    <div class="av-wrap container">
      <div class="av-cta-card">
        <div>
          <h2 class="av-cta-h2"><?php echo esc_html($av_cta_content['title']); ?></h2>
          <p class="av-cta-body"><?php echo esc_html($av_cta_content['description']); ?></p>
        </div>
        <div class="av-cta-btns">
          <?php if (!empty($av_cta_content['button']['url'])) : ?>
            <a href="<?php echo esc_url($av_cta_content['button']['url']); ?>" 
             class="av-btn-main"
             <?php if (!empty($av_cta_content['button']['target'])) : ?>
               target="<?php echo esc_attr($av_cta_content['button']['target']); ?>"
               <?php endif; ?>>
               <?php echo esc_html($av_cta_content['button']['title']); ?>
               <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </a>
          <?php endif; ?>
          
          <?php if (!empty($av_cta_content['button_2']['url'])) : ?>
            <a href="<?php echo esc_url($av_cta_content['button_2']['url']); ?>" 
             class="av-btn-out"
             <?php if (!empty($av_cta_content['button_2']['target'])) : ?>
               target="<?php echo esc_attr($av_cta_content['button_2']['target']); ?>"
               <?php endif; ?>>
               <?php echo esc_html($av_cta_content['button_2']['title']); ?>
             </a>
           <?php endif; ?>
         </div>
       </div>
     </div>
   </section>
 <?php endif; ?>

 <?php

 get_footer();
?>