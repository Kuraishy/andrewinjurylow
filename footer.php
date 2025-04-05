<?php

/**
 * The template for displaying the footer
 */
?>
<?php if (get_field('contact_sec_bg_image', 'options')) {
    $contact = get_field('contact_sec_bg_image', 'options');
} else {
    $contact = get_template_directory_uri() . '/images/contact-us-bg.jpg';
} ?>
<style>
    .contact-info-sec-bg {
        background-image: url(<?php echo $contact; ?>);
    }
</style>
<section class="contact-info-sec bg">
    <div class="contact-title">
        <div class="container title-footer-hl">
            <?php echo get_field('contact_sec_heading_content', 'options'); ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="coman-form">
                    <div class="text-center">
                        <?php echo get_field('contact_sec_contact_form_heading_title', 'options'); ?>
                    </div>
                    <?php echo get_field('contact_sec_contact_form_shortcode', 'options'); ?>
                    <?php if (get_field('contact_sec_bottom_content', 'options')) : ?>
                        <div class="call-info">
                            <?php echo get_field('contact_sec_bottom_content', 'options'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (get_field('contact_sec_image', 'options')) : ?>
                <div class="col-lg-6 text-center align-self-end">
                    <img src="<?php echo get_field('contact_sec_image', 'options'); ?>" alt="conatct-img" width="711" height="932" class="img-fluid" />
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<script>
    jQuery(() => {
        jQuery('.contact-info-sec').addClass('contact-info-sec-bg');
    });
</script>
<?php
$footer_copyright = get_field('footer_copyright', 'option');
$footer_logo = get_field('footer_logo', 'option');
?>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row coman-row">
                <div class="col-sm-6 col-md-6 col-lg-3 coman-col">
                    <div class="footer-logo text-center"> <img src="<?php echo get_field('footer_logo', 'option'); ?>" alt="footer-logo" width="355" height="76" class="img-fluid"> </div>
                    <div class="phone-link text-center"> <a href="tel:<?php echo get_field('footer_contact_number', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-phone-icon-1.png" alt="footer-phone-icon-1" width="35" height="36" class="img-fluid" /> <?php echo get_field('footer_contact_number', 'options'); ?> </a> </div>
                    <?php if (have_rows('footer_social_medias', 'options')) { ?>
                        <div class="social-link text-center">
                            <ul>
                                <?php while (have_rows('footer_social_medias', 'options')) {
                                    the_row(); ?>
                                    <?php if (get_sub_field('footer_social_medias_link') != '' && get_sub_field('footer_social_medias_link') != '#') : ?>
                                        <li>
                                            <a href="<?php echo get_sub_field('footer_social_medias_link'); ?>">
                                                <i class="<?php echo get_sub_field('footer_social_medias_icons'); ?>"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
                <?php if (have_rows('footer_practice_area_menu_list', 'options')) { ?>
                    <div class="col-sm-6 col-md-6 col-lg-3 coman-col">
                        <div class="footer-link ">
                            <?php echo get_field('footer_pa_heading_content', 'options'); ?>
                            <ul>
                                <?php while (have_rows('footer_practice_area_menu_list', 'options')) {
                                    the_row(); ?>
                                    <li><a href="<?php echo get_sub_field('footer_practice_area_menu_list_page_link'); ?>"> <?php echo get_sub_field('footer_practice_area_menu_list_page_title'); ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
                <?php if (have_rows('footer_location_map', 'options')) { ?>
                    <?php while (have_rows('footer_location_map', 'options')) {
                        the_row(); ?>
                        <div class="col-sm-6 col-md-6 col-lg-2 coman-col">
                            <div class="location-block">
                                <figure><?php echo get_sub_field('footer_location_map_code'); ?> </figure>
                                <?php echo get_sub_field('footer_location_map_address'); ?>
                                <?php if (get_sub_field('footer_location_map_button_text')) : ?>
                                    <a href="<?php echo get_sub_field('footer_location_map_button_link'); ?>" class="coman-btn"><?php echo get_sub_field('footer_location_map_button_text'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>
        </div>
    </div>
    <div class="footer-menu">
        <div class="container">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'menu_class'     => false,
                    'menu_id'         => false,
                    'container'         => false
                )
            );
            ?>
        </div>
    </div>
    <div class="copyright-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7 align-self-center">
                    <p><?php echo get_field('footer_copyright', 'option'); ?></p>
                </div>
                <div class="col-md-5 align-self-center">
                    <figure><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/elite-logo.png" alt="elite-logo" width="260" height="56"></a> </figure>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<div class="mobile-contact-info"> 
    <a id="message-us-widget" href="<?php echo get_field('mobile_view_button_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon-1.png" alt="#" width="" height="" class="img-fluid" /><?php echo get_field('mobile_view_button_text', 'option'); ?> </a> <a id="call-us-widget" href="tel:<?php echo get_field('mobile_view_second_button_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon-2.png" alt="#" width="" height="" class="img-fluid" /><?php echo get_field('mobile_view_second_button_text', 'option'); ?> </a> </div>

<?php echo get_field('footer_scripts', 'option'); ?>
</body>

</html>