<?php if (get_sub_field('user_bio_block_image')) {
            $user_tab = get_sub_field('user_bio_block_image');
        } else {
            $user_tab = get_template_directory_uri() . '/images/user-shortcode-img-2.png';
        }?>

<div class="user-shortcode user-shortcode-second" style="background: url(<?php echo $user_tab; ?>);">
  <div class="row">
   <div class="col-md-8"><?php echo get_sub_field('user_bio_block_content'); ?></div>
  </div>
</div>