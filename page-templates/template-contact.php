<?php
/*
Template Name: Contact Page
*/
get_header();
while (have_posts()) : the_post();?>
<section class="inner-benner-sec bg" style="background:url(<?php echo get_template_directory_uri();?>/images/inner-benner.jpg);">
  <div class="container">
     <?php if (get_field('contact_heading_content')) {
			echo get_field('contact_heading_content');
		} else {
			echo '<h2>' . get_the_title() . '</h2>';
		} ?>
  </div>
</section>
<section class="contact-sec pt-0 no-padding">
  <div class="container">
    <div class="row coamn-row">
      <div class="col-lg-6 coman-col">
        <div class="defualt-content-info">
          <?php echo get_field('contact_info_heading_content');?>
        </div>
        <div class="contact-block-list">
          <div class="row coman-row">
           <?php if (have_rows('contact_information_block')) :?>
           <?php while (have_rows('contact_information_block')) : the_row(); ?>
            <div class="col-sm-6 coman-col">
              <div class="contact-block"> <img src="<?php echo get_sub_field('contact_information_block_icon'); ?>" alt="conatct-social-icon-1" class="img-fluid" width="66" height="65"/>
                <?php echo get_sub_field('contact_information_block_content'); ?>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-sm-6 coman-col">
              <div class="contact-block"> <img src="<?php echo get_field('contact_info_social_media_block_icon');?>" alt="conatct-social-icon-2" class="img-fluid" width="66" height="65"/>
                <?php echo get_field('social_media_block_heading_content');?>
                <ul>
                  <?php while (have_rows('contact_information_social_media_block')) : the_row(); ?>
                    <li><a href="<?php echo get_sub_field('contact_information_social_media_block_link'); ?>" target="_blank"> <i class="<?php echo get_sub_field('contact_information_social_media_block_icon_class'); ?>"></i></a></li>
                    <?php endwhile; ?>     
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <?php if (have_rows('conatct_our_locations_block')) :?>
        <div class="our-locations-sec">
          <?php echo get_field('cont_info_ouroffice_heading_content');?>
           <?php while (have_rows('conatct_our_locations_block')) : the_row(); ?>
          <div class="our-locations-block">
            <div class="row m-0">
              <div class="col-sm-6 align-self-center p-0">
                <?php echo get_sub_field('conatct_our_locations_block_address'); ?>
                <?php if(get_sub_field('conatct_our_locations_button_text')):?>
                <a href="<?php echo get_sub_field('conatct_our_locations_button_link'); ?>" class="coman-btn"><?php echo get_sub_field('conatct_our_locations_button_text'); ?></a> <?php endif; ?> </div>
              <div class="col-sm-6 align-self-center p-0">
               <?php echo get_sub_field('conatct_our_locations_block_map_code'); ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
         <?php endif; ?>
      </div>
      <div class="col-lg-6 coman-col">
      <?php $conimage=get_field('conatct_form_image');?>
        <div id="form-info text-center" class="form-info text-center bg" style="background: url(<?php echo $conimage;?>);">
          <div class="coman-form">
            <div class="text-center">
             <?php echo get_field('conatct_form_heading_content');?>
            </div>
            <?php echo get_field('conatct_form_shortcode');?>
            <div class="call-info">
              <?php echo get_field('conatct_form_bottom_content');?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
get_footer('contact'); ?>