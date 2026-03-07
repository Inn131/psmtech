<?php
/* Template Name: Revenue Management Template */

get_header(); 

global $post;

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>

<?php
$hero_section = get_field('hero_section', $post->ID);

if ($hero_section) {
  extract($hero_section);
}

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

<!-- ══════════════════════════════
     SECTION 1 — HERO
════════════════════════════════ -->
<section class="rvmg-hero">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left -->
      <div class="col-lg-7">
        <span class="rvmg-badge"><i class="fas fa-chart-line"></i> <?php echo esc_html($sub_title ?? 'New Release — InnGenius'); ?></span>
        <h1 class="rvmg-hero-title">
          <?php echo $formatted_title; ?>
        </h1>
        <p class="rvmg-hero-desc">
          <?php echo esc_html($description ?? 'Empower your team with live, data-driven insights across every property. InnGenius Revenue Management turns complex metrics into clear, visual decisions — so you can act faster, price smarter, and grow profitably.'); ?>
        </p>

        <!-- Audience pills -->
        <div class="rvmg-audience-pills">
          <?php if (!empty($audience_list)): ?>
            <?php foreach ($audience_list as $audience_item): ?>
              <span class="rvmg-aud-pill">
                <?php if (isset($audience_item['audience'])): ?>
                  <i class="fas fa-user-tie"></i> <?php echo esc_html($audience_item['audience']); ?>
                <?php endif; ?>
              </span>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <div class="d-flex gap-3 flex-wrap">
          <?php if (!empty($button_1)): ?>
            <a href="<?php echo esc_url($button_1['url'] ?? 'https://test.inngeniuspsm.com/contact-us/'); ?>" 
             class="rvmg-btn-primary" 
             <?php if (!empty($button_1['target'])) echo 'target="' . esc_attr($button_1['target']) . '"'; ?>>
             <i class="fas fa-calendar-check"></i> <?php echo esc_html($button_1['title'] ?? 'Schedule A Demo'); ?>
           </a>
         <?php endif; ?>

         <?php if (!empty($button_2)): ?>
          <a href="<?php echo esc_url($button_2['url'] ?? 'https://psmtech.com/product/revenue-management/'); ?>" 
           class="rvmg-btn-outline" 
           <?php if (!empty($button_2['target'])) echo 'target="' . esc_attr($button_2['target']) . '"'; ?>>
           <i class="fas fa-info-circle"></i> <?php echo esc_html($button_2['title'] ?? 'Learn More'); ?>
         </a>
       <?php endif; ?>
     </div>

   </div>

   <!-- Right — Dashboard Mockup (Static) -->
   <div class="col-lg-5">
    <div class="rvmg-hero-right">
      <div class="rvmg-dash-mockup">
        <!-- Topbar -->
        <div class="rvmg-dash-topbar">
          <span class="rvmg-dash-topbar-title"><i class="fas fa-chart-bar me-2"></i>Revenue Dashboard — Live View</span>
          <div class="rvmg-dash-topbar-dots"><span></span><span></span><span></span></div>
        </div>
        <!-- Body -->
        <div class="rvmg-dash-body">
          <!-- Mini KPI row -->
          <div class="rvmg-mini-kpi-row">
            <div class="rvmg-mini-kpi">
              <div class="rvmg-mini-kpi-label">ADR</div>
              <div class="rvmg-mini-kpi-val">$142.50</div>
            </div>
            <div class="rvmg-mini-kpi">
              <div class="rvmg-mini-kpi-label">Occupancy</div>
              <div class="rvmg-mini-kpi-val rvmg-green">83.4%</div>
            </div>
            <div class="rvmg-mini-kpi">
              <div class="rvmg-mini-kpi-label">Total Rev</div>
              <div class="rvmg-mini-kpi-val">$28,640</div>
            </div>
          </div>
          <!-- Sparkline -->
          <div class="rvmg-spark-label">DAILY REVENUE TREND — LAST 14 DAYS</div>
          <div class="rvmg-spark-bars">
            <div class="rvmg-spark-bar" style="height:38%"></div>
            <div class="rvmg-spark-bar" style="height:52%"></div>
            <div class="rvmg-spark-bar rvmg-mid" style="height:45%"></div>
            <div class="rvmg-spark-bar rvmg-mid" style="height:60%"></div>
            <div class="rvmg-spark-bar rvmg-mid" style="height:55%"></div>
            <div class="rvmg-spark-bar rvmg-mid" style="height:70%"></div>
            <div class="rvmg-spark-bar rvmg-mid" style="height:65%"></div>
            <div class="rvmg-spark-bar rvmg-active" style="height:82%"></div>
            <div class="rvmg-spark-bar rvmg-active" style="height:90%"></div>
            <div class="rvmg-spark-bar rvmg-mid" style="height:78%"></div>
            <div class="rvmg-spark-bar rvmg-active" style="height:95%"></div>
            <div class="rvmg-spark-bar rvmg-active" style="height:100%"></div>
            <div class="rvmg-spark-bar rvmg-active" style="height:88%"></div>
            <div class="rvmg-spark-bar rvmg-active" style="height:92%"></div>
          </div>
          <!-- Multi-Property Compare -->
          <div class="rvmg-prop-compare">
            <div class="rvmg-spark-label" style="margin-top:14px;">MULTI-PROPERTY OCCUPANCY COMPARISON</div>
            <div class="rvmg-prop-row">
              <div class="rvmg-prop-name">Property A</div>
              <div class="rvmg-prop-bar-track"><div class="rvmg-prop-bar-fill" style="width:83%"></div></div>
              <div class="rvmg-prop-val">83%</div>
            </div>
            <div class="rvmg-prop-row">
              <div class="rvmg-prop-name">Property B</div>
              <div class="rvmg-prop-bar-track"><div class="rvmg-prop-bar-fill" style="width:71%"></div></div>
              <div class="rvmg-prop-val">71%</div>
            </div>
            <div class="rvmg-prop-row">
              <div class="rvmg-prop-name">Property C</div>
              <div class="rvmg-prop-bar-track"><div class="rvmg-prop-bar-fill" style="width:91%"></div></div>
              <div class="rvmg-prop-val">91%</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Float badges -->
      <div class="rvmg-hero-fb1">
        <div class="rvmg-fbi"><i class="fas fa-arrow-trend-up"></i></div>
        <div>
          <strong>Revenue Up 14%</strong>
          <span>vs. same period last year</span>
        </div>
      </div>
      <div class="rvmg-hero-fb2">
        <i class="fas fa-bolt"></i> Live Data Sync
      </div>
    </div>
  </div>

