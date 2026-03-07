<?php
/* Template Name: Bank Reconciliation Template */

get_header(); 

global $post;

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>


<!-- ════════════════════════════
       SECTION 1 — HERO
  ════════════════════════════ -->

<?php
$hero_section = get_field('hero_section', $post->ID);

// Extract data for easy access
$sub_title = $hero_section['sub_title'] ?? '';
$title = $hero_section['title'] ?? '';
$description = $hero_section['description'] ?? '';
$button_1 = $hero_section['button_1'] ?? [];
$button_2 = $hero_section['button_2'] ?? [];
$stat_list = $hero_section['stat_list'] ?? [];
$image = $hero_section['image'] ?? '';

    
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

<section class="bnkr-hero">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left Content -->
      <div class="col-lg-7">
        <span class="bnkr-badge"><i class="fas fa-bolt"></i> <?php echo esc_html($sub_title); ?></span>
        <h1 class="bnkr-hero-title">
          <?php echo $formatted_title; ?>
        </h1>
        <p class="bnkr-hero-desc">
          <?php echo esc_html($description); ?>
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="<?php echo esc_url($button_1['url'] ?? '#'); ?>" class="bnkr-btn-primary" <?php echo ($button_1['target'] ?? '') ? 'target="' . esc_attr($button_1['target']) . '"' : ''; ?>>
            <i class="fas fa-calendar-check"></i> <?php echo esc_html($button_1['title'] ?? 'Schedule A Demo'); ?>
          </a>
          <a href="<?php echo esc_url($button_2['url'] ?? '#'); ?>" class="bnkr-btn-outline" <?php echo ($button_2['target'] ?? '') ? 'target="' . esc_attr($button_2['target']) . '"' : ''; ?>>
            <i class="fas fa-play-circle"></i> <?php echo esc_html($button_2['title'] ?? 'Learn More'); ?>
          </a>
        </div>

        <!-- Stats -->
        <div class="bnkr-hero-stats">
          <?php if (!empty($stat_list)): ?>
            <?php foreach ($stat_list as $stat): ?>
              <div class="bnkr-hero-stat-item">
                <div class="bnkr-hero-stat-num"><?php echo esc_html($stat['title']); ?></div>
                <div class="bnkr-hero-stat-label"><?php echo esc_html($stat['description']); ?></div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- Right Image -->
      <div class="col-lg-5">
        <div class="bnkr-hero-img-wrap">
          <div class="bnkr-hero-img-card">
            <?php if ($image): ?>
              <img src="<?php echo esc_url($image); ?>" alt="Bank Reconciliation Dashboard"/>
            <?php else: ?>
              <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=720&q=80&auto=format&fit=crop" alt="Bank Reconciliation Dashboard"/>
            <?php endif; ?>
          </div>
          <div class="bnkr-hero-float-badge">
            <div class="bnkr-fb-icon"><i class="fas fa-check-circle"></i></div>
            <div class="bnkr-fb-text">
              <strong>Matched ✅</strong>
              PMS & Bank in sync
            </div>
          </div>
          <div class="bnkr-hero-float-badge2">
            <i class="fas fa-shield-alt"></i> Bank-Level Security
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



  <!-- ════════════════════════════
       SECTION 2 — HOW IT WORKS + LIVE TABLE
  ════════════════════════════ -->
<?php
$how_it_works_section = get_field('how_it_works_section', $post->ID);

    $words = explode(' ', $how_it_works_section['title']);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span class="bnkr-accent">' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
?>


