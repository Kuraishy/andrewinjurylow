<div class="coman-side-bar">
<?php if (get_field('sidebar_contact_background_image', 'options')) {
            $slidebarcontact = get_field('sidebar_contact_background_image', 'options');
        } else {
            $slidebarcontact = get_template_directory_uri() . '/images/slidebar-contact-img.png';
        }?>
  <div class="form-info text-center bg" style="background: url(<?php echo $slidebarcontact;?>);">
    <div class="coman-form">
      <div class="text-center">
        <?php the_field('sidebar_footer_form_contact_form','option');?>
      </div>
      <?php the_field('sidebar_contact_form_shortcode','option');?>
      <?php if(get_field('sidebar_contact_form_bottom_content','option')):?>
      <div class="call-info">
        <?php the_field('sidebar_contact_form_bottom_content','option');?>
      </div>
      <?php endif;?>
    </div>
  </div>
</div>
