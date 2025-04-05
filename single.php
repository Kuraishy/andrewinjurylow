<?php /* Template for displaying News post pages. */
get_header();
while (have_posts()) : the_post();?>
<section class="inner-benner-sec bg" style="background:url(<?php echo get_template_directory_uri();?>/images/inner-benner.jpg);">
  <div class="container">
   <h5><?php $categories = get_the_category();
					if ( ! empty( $categories ) ) {
						echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
					}?></h5>
    <h1><?php the_title();?></h1>
    <p>by <a href="https://wordpress-1350103-5394656.cloudwaysapps.com/matthew-c-andrew/"><?php the_author(); ?></a> -  <?php the_time('F jS, Y'); ?></p>
  </div>
</section>
<section class="blog-post-sec pt-0 no-padding">
  <div class="container">
    <div class="row coman-row">
      <div class="col-lg-8 coman-col">
        <div class="defualt-content-info"> 
			<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
        <?php the_content();?>
        </div>
        <?php if(have_rows('gen_faq_list')) : ?>
        <?php $faq_count=1; ?>
        <div class="faq-block">
          <div class="defualt-content-info">
            <?php echo get_field('gen_faqs_heading_content');?>
          </div>
          <div class="coman-accordion accordion" id="accordionExample">
           <?php while(have_rows('gen_faq_list')) : the_row(); ?>
           <?php if($faq_count == 1): ?>
            <div class="accordion-item">
              <h4 class="accordion-header" id="headingOne1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1"><i class="fa-solid fa-question"></i><?php echo get_sub_field('gen_faq_list_question');?></button>
              </h4>
              <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample" style="">
                <div class="accordion-body defualt-content-info">
                 <?php echo get_sub_field('gen_faq_list_answer'); ?>
                </div>
              </div>
            </div>
           <?php else: ?>
            <div class="accordion-item">
              <h4 class="accordion-header" id="heading<?php echo $faq_count; ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?php echo $faq_count;?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $faq_count; ?>"><i class="fa-solid fa-question"></i><?php echo get_sub_field('gen_faq_list_question');?></button>
              </h4>
              <div id="collapseTwo<?php echo $faq_count;?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $faq_count;?>" data-bs-parent="#accordionExample">
                <div class="accordion-body defualt-content-info">
                   <?php echo get_sub_field('gen_faq_list_answer'); ?>
                </div>
              </div>
            </div>
            <?php endif;?>
             <?php $faq_count = $faq_count + 1; ?>
           <?php endwhile;?>
          </div>
        </div>
        <?php else: ?>
        <?php if(have_rows('gen_faq_list','option')) : ?>
        <?php $faq_count=1;?>
        <div class="faq-block">
          <div class="defualt-content-info">
            <?php echo get_field('gen_faqs_heading_content','option'); ?>
          </div>
          <div class="coman-accordion accordion" id="accordionExample">
           <?php while(have_rows('gen_faq_list','option')) : the_row(); ?>
           <?php if($faq_count == 1):?>
            <div class="accordion-item">
              <h4 class="accordion-header" id="headingOne1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1"><i class="fa-solid fa-question"></i><?php echo get_sub_field('gen_faq_list_question');?></button>
              </h4>
              <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample" style="">
                <div class="accordion-body defualt-content-info">
                 <?php echo get_sub_field('gen_faq_list_answer'); ?>
                </div>
              </div>
            </div>
           <?php else: ?>
            <div class="accordion-item">
              <h4 class="accordion-header" id="heading<?php echo $faq_count; ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?php echo $faq_count;?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $faq_count; ?>"><i class="fa-solid fa-question"></i><?php echo get_sub_field('gen_faq_list_question'); ?></button>
              </h4>
              <div id="collapseTwo<?php echo $faq_count;?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $faq_count;?>" data-bs-parent="#accordionExample">
                <div class="accordion-body defualt-content-info">
                   <?php echo get_sub_field('gen_faq_list_answer'); ?>
                </div>
              </div>
            </div>
            <?php endif; ?>
             <?php $faq_count = $faq_count + 1; ?>
           <?php endwhile;?>
          </div>
        </div>
        <?php endif;?>
        <?php endif;?> 
      </div>
      <div class="col-lg-4 coman-col">
         <?php get_sidebar('blog');?>
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
<?php global $post;
$categories = get_the_category($post->ID);
if ($categories):
    $category_ids = array();
    foreach ($categories as $cat):
        $category_ids[] = $cat->term_id;
    endforeach;
    $args = array('category__in' => $category_ids, 'post__not_in' => array($post->ID), 'posts_per_page' => 3, 'orderby' => 'rand');
    $my_query = new wp_query($args);
    if ($my_query->have_posts()):?>
