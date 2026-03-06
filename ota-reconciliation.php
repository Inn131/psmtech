<?php
/* Template Name: OTA Reconciliation Template */

get_header(); 

global $post;

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>

<!-- ══════════════════════════
  SECTION 1 · HERO
══════════════════════════ -->
<?php
$hero_section = get_field('hero_section', $post->ID);

// Extract data for easy access
$sub_title = $hero_section['sub_title'] ?? '';
$title = $hero_section['title'] ?? '';
$description = $hero_section['description'] ?? '';
$button_1 = $hero_section['button_1'] ?? [];
$button_2 = $hero_section['button_2'] ?? [];
$stat_list = $hero_section['stat_list'] ?? [];
    
    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<em>' . esc_html($word) . '</em>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);

?>

<section class="ota-hero">
  <div class="ota-hero__glow"></div>
  <div class="ota-hero__glow2"></div>

  <div class="container">
    <div class="row align-items-center g-5">

      <!-- LEFT -->
      <div class="col-lg-6">
        <span class="ota-tag"><i class="fa-solid fa-rotate fa-sm"></i>&nbsp;<?php echo esc_html($sub_title); ?></span>
        <h1 class="ota-hero__h1">
          <?php echo $formatted_title; ?>
        </h1>
        <p class="ota-hero__sub">
          <?php echo esc_html($description); ?>
        </p>
        <div class="ota-hero__btns">
          <a href="<?php echo esc_url($button_1['url'] ?? '#solutions'); ?>" class="ota-btn-primary" <?php echo ($button_1['target'] ?? '') ? 'target="' . esc_attr($button_1['target']) . '"' : ''; ?>>
            <i class="fa-solid fa-rocket fa-sm"></i> <?php echo esc_html($button_1['title'] ?? 'Explore Solutions'); ?>
          </a>
          <a href="<?php echo esc_url($button_2['url'] ?? '#cta'); ?>" class="ota-btn-outline" <?php echo ($button_2['target'] ?? '') ? 'target="' . esc_attr($button_2['target']) . '"' : ''; ?>>
            <i class="fa-regular fa-calendar fa-sm"></i> <?php echo esc_html($button_2['title'] ?? 'Book a Demo'); ?>
          </a>
        </div>

        <!-- stats bar -->
        <div class="ota-hero__stats">
          <?php if (!empty($stat_list)): ?>
            <?php foreach ($stat_list as $stat): ?>
              <div class="ota-hero__stat">
                <span class="ota-hero__stat__num"><?php echo esc_html($stat['title']); ?></span>
                <span class="ota-hero__stat__lbl"><?php echo esc_html($stat['description']); ?></span>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- RIGHT: live reconciliation widget (static - not in array) -->
      <div class="col-lg-6">
        <div class="ota-hero__widget-wrap">
          <div class="ota-recon-widget">
            <div class="ota-widget-topbar">
              <span class="ota-widget-title">Reconciliation Overview — Live</span>
              <span class="ota-live-badge">Active</span>
            </div>

            <div class="ota-recon-rows">
              <div class="ota-recon-row">
                <div class="ota-recon-row__left">
                  <div class="ota-recon-row__ico ota-ico-blue"><i class="fa-solid fa-calendar-check"></i></div>
                  <div>
                    <div class="ota-recon-row__label">Reservations</div>
                    <div class="ota-recon-row__sub">347 verified today</div>
                  </div>
                </div>
                <span class="ota-recon-row__badge ota-badge-green">Verified</span>
              </div>
              <div class="ota-recon-row">
                <div class="ota-recon-row__left">
                  <div class="ota-recon-row__ico ota-ico-green"><i class="fa-solid fa-dollar-sign"></i></div>
                  <div>
                    <div class="ota-recon-row__label">Commissions</div>
                    <div class="ota-recon-row__sub">$124K validated</div>
                  </div>
                </div>
                <span class="ota-recon-row__badge ota-badge-green">Matched</span>
              </div>
              <div class="ota-recon-row">
                <div class="ota-recon-row__left">
                  <div class="ota-recon-row__ico ota-ico-orange"><i class="fa-solid fa-triangle-exclamation"></i></div>
                  <div>
                    <div class="ota-recon-row__label">Discrepancies</div>
                    <div class="ota-recon-row__sub">4 flagged &amp; in review</div>
                  </div>
                </div>
                <span class="ota-recon-row__badge ota-badge-orange">In Review</span>
              </div>
              <div class="ota-recon-row">
                <div class="ota-recon-row__left">
                  <div class="ota-recon-row__ico ota-ico-blue"><i class="fa-solid fa-gavel"></i></div>
                  <div>
                    <div class="ota-recon-row__label">Disputes</div>
                    <div class="ota-recon-row__sub">12 resolved this week</div>
                  </div>
                </div>
                <span class="ota-recon-row__badge ota-badge-blue">Resolved</span>
              </div>
            </div>

            <div class="ota-widget-footer">
              <div class="ota-widget-footer__item">
                <span class="ota-widget-footer__num">98%</span>
                <span class="ota-widget-footer__lbl">Match Rate</span>
              </div>
              <div class="ota-widget-footer__item">
                <span class="ota-widget-footer__num">4.2h</span>
                <span class="ota-widget-footer__lbl">Avg Resolution</span>
              </div>
              <div class="ota-widget-footer__item">
                <span class="ota-widget-footer__num">$2.1K</span>
                <span class="ota-widget-footer__lbl">Recovered Today</span>
              </div>
            </div>
          </div>

          <div class="ota-fbadge ota-fbadge--br">
            <div class="ota-fbadge__ico ota-ico-orange"><i class="fa-solid fa-rotate-right"></i></div>
            <div>
              <div class="ota-fbadge__lbl">Last Reconciled</div>
              <div class="ota-fbadge__val">2 mins ago</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════
  SECTION 2 · 360° SOLUTIONS — TIMELINE
