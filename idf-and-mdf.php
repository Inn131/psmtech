<?php
/* Template Name: IDF and MDF Template */

get_header(); 

global $post;
$hero_content = get_field('hero_content', $post->ID);

?>
<!-- Font Awesome 6 (Free CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- ══ HERO ══ -->
<?php
if(!empty($hero_content))
{
  ?>
  <section class="mdf-hero">
    <div class="mdf-hero-grid"></div>
    <div class="mdf-hero-imgbg">
      <img src="<?php echo esc_url($hero_content['image']); ?>" alt="<?php echo $hero_content['title']; ?>"/>
    </div>
    <div class="mdf-hero-inner container">
      <div class="mdf-hero-text">
        <h1 class="mdf-hero-h1">
          <?php echo $hero_content['title']; ?>
        </h1>
        <p class="mdf-hero-desc"><?php echo $hero_content['description']; ?></p>
      </div>
    </div>
  </section>
  <?php
}
$core_components = get_field('core_components', $post->ID);
if(!empty($core_components))
{
  ?>

  <!-- ══ COMPONENTS ══ -->
  <section class="mdf-sec mdf-bg-l">
    <div class="mdf-wrap container">
      <div class="mdf-lrow">
        <div class="mdf-lrow-line"></div>
        <span class="mdf-lrow-txt"><?php echo $core_components['sub_title']; ?></span>
      </div>
      <h2 class="mdf-sec-title"><?php echo $core_components['title']; ?></h2>
      <p class="mdf-sec-body"><?php echo $core_components['description']; ?></p>
      <div class="mdf-comp-row">
        <?php foreach ($core_components['component_list'] as $key => $component_list) {
          ?>
          <div class="mdf-comp-cell">
            <img class="mdf-comp-img" src="<?php echo esc_url($component_list['image']); ?>" alt="<?php echo $component_list['title']; ?>"/>
            <div class="mdf-comp-top">
              <div class="mdf-comp-icon mdf-ci-b"><?php echo $component_list['icon']; ?></div>
              <div class="mdf-comp-meta">

                <div class="mdf-comp-name"><?php echo $component_list['title']; ?></div>
              </div>
            </div>
            <p class="mdf-comp-desc"><?php echo $component_list['description']; ?></p>

          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>
  <?php 
}

$difference_content = get_field('difference_content', $post->ID);

$idf_content = $difference_content['idf_content'];
$mdf_content = $difference_content['mdf_content'];
if(!empty($difference_content))
{
  ?>

<!-- ══ IDF vs MDF ══ -->
<section class="mdf-sec mdf-bg-w">
  <div class="mdf-wrap container">
    <div class="mdf-lrow">
      <div class="mdf-lrow-line"></div>
      <span class="mdf-lrow-txt"><?php echo $difference_content['sub_title']; ?></span>
    </div>
    <h2 class="mdf-sec-title"><?php echo $difference_content['title']; ?></h2>
    <p class="mdf-sec-body"><?php echo $difference_content['description']; ?></p>
    <div class="mdf-split-wrap">

      <div class="mdf-split-card mdf-split-card--light">
        <span class="mdf-split-badge"><?php echo $idf_content['sub_title']; ?></span>
        <div class="mdf-split-ico"><?php echo $idf_content['idf_icon']; ?></div>
        <h3 class="mdf-split-h3"><?php echo $idf_content['title']; ?></h3>
        <div class="mdf-split-sub"><?php echo $idf_content['description']; ?></div>
        <ul class="mdf-split-list">
          <?php foreach ($idf_content['list'] as $key => $list) {
            ?>
            <li><span class="mdf-sdot"></span><?php echo $list['title']; ?></li>
          <?php } ?>
        </ul>
      </div>

      <div class="mdf-split-card mdf-split-card--dark">
        <span class="mdf-split-badge"><?php echo $mdf_content['sub_title']; ?></span>
        <div class="mdf-split-ico"><?php echo $mdf_content['mdf_icon']; ?></div>
        <h3 class="mdf-split-h3"><?php echo $mdf_content['title']; ?></h3>
        <div class="mdf-split-sub"><?php echo $mdf_content['description']; ?></div>
        <ul class="mdf-split-list">
          <?php foreach ($mdf_content['list'] as $key => $list) {
            ?>
            <li><span class="mdf-sdot"></span><?php echo $list['title']; ?></li>
          <?php } ?>
        </ul>
      </div>

    </div>
  </div>
</section>
<?php
}

$process_content = get_field('process_content', $post->ID);
if(!empty($process_content))
{
  ?>
<!-- ══ PROCESS ══ -->
<section class="mdf-sec mdf-bg-l">
  <div class="mdf-wrap container">
    <div class="mdf-lrow">
      <div class="mdf-lrow-line"></div>
      <span class="mdf-lrow-txt"><?php echo $process_content['sub_title']; ?></span>
    </div>
    <h2 class="mdf-sec-title"><?php echo $process_content['title']; ?></h2>
    <div class="mdf-proc-grid">
      <?php foreach ($process_content['process_list'] as $key => $process_list) {
        ?>
        <div class="mdf-proc-item">
          <div class="mdf-proc-num"><?php echo $key + 1; ?></div>
          <div class="mdf-proc-ico"><?php echo $process_list['icon']; ?></div>
          <h4><?php echo $process_list['title']; ?></h4>
          <p><?php echo $process_list['description']; ?></p>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php
}
$cta_content = get_field('cta_content', $post->ID);
if(!empty($cta_content))
{
  ?>
<!-- ══ CTA ══ -->
<section class="mdf-cta">
  <div class="mdf-cta-overlay"></div>
  <div class="mdf-wrap container">
    <div class="mdf-cta-inner">
      <div>
        <h2 class="mdf-cta-h2"><?php echo $cta_content['title']; ?></h2>
        <p class="mdf-cta-body"><?php echo $cta_content['description']; ?></p>
      </div>
      <div class="mdf-cta-btns">        
        <a href="<?php echo esc_url($cta_content['button_1']['url']); ?>" 
         <?php echo (!empty($cta_content['button_1']['target']) ? 'target="_blank"' : ''); ?> class="mdf-btn-a">
         <?php echo esc_html($cta_content['button_1']['title']); ?>
         <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
       </a>
       <a href="<?php echo esc_url($cta_content['button_2']['url']); ?>" 
         <?php echo (!empty($cta_content['button_2']['target']) ? 'target="_blank"' : ''); ?> class="mdf-btn-b">
         <?php echo esc_html($cta_content['button_2']['title']); ?>
         <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
       </div>
     </div>
   </div>
 </section>

 <?php
}
get_footer();
?>