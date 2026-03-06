<?php
/* Template Name: Night Audit Reconciliation Template */

get_header(); 

global $post;

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>

<!-- ══════════════════════════════
       SECTION 1 — HERO
  ══════════════════════════════ -->

<?php
$hero_section = get_field('hero_section', $post->ID);

// Extract data
$sub_title      = $hero_section['sub_title'] ?? 'New Release — InnGenius';
$title          = $hero_section['title'] ?? 'Night Audit Reconciliation Automated for Hotels';
$description    = $hero_section['description'] ?? 'Close every day with confidence. Our automated night audit system verifies every guest payment transaction — cash, card, direct bill — so mismatched numbers are caught and resolved before the next business day begins.';
$key_features   = $hero_section['key_features'] ?? [];
$button_1       = $hero_section['button_1'] ?? [];
$button_2       = $hero_section['button_2'] ?? [];
$image          = $hero_section['image'] ?? '';

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

<section class="nadr-hero">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left -->
      <div class="col-lg-7">
        <span class="nadr-badge"><i class="fas fa-moon"></i> <?php echo esc_html($sub_title); ?></span>
        <h1 class="nadr-hero-title"><?php echo $formatted_title; ?></h1>
        <p class="nadr-hero-desc"><?php echo esc_html($description); ?></p>

        <!-- Pill highlights -->
        <div class="nadr-hero-pills">
          <?php if (!empty($key_features)): ?>
            <?php foreach ($key_features as $kf): ?>
              <span class="nadr-hero-pill">
                <i class="fas fa-check-circle"></i>
                <?php echo esc_html($kf['feature']); ?>
              </span>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <div class="d-flex gap-3 flex-wrap">
          <a href="<?php echo esc_url($button_1['url'] ?? '#'); ?>"
             class="nadr-btn-primary"
             <?php echo ($button_1['target'] ?? '') ? 'target="' . esc_attr($button_1['target']) . '"' : ''; ?>>
            <i class="fas fa-calendar-check"></i>
            <?php echo esc_html($button_1['title'] ?? 'Schedule A Demo'); ?>
          </a>
          <a href="<?php echo esc_url($button_2['url'] ?? '#how-it-works'); ?>"
             class="nadr-btn-outline"
             <?php echo ($button_2['target'] ?? '') ? 'target="' . esc_attr($button_2['target']) . '"' : ''; ?>>
            <i class="fas fa-info-circle"></i>
            <?php echo esc_html($button_2['title'] ?? 'Learn More'); ?>
          </a>
        </div>
      </div>

      <!-- Right Image -->
      <div class="col-lg-5">
        <div class="nadr-hero-img-wrap">
          <div class="nadr-hero-img-card">
            <?php if ($image): ?>
              <img src="<?php echo esc_url($image); ?>" alt="Night Audit Reconciliation Dashboard"/>
            <?php else: ?>
              <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=720&q=80&auto=format&fit=crop" alt="Night Audit Reconciliation Dashboard"/>
            <?php endif; ?>
          </div>
          <div class="nadr-hero-badge-1">
            <div class="nadr-hb1-icon"><i class="fas fa-check-double"></i></div>
            <div class="nadr-hb1-text">
              <strong>Audit Complete ✅</strong>
              <span>All transactions verified</span>
            </div>
          </div>
          <div class="nadr-hero-badge-2">
            <i class="fas fa-shield-alt"></i> Fraud Protected
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- ══════════════════════════════
       SECTION 2 — CORE FEATURES
  ══════════════════════════════ -->

<?php
$core_capabilities_section = get_field('core_capabilities_section', $post->ID);

// Extract data
$sub_title          = $core_capabilities_section['sub_title'] ?? 'Core Capabilities';
$title              = $core_capabilities_section['title'] ?? 'Accurate, Transparent & Stress-Free Daily Reporting';
$description        = $core_capabilities_section['description'] ?? 'InnGenius handles every step of your end-of-day reconciliation — from payment verification to final audit summary — automatically.';
$core_capabilities_list = $core_capabilities_section['core_capabilities_list'] ?? [];

    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span class="nadr-accent">' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
?>

<section class="nadr-features">
  <div class="container">
    <div class="text-center">
      <span class="nadr-badge"><i class="fas fa-star"></i> <?php echo esc_html($sub_title); ?></span>
      <h2 class="nadr-section-title"><?php echo $formatted_title; ?></h2>
      <p class="nadr-section-sub mx-auto">
        <?php echo esc_html($description); ?>
      </p>
    </div>

    <div class="nadr-features-row">
      <?php if (!empty($core_capabilities_list)): ?>
        <?php foreach ($core_capabilities_list as $cap): ?>
          <div class="nadr-feat-card nadr-fade-up">
            <div class="nadr-feat-icon">
              <?php echo $cap['icon'] ? $cap['icon'] : '<i class="fas fa-circle"></i>'; ?>
            </div>
            <h4><?php echo esc_html($cap['title']); ?></h4>
            <p><?php echo esc_html($cap['description']); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>



  <!-- ══════════════════════════════
       SECTION 3 — HOW IT WORKS
  ══════════════════════════════ -->

<?php
$how_it_works_section = get_field('how_it_works_section', $post->ID);

// Extract data
$sub_title        = $how_it_works_section['sub_title'] ?? 'How It Works';
$title            = $how_it_works_section['title'] ?? 'From End-of-Day Data to Verified Reports — Overnight';
$description      = $how_it_works_section['description'] ?? 'InnGenius runs silently in the background each night, reconciling every transaction so your team wakes up to a clean, verified audit.';
$process_step_list = $how_it_works_section['process_step_list'] ?? [];
$image            = $how_it_works_section['image'] ?? '';


    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span class="nadr-accent">' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
