<?php
/*
Template Name: Elite Legal Marketing Page
*/
get_header('elite');
while (have_posts()) : the_post();
if (get_field('elite_background_image')) {
            $banner_img = get_field('elite_background_image');
        } else {
            $banner_img = get_template_directory_uri() . '/images/elite-benner.jpg';
        }
        if (get_field('elite_tab_background_image')) {
            $banner_tab = get_field('elite_tab_background_image');
        } else {
            $banner_tab = $banner_img;
        }
        if (get_field('elite_mobile_background_image')) {
            $banner_mob = get_field('elite_mobile_background_image');
        } else {
            $banner_mob = $banner_tab;
        } ?>
<style>
@media (max-width: 991px) {
.inner-benner-sec.bg {
	background: url("<?php echo $banner_tab;?>") !important;
}
}

@media (max-width: 576px) {
.inner-benner-sec.bg {
	background: url("<?php echo $banner_mob; ?>") !important;
}
}
</style>
<section class="home-benner-sec bg" style="background:url(<?php echo $banner_img; ?>);">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-lg-6">
        <div class="home-info">
        <?php if(get_field('elite_banner_logo')):?>
          <figure><img src="<?php echo get_field('elite_banner_logo'); ?>" alt="#" width="140" height="158" class="img-fluid"/></figure><?php endif;?>
         <?php echo get_field('elite_banner_heading_content'); ?>
          <?php if(get_field('elite_banner_button_text')):?>
          <a href="<?php echo get_field('elite_banner_button_link'); ?>" class="home-btn"><?php echo get_field('elite_banner_button_text'); ?><img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." width="" height="" class="img-fluid"/> </a><?php endif;?> </div>
      </div>
    </div>
  </div>
</section>
<?php if(get_field('main_heading_content')):?>
<section class="elite-client-landing-pages-content-sec no-padding">
  <div class="container">
    <div class="defualt-content-info text-center">
     <?php echo get_field('main_heading_content'); ?>
    </div>
  </div>
</section>
<?php endif;?>
<section class="about-us-sec bg">
  <div class="container">
    <div class="defualt-content-info text-center">
      <?php echo get_field('about_heading_content'); ?>
    </div>
    <?php if (have_rows('review_block')):?>
    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-11 col-lg-6">
        <div class="about-us-slider-sec text-center">
          <div class="about-us-slider owl-carousel owl-theme">
          <?php while (have_rows('review_block')) : the_row(); ?>
            <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/start-img.png" alt="start-img" width="181" height="30" class="img-fluid"/>
              <?php echo get_sub_field('review_block_content');?>
              <?php if(get_sub_field('review_block_image')):?>
              <figure><img src="<?php echo get_sub_field('review_block_image');?>" alt="client" width="80" height="80" class="img-fluid"/></figure><?php endif;?>
              <h4><?php echo get_sub_field('review_block_client_name');?></h4>
            </div>
          <?php endwhile;?>
          </div>
        </div>
      </div>
    </div>
    <?php endif;?>
  </div>
</section>
<?php if(get_field('work_heading_content')):?>
<section class="ready-to-work-sec no-padding">
  <div class="container">
    <div class="defualt-content-info text-center">
      <?php echo get_field('work_heading_content'); ?>
      <?php if(get_field('work_button_text')):?>
      <p><a href="<?php echo get_field('work_button_link'); ?>" class="coman-btn"><?php echo get_field('work_button_text'); ?><img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." width="" height="" class="img-fluid"></a> </p><?php endif;?>
    </div>
  </div>
</section>
<?php endif;?>
<?php endwhile;
get_footer('elite'); ?>
