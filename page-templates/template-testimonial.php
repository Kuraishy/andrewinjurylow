<?php
/*
Template Name: Testimonial Page
*/
get_header();
while (have_posts()) : the_post();
if (get_field('testimonial_banner_desktop_image')) {
            $banner_img = get_field('testimonial_banner_desktop_image');
        } else {
            $banner_img = get_template_directory_uri() . '/images/inner-benner.jpg';
        }
        if (get_field('testimonial_banner_tab_image')) {
            $banner_tab = get_field('testimonial_banner_tab_image');
        } else {
            $banner_tab = $banner_img;
        }
        if (get_field('testimonial_banner_mobile_image')) {
            $banner_mob = get_field('testimonial_banner_mobile_image');
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
    <?php if (get_field('testimonial_banner_heading_content')) {
                            echo get_field('testimonial_banner_heading_content');
                        } else {
                            echo '<h2>' . get_the_title() . '</h2>';
                        } ?>
  </div>
</section>
<?php $count = 0;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$blog_args = array(
		'post_type'      => 'testimonial',
		'order'          => 'DESC',
		'posts_per_page' => 10,
		'paged'          => $paged
	);
	?>
<section class="blog-index-sec no-padding">
  <div class="container">
    <div class="row coman-row">
      <div class="col-lg-8 coman-col">
		  <div class="defualt-content-info">
		  <h2>What People Are Saying About Us</h2>
		  </div>

			<div class="testimonials-block-list">
            <?php 
		$blog_loop = new WP_Query($blog_args);
		$total=10;
		while ($blog_loop->have_posts()) : $blog_loop->the_post();
		$count++; ?>
		  		<div class="testimonials-block">
						<img src="<?php echo get_template_directory_uri();?>/images/start-img.png" alt="start-img" class="img-fluid" width="181" height="30">
						<?php the_content(); ?>
					<h4><?php echo the_title(); ?></h4>
				</div>
				
			<?php endwhile; wp_reset_postdata(); ?>	
		  	</div>
		  
		  <div class="text-center"> <a href="JavaScript:void(0);" id="load-more-testimonials" class="coman-btn">load more reviews <img src="<?php echo get_template_directory_uri();?>/images/btn-arrow.png" alt="btn-arrow." class="img-fluid" width="" height=""></a> </div>
		  
      </div>
      <div class="col-lg-4 coman-col">
         <?php get_sidebar('testimonial');?>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
get_footer(); ?>
<script>
var currentPage = 1;
jQuery('#load-more-testimonials').on('click', function() {
  currentPage++; // Do currentPage + 1, because we want to load the next page

  jQuery.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'testimonial_load_more',
      paged: currentPage,
    },
    success: function (res) {
      jQuery('.testimonials-block-list').append(res);
	 if(!res){
		 jQuery('#load-more-testimonials').hide();
		 }
    }
  });
});
</script>