══════════════════════════ -->

<?php
$ota_solutions = get_field('ota_solutions', $post->ID);

// Extract main section data
$sub_title = $ota_solutions['sub_title'] ?? '';
$title = $ota_solutions['title'] ?? '';
$description = $ota_solutions['description'] ?? '';
$timeline_items = $ota_solutions['360_solutions_timeline'] ?? [];
?>

<section class="ota-solutions" id="solutions">
  <div class="container">

    <div class="text-center mb-5 ota-reveal">
      <span class="ota-tag"><?php echo esc_html($sub_title); ?></span>
      <?php
    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span>' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
    ?>

    <h2 class="ota-h2"><?php echo $formatted_title; ?></h2>
      <p class="ota-p mx-auto" style="max-width:580px;"><?php echo esc_html($description); ?></p>
    </div>

    <div class="ota-tl-spine">
      <?php if (!empty($timeline_items)): ?>
        <?php foreach ($timeline_items as $index => $item): ?>
          <?php 
          $is_left = ($index % 2 === 0); // Even index = left card, odd = right card
          $delay_class = $is_left ? '' : 'ota-d1';
          $icon_html = $item['icon'] ? $item['icon'] : '<i class="fa-solid fa-circle"></i>'; // Fallback icon
          ?>
          
          <div class="ota-tl-item ota-tl-item--<?php echo $is_left ? 'left' : 'right'; ?> ota-reveal <?php echo $delay_class; ?>">
            
            <?php if ($is_left): ?>
              <!-- LEFT card -->
              <div class="ota-tl-left">
                <div class="ota-tl-card">
                  <span class="ota-tl-card__badge"><?php echo esc_html($item['sub_title']); ?></span>
                  <div class="ota-tl-card__title">
                    <?php echo esc_html($item['title']); ?>
                  </div>
                  <p class="ota-tl-card__desc"><?php echo esc_html($item['description']); ?></p>
                  <?php if (!empty($item['key_features'])): ?>
                    <ul class="ota-tl-card__bullets">
                      <?php foreach ($item['key_features'] as $feature): ?>
                        <li><?php echo esc_html($feature['content']); ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </div>
              </div>
            <?php else: ?>
              <!-- LEFT image (for right card layout) -->
              <div class="ota-tl-left">
                <div class="ota-tl-img">
                  <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>"/>
                  <div class="ota-tl-img__label"><?php echo esc_html($item['sub_title']); ?></div>
                </div>
              </div>
            <?php endif; ?>

            <!-- DYNAMIC TIMELINE NODE ICON -->
            <div class="ota-tl-node">
              <div class="ota-tl-node__circle">
                <?php echo $icon_html; ?>
              </div>
            </div>

            <?php if (!$is_left): ?>
              <!-- RIGHT card -->
              <div class="ota-tl-right">
                <div class="ota-tl-card">
                  <span class="ota-tl-card__badge"><?php echo esc_html($item['sub_title']); ?></span>
                  <div class="ota-tl-card__title">
                    <?php echo esc_html($item['title']); ?>
                  </div>
                  <p class="ota-tl-card__desc"><?php echo esc_html($item['description']); ?></p>
                  <?php if (!empty($item['key_features'])): ?>
                    <ul class="ota-tl-card__bullets">
                      <?php foreach ($item['key_features'] as $feature): ?>
                        <li><?php echo esc_html($feature['content']); ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </div>
              </div>
            <?php else: ?>
              <!-- RIGHT image (for left card layout) -->
              <div class="ota-tl-right">
                <div class="ota-tl-img">
                  <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>"/>
                  <div class="ota-tl-img__label"><?php echo esc_html($item['sub_title']); ?></div>
                </div>
              </div>
            <?php endif; ?>

          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div><!-- /ota-tl-spine -->
  </div>
