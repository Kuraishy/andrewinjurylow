<?php
/*
Template Name: Thank you
*/
get_header();
while (have_posts()) : the_post(); ?>
<section class="inner-benner-sec bg" style="background:url(<?php echo get_template_directory_uri();?>/images/inner-benner.jpg);">
  <div class="container">
    <?php echo get_field('banner_heading_content');?>
  </div>
</section>
<?php $thankyou = get_field('main_thank_you_image'); ?>
<section class="thank-you-sec pt-0 no-padding">
  <div class="container">
	<div class="thank-you-info bg" style="background: url(<?php echo $thankyou;?>);">
    <div class="row justify-content-end">
      <div class="col-md-7 col-lg-6">
        <div class="defualt-content-info">
          <?php echo get_field('thankyou_heading_content');?>
          <a href="<?php echo get_field('main_thankyou_button_link');?>" class="coman-btn"><?php echo get_field('main_thankyou_button_text');?> <img src="<?php echo get_template_directory_uri();?>/images/btn-arrow.png" alt="btn-arrow." class="img-fluid" width="" height=""></a> </div>
      </div>
    </div>
	</div>
  </div>
</section>
<?php endwhile;
    get_footer('contact'); ?>
