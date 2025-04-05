<?php
/*
Template Name: Case Result Page
*/
get_header();
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
<section class="inner-benner-sec bg" style="background: url(<?php echo $desktop_tab;?>);">
  <div class="container text-center">
    <?php if (get_field('page_banner_heading_content')) {
                            echo get_field('page_banner_heading_content');
                        } else {
                            echo '<h2>' . get_the_title() . '</h2>';
                        } ?>
  </div>
</section>
<?php $count = 0;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$blog_args = array(
		'post_type'      => 'case-result',
		'order'          => 'ASC',
		'posts_per_page' => 2,
		'paged'          => $paged
	);
	?>
<section class="case-result-sec no-padding">
  <div class="container" id="case-result-block-list">
  <?php 
		$blog_loop = new WP_Query($blog_args);
		$total=2;
		while ($blog_loop->have_posts()) : $blog_loop->the_post();
		$count++; ?>
     <div class="case-result-block-list">
      <div class="defualt-content-info text-center">
        <?php echo get_field('caseresult_post_heading_content');?>
      </div>
      <?php if (have_rows('post_case_result_block')):?>
      <div class="row justify-content-center">
      <?php while (have_rows('post_case_result_block')) : the_row(); ?>
        <div class="col-sm-6 col-md-4">
          <div class="case-result-block"> 
			 <?php echo get_sub_field('post_case_result_block_content');?>
          </div>
        </div>
       <?php endwhile;?>
      </div>
      <?php endif;?>
    </div>
   <?php endwhile; wp_reset_postdata(); ?>  
  </div> 
  <?php if($blog_loop->found_posts >2):?>
   <div class="text-center"> 
  <a href="JavaScript:void(0);" class="coman-btn" id="load-more-button">load more results <img src="<?php echo get_template_directory_uri();?>/images/btn-arrow.png" alt="btn-arrow." class="img-fluid" width="" height=""></a> </div>
  <?php endif;?>
</section>
<?php endwhile;
get_footer(); ?>
<script>
var currentPage = 1;
jQuery('#load-more-button').on('click', function() {
  currentPage++; // Do currentPage + 1, because we want to load the next page

  jQuery.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'load_more_case_results',
      paged: currentPage,
    },
    success: function (res) {
      jQuery('#case-result-block-list').append(res);
	 if(!res){
		 jQuery('#load-more-button').hide();
		 }
    }
  });
});
</script>