</div>
</div>
</section>


<!-- ══════════════════════════════
     SECTION 2 — KEY FEATURES
════════════════════════════════ -->
<?php
$key_features_section = get_field('key_features_section', $post->ID);

if ($key_features_section) {
  extract($key_features_section);
}


$words = explode(' ', $title);

foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
          $words[$index] = '<span class="rvmg-accent">' . esc_html($word) . '</span>';
        } else {
          $words[$index] = esc_html($word);
        }
      }

      $formatted_title = implode(' ', $words);
      ?>

      <section class="rvmg-features" id="features">
        <div class="container">
          <div class="text-center mb-5">
            <span class="rvmg-badge"><i class="fas fa-star"></i> <?php echo esc_html($sub_title ?? 'Core Capabilities'); ?></span>
            <h2 class="rvmg-section-title"><?php echo $formatted_title; ?></h2>
            <p class="rvmg-section-sub mx-auto">
              <?php echo esc_html($description ?? 'InnGenius delivers five powerful capabilities in one unified Revenue Management module — built for the pace of modern hospitality.'); ?>
            </p>
          </div>

          <?php if (!empty($feature_list)): ?>
            <?php foreach ($feature_list as $index => $feature): ?>
              <?php 
              $feat_num = $index + 1;
              $is_reversed = ($feat_num % 2 == 0) ? ' style="flex-direction: row-reverse;"' : '';
              $image_url = !empty($feature['image']) ? $feature['image'] : 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80&auto=format&fit=crop';
              $image_alt = !empty($feature['title']) ? $feature['title'] : 'Feature';
              ?>
              
              <!-- Feature <?php echo $feat_num; ?> -->
              <div class="rvmg-feat-row rvmg-fade-up"<?php echo $is_reversed; ?>>
                <div class="rvmg-feat-img-side">
                  <div class="rvmg-feat-img-frame">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"/>
                  </div>
                </div>
                <div class="rvmg-feat-content-side">
                  <div class="rvmg-feat-num"><?php echo sprintf('%02d', $feat_num); ?></div>
                  <div class="rvmg-feat-icon-wrap">
                    <div class="rvmg-feat-icon">
                      <?php if (!empty($feature['icon'])): ?>
                        <?php echo $feature['icon']; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                  <h3><?php echo esc_html($feature['title'] ?? 'Feature Title'); ?></h3>
                  <p><?php echo esc_html($feature['description'] ?? 'Feature description goes here.'); ?></p>
                  
                  <?php if (!empty($feature['feature_tags'])): ?>
                    <div class="rvmg-feat-tags">
                      <?php foreach ($feature['feature_tags'] as $tag_item): ?>
                        <?php if (!empty($tag_item['tags'])): ?>
                          <span class="rvmg-feat-tag"><i class="fas fa-check"></i> <?php echo esc_html($tag_item['tags']); ?></span>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>

          <?php endif; ?>

        </div>
      </section>

