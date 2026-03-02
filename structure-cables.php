<?php
/* Template Name: Structure Cables Template */

get_header(); 

global $post;
$hero_content = get_field('hero_content', $post->ID);

?>
<!-- Font Awesome 6 (Free CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php
if(!empty($hero_content))
{
?>
<!-- ══ HERO ══ -->
  <section class="sc-hero">
    <div class="container">
      <div class="sc-hero-inner">
        <div class="sc-hero-left">
          <h1 class="sc-hero-title">
            <?php echo $hero_content['title']; ?>
          </h1>
          <p class="sc-hero-desc">
            <?php echo $hero_content['description']; ?>
          </p>
          <div class="sc-hero-tags">
            <?php foreach ($hero_content['tags'] as $key => $tags) 
            {
            ?>
            <span class="sc-hero-tag"><?php echo $tags['tag_title']; ?></span>
            <?php
            } 
            ?>

          </div>
        </div>
        <div class="sc-hero-stats">
          <?php foreach ($hero_content['statistics'] as $key => $statistics) 
            {
            ?>
          <div class="sc-stat-card">
            <div class="sc-stat-num"><?php echo $statistics['title']; ?></div>
            <div class="sc-stat-lbl"><?php echo $statistics['description']; ?></div>
          </div>
          <?php
            } 
            ?>

        </div>
      </div>
    </div>
  </section>
<?php
}

$about_content = get_field('about_content', $post->ID);
if(!empty($about_content))
{
?>

  <!-- ══ ABOUT ══ -->
  <section class="sc-section sc-section--white">
    <div class="container">
      <div class="sc-about-grid">
        <div class="sc-about-img-wrap">
          <img src="<?php echo esc_url($about_content['image']); ?>" alt="<?php echo $about_content['title']; ?>"/>
          <div class="sc-about-img-badge">
            <b>16+</b>Years of Expertise
          </div>
        </div>
        <div class="sc-about-content">
          <div class="sc-tag"><?php echo $about_content['sub_title']; ?></div>
          <h2 class="sc-sec-title"><?php echo $about_content['title']; ?></h2>
          <?php echo $about_content['description']; ?>
          <ul class="sc-checklist">
            <?php foreach ($about_content['check_list'] as $key => $check_list) 
            {
            ?>
            <li>
              <div class="sc-check-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg>
              </div>
              <?php echo $check_list['title']; ?>
            </li>
            <?php 
            }
             ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php 
}

$cable_types_content = get_field('cable_types_content', $post->ID);
if(!empty($cable_types_content))
{
?>

  <!-- ══ CABLE TYPES ══ -->
  <section class="sc-section sc-section--gray">
    <div class="container">
      <div class="sc-cables-header">
        <div class="sc-tag"><?php echo $cable_types_content['sub_title']; ?></div>
        <h2 class="sc-sec-title"><?php echo $cable_types_content['title']; ?></h2>
        <?php echo $cable_types_content['description']; ?>
      </div>
      <div class="sc-cables-grid">

        <?php foreach ($cable_types_content['list'] as $key => $list) 
            {
            ?>
        <div class="sc-cable-card">
          <div class="sc-cable-accent sc-accent-navy"></div>
          <img class="sc-cable-card-img"
               src="<?php echo esc_url($list['image']); ?>"
               alt="<?php echo $list['title']; ?>"/>
          <div class="sc-cable-body">
            <div class="sc-cable-icon-row">
              <div class="sc-cable-icon sc-icon-navy">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1a3a6e" stroke-width="2.2"><rect x="2" y="7" width="4" height="4" rx="1"/><rect x="10" y="3" width="4" height="4" rx="1"/><rect x="18" y="7" width="4" height="4" rx="1"/><rect x="10" y="17" width="4" height="4" rx="1"/><path d="M4 11v3h8v-3M20 11v3h-8M12 7v3"/></svg>
              </div>
              <h3><?php echo $list['title']; ?></h3>
            </div>
            <p><?php echo $list['description']; ?></p>
          </div>
        </div>
<?php 
}
?>

      </div>
    </div>
  </section>
<?php 
}
$our_process_content = get_field('our_process_content', $post->ID);
if(!empty($our_process_content))
{
?>
  <!-- ══ HOW WE WORK ══ -->
  <section class="sc-section sc-section--white">
    <div class="container">
      <div class="sc-tag"><?php echo $our_process_content['sub_title']; ?></div>
      <h2 class="sc-sec-title"><?php echo $our_process_content['title']; ?></h2>
      <div class="sc-process-grid">
<?php foreach ($our_process_content['list'] as $key => $list) 
            {
            ?>
        <div class="sc-process-step">
          <div class="sc-step-circle">
            <?php echo $list['icon']; ?>
            <span class="sc-step-num"><?php echo $key + 1; ?></span>
          </div>
          <h4><?php echo $list['title']; ?></h4>
          <p><?php echo $list['description']; ?></p>
        </div>
<?php
}
?>
      </div>
    </div>
  </section>
<?php
}
$expertise_content = get_field('expertise_content', $post->ID);
if(!empty($expertise_content))
{
?>
  <!-- ══ HOTEL FOCUS ══ -->
  <section class="sc-section sc-section--gray">
    <div class="container">
      <div class="sc-hotel-grid">
        <div>
          <div class="sc-tag"><?php echo $expertise_content['sub_title']; ?></div>
          <h2 class="sc-sec-title"><?php echo $expertise_content['title']; ?></h2>
          <p class="sc-sec-body">
            <?php echo $expertise_content['description']; ?>
          </p>
          <div class="sc-hotel-feats">
<?php foreach ($expertise_content['list'] as $key => $list) 
            {
            ?>
            <div class="sc-hotel-feat">
          <h4><?php echo $list['title']; ?></h4>
          <p><?php echo $list['description']; ?></p>
            </div>
<?php
}
?>
          </div>
        </div>
        <div class="sc-hotel-img-wrap">
          <img src="<?php echo esc_url($expertise_content['image']); ?>" alt="<?php echo $expertise_content['title']; ?>"/>
          
          <div class="sc-hotel-exp-card">
            <div class="sc-exp-ico">🏅</div>
            <div>
              <b>100%</b>
              Uptime Guaranteed
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}
$cta_content = get_field('cta_content', $post->ID);
if(!empty($cta_content))
{
?>

  <!-- ══ CTA STRIP ══ -->
  <section class="sc-cta-strip">
    <div class="container">
      <div class="sc-cta-inner">
        <div class="sc-cta-text">
          <h2><?php echo $cta_content['title']; ?></h2>
          <p><?php echo $cta_content['description']; ?></p>
        </div>
        <a href="<?php echo esc_url($cta_content['button']['url']); ?>" 
           <?php echo (!empty($cta_content['button']['target']) ? 'target="_blank"' : ''); ?> class="sc-cta-btn">
            <?php echo esc_html($cta_content['button']['title']); ?><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </section>
<?php
}
get_footer();
?>