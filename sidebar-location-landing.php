<div class="coman-side-bar">
  <?php if (have_rows('sidebar_practice_area_menu_list')):?>
  <div class="accordion" id="accordionExample2">
    <div class="accordion-item">
      <h4 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <?php echo get_field('sidebar_practice_heading_content');?> </button>
      </h4>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          <ul>
            <?php while (have_rows('sidebar_practice_area_menu_list')) : the_row(); ?>
            <li><a href="<?php echo get_sub_field('sidebar_practice_area_menu_list_page_link');?>"> <?php echo get_sub_field('sidebar_practice_area_menu_list_page_title');?></a>
            <?php if (have_rows('sub_practice_area_menu_list')):?>
            <ul>
            <?php while (have_rows('sub_practice_area_menu_list')) : the_row(); ?>
            <li><a href="<?php echo get_sub_field('sub_practice_area_menu_list_link');?>"><?php echo get_sub_field('sub_practice_area_menu_list_title');?></a></li> 
			<?php endwhile;?>
            </ul>
             <?php endif;?>
            </li>
            <?php endwhile;?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php else:?>
  <div class="accordion" id="accordionExample2">
    <div class="accordion-item">
      <h4 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <?php echo get_field('sidebar_practice_heading_content','option');?> </button>
      </h4>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          <ul>
            <?php while (have_rows('sidebar_practice_area_menu_list','option')) : the_row(); ?>
            <li><a href="<?php echo get_sub_field('sidebar_practice_area_menu_list_page_link');?>"> <?php echo get_sub_field('sidebar_practice_area_menu_list_page_title');?></a>
            <?php if (have_rows('sub_practice_area_menu_list','option')):?>
            <ul>
            <?php while (have_rows('sub_practice_area_menu_list','option')) : the_row(); ?>
            <li><a href="<?php echo get_sub_field('sub_practice_area_menu_list_link');?>"><?php echo get_sub_field('sub_practice_area_menu_list_title');?></a></li> 
			<?php endwhile;?>
            </ul>
             <?php endif;?>
            </li>
            <?php endwhile;?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php endif;?>
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
  <?php $count = 0;
			  $blog_args = array(
				  'post_type'      => 'testimonial',
				  'posts_per_page' => -1,
				  'order'          => 'DESC',
			  );
			  ?>
  <div class="about-us-slider-block">
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
  <?php if (have_rows('related_articles_list')):?>
  <div class="related-articles-block">
    <div class="accordion" id="accordionExample3">
      <div class="accordion-item">
        <h4 class="accordion-header" id="headingtwo">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo"> <?php echo get_field('reletedt_art_heading_content');?> </button>
        </h4>
        <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingtwo" data-bs-parent="#accordionExample3">
          <div class="accordion-body">
            <ul>
            <?php while (have_rows('related_articles_list')) : the_row(); ?>
              <li><a href="<?php echo get_sub_field('related_articles_list_page_link');?>"><?php echo get_sub_field('related_articles_list_page_title');?></a></li>
               <?php endwhile;?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php else:?><!--
  <div class="related-articles-block">
    <div class="accordion" id="accordionExample3">
      <div class="accordion-item">
        <h4 class="accordion-header" id="headingtwo">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo"> <_?php echo get_field('reletedt_art_heading_content','option');?> </button>
        </h4>
        <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingtwo" data-bs-parent="#accordionExample3">
          <div class="accordion-body">
            <ul>
            <_?php while (have_rows('related_articles_list','option')) : the_row(); ?>
              <li><a href="<_?php echo get_sub_field('related_articles_list_page_link');?>"><_?php echo get_sub_field('related_articles_list_page_title');?></a></li>
               <_?php endwhile;?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>-->
  <?php endif;?>
</div>