<!-- ══════════════════════════════
     SECTION 3 — KPI DASHBOARD
════════════════════════════════ -->

<?php
$kpi_dashboard_section = get_field('kpi_dashboard_section', $post->ID);

if ($kpi_dashboard_section) {
  extract($kpi_dashboard_section);
}

$words = explode(' ', $title);

foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
          $words[$index] = '<span class="rvmg-accent">' . esc_html($word) . '</span>';
        } else {
          $words[$index] = esc_html($word);
        }
      }

      $formatted_title = implode(' ', $words);
      ?>

      <section class="rvmg-kpis">
        <div class="container">
          <div class="text-center">
            <span class="rvmg-badge"><i class="fas fa-tachometer-alt"></i> <?php echo esc_html($sub_title ?? 'Essential KPIs'); ?></span>
            <h2 class="rvmg-section-title"><?php echo $formatted_title; ?></h2>
            <p class="rvmg-section-sub mx-auto">
              <?php echo esc_html($description ?? 'The InnGenius KPI dashboard consolidates your most critical hotel performance data into one real-time view — so nothing slips through the cracks.'); ?>
            </p>
          </div>

          <div class="rvmg-kpi-grid">
            <?php if (!empty($kpi_list)): ?>
              <?php foreach ($kpi_list as $kpi): ?>
                <div class="rvmg-kpi-card rvmg-fade-up">
                  <div class="rvmg-kpi-card-top">
                    <span class="rvmg-kpi-abbr"><?php echo esc_html($kpi['sub_title'] ?? 'KPI'); ?></span>
                    <div class="rvmg-kpi-icon">
                      <?php if (!empty($kpi['icon'])): ?>
                        <?php echo $kpi['icon']; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php if (!empty($kpi['title'])): ?>
                    <h4><?php echo esc_html($kpi['title']); ?></h4>
                  <?php endif; ?>
                  <?php if (!empty($kpi['description'])): ?>
                    <p><?php echo esc_html($kpi['description']); ?></p>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
              
            <?php endif; ?>
          </div>
        </div>
      </section>


<!-- ══════════════════════════════
     SECTION 4 — BENEFITS + WHO IT'S FOR
════════════════════════════════ -->
<?php
$why_inngenius_revenue_management = get_field('why_inngenius_revenue_management', $post->ID);

if ($why_inngenius_revenue_management) {
  extract($why_inngenius_revenue_management);
}
$words = explode(' ', $title);

