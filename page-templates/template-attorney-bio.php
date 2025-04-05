<?php
/*
Template Name: Attorney Bio Page
*/
get_header();
while (have_posts()) : the_post();
if (get_field('layer_bio_banner_desktop_image')) {
            $banner_img = get_field('layer_bio_banner_desktop_image');
        } else {
            $banner_img = get_template_directory_uri() . '/images/inner-benner.jpg';
        }
        if (get_field('layer_bio_banner_tab_image')) {
            $banner_tab = get_field('layer_bio_banner_tab_image');
        } else {
            $banner_tab = $banner_img;
        }
        if (get_field('layer_bio_banner_mob_image')) {
            $banner_mob = get_field('layer_bio_banner_mob_image');
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
<section class="inner-benner-sec bg" style="background: url(<?php echo $banner_img;?>);">
  <div class="container text-center">
    <?php if (get_field('layer_bio_banner_heading_content')) {
                            echo get_field('layer_bio_banner_heading_content');
                        } else {
                            echo '<h2>' . get_the_title() . '</h2>';
                        } ?>
  </div>
</section>
<section class="attorneys-bio-sec coman-bg no-padding">
  <div class="container">
    <div class="row coman-row">
      <div class="col-lg-6 coman-col">
        <div class="defualt-content-info">
        <?php echo get_field('layer_bio_main_heading_content');?>
        </div>
      </div>
      <div class="col-lg-6 coman-col">
      <?php if(get_field('layer_bio_main_right_image')):?>
        <div class="attorney-img"> <img src="<?php echo get_field('layer_bio_main_right_image');?>" alt="attorney-img-1" width="790" height="790" class="img-fluid"/> </div>
        <?php endif;?>
          <?php if (have_rows('layer_bio_main_logos_list')): ?>
        <div class="row">
        <?php while (have_rows('layer_bio_main_logos_list')) : the_row(); ?>
          <div class="col-6">
            <div class="attorney-img"> <img src="<?php the_sub_field('layer_bio_main_logos_list_logos');?>" alt="attorney-img-2" width="790" height="790" class="img-fluid"/> </div>
          </div>
		<?php endwhile;?>
        </div>
         <?php endif;?>
        <div class="about-us-slider-block">
          <div class="defualt-content-info">
           <?php echo get_field('layer_bio_main_testimonial_title');?>
          </div>
          <?php $count = 0;
			  $blog_args = array(
				  'post_type'      => 'testimonial',
				  'posts_per_page' => 5,
				  'order'          => 'DESC',
			  );
			  ?>
          <div class="about-us-slider-sec text-center">
            <div class="about-us-slider owl-carousel owl-theme">
            <?php 
			$blog_loop = new WP_Query($blog_args);
			while ($blog_loop->have_posts()) : $blog_loop->the_post();?>
              <div class="item"> <img src="<?php echo get_template_directory_uri();?>/images/start-img.png" alt="start-img" width="181" height="30" class="img-fluid"/>
               <?php the_content();?>
                <h4><?php the_title();?></h4>
              </div>
             <?php endwhile; wp_reset_postdata(); ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if(get_field('fact_checked_content','option')):?>
<section class="fact-checked-sec">
  <div class="container">
    <div class="fact-checked-info">
      <figure> <img src="<?php echo get_field('fact_checked_image','option');?>" alt="#" width="" height="" class="img-fluid"/> </figure>
     <?php echo get_field('fact_checked_content','option');?>
    </div>
  </div>
</section>
<?php endif;?>
<?php endwhile;
get_footer(); ?>