</section>


<!-- ══════════════════════════
  SECTION 3 · OBJECTIVES
══════════════════════════ -->

<?php
$objectives_section = get_field('objectives_section', $post->ID);

// Extract main section data
$sub_title = $objectives_section['sub_title'] ?? '';
$title = $objectives_section['title'] ?? '';
$description = $objectives_section['description'] ?? '';
$objectives_list = $objectives_section['objectives_list'] ?? [];
$image = $objectives_section['image'] ?? '';

      
    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span>' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
    
?>

<section class="ota-objectives">
  <div class="container">
    <div class="ota-reveal">
      <span class="ota-tag"><?php echo esc_html($sub_title); ?></span>
      <h2 class="ota-h2"><?php echo $formatted_title; ?></h2>
      <p class="ota-p" style="margin-bottom:28px;"><?php echo esc_html($description); ?></p>
    </div>
    <div class="row align-items-center g-5">

      <div class="col-lg-6">
        <div class="ota-obj-list ota-reveal ota-d1" style="margin-top:28px;">
          
          <?php if (!empty($objectives_list)): ?>
            <?php foreach ($objectives_list as $index => $objective): ?>
              <?php $num = sprintf('%02d', ($index + 1)); // 01, 02, 03, etc. ?>
              <div class="ota-obj-item">
                <div class="ota-obj-num"><?php echo $num; ?></div>
                <div>
                  <div class="ota-obj-h"><?php echo esc_html($objective['title']); ?></div>
                  <p class="ota-obj-p"><?php echo esc_html($objective['description']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>

        </div>
      </div>

      <div class="col-lg-6 ota-reveal ota-d2">
        <div style="position:relative;">
          <div class="ota-obj-img-card">
            <?php if ($image): ?>
              <img src="<?php echo esc_url($image); ?>" alt="Financial data verification and reconciliation"/>
            <?php else: ?>
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=700&auto=format&fit=crop&q=80" alt="Financial data verification and reconciliation"/>
            <?php endif; ?>
          </div>
          <div class="ota-obj-overlay">
            <span class="ota-obj-overlay__num">$2.1K+</span>
            <span class="ota-obj-overlay__lbl">Recovered per hotel daily on avg.</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- ══════════════════════════
  SECTION 4 · PROCESS
══════════════════════════ -->
<?php
$how_it_works = get_field('how_it_works', $post->ID);

// Extract main section data
$sub_title = $how_it_works['sub_title'] ?? '';
$title = $how_it_works['title'] ?? '';
$description = $how_it_works['description'] ?? '';
$process_steps = $how_it_works['process_steps'] ?? [];
$image = $how_it_works['image'] ?? '';
$accuracy_rate = $how_it_works['accuracy_rate'] ?? '98%';
$accuracy_title = $how_it_works['accuracy_title'] ?? 'Commission Match Accuracy';
$accuracy_description = $how_it_works['accuracy_description'] ?? 'Across all OTA channels — updated daily with real-time reconciliation data from your PMS.';

    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span>' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
?>

<section class="ota-process">
  <div class="container">
    <div class="ota-reveal">
      <span class="ota-tag"><?php echo esc_html($sub_title); ?></span>
      <h2 class="ota-h2"><?php echo $formatted_title; ?></h2>
      <p class="ota-p" style="margin-bottom:36px;">
        <?php echo esc_html($description); ?>
      </p>
    </div>
    <div class="row align-items-center g-5">

      <div class="col-lg-7">
        <div class="ota-steps ota-reveal ota-d1">
          
          <?php if (!empty($process_steps)): ?>
            <?php foreach ($process_steps as $index => $step): ?>
              <?php 
              $num = sprintf('%02d', ($index + 1)); // 01, 02, 03, 04
              $is_active = ($index === 0) ? 'ota-step--active' : ''; // First step active
              ?>
              
              <div class="ota-step <?php echo $is_active; ?>">
                <div class="ota-step__num-wrap">
                  <div class="ota-step__num"><?php echo $num; ?></div>
                </div>
                <div class="ota-step__content">
                  <div class="ota-step__h"><?php echo esc_html($step['title']); ?></div>
                  <p class="ota-step__p"><?php echo esc_html($step['description']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>

        </div>
      </div>

      <div class="col-lg-5 ota-reveal ota-d2">
        <div class="ota-process-img">
          <?php if ($image): ?>
            <img src="<?php echo esc_url($image); ?>" alt="OTA reconciliation data analytics dashboard"/>
          <?php else: ?>
            <img src="https://listany-prod.s3.amazonaws.com/images/taxilla/key_financial_reconciliation_challenges_faced_by_otas_2p" alt="OTA reconciliation data analytics dashboard"/>
          <?php endif; ?>
        </div>
        <div class="ota-accuracy-badge">
          <div class="ota-accuracy-circle"><?php echo esc_html($accuracy_rate); ?></div>
          <div class="ota-accuracy-text">
            <span class="ota-accuracy-text__num"><?php echo esc_html($accuracy_title); ?></span>
            <span class="ota-accuracy-text__lbl"><?php echo esc_html($accuracy_description); ?></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- ══════════════════════════
  SECTION 5 · CTA — Compact Strip
══════════════════════════ -->

<?php
$cta_section = get_field('cta_section', $post->ID);

    $words = explode(' ', $cta_section['title']);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span>' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
?>

<section class="ota-cta" id="cta">
  <div class="container position-relative">
    <div class="ota-cta__wrap ota-reveal">

      <!-- Top: headline + sub -->
      <div class="ota-cta__top">
        <div class="ota-cta__top-text">

          <span class="ota-tag" style="margin-bottom:0;">
            <?php echo esc_html($cta_section['sub_title']); ?>
          </span>

          <h2 class="ota-cta__h">
            <?php echo $formatted_title; ?>
          </h2>

          <p class="ota-cta__sub">
            <?php echo esc_html($cta_section['description']); ?>
          </p>

        </div>

        <div class="ota-cta__top-btns">

          <a href="<?php echo esc_url($cta_section['button_1']['url']); ?>"
             class="ota-btn-primary-lg"
             target="<?php echo esc_attr($cta_section['button_1']['target']); ?>">
            <i class="fa-solid fa-rocket"></i>
            <?php echo esc_html($cta_section['button_1']['title']); ?>
          </a>

          <a href="<?php echo esc_url($cta_section['button_2']['url']); ?>"
             class="ota-btn-outline-lg"
             target="<?php echo esc_attr($cta_section['button_2']['target']); ?>">
            <i class="fa-regular fa-calendar"></i>
            <?php echo esc_html($cta_section['button_2']['title']); ?>
          </a>

        </div>
      </div>

    </div>
  </div>
</section>


<script>
  const ota_io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('ota-vis'); ota_io.unobserve(e.target); }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.ota-reveal').forEach(el => ota_io.observe(el));
</script>
<?php
 get_footer();
?>