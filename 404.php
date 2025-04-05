<?php
/* Template for displaying page not found */
get_header();

if(get_field('404_banner_desktop_image','options')) {
    $banner_img = get_field('404_banner_desktop_image','options');
} else {
    $banner_img = get_template_directory_uri().'/images/inner-benner.jpg';
} 
if(get_field('404_banner_tab_image','options')) {
    $tab_img = get_field('404_banner_tab_image','options');
} else {
    $tab_img = $banner_img;
}
if(get_field('404_banner_mob_image','options')) {
    $mob_img = get_field('404_banner_mob_image','options');
} else {
    $mob_img = $tab_img;
} ?>
<style>
.inner-benner-sec.bg {
    background-image: url(<?php echo $banner_img; ?>) !important;
}
@media (max-width: 991px) {
    .inner-benner-sec.bg {
        background-image: url(<?php echo $tab_img; ?>) !important;
    }
}
@media (max-width: 601px) {
    .inner-benner-sec.bg {
        background-image: url(<?php echo $mob_img; ?>) !important;
    }
}
</style>

<section class="inner-benner-sec bg" style="background: url(<?php echo $banner_img;?>);">
  <div class="container text-center">
    <?php if (get_field('404_banner_heading_content','option')) {
                            echo get_field('404_banner_heading_content','option');
                        } else {
                            echo '<h1>' . get_the_title() . '</h1>';
                        } ?>
  </div>
</section>
<section class="practice-area-page-sec no-padding">
  <div class="container">
    <div class="row coman-row">
      <div class="col-lg-8 coman-col">
       <?php echo get_field('404_main_content','options');?>
      </div>
      <div class="col-lg-4">
        <?php get_sidebar('page');?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>