<section class="bnkr-howitworks" id="how-it-work">
  <div class="container">

    <div class="text-center">
      <span class="bnkr-badge">
        <i class="fas fa-route"></i> <?php echo esc_html($how_it_works_section['sub_title']); ?>
      </span>

      <h2 class="bnkr-section-title">
        <?php echo $formatted_title; ?>
      </h2>

      <p class="bnkr-section-sub mx-auto">
        <?php echo esc_html($how_it_works_section['description']); ?>
      </p>
    </div>

    <!-- Steps -->
    <div class="bnkr-steps-row">

      <?php if(!empty($how_it_works_section['process_steps'])): ?>
        <?php foreach($how_it_works_section['process_steps'] as $index => $step): 
          $step_number = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
        ?>
          <div class="bnkr-step-item">
            <div class="bnkr-step-num"><?php echo $step_number; ?></div>

            <h5><?php echo esc_html($step['title']); ?></h5>

            <p><?php echo esc_html($step['description']); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

    </div>

    <!-- Live Demo Table (STATIC) -->
    <div class="bnkr-table-wrap">
      <div class="bnkr-table-header">
        <span class="bnkr-th-title"><i class="fas fa-table me-2"></i>Live Reconciliation Dashboard — September 2025</span>
        <div class="bnkr-th-dots">
          <span></span><span></span><span></span>
        </div>
      </div>

      <div class="table-responsive">
        <table class="bnkr-recon-table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Room Revenue</th>
              <th>PMS Visa / DS / MC</th>
              <th>PMS Amex</th>
              <th>Direct Bill</th>
              <th>Bank Visa / DS / MC</th>
              <th>Bank Amex</th>
              <th>Merchant Amex</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>09/22 Mon</td>
              <td>$2,450.00</td>
              <td>$1,800.00</td>
              <td>$400.00</td>
              <td>$250.00</td>
              <td>$1,800.00</td>
              <td>$400.00</td>
              <td>$0.00</td>
              <td><span class="bnkr-status-matched"><i class="fas fa-check-circle"></i> Matched</span></td>
            </tr>
            <tr>
              <td>09/23 Tues</td>
              <td>$3,000.00</td>
              <td>$2,200.00</td>
              <td>$600.00</td>
              <td>$200.00</td>
              <td>$2,100.00</td>
              <td>$500.00</td>
              <td>$0.00</td>
              <td><span class="bnkr-status-unmatched"><i class="fas fa-times-circle"></i> Unmatched</span></td>
            </tr>
            <tr>
              <td>09/25 Wed</td>
              <td>$1,750.00</td>
              <td>$1,300.00</td>
              <td>$350.00</td>
              <td>$100.00</td>
              <td>—</td>
              <td>—</td>
              <td>—</td>
              <td><span class="bnkr-status-pending"><i class="fas fa-clock"></i> In Process</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="bnkr-table-note">
        <i class="fas fa-lightbulb"></i>
        <span><strong>Smart Suggestion:</strong> Possible delay in Visa settlement for 09/23 — check merchant batch cutoff time.</span>
      </div>
    </div>

  </div>
</section>

<!-- ════════════════════════════
       SECTION 3 — KEY FEATURES
  ════════════════════════════ -->

<?php
$key_features_section = get_field('key_features_section', $post->ID);

// Extract main section data
$sub_title = $key_features_section['sub_title'] ?? '';
$title = $key_features_section['title'] ?? '';
$description = $key_features_section['description'] ?? '';
$feature_list = $key_features_section['feature_list'] ?? [];

    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span class="bnkr-accent">' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
?>

<section class="bnkr-features">
  <div class="container">
    <div class="text-center">
      <span class="bnkr-badge"><i class="fas fa-star"></i> <?php echo esc_html($sub_title); ?></span>
      <h2 class="bnkr-section-title"><?php echo $formatted_title; ?></h2>
      <p class="bnkr-section-sub mx-auto">
        <?php echo esc_html($description); ?>
      </p>
    </div>

    <div class="bnkr-features-grid">
      <?php if (!empty($feature_list)): ?>
        <?php foreach ($feature_list as $feature): ?>
          <div class="bnkr-feature-card bnkr-fade-up">
            <div class="bnkr-feature-icon">
              <?php echo $feature['icon'] ? $feature['icon'] : '<i class="fas fa-circle"></i>'; ?>
            </div>
            <h4><?php echo esc_html($feature['title']); ?></h4>
            <p><?php echo esc_html($feature['description']); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>


  <!-- ════════════════════════════
       SECTION 4 — WHY INNGENIUS
  ════════════════════════════ -->

<?php
$why_inngenius_section = get_field('why_inngenius_section', $post->ID);

// Extract main section data
$sub_title = $why_inngenius_section['sub_title'] ?? '';
$title = $why_inngenius_section['title'] ?? '';
$description = $why_inngenius_section['description'] ?? '';
$benefit_list = $why_inngenius_section['benefit_list'] ?? [];
$image = $why_inngenius_section['image'] ?? '';

    $words = explode(' ', $title);

    foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
            $words[$index] = '<span class="bnkr-accent">' . esc_html($word) . '</span>';
        } else {
            $words[$index] = esc_html($word);
        }
    }

    $formatted_title = implode(' ', $words);
