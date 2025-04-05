<?php
/* 
Template for displaying archives 
*/
get_header();
$page_for_posts = get_option('page_for_posts');
if (get_field('page_banner_desktop_image', $page_for_posts)) {
    $banner_img = get_field('page_banner_desktop_image', $page_for_posts);
} else {
    $banner_img = get_template_directory_uri() . '/images/inner-benner.jpg';
} ?>
<section class="inner-benner-sec bg" style="background: url(<?php echo $banner_img; ?>);">
    <div class="container">
        <h2><?php echo get_the_archive_title(); ?></h2>
    </div>
</section>
<section class="blog-index-sec no-padding">
    <div class="container">
        <div class="row coman-row">
            <div class="col-lg-8 coman-col">
                <div class="blog-list">
                    <?php
                    $count = 1;
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            $count++; ?>
                            <?php get_template_part('template-parts/content'); ?>
                    <?php endwhile;
                    endif; ?>
                </div>
                <?php if ($count > 10) : ?>
                    <div class="text-center"> <a href="JavaScript:void(0);" id="load-more-post-button" class="coman-btn">load more <img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." class="img-fluid" width="" height=""></a> </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 coman-col">
                <?php get_sidebar('blog'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
    var currentPage = 1;
    jQuery('#load-more-post-button').on('click', function() {
        currentPage++; // Do currentPage + 1, because we want to load the next page
        jQuery.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'andrewinjurylow_load_more',
                paged: currentPage,
            },
            success: function(res) {
                if (res != '') {
                    jQuery('.blog-list').append(res);
                } else {
                    jQuery('#load-more-post-button').hide();
                }
            }

        });
    });
</script>