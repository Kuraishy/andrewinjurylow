<?php
/*
Template Name: Practice Areas Page
*/
get_header();
while (have_posts()) : the_post(); 
if (get_field('pa_banner_desktop_image')) {
            $banner_img = get_field('pa_banner_desktop_image');
        } else {
            $banner_img = get_template_directory_uri() . '/images/inner-benner.jpg';
        }
        if (get_field('pa_banner_tab_image')) {
            $banner_tab = get_field('pa_banner_tab_image');
        } else {
            $banner_tab = $banner_img;
        }
        if (get_field('pa_banner_mob_image')) {
            $banner_mob = get_field('pa_banner_mob_image');
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
  <div class="container">
    <?php if (get_field('pa_heading_content')) {
                            echo get_field('pa_heading_content');
                        } else {
                            echo '<h2>' . get_the_title() . '</h2>';
                        } ?>
  </div>
</section>
<?php if (have_rows('case_result_block')):?>
<section class="record-million-section">
  <div class="container">
    <div class="record-million-slider owl-carousel owl-theme">
    <?php while (have_rows('case_result_block')) : the_row(); ?>
      <div class="item">
        <div class="record-million-block">
          <?php echo get_sub_field('case_result_block_content');?>
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
<section class="practice-area-page-sec no-padding">
  <div class="container">
    <div class="row coman-row">
      <div class="col-lg-8 coman-col">
        <div class="defualt-content-info">
          <?php echo get_field('pa_con_heading_content');?>
        </div>
        <?php if(get_field('client_review_hide') == 'true'):?>
        <div class="client-reviews-sec">
          <div class="client-reviews-title">
             <?php echo get_field('client_reviews_heading_content');?>
          </div>
          <div class="client-reviews-block">
            <div class="row">
              <div class="col-9 col-sm-10 align-self-center">
                <h4><?php echo get_field('client_reviews_client_name');?></h4>
                <div class="rating-img">
                <?php if(get_field('client_reviews_rating_image')):?> 
                		<img src="<?php echo get_field('client_reviews_rating_image');?>" alt="rating-img" width="164" height="30"/> 
               <?php else:?>
               <img src="<?php echo get_template_directory_uri();?>/images/rating-img.png" alt="rating-img" width="164" height="30"/> 
               <?php endif;?>
                <small><?php echo get_field('client_review_month');?></small> </div>
              </div>
              <div class="col-3 col-sm-2 align-self-center">
                <div class="review-quiet-img"> <img src="<?php echo get_template_directory_uri();?>/images/faq-quiet.png" alt="review-quiet" width="65" height="51"/> </div>
              </div>
            </div>
            <?php echo get_field('client_review_content');?>
          </div>
          <div class="google-map-link"> <?php echo get_field('client_view_more_reviews');?> </div>
          <script type="application/ld+json">
<?php echo get_field('client_review_schema_code'); ?>
</script> 
        </div>
         <?php endif;?>
         <?php if (have_rows('default_faq_block')):?>
         <?php $faqcount=1;?>
         <div class="faq-block">
          <div class="defualt-content-info">
             <?php echo get_field('default_faq_heading_content');?>
          </div>
          <div class="coman-accordion accordion" id="accordionExample">
            <?php while (have_rows('default_faq_block')) : the_row(); ?>
          <?php if($faqcount==1):?>
          <div class="accordion-item">
            <h4 class="accordion-header" id="heading-<?php echo $faqcount;?>">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $faqcount;?>" aria-expanded="true" aria-controls="collapseOne<?php echo $faqcount;?>"><i class="fa-solid fa-question"></i><?php echo get_sub_field('default_faq_block_question');?></button>
            </h4>
            <div id="collapseOne<?php echo $faqcount;?>" class="accordion-collapse collapse show" aria-labelledby="heading-<?php echo $faqcount;?>" data-bs-parent="#accordionExample" style="">
              <div class="accordion-body defualt-content-info">
                <?php echo get_sub_field('default_faq_block_answer');?>
              </div>
            </div>
          </div>
          <?php else:?>
          <div class="accordion-item">
            <h4 class="accordion-header" id="heading-<?php echo $faqcount;?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $faqcount;?>" aria-expanded="false" aria-controls="collapse-<?php echo $faqcount;?>"><i class="fa-solid fa-question"></i><?php echo get_sub_field('default_faq_block_question');?></button>
            </h4>
            <div id="collapse-<?php echo $faqcount;?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $faqcount;?>" data-bs-parent="#accordionExample">
              <div class="accordion-body defualt-content-info">
                <?php echo get_sub_field('default_faq_block_answer');?>
              </div>
            </div>
          </div>
          <?php endif;?>
          <?php $faqcount= $faqcount + 1;?>
          <?php endwhile;?>
          </div>
        </div>
        <?php endif;?>
      </div>
      <div class="col-lg-4">
        <?php get_sidebar('practice-area');?>
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
