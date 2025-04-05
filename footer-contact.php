<footer>
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
                    <p><?php echo get_field('footer_copyright', 'option');?></p>
                </div>
                <div class="col-md-5 align-self-center">
                       <figure><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri();?>/images/elite-logo.png" alt="elite-logo" width="260" height="56"></a> </figure>                
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="mobile-contact-info"> <a href="mailto:<?php echo get_field('mobile_view_button_link', 'option');?>"><img src="<?php echo get_template_directory_uri();?>/images/footer-icon-1.png" alt="#" width="" height="" class="img-fluid"/><?php echo get_field('mobile_view_button_text', 'option');?> </a> <a href="tel:<?php echo get_field('mobile_view_second_button_link', 'option');?>"><img src="<?php echo get_template_directory_uri();?>/images/footer-icon-2.png" alt="#" width="" height="" class="img-fluid"/><?php echo get_field('mobile_view_second_button_text', 'option');?> </a> </div>

<?php wp_footer('second'); ?>
<?php echo get_field('footer_scripts', 'option'); ?>
</body>
</html>
