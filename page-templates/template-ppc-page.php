<?php
/*
Template Name: PPC Page
*/
get_header('ppc');
while (have_posts()) : the_post();
		if (get_field('pa_banner_desktop_image')) {
            $desktop_tab = get_field('pa_banner_desktop_image');
        } else {
            $desktop_tab = get_template_directory_uri() . '/images/ppc-page-benner.jpg';
        }
        if (get_field('pa_banner_tab_image')) {
            $banner_tab = get_field('pa_banner_tab_image');
        } else {
            $banner_tab = $desktop_tab;
        }
        if (get_field('pa_banner_mob_image')) {
            $banner_mob = get_field('pa_banner_mob_image');
        } else {
            $banner_mob = $banner_tab;
        } 
		?>
<style>
@media (max-width: 991px) {
.home-benner-sec.bg {
	background: url(<?php echo $banner_tab;?>) !important;
}
}

@media (max-width: 576px) {
.home-benner-sec.bg {
	background: url(<?php echo $banner_tab;?>) !important;
}
}
</style>
<section class="home-benner-sec bg" style="background:url(<?php echo $desktop_tab;?>);">
  <div class="container">
    <div class="row coamn-row">
      <div class="col-lg-6 coman-col align-self-end">
        <div class="home-info">
           <?php echo get_field('pa_heading_content');?>
           <?php if(get_field('pa_banner_button_text')):?>
          <a href="tel:<?php echo get_field('pa_banner_button_link');?>" class="coman-btn"><img src="<?php echo get_template_directory_uri();?>/images/phone-icon-btn.png" alt="#" width="" height="" class="img-fluid"/> <?php echo get_field('pa_banner_button_text');?></a><?php endif;?> </div>
      </div>
      <div class="col-lg-6 coman-col">
        <div class="coman-form">
          <div class="text-center">
            <?php echo get_field('laction_banner_contact_form_heading_content');?>
          </div>
          <?php echo get_field('laction_banner_contact_form_shortcode');?>
          <div class="call-info">
            <?php echo get_field('laction_banner_contact_form_bottomcontent');?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if (have_rows('home_caseresult')):?>
<section class="record-million-section">
  <div class="container">
    <div class="record-million-slider owl-carousel owl-theme">
     <?php while (have_rows('home_caseresult')) : the_row(); ?>
      <div class="item">
        <div class="record-million-block">
          <?php echo get_sub_field('home_caseresult_content');?>
        </div>
      </div>
    <?php endwhile;?>
    </div>
  </div>
</section>
<?php else:?>
<section class="record-million-section">
  <div class="container">
    <div class="record-million-slider owl-carousel owl-theme">
    <?php while (have_rows('case_result_block','option')) : the_row(); ?>
      <div class="item">
        <div class="record-million-block">
          <?php echo get_sub_field('case_result_block_content');?>
        </div>
      </div>
    <?php endwhile;?>  
    </div>
  </div>
</section>
<?php endif;?>
<section class="welcome-sec no-padding pb-0 bg">
  <div class="container defualt-content-info">
    <div class="text-center">
     <?php echo get_field('ppc_about_heading_content');?>
    </div>
    <div class="row coman-row">
      <div class="col-lg-6 coman-col">
        <div class="welcome-left-block">
          <figure><img src="<?php echo get_field('ppc_about_left_side_image');?>" alt="welcome-img" width="790" height="460" class="img-fluid"/> </figure>
          <?php echo get_field('about_box_content');?>
        </div>
      </div>
      <div class="col-lg-6 coman-col">
        <div class="welcome-right-block">
           <?php echo get_field('ppc_about_right_side_content');?>
           <?php if(get_field('ppc_about_button_text')):?>
          <a href="tel:<?php echo get_field('ppc_about_button_link');?>" class="coman-btn"><img src="<?php echo get_template_directory_uri();?>/images/phone-icon-btn.png" alt="#" width="" height="" class="img-fluid"/><?php echo get_field('ppc_about_button_text');?></a><?php endif;?> </div>
      </div>
    </div>
  </div>
</section>
<?php $count = 0;
	$blog_args = array(
		'post_type'      => 'testimonial',
		'posts_per_page' => 5,
		'order'          => 'DESC',
	);
	?>
<section class="about-us-sec no-padding bg">
  <div class="container">
    <div class="defualt-content-info text-center">
     <?php echo get_field('ppc_testimonial_heading_content');?>
    </div>
    <div class="about-us-slider-2 owl-carousel owl-theme">
    <?php 
			$blog_loop = new WP_Query($blog_args);
			while ($blog_loop->have_posts()) : $blog_loop->the_post();?>
      <div class="item">
        <div class="about-us-slider-sec text-center"> <img src="<?php echo get_template_directory_uri();?>/images/start-img.png" alt="start-img" width="181" height="30" class="img-fluid"/>
          <?php the_content();?>
          <h4><?php the_title();?></h4>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>  
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
