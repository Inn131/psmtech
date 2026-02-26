<?php
/* Template Name: OTA Template */
?>
<?php
get_header(); 

$main_group = get_field('ota_content');
// echo "<pre>";
// print_r($main_group['fourth_timeline']);
?>
<section class="timeline-container section-padding">
	<div class="container">

		<div class="timeline">
			<!-- first_timeline -->
			<?php if(!empty($main_group['first_timeline'])){ ?>
				<div class="timeline-card visible">
					<div class="timeline-card-content">
						<div class="timeline-card-icon">
							<i class="fas fa-long-arrow-alt-left"></i>
						</div>
						<p class="timeline-card-subtitle"><?php echo $main_group['first_timeline']['title']; ?></p>
						<p class="timeline-card-description"><?php echo $main_group['first_timeline']['description']; ?></p>
						<ul class="timeline-feature-list">
							<?php if(!empty($main_group['first_timeline']['list_one'])){ ?>

								<li><?php echo $main_group['first_timeline']['list_one']; ?></li>
								<?php 
							} 
							if(!empty($main_group['first_timeline']['list_two']))
							{
								?>
								<li><?php echo $main_group['first_timeline']['list_two']; ?></li>
								<?php 
							} 
							if(!empty($main_group['first_timeline']['list_three']))
							{
								?>
								<li><?php echo $main_group['first_timeline']['list_three']; ?></li>
								<?php 
							} 
							if(!empty($main_group['first_timeline']['list_four']))
							{
								?>
								<li><?php echo $main_group['first_timeline']['list_four']; ?></li>
							<?php } ?>

						</ul>
					</div>
					<div class="timeline-card-head">
						<h3 class="timeline-card-title"><?php echo $main_group['first_timeline']['main_title']; ?></h3> 
						<img src="<?php echo esc_url($main_group['first_timeline']['image']); ?>" alt="<?php echo $main_group['first_timeline']['main_title']; ?>">                   
					</div>
				</div>
			<?php } ?>

			<!-- second_timeline -->
			<?php if(!empty($main_group['second_timeline'])){ ?>
				<div class="timeline-card visible">
					<div class="timeline-card-content">
						<div class="timeline-card-icon">
							<i class="fas fa-long-arrow-alt-left"></i>
						</div>
						<p class="timeline-card-subtitle"><?php echo $main_group['second_timeline']['title']; ?></p>
						<p class="timeline-card-description"><?php echo $main_group['second_timeline']['description']; ?></p>
						<ul class="timeline-feature-list">
							<?php if(!empty($main_group['second_timeline']['list_one'])){ ?>

								<li><?php echo $main_group['second_timeline']['list_one']; ?></li>
								<?php 
							} 
							if(!empty($main_group['second_timeline']['list_two']))
							{
								?>
								<li><?php echo $main_group['second_timeline']['list_two']; ?></li>
								<?php 
							} 
							if(!empty($main_group['second_timeline']['list_three']))
							{
								?>
								<li><?php echo $main_group['second_timeline']['list_three']; ?></li>
								<?php 
							} 
							if(!empty($main_group['second_timeline']['list_four']))
							{
								?>
								<li><?php echo $main_group['second_timeline']['list_four']; ?></li>
							<?php } ?>

						</ul>
					</div>
					<div class="timeline-card-head">
						<h3 class="timeline-card-title"><?php echo $main_group['second_timeline']['main_title']; ?></h3> 
						<img src="<?php echo esc_url($main_group['second_timeline']['image']); ?>" alt="<?php echo $main_group['first_timeline']['main_title']; ?>">                   
					</div>
				</div>
			<?php } ?>				

			<!-- third_timeline -->
			<?php if(!empty($main_group['third_timeline'])){ ?>
				<div class="timeline-card visible">
					<div class="timeline-card-content">
						<div class="timeline-card-icon">
							<i class="fas fa-long-arrow-alt-left"></i>
						</div>
						<p class="timeline-card-subtitle"><?php echo $main_group['third_timeline']['title']; ?></p>
						<p class="timeline-card-description"><?php echo $main_group['third_timeline']['description']; ?></p>
						<ul class="timeline-feature-list">
							<?php if(!empty($main_group['third_timeline']['list_one'])){ ?>

								<li><?php echo $main_group['third_timeline']['list_one']; ?></li>
								<?php 
							} 
							if(!empty($main_group['third_timeline']['list_two']))
							{
								?>
								<li><?php echo $main_group['third_timeline']['list_two']; ?></li>
								<?php 
							} 
							if(!empty($main_group['third_timeline']['list_three']))
							{
								?>
								<li><?php echo $main_group['third_timeline']['list_three']; ?></li>
								<?php 
							} 
							if(!empty($main_group['third_timeline']['list_four']))
							{
								?>
								<li><?php echo $main_group['third_timeline']['list_four']; ?></li>
							<?php } ?>

						</ul>
					</div>
					<div class="timeline-card-head">
						<h3 class="timeline-card-title"><?php echo $main_group['third_timeline']['main_title']; ?></h3> 
						<img src="<?php echo esc_url($main_group['third_timeline']['image']); ?>" alt="<?php echo $main_group['first_timeline']['main_title']; ?>">                   
					</div>
				</div>
			<?php } ?>

			<!-- fourth_timeline -->
			<?php if(!empty($main_group['fourth_timeline'])){ ?>
				<div class="timeline-card visible">
					<div class="timeline-card-content">
						<div class="timeline-card-icon">
							<i class="fas fa-long-arrow-alt-left"></i>
						</div>
						<p class="timeline-card-subtitle"><?php echo $main_group['fourth_timeline']['title']; ?></p>
						<p class="timeline-card-description"><?php echo $main_group['fourth_timeline']['description']; ?></p>
						<ul class="timeline-feature-list">
							<?php if(!empty($main_group['fourth_timeline']['list_one'])){ ?>

								<li><?php echo $main_group['fourth_timeline']['list_one']; ?></li>
								<?php 
							} 
							if(!empty($main_group['fourth_timeline']['list_two']))
							{
								?>
								<li><?php echo $main_group['fourth_timeline']['list_two']; ?></li>
								<?php 
							} 
							if(!empty($main_group['fourth_timeline']['list_three']))
							{
								?>
								<li><?php echo $main_group['fourth_timeline']['list_three']; ?></li>
								<?php 
							} 
							if(!empty($main_group['fourth_timeline']['list_four']))
							{
								?>
								<li><?php echo $main_group['fourth_timeline']['list_four']; ?></li>
							<?php } ?>

						</ul>
					</div>
					<div class="timeline-card-head">
						<h3 class="timeline-card-title"><?php echo $main_group['fourth_timeline']['main_title']; ?></h3> 
						<img src="<?php echo esc_url($main_group['fourth_timeline']['image']); ?>" alt="<?php echo $main_group['first_timeline']['main_title']; ?>">                   
					</div>
				</div>
			<?php } ?>
			<!-- fifth_timeline -->
			<?php if(!empty($main_group['fifth_timeline'])){ ?>
				<div class="timeline-card visible">
					<div class="timeline-card-content">
						<div class="timeline-card-icon">
							<i class="fas fa-long-arrow-alt-left"></i>
						</div>
						<p class="timeline-card-subtitle"><?php echo $main_group['fifth_timeline']['title']; ?></p>
						<p class="timeline-card-description"><?php echo $main_group['fifth_timeline']['description']; ?></p>
						<ul class="timeline-feature-list">
							<?php if(!empty($main_group['fifth_timeline']['list_one'])){ ?>

								<li><?php echo $main_group['fifth_timeline']['list_one']; ?></li>
								<?php 
							} 
							if(!empty($main_group['fifth_timeline']['list_two']))
							{
								?>
								<li><?php echo $main_group['fifth_timeline']['list_two']; ?></li>
								<?php 
							} 
							if(!empty($main_group['fifth_timeline']['list_three']))
							{
								?>
								<li><?php echo $main_group['fifth_timeline']['list_three']; ?></li>
								<?php 
							} 
							if(!empty($main_group['fifth_timeline']['list_four']))
							{
								?>
								<li><?php echo $main_group['fifth_timeline']['list_four']; ?></li>
							<?php } ?>

						</ul>
					</div>
					<div class="timeline-card-head">
						<h3 class="timeline-card-title"><?php echo $main_group['fifth_timeline']['main_title']; ?></h3> 
						<img src="<?php echo esc_url($main_group['fifth_timeline']['image']); ?>" alt="<?php echo $main_group['first_timeline']['main_title']; ?>">                   
					</div>
				</div>
			<?php } ?>
			<!-- sixth_timeline -->
			<?php if(!empty($main_group['sixth_timeline'])){ ?>
				<div class="timeline-card visible">
					<div class="timeline-card-content">
						<div class="timeline-card-icon">
							<i class="fas fa-long-arrow-alt-left"></i>
						</div>
						<p class="timeline-card-subtitle"><?php echo $main_group['sixth_timeline']['title']; ?></p>
						<p class="timeline-card-description"><?php echo $main_group['sixth_timeline']['description']; ?></p>
						<ul class="timeline-feature-list">
							<?php if(!empty($main_group['sixth_timeline']['list_one'])){ ?>

								<li><?php echo $main_group['sixth_timeline']['list_one']; ?></li>
								<?php 
							} 
							if(!empty($main_group['sixth_timeline']['list_two']))
							{
								?>
								<li><?php echo $main_group['sixth_timeline']['list_two']; ?></li>
								<?php 
							} 
							if(!empty($main_group['sixth_timeline']['list_three']))
							{
								?>
								<li><?php echo $main_group['sixth_timeline']['list_three']; ?></li>
								<?php 
							} 
							if(!empty($main_group['sixth_timeline']['list_four']))
							{
								?>
								<li><?php echo $main_group['sixth_timeline']['list_four']; ?></li>
							<?php } ?>

						</ul>
					</div>
					<div class="timeline-card-head">
						<h3 class="timeline-card-title"><?php echo $main_group['sixth_timeline']['main_title']; ?></h3> 
						<img src="<?php echo esc_url($main_group['sixth_timeline']['image']); ?>" alt="<?php echo $main_group['first_timeline']['main_title']; ?>">                   
					</div>
				</div>
			<?php } ?>


		</div>
	</div>
</section>
<?php
get_footer();
?>