<section class="blog-sec no-padding">
  <div class="container">
    <div class="defualt-content-info text-center">
      <h2>Related Blog Posts</h2>
    </div>
    <div class="row coman-row">
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="col-md-4 coman-col">
        <div class="blog-block">
          <div class="blog-block-inn">
            <div class="cat-list"><?php $categories = get_the_category();
					if ( ! empty( $categories ) ) {
						echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
					}?></div>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
            <p>
              <?php if (get_the_content()) {
                                    $post_excerpt = strip_tags(get_the_content());
                                    if (strlen($post_excerpt) > 110) {
                                        echo substr($post_excerpt, 0, 107) . '...';
                                    } else {
                                        echo $post_excerpt . '...';
                                    }
                                } ?>
              </p>
          </div>
        </div>
      </div>
   <?php endwhile; ?>           
    </div>  
  </div>
</section>
<?php endif; wp_reset_query(); endif;?>
<?php if(have_rows('practice_areas_list')) : ?>
<section class="practice-areas-sec no-padding">
  <div class="container">
    <div class="defualt-content-info text-center">
      <?php echo get_field('practice_are_heading_content');?>
    </div>
    <div class="row">
    <?php while(have_rows('practice_areas_list')) : the_row(); ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="practice-areas-block">
          <figure> <img src="<?php echo get_sub_field('practice_areas_list_image');?>" alt="practice-areas-block-img" width="400" height="286"> </figure>
          <div class="practice-areas-block-det">
            <?php echo get_sub_field('practice_areas_list_content');?>
          </div>
        </div>
      </div>
   <?php endwhile;?>
    </div>
    <?php if(get_field('practice_area_button_text')):?>
    <div class="text-center"> <a href="<?php echo get_field('practice_area_button_link');?>" class="coman-btn"><?php echo get_field('practice_area_button_text');?><img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." width="" height="" class="img-fluid"></a> </div><?php endif;?>
  </div>
</section>
<?php else:?>
<?php if(have_rows('practice_areas_list','option')) : ?>
<section class="practice-areas-sec no-padding">
  <div class="container">
    <div class="defualt-content-info text-center">
      <?php echo get_field('practice_are_heading_content','option');?>
    </div>
    <div class="row">
    <?php while(have_rows('practice_areas_list','option')) : the_row(); ?>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="practice-areas-block">
          <figure> <img src="<?php echo get_sub_field('practice_areas_list_image');?>" alt="practice-areas-block-img" width="400" height="286"> </figure>
          <div class="practice-areas-block-det">
            <?php echo get_sub_field('practice_areas_list_content');?>
          </div>
        </div>
      </div>
   <?php endwhile;?>
    </div>
    <?php if(get_field('practice_area_button_text','option')):?>
    <div class="text-center"> <a href="<?php echo get_field('practice_area_button_link','option');?>" class="coman-btn"><?php echo get_field('practice_area_button_text','option');?><img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." width="" height="" class="img-fluid"></a> </div><?php endif;?>
  </div>
</section>
<?php endif;?>
<?php endif;?>
<?php endwhile;
get_footer(); ?>
