<div class="coman-side-bar">
  <div class="accordion" id="accordionExample2">
    <div class="accordion-item">
      <h4 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Categories </button>
      </h4>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          <ul>
            <?php  $categories =  get_categories();  
       foreach  ($categories as $category) {?>
            <li><a href="<?php echo get_category_link($category->cat_ID); ?>">
              <?php  echo $category->name;?>
              </a></li>
            <?php }?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php if(have_rows('sidebar_practice_area_menu_list')) : ?>
  <?php $count = 1;?>
  <div class="accordion" id="accordionExample6">
            <div class="accordion-item">
              <h4 class="accordion-header" id="headingOne11<?php echo $count;?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone11<?php echo $count;?>" aria-expanded="true" aria-controls="collapseOne11<?php echo $count;?>">  <?php echo get_field('sidebar_practice_heading_content');?> </button>
              </h4>
              <div id="collapseone11<?php echo $count;?>" class="accordion-collapse collapse show" aria-labelledby="headingOne11<?php echo $count;?>" data-bs-parent="#accordionExample6" style="">
                <div class="accordion-body">
                  <div class="accordion" id="accordionExample5">
                   <?php while(have_rows('sidebar_practice_area_menu_list')) : the_row(); ?>
                    <div class="accordion-item">
                      <h4 class="accordion-header" id="headingone1<?php echo $count;?>"> <a href="<?php echo get_sub_field('sidebar_practice_area_menu_list_page_link');?>"> <?php echo get_sub_field('sidebar_practice_area_menu_list_page_title');?></a>
                      <?php if(have_rows('sub_practice_area_menu_list')) : ?>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone1<?php echo $count;?>" aria-expanded="false" aria-controls="collapseone"> </button><?php endif;?>
                      </h4>
                        <?php if(have_rows('sub_practice_area_menu_list')) : ?>
                      <div id="collapseone1<?php echo $count;?>" class="accordion-collapse collapse" aria-labelledby="headingone4" data-bs-parent="#accordionExample5">
                        <div class="accordion-body defualt-content-info">
                         <ul>
                         <?php while(have_rows('sub_practice_area_menu_list')) : the_row(); ?>
                         <li><a href="<?php echo get_sub_field('sub_practice_area_menu_list_link');?>"> <?php echo get_sub_field('sub_practice_area_menu_list_title');?></a></li>
                          <?php endwhile;?> 
                         </ul>
                        </div>
                      </div>
                      <?php endif;?>
                    </div>
                    <?php $count = $count + 1;?>
                   <?php endwhile;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
  <?php else:?>
  <?php if(have_rows('sidebar_practice_area_menu_list','option')) : ?>
  <?php $count = 1;?>
  <div class="accordion" id="accordionExample6">
            <div class="accordion-item">
              <h4 class="accordion-header" id="headingOne11<?php echo $count;?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone11<?php echo $count;?>" aria-expanded="true" aria-controls="collapseOne11<?php echo $count;?>">  <?php echo get_field('sidebar_practice_heading_content','option');?> </button>
              </h4>
              <div id="collapseone11<?php echo $count;?>" class="accordion-collapse collapse show" aria-labelledby="headingOne11<?php echo $count;?>" data-bs-parent="#accordionExample6" style="">
                <div class="accordion-body">
                  <div class="accordion" id="accordionExample5">
                   <?php while(have_rows('sidebar_practice_area_menu_list','option')) : the_row(); ?>
                    <div class="accordion-item">
                      <h4 class="accordion-header" id="headingone1<?php echo $count;?>"> <a href="<?php echo get_sub_field('sidebar_practice_area_menu_list_page_link');?>"> <?php echo get_sub_field('sidebar_practice_area_menu_list_page_title');?></a>
                      <?php if(have_rows('sub_practice_area_menu_list','option')) : ?>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone1<?php echo $count;?>" aria-expanded="false" aria-controls="collapseone"> </button><?php endif;?>
                      </h4>
                        <?php if(have_rows('sub_practice_area_menu_list','option')) : ?>
                      <div id="collapseone1<?php echo $count;?>" class="accordion-collapse collapse" aria-labelledby="headingone4" data-bs-parent="#accordionExample5">
                        <div class="accordion-body defualt-content-info">
                         <ul>
                         <?php while(have_rows('sub_practice_area_menu_list','option')) : the_row(); ?>
                         <li><a href="<?php echo get_sub_field('sub_practice_area_menu_list_link');?>"> <?php echo get_sub_field('sub_practice_area_menu_list_title');?></a></li>
                          <?php endwhile;?> 
                         </ul>
                        </div>
                      </div>
                      <?php endif;?>
                    </div>
                    <?php $count = $count + 1;?>
                   <?php endwhile;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
  <?php endif;?>
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
  <?php if(have_rows('testimonials_slider')) : ?>
  <div class="about-us-slider-block">
            <div class="about-us-slider-sec text-center">
              <div class="about-us-slider owl-carousel owl-theme">
               <?php while(have_rows('testimonials_slider')) : the_row(); ?>
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/start-img.png" alt="start-img" width="181" height="30" class="img-fluid"/>
                 <?php echo get_sub_field('testimonials_slider_content');?>
                  <h4><?php echo get_sub_field('testimonials_slider_client_name');?></h4>
                </div>
               <?php endwhile;?>
              </div>
            </div>
          </div>
  <?php else:?>
  <?php if(have_rows('testimonials_slider','option')) : ?>
  <div class="about-us-slider-block">
            <div class="about-us-slider-sec text-center">
              <div class="about-us-slider owl-carousel owl-theme">
               <?php while(have_rows('testimonials_slider','option')) : the_row(); ?>
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/start-img.png" alt="start-img" width="181" height="30" class="img-fluid"/>
                 <?php echo get_sub_field('testimonials_slider_content');?>
                  <h4><?php echo get_sub_field('testimonials_slider_client_name');?></h4>
                </div>
               <?php endwhile;?>
              </div>
            </div>
          </div>
  <?php endif;?>
  <?php endif;?>
  <?php if(have_rows('other_location_list')) : ?>
  <?php $count_la = 1;?>
  <div class="accordion" id="accordionExample8">
  <div class="accordion-item">
    <h4 class="accordion-header" id="headingone11111">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone11111" aria-expanded="true" aria-controls="collapseone11111"> <?php echo get_field('other_la_heading_content');?> </button>
    </h4>
    <div id="collapseone11111" class="accordion-collapse collapse show" aria-labelledby="headingone11111" data-bs-parent="#accordionExample8" style="">
      <div class="accordion-body">
        <div class="accordion" id="accordionExample7">
         <?php while(have_rows('other_location_list')) : the_row(); ?>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingone11<?php echo $count_la;?>"> <a href="<?php echo get_sub_field('other_location_list_link');?>"><?php echo get_sub_field('other_location_list_title');?></a>
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone11<?php echo $count_la;?>" aria-expanded="false" aria-controls="collapseone"> </button>
            </h4>
            <div id="collapseone11<?php echo $count_la;?>" class="accordion-collapse collapse" aria-labelledby="headingone11<?php echo $count_la;?>" data-bs-parent="#accordionExample7">
              <div class="accordion-body defualt-content-info">
               <?php echo get_sub_field('other_location_list_content');?>
              </div>
            </div>
          </div>
       <?php $count_la = $count_la + 1;?>
                   <?php endwhile;?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php else:?>