?>

<section class="bnkr-why">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Image -->
      <div class="col-lg-5 order-lg-2">
        <div class="bnkr-why-img-col">
          <div class="bnkr-why-img-main">
            <?php if ($image): ?>
              <img src="<?php echo esc_url($image); ?>" alt="Hotel Financial Management"/>
            <?php else: ?>
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=700&q=80&auto=format&fit=crop" alt="Hotel Financial Management"/>
            <?php endif; ?>
          </div>
          <div class="bnkr-why-float">
            <div class="bnkr-why-float-label">Time Reclaimed Daily</div>
            <div class="bnkr-why-float-val">4+ hrs</div>
            <div class="bnkr-why-float-sub">per hotel, per day</div>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="col-lg-7 order-lg-1">
        <span class="bnkr-badge"><i class="fas fa-trophy"></i> <?php echo esc_html($sub_title); ?></span>
        <h2 class="bnkr-section-title"><?php echo $formatted_title; ?></h2>
        <p class="bnkr-section-sub">
          <?php echo esc_html($description); ?>
        </p>

        <ul class="bnkr-benefit-list">
          <?php if (!empty($benefit_list)): ?>
            <?php foreach ($benefit_list as $benefit): ?>
              <li>
                <div class="bnkr-benefit-icon">
                  <?php echo $benefit['icon'] ? $benefit['icon'] : '<i class="fas fa-circle"></i>'; ?>
                </div>
                <div class="bnkr-benefit-text">
                  <h6><?php echo esc_html($benefit['title']); ?></h6>
                  <p><?php echo esc_html($benefit['description']); ?></p>
                </div>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>

    </div>
  </div>
</section>


  <!-- ════════════════════════════
       SECTION 5 — CTA STRIP
  ════════════════════════════ -->

<?php
$cta_section = get_field('cta_section', $post->ID);

// Extract data
$title              = $cta_section['title'] ?? 'Ready to Reconcile Smarter?';
$description        = $cta_section['description'] ?? 'Join 200+ hotels — eliminate manual errors and get real-time financial clarity today.';
$button_1           = $cta_section['button_1'] ?? [];
$button_2           = $cta_section['button_2'] ?? [];
$stat_list          = $cta_section['stat_list'] ?? [];
?>

<section class="bnkr-cta">
  <!-- Main Strip -->
  <div class="bnkr-cta-strip">
    <div class="container">
      <div class="bnkr-cta-strip-inner">
        <div class="bnkr-cta-strip-text">
          <h2><?php echo esc_html($title); ?></h2>
          <p><?php echo esc_html($description); ?></p>
        </div>
        <div class="bnkr-cta-strip-actions">
          <a href="<?php echo esc_url($button_1['url'] ?? '#'); ?>"
             class="bnkr-btn-white"
             <?php echo ($button_1['target'] ?? '') ? 'target="' . esc_attr($button_1['target']) . '"' : ''; ?>>
            <i class="fas fa-calendar-check"></i>
            <?php echo esc_html($button_1['title'] ?? 'Schedule A Free Demo'); ?>
          </a>
          <a href="<?php echo esc_url($button_2['url'] ?? '#'); ?>"
             class="bnkr-btn-white-outline"
             <?php echo ($button_2['target'] ?? '') ? 'target="' . esc_attr($button_2['target']) . '"' : ''; ?>>
            <i class="fas fa-phone-alt"></i>
            <?php echo esc_html($button_2['title'] ?? 'Talk to Sales'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Trust Bar -->
  <div class="bnkr-cta-trust-strip">
    <div class="container">
      <div class="bnkr-cta-trust-strip-inner">
        <?php if (!empty($stat_list)): ?>
          <?php foreach ($stat_list as $stat): ?>
            <div class="bnkr-cta-trust-item">
              <i class="fas fa-check-circle"></i>
              <?php echo esc_html($stat['title']); ?>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script>
  // Scroll-triggered fade-up animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('bnkr-visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.bnkr-fade-up').forEach(el => observer.observe(el));

  // Auto-trigger hero items
  document.querySelectorAll('.bnkr-hero .bnkr-fade-up').forEach(el => el.classList.add('bnkr-visible'));
</script>
<?php
 get_footer();
?>