?>

<section class="nadr-process" id="how-it-works">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Image -->
      <div class="col-lg-5">
        <div class="nadr-process-img-wrap">
          <div class="nadr-process-img-frame">
            <?php if ($image): ?>
              <img src="<?php echo esc_url($image); ?>" alt="Night Audit Process"/>
            <?php else: ?>
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=700&q=80&auto=format&fit=crop" alt="Night Audit Process"/>
            <?php endif; ?>
          </div>
          <div class="nadr-process-img-stat">
            <div class="nadr-ps-num">EOD</div>
            <div class="nadr-ps-label">Auto-closed every night</div>
          </div>
        </div>
      </div>

      <!-- Steps -->
      <div class="col-lg-7">
        <span class="nadr-badge"><i class="fas fa-route"></i> <?php echo esc_html($sub_title); ?></span>
        <h2 class="nadr-section-title"><?php echo $formatted_title; ?></h2>
        <p class="nadr-section-sub">
          <?php echo esc_html($description); ?>
        </p>

        <ul class="nadr-step-list">
          <?php if (!empty($process_step_list)): ?>
            <?php foreach ($process_step_list as $index => $step): ?>
              <?php $num = sprintf('%02d', ($index + 1)); // 01, 02, 03, 04 ?>
              <li>
                <div class="nadr-step-num"><?php echo $num; ?></div>
                <div class="nadr-step-body">
                  <h5><?php echo esc_html($step['title']); ?></h5>
                  <p><?php echo esc_html($step['description']); ?></p>
                </div>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>

    </div>
  </div>
</section>



  <!-- ══════════════════════════════
       SECTION 4 — BENEFITS + KPI PANEL
  ══════════════════════════════ -->

      <?php
$why_inngenius_section = get_field('why_inngenius_section', $post->ID);

// Extract data
$sub_title      = $why_inngenius_section['sub_title'] ?? 'Why InnGenius Night Audit';
$title          = $why_inngenius_section['title'] ?? 'Built to Give Every Hotel Financial Peace of Mind';
$description    = $why_inngenius_section['description'] ?? 'Manual night audits are error-prone, time-consuming, and costly. Here\'s how InnGenius changes the game:';
$benefits_list  = $why_inngenius_section['benefits_list'] ?? [];
$image          = $why_inngenius_section['image'] ?? '';

    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span class="nadr-accent">' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
?>

<section class="nadr-benefits">
  <div class="container">
    <div class="row g-5 align-items-center">

      <!-- Left: Benefits -->
      <div class="col-lg-7">
        <span class="nadr-badge"><i class="fas fa-trophy"></i> <?php echo esc_html($sub_title); ?></span>
        <h2 class="nadr-section-title"><?php echo $formatted_title; ?></h2>
        <p class="nadr-section-sub" style="margin-bottom: 32px;">
          <?php echo esc_html($description); ?>
        </p>

        <div class="nadr-benefit-grid">
          <?php if (!empty($benefits_list)): ?>
            <?php foreach ($benefits_list as $index => $b): ?>
              <div class="nadr-benefit-card nadr-fade-up">
                <div class="nadr-benefit-card-icon">
                  <?php
                    echo $b['icon'];
                  ?>
                </div>
                <div>
                  <h5><?php echo esc_html($b['title']); ?></h5>
                  <p><?php echo esc_html($b['description']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- Right: KPI Panel -->
      <div class="col-lg-5">
        <div class="nadr-process-img-frame">
          <?php if ($image): ?>
            <img src="<?php echo esc_url($image); ?>" alt="Financial Peace of Mind for Hotels"/>
          <?php else: ?>
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=700&q=80&auto=format&fit=crop" alt="Financial Peace of Mind for Hotels"/>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>



  <!-- ══════════════════════════════
       SECTION 5 — CTA STRIP
  ══════════════════════════════ -->


<?php
$cta_section = get_field('cta_section', $post->ID);

// Extract data
$title        = $cta_section['title'] ?? 'Close Every Day with Confidence';
$description  = $cta_section['description'] ?? 'Automate your night audits and ensure every transaction is accurate before the next business day begins.';
$button_1     = $cta_section['button_1'] ?? [];
$button_2     = $cta_section['button_2'] ?? [];
?>

<section class="nadr-cta">
  <div class="nadr-cta-strip">
    <div class="container">
      <div class="nadr-cta-strip-inner">
        <div class="nadr-cta-strip-text">
          <h2><?php echo esc_html($title); ?></h2>
          <p><?php echo esc_html($description); ?></p>
        </div>
        <div class="nadr-cta-strip-actions">
          <a href="<?php echo esc_url($button_1['url'] ?? '#'); ?>"
             class="nadr-btn-white"
             <?php echo ($button_1['target'] ?? '') ? 'target="' . esc_attr($button_1['target']) . '"' : ''; ?>>
            <i class="fas fa-calendar-check"></i>
            <?php echo esc_html($button_1['title'] ?? 'Schedule A Free Demo'); ?>
          </a>
          <a href="<?php echo esc_url($button_2['url'] ?? '#'); ?>"
             class="nadr-btn-white-outline"
             <?php echo ($button_2['target'] ?? '') ? 'target="' . esc_attr($button_2['target']) . '"' : ''; ?>>
            <i class="fas fa-phone-alt"></i>
            <?php echo esc_html($button_2['title'] ?? 'Talk to Sales'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<script>
  const nadrObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('nadr-visible');
        nadrObserver.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.nadr-fade-up').forEach(el => nadrObserver.observe(el));
  document.querySelectorAll('.nadr-hero .nadr-fade-up').forEach(el => el.classList.add('nadr-visible'));
</script>

<?php
 get_footer();
?>