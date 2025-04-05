<div class="client-reviews-sec">
  <div class="client-reviews-title">
    <?php echo get_sub_field('review_widget_main_heading_title'); ?>
  </div>
  <div class="client-reviews-block">
    <div class="row">
      <div class="col-9 col-sm-10">
        <h4><?php echo get_sub_field('review_widget_user_name'); ?></h4>
        <div class="rating-img"> <img src="<?php echo get_template_directory_uri(); ?>/images/start-img.png" alt="star-img" width="166" height="29"> <small><?php echo get_sub_field('review_widget_month'); ?></small> </div>
      </div>
      <div class="col-3 col-sm-2">
        <div class="review-quiet-img"> <img src="<?php echo get_template_directory_uri(); ?>/images/faq-quiet.png" alt="review-quiet" width="55" height="49"> </div>
      </div>
    </div>
   <?php echo get_sub_field('review_widget_content'); ?>
  </div>
  <div class="google-map-link"> <?php echo get_sub_field('review_widget_view_more_reviews'); ?> </div>
  <script type="application/ld+json"><?php echo get_sub_field('review_widget_schema_code'); ?></script>
</div>