foreach ($words as $index => $word) {
        if ($index == 1 || $index == 2) { // 2nd and 3rd word
          $words[$index] = '<span class="rvmg-accent">' . esc_html($word) . '</span>';
        } else {
          $words[$index] = esc_html($word);
        }
      }

      $formatted_title = implode(' ', $words);
      ?>

      <section class="rvmg-benefits">
        <div class="container">
          <div class="text-center mb-2">
            <span class="rvmg-badge"><i class="fas fa-trophy"></i> <?php echo esc_html($sub_title ?? 'Why InnGenius Revenue Management'); ?></span>
            <h2 class="rvmg-section-title"><?php echo $formatted_title; ?></h2>
            <p class="rvmg-section-sub mx-auto">
              <?php echo esc_html($description ?? "InnGenius doesn't just report — it empowers. Here's how our Revenue Management module creates measurable impact for your business:"); ?>
            </p>
          </div>

          <?php if (!empty($feature_list)): ?>
            <div class="rvmg-ben-grid">
              <?php foreach ($feature_list as $index => $feature): ?>
                <div class="rvmg-ben-card rvmg-fade-up">
                  <div class="rvmg-ben-icon"><?php echo $feature['icon']; ?></div>
                  <div>
                    <?php if (!empty($feature['title'])): ?>
                      <h5><?php echo esc_html($feature['title']); ?></h5>
                    <?php endif; ?>
                    <?php if (!empty($feature['description'])): ?>
                      <p><?php echo esc_html($feature['description']); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <!-- Who it's for -->
          <?php if (!empty($benefit_list)): ?>
            <div class="rvmg-who-strip">
              <h4><i class="fas fa-users me-2" style="color:var(--theme)"></i> <?php echo esc_html($benefits_title ?? 'Who InnGenius Revenue Management Is For'); ?></h4>
              <div class="rvmg-who-cards">
                <?php foreach ($benefit_list as $index => $benefit): ?>
                  <div class="rvmg-who-card">
                    <div class="rvmg-who-card-icon"><?php echo $benefit['icon']; ?></div>
                    <?php if (!empty($benefit['title'])): ?>
                      <h6><?php echo esc_html($benefit['title']); ?></h6>
                    <?php endif; ?>
                    <?php if (!empty($benefit['description'])): ?>
                      <p><?php echo esc_html($benefit['description']); ?></p>
                    <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>

        </div>
      </section>



<!-- ══════════════════════════════
     SECTION 5 — CTA STRIP
════════════════════════════════ -->
<?php
$cta_seciton = get_field('cta_seciton', $post->ID);

if ($cta_seciton) {
  extract($cta_seciton);
}
?>
<section class="rvmg-cta">
  <div class="rvmg-cta-strip">
    <div class="container">
      <div class="rvmg-cta-inner">
        <div class="rvmg-cta-text">
          <h2><?php echo esc_html($title ?? 'Ready to Transform Your Revenue Strategy?'); ?></h2>
          <p><?php echo esc_html($description ?? 'Unlock real-time insights and accelerate growth across all your properties with InnGenius.'); ?></p>
        </div>
        <div class="rvmg-cta-actions">
          <?php if (!empty($button_1)): ?>
            <a href="<?php echo esc_url($button_1['url'] ?? 'https://test.inngeniuspsm.com/contact-us/'); ?>" 
             class="rvmg-btn-white" 
             <?php if (!empty($button_1['target'])) echo 'target="' . esc_attr($button_1['target']) . '"'; else echo 'target="_blank"'; ?>>
             <i class="fas fa-calendar-check"></i> <?php echo esc_html($button_1['title'] ?? 'Schedule A Free Demo'); ?>
           </a>
         <?php endif; ?>

         <?php if (!empty($button_2)): ?>
          <a href="<?php echo esc_url($button_2['url'] ?? 'https://psmtech.com/contact-us/'); ?>" 
           class="rvmg-btn-woutline" 
           <?php if (!empty($button_2['target'])) echo 'target="' . esc_attr($button_2['target']) . '"'; else echo 'target="_blank"'; ?>>
           <i class="fas fa-phone-alt"></i> <?php echo esc_html($button_2['title'] ?? 'Talk to Sales'); ?>
         </a>
       <?php endif; ?>
     </div>
   </div>
 </div>
</div>
</section>


<script>
  const rvmgObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('rvmg-visible');
        rvmgObserver.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.rvmg-fade-up').forEach(el => rvmgObserver.observe(el));
  document.querySelectorAll('.rvmg-hero .rvmg-fade-up').forEach(el => el.classList.add('rvmg-visible'));
</script>
<?php
get_footer();
?>