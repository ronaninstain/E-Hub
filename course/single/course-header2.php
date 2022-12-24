<?php

/**
 * The template for displaying Course Header
 *
 * Override this template by copying it to yourtheme/course/single/header.php
 *
 * @author 		VibeThemes
 * @package 	vibe-course-module/templates
 * @version     2.0
 */
if (!defined('ABSPATH')) exit;
do_action('bp_before_course_header');

?>
<div class="e-learning-solution-if-flex-needed-in-hero-div">
	<div class="col-md-5 col-sm-6 col-xs-12">
		<div id="item-header-avatar">
			<?php bp_course_avatar(); ?>
		</div><!-- #item-header-avatar -->
	</div>
	<div class="col-md-7 col-sm-6 col-xs-12">
		<div id="item-header-content">
			<h1><?php bp_course_name(); ?></h1>
			<div class="for-e-learning-c-duration-and-unit">
				<ul>
					<li> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php $course_duration = get_post_meta(get_the_ID(), 'vibe_duration', true);
																			echo  number_format((float)($course_duration / 24), 2, '.', '');
																			?> Hours</li>
					<li><i class="fa fa-file-text-o" aria-hidden="true"></i> <?php
																				$units = bp_course_get_curriculum_units(get_the_ID());
																				echo count($units);
																				?> lessons</li>
				</ul>
			</div>
			<div class="e-solution-course-enrol-button">
				<?php the_course_button(); ?>
			</div>
			<?php do_action('bp_before_course_header_meta'); ?>

			<!-- <div id="item-meta">
		<?php bp_course_meta(); ?>
		<?php do_action('bp_course_header_actions'); ?>

		<?php do_action('bp_course_header_meta'); ?>

	</div> -->
		</div><!-- #item-header-content -->
	</div>
</div>
<?php
do_action('bp_after_course_header');
?>