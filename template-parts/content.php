<?php if ( has_post_thumbnail() ) : ?>
<div class="blog-block">
  <figure> <?php the_post_thumbnail(array(370,370)); ?> </figure>
  <div class="blog-block-det">
    <div class="cat-list">
      <?php $categories = get_the_category();
					if ( ! empty( $categories ) ) {
						echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
					}?>
    </div>
    <h4><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a></h4>
    <div class="date">by <a href="https://wordpress-1350103-5394656.cloudwaysapps.com/matthew-c-andrew/">
      <?php the_author(); ?>
      </a></a> -
      <?php the_time('F jS, Y'); ?>
    </div>
    <p>
      <?php if (get_the_content()) {
			  $post_excerpt = strip_tags(get_the_content());
			  if (strlen($post_excerpt) > 155) {
				  echo substr($post_excerpt, 0, 154) . '...';
			  } else {
				  echo $post_excerpt;
			  }
		  } ?>
    </p>
  </div>
</div>
<?php else:?>
<div class="blog-block no-image">
  <div class="blog-block-det">
    <div class="cat-list">
      <?php $categories = get_the_category();
					if ( ! empty( $categories ) ) {
						echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
					}?>
    </div>
    <h4><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a></h4>
    <div class="date">by <a href="javascript:void(0)">
      <?php the_author(); ?>
      </a></a> -
      <?php the_time('F jS, Y'); ?>
    </div>
    <p>
      <?php if (get_the_content()) {
			  $post_excerpt = strip_tags(get_the_content());
			  if (strlen($post_excerpt) > 155) {
				  echo substr($post_excerpt, 0, 154) . '...';
			  } else {
				  echo $post_excerpt;
			  }
		  } ?>
    </p>
  </div>
</div>
<?php endif;?>