<?php if(have_rows('other_location_list','option')) : ?>
  <?php $count_la = 1;?>
  <div class="accordion" id="accordionExample8">
  <div class="accordion-item">
    <h4 class="accordion-header" id="headingone11111">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone11111" aria-expanded="true" aria-controls="collapseone11111"> <?php echo get_field('other_la_heading_content','option');?> </button>
    </h4>
    <div id="collapseone11111" class="accordion-collapse collapse show" aria-labelledby="headingone11111" data-bs-parent="#accordionExample8" style="">
      <div class="accordion-body">
        <div class="accordion" id="accordionExample7">
         <?php while(have_rows('other_location_list','option')) : the_row(); ?>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingone11<?php echo $count_la;?>"> <a href="<?php echo get_sub_field('other_location_list_link');?>"><?php echo get_sub_field('other_location_list_title');?></a>
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone11<?php echo $count_la;?>" aria-expanded="false" aria-controls="collapseone"> </button>
            </h4>
            <div id="collapseone11<?php echo $count_la;?>" class="accordion-collapse collapse" aria-labelledby="headingone11<?php echo $count_la;?>" data-bs-parent="#accordionExample7">
              <div class="accordion-body defualt-content-info">
               <?php echo get_sub_field('other_location_list_content');?>
              </div>
            </div>
          </div>
       <?php $count_la = $count_la + 1;?>
                   <?php endwhile;?>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php endif;?>
  <?php endif;?>
</div>
