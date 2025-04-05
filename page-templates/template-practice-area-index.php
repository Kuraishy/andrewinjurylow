<?php
/*
Template Name: Practice Area Index Page
*/
get_header();
while (have_posts()) : the_post();
		if (get_field('banner_desktop_image')) {
            $desktop_tab = get_field('banner_desktop_image');
        } else {
            $desktop_tab = get_template_directory_uri() . '/images/inner-benner.jpg';
        }
        if (get_field('banner_tab_image')) {
            $banner_tab = get_field('banner_tab_image');
        } else {
            $banner_tab = $desktop_tab;
        }
        if (get_field('banner_mobile_image')) {
            $banner_mob = get_field('banner_mobile_image');
        } else {
            $banner_mob = $banner_tab;
        } ?>
<style>
@media (max-width: 768px) {
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
<section class="inner-benner-sec bg" style="background:url(<?php echo $desktop_tab;?>);">
  <div class="container">
    <?php if (get_field('banner_heading_content')) {
                            echo get_field('banner_heading_content');
                        } else {
                           echo '<h2>' . get_the_title() . '</h2>';
                        } ?>
  </div>
</section>
<?php if (have_rows('general_practice_area_block')): ?>
<section class="practice-areas-sec no-padding">
  <div class="container">
    <div class="defualt-content-info text-center">
      <?php echo get_field('main_practice_area_index_heading_content');?>
    </div>
    <div class="row">
    <?php while (have_rows('general_practice_area_block')) : the_row(); ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="practice-areas-block">
          <figure> <img src="<?php echo get_sub_field('general_practice_area_block_image');?>" alt="practice-areas-block-1" width="400" height="286"> </figure>
          <div class="practice-areas-block-det">
           <?php echo get_sub_field('general_practice_area_block_content');?>
          </div>
        </div>
      </div>
      <?php endwhile;?>
    </div>
  </div>
</section>
<?php endif;?>
<?php endwhile;
get_footer(); ?>
