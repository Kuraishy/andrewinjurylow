<?php
/*
Template Name: Home Page
*/
get_header();
while (have_posts()) : the_post();

    if (get_field('home_desktop_banner_image')) {
        $desktop_tab = get_field('home_desktop_banner_image');
    } else {
        $desktop_tab = get_template_directory_uri() . '/images/home-benner.png';
    }

    if (get_field('home_banner_tab_image')) {
        $banner_tab = get_field('home_banner_tab_image');
    } else {
        $banner_tab = $desktop_tab;
    }

    if (get_field('home_banner_mobile_image')) {
        $banner_mob = get_field('home_banner_mobile_image');
    } else {
        $banner_mob = $banner_tab;
    }
?>
    <style>
        .home-benner-sec-bg {
            background: url(<?php echo $desktop_tab; ?>) !important;
            background-position: top center !important;
            background-size: cover !important;
        }

        @media (max-width: 991px) {
            .home-benner-sec-bg {
                background: url(<?php echo $banner_tab; ?>) !important;
            }
        }

        @media (max-width: 576px) {
            .home-benner-sec-bg {
                background: url(<?php echo $banner_tab; ?>) !important;
            }
        }
    </style>
    <section class="home-benner-sec bg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="home-info">
                        <?php echo get_field('home_banner_heading_content'); ?>
                        <?php if (get_field('home_banner_button_text')) : ?>
                            <a href="<?php echo get_field('home_banner_button_link'); ?>" class="home-btn"><?php echo get_field('home_banner_button_text'); ?><img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." width="" height="" class="img-fluid" /> </a><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(() => {
            jQuery('.home-benner-sec').addClass('home-benner-sec-bg');
        });
    </script>
    <?php if (have_rows('home_caseresult')) : ?>
        <section class="record-million-section">
            <div class="container">
                <div class="record-million-slider owl-carousel owl-theme">
                    <?php while (have_rows('home_caseresult')) : the_row(); ?>
                        <div class="item">
                            <div class="record-million-block">
                                <?php echo get_sub_field('home_caseresult_content'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
				 <div class="shortcode-coman-btn shortcode-coman-btn-second" style="text-align: center;"> 
    <?php if(get_field('case_result_button_text')):?>
    <a href="<?php echo get_field('case_result_button_link'); ?>" class="coman-btn coman-btn-third"><?php echo get_field('case_result_button_text'); ?></a><?php endif; ?> 
	<?php if(get_field('case_result_second_button_text')):?><small>or</small> <a href="tel:<?php echo get_field('case_result_second_button_link'); ?>" class="coman-btn"><?php echo get_field('case_result_second_button_text'); ?></a><?php endif; ?> </div>
            </div>
        </section>
		

    <?php endif; ?>
    <?php if (have_rows('home_experience_block')) : ?>
        <section class="experience-sec">
            <div class="row text-center">
                <?php while (have_rows('home_experience_block')) : the_row(); ?>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="experience-block">
                            <h3><?php echo get_sub_field('home_experience_block_title'); ?></h3>
                            <?php if (get_sub_field('home_experience_block_icon_image')) : ?>
                                <img src="<?php echo get_sub_field('home_experience_block_icon_image'); ?>" alt="exe-icon-1" width="62" height="62" class="img-fluid" />
                            <?php endif; ?>
                            <?php echo get_sub_field('home_experience_block_content'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>
    <style>
        .welcome-sec-bg {
            background: url(<?php echo get_template_directory_uri(); ?>/images/welcome-bg.png);"
        }
    </style>
    <section class="welcome-sec no-padding pb-0 bg">
        <div class="container defualt-content-info">
            <div class="text-center">
                <?php echo get_field('home_welcome_heading_content'); ?>
            </div>
            <div class="row coman-row">
                <div class="col-lg-6 coman-col">
                    <div class="welcome-left-block">
                        <figure><img src="<?php echo get_field('home_welcomeleft_side_image'); ?>" alt="welcome-img" width="790" height="460" class="img-fluid" /> </figure>
                        <?php echo get_field('home_welcome_block_content'); ?>
                    </div>
                </div>
                <div class="col-lg-6 coman-col">
                    <div class="welcome-right-block">
                        <?php echo get_field('home_welcome_rightside_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(() => {
            jQuery('.welcome-sec').addClass('welcome-sec-bg');
        });
    </script>
    <section class="welcome-sec-2 no-padding">
        <div class="container defualt-content-info">
            <div class="row coman-row">
                <div class="col-lg-6 coman-col">
                    <?php echo get_field('home_welcome_contact_left_side_content'); ?>
                </div>
                <div class="col-lg-6 coman-col">
                    <?php
                    if (get_field('home_welcome_contact_form_background_image')) {
                        $contact_tab = get_field('home_welcome_contact_form_background_image');
                    } else {
                        $contact_tab = get_template_directory_uri() . '/images/contact-img.png';
                    }
                    ?>
                    <div class="form-info text-center bg" style="background: url(<?php echo $contact_tab; ?>);">
                        <div class="coman-form">
                            <div class="text-center">
                                <?php echo get_field('home_welcome_contact_form_heading'); ?>
                            </div>
                            <?php echo get_field('home_welcome_contact_form_shortcode'); ?>
                            <?php if (get_field('home_welcome_contect_form_bottom_content')) : ?>
                                <div class="call-info">
                                    <p><?php echo get_field('home_welcome_contect_form_bottom_content'); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <script>
                        jQuery(() => {
                            jQuery('.form-info').css('background', 'url(<?php echo $contact_tab; ?>)');
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
    <?php if (have_rows('home_practice_area_list')) : ?>
        <section class="practice-areas-sec no-padding pt-0">
            <div class="container">
                <div class="defualt-content-info text-center">
                    <?php echo get_field('home_practice_area_heading_content'); ?>
                </div>
                <div class="row">
                    <?php while (have_rows('home_practice_area_list')) : the_row(); ?>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="practice-areas-block">
                                <figure> <img src=" <?php echo get_sub_field('home_practice_area_list_image'); ?>" alt="practice-areas-block" width="400" height="286"> </figure>
                                <div class="practice-areas-block-det">
                                    <?php echo get_sub_field('home_practice_area_list_content'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php if (get_field('home_practice_area_button_text')) : ?>
                    <div class="text-center"> <a href="<?php echo get_field('home_practice_area_button_link'); ?>" class="coman-btn"><?php echo get_field('home_practice_area_button_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." width="" height="" class="img-fluid" /></a> </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    <?php $count = 0;
    $blog_args = array(
        'post_type'      => 'testimonial',
        'posts_per_page' => 5,
        'order'          => 'DESC',
    );
    ?>
    <style>
        .about-us-sec-bg {
            background-image: url(<?= get_template_directory_uri(); ?>/images/faq-img.jpg);
        }
    </style>
    <section class="about-us-sec bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="defualt-content-info">
                        <?php echo get_field('home_testimonials_heading_content'); ?>
                        <?php if (get_field('home_testimonials_button_text')) : ?>
                            <a href="<?php echo get_field('home_testimonials_button_link'); ?>" class="coman-btn"><?php echo get_field('home_testimonials_button_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." width="" height="" class="img-fluid" /></a> <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-slider-sec text-center">
                        <div class="about-us-slider owl-carousel owl-theme">
                            <?php
                            $blog_loop = new WP_Query($blog_args);
                            while ($blog_loop->have_posts()) : $blog_loop->the_post(); ?>
                                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/start-img.png" alt="start-img" width="181" height="30" class="img-fluid" />
                                    <?php the_content(); ?>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(() => {
            jQuery('.about-us-sec').addClass('about-us-sec-bg');
        });
    </script>
    <?php
    if (get_field('home_about_background_image')) {
        $clientinfobg = get_field('home_about_background_image');
    } else {
        $clientinfobg = get_template_directory_uri() . '/images/client-info-bg.jpg';
    }
    ?>
    <style>
        .client-info-sec-bg {
            background-image: url(<?php echo $clientinfobg; ?>);
        }
    </style>
    <section class="client-info-sec bg">
        <?php if (get_field('home_aboutright_sidebar_content')) : ?>
            <div class="clinet-info">
                <p><?php echo get_field('home_aboutright_sidebar_content'); ?></p>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 align-self-end">
                    <div class="defualt-content-info text-center"> <img src="<?php echo get_field('home_about_image'); ?>" alt="client-info-img" width="603" height="850" class="img-fluid" /> </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="defualt-content-info">
                        <?php echo get_field('home_about_heading_content'); ?>
                        <?php if (get_field('home_about_button_text')) : ?>
                            <a href="<?php echo get_field('home_about_button_link'); ?>" class="coman-btn"><?php echo get_field('home_about_button_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." width="" height="" class="img-fluid" /></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(() => {
            jQuery('.client-info-sec').addClass('client-info-sec-bg');
        });
    </script>
    <?php
    if (get_field('home_whychoose_background_image')) {
        $whychoosebg = get_field('home_whychoose_background_image');
    } else {
        $whychoosebg = get_template_directory_uri() . '/images/why-choose-bg.jpg';
    }
    ?>
    <style>
        .why-choose-sec-bg {
            background-image: url(<?php echo $whychoosebg; ?>);
        }
    </style>
    <section class="why-choose-sec no-padding bg">
        <div class="container">
            <div class="defualt-content-info text-center">
                <?php echo get_field('home_community_heading_content'); ?>
            </div>
            <div class="row coman-row">
                <?php if (have_rows('home_why_choose_us_block')) : ?>
                    <div class="col-md-4 coman-col">
                        <?php $count = 1; ?>
                        <?php while (have_rows('home_why_choose_us_block')) : the_row(); ?>
                            <?php if ($count == 1 || $count == 2) : ?>
                                <div class="why-choose-block">
                                    <img src="<?php echo get_sub_field('home_why_choose_us_block_icon'); ?>" alt="why-choose-icon1" width="63" height="63" class="img-fluid" />
                                    <?php echo get_sub_field('home_why_choose_us_block_content'); ?>
                                </div>
                            <?php endif; ?>
                            <?php $count = $count + 1; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-md-4 coman-col">
                        <?php $count = 1; ?>
                        <?php while (have_rows('home_why_choose_us_block')) : the_row(); ?>
                            <?php if ($count == 3 || $count == 4) : ?>
                                <div class="why-choose-block">
                                    <img src="<?php echo get_sub_field('home_why_choose_us_block_icon'); ?>" alt="why-choose-icon1" width="63" height="63" class="img-fluid" />
                                    <?php echo get_sub_field('home_why_choose_us_block_content'); ?>
                                </div>
                            <?php endif; ?>
                            <?php $count = $count + 1; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-md-4 coman-col">
                        <?php $count = 1; ?>
                        <?php while (have_rows('home_why_choose_us_block')) : the_row(); ?>
                            <?php if ($count == 5 || $count == 6) : ?>
                                <div class="why-choose-block">
                                    <img src="<?php echo get_sub_field('home_why_choose_us_block_icon'); ?>" alt="why-choose-icon1" width="63" height="63" class="img-fluid" />
                                    <?php echo get_sub_field('home_why_choose_us_block_content'); ?>
                                </div>
                            <?php endif; ?>
                            <?php $count = $count + 1; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <script>
        jQuery(() => {
            jQuery('.why-choose-sec').addClass('why-choose-sec-bg');
        });
    </script>

    <?php if (have_rows('home_faqs_list')) : ?>
        <?php $faqcount = 1; ?>
        <section class="faq-section no-padding">
            <div class="container">
                <div class="row coman-row">
                    <div class="col-lg-6 coman-col">
                        <div class="defualt-content-info">
                            <?php echo get_field('home_faq_heading_content'); ?>
                        </div>
                        <div class="coman-accordion accordion" id="accordionExample">
                            <?php while (have_rows('home_faqs_list')) : the_row(); ?>
                                <?php if ($faqcount == 1) : ?>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header" id="heading-<?php echo $faqcount; ?>">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $faqcount; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $faqcount; ?>"><i class="fa-solid fa-question"></i><?php echo get_sub_field('home_faqs_list_question'); ?></button>
                                        </h4>
                                        <div id="collapseOne<?php echo $faqcount; ?>" class="accordion-collapse collapse show" aria-labelledby="heading-<?php echo $faqcount; ?>" data-bs-parent="#accordionExample" style="">
                                            <div class="accordion-body defualt-content-info">
                                                <?php echo get_sub_field('home_faqs_list_answer'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header" id="heading-<?php echo $faqcount; ?>">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $faqcount; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $faqcount; ?>"><i class="fa-solid fa-question"></i><?php echo get_sub_field('home_faqs_list_question'); ?></button>
                                        </h4>
                                        <div id="collapse-<?php echo $faqcount; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $faqcount; ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body defualt-content-info">
                                                <?php echo get_sub_field('home_faqs_list_answer'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php $faqcount = $faqcount + 1; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 coman-col">
                        <?php if (get_field('home_faqs_image')) : ?>
                            <figure><img src="<?php echo get_field('home_faqs_image'); ?>" alt="faq-img" width="854" height="710" class="img-fluid" /> </figure>
                        <?php endif; ?>
                        <?php if (get_field('home_faqs_title')) : ?>
                            <div class="different-question-block">
                                <h5><?php echo get_field('home_faqs_title'); ?></h5>
                                <a href="<?php echo get_field('home_faq_button_link'); ?>" class="coman-btn"><?php echo get_field('home_faq_button_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." class="img-fluid" width="" height=""></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php
    $args = array(
        'numberposts'   => 3,
        'post_type'     => 'post',
        'posts_per_page' => 3
    );
    $the_query = new WP_Query($args);
    $categories = get_the_category($post->ID);
    if ($the_query->have_posts()) : ?>
        <section class="blog-sec">
            <div class="container">
                <div class="defualt-content-info text-center">
                    <?php echo get_field('home_blog_heading_content'); ?>
                </div>
                <div class="row coman-row">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-md-4 coman-col">
                            <div class="blog-block">
                                <div class="blog-block-inn">
                                    <div class="cat-list"><?php
                                                            $categories = get_the_category();
                                                            foreach ($categories as $category) {
                                                                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                                                            }
                                                            ?></div>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p>
                                        <?php if (get_the_content()) {
                                            $post_excerpt = strip_tags(get_the_content());
                                            if (strlen($post_excerpt) > 220) {
                                                echo substr($post_excerpt, 0, 219) . '...';
                                            } else {
                                                echo $post_excerpt;
                                            }
                                        } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_query(); ?>
                </div>
                <?php if (get_field('home_blog_button_text')) : ?>
                    <div class="text-center"> <a href="<?php echo get_field('home_blog_button_link'); ?>" class="coman-btn"><?php echo get_field('home_blog_button_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/btn-arrow.png" alt="btn-arrow." class="img-fluid" width="" height=""></a> </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    <?php if (have_rows('home_areas_we_serve_block')) : ?>
        <section class="practice-areas-sec areas-we-serve-setion no-padding">
            <div class="container">
                <div class="defualt-content-info text-center">
                    <?php echo get_field('home_areaweserve_heading_content'); ?>
                </div>
                <div class="row">
                    <?php while (have_rows('home_areas_we_serve_block')) : the_row(); ?>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="practice-areas-block">
                                <figure> <img src="<?php echo get_sub_field('home_areas_we_serve_block_image'); ?>" alt="area-img-1" width="390" height="338"> </figure>
                                <div class="practice-areas-block-det">
                                    <?php echo get_sub_field('home_areas_we_serve_block_content'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endwhile;
get_footer(); ?>