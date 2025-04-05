<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<!-- additional scripts -->
<?php echo get_field('header_scripts', 'option'); ?>
</head>
<body <?php body_class(); ?>>
<?php echo get_field('body_scripts', 'option'); ?>
<?php
        $site_name           = get_bloginfo( 'name' );
        $site_url            = get_site_url();
        $header_logo         = get_field( 'header_logo', 'option' );
        $header_phone_no     = get_field( 'header_phone_no', 'option' );
        $header_text         = get_field( 'header_text', 'option' );
        $header_sub_text     = get_field( 'header_sub_text', 'option' );
        ?>
<header>
  <div class="header-info">
  <?php if(get_field('page_header_logo')):?>
	   <?php $header_logo123 = get_field('page_header_logo');?>
    <div class="logo"> <a href="<?php echo $site_url; ?>"> <img src="<?php echo $header_logo123; ?>" width="425" height="92" alt="<?php echo $site_name;?>" class="img-fluid" /> </a></div>
	<?php else:?>
	<div class="logo"> <a href="<?php echo $site_url; ?>"> <?php echo wp_get_attachment_image( $header_logo, array( 425, 92 ), false, array( 'class' => 'img-fluid',  'alt' => $site_name ) ); ?> </a> </div>
	<?php endif;?>
    <div class="nav-menu-content">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="btn-toggle">
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navtopmenu" aria-controls="navtopmenu" aria-expanded="false" aria-label="Toggle navigation"> <span></span><span> </span><span></span> </button>
        </div>
        <div class="collapse navbar-collapse" id="navtopmenu">
          <?php
                        wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'sm sm-clean',
                            'menu_id'        => 'main-menu',
                            'container'      => false
                        ) );
                        ?>
        </div>
      </nav>
    </div>
    <div class="tel-info">
      <?php if ( !empty( $header_text ) ) : ?>
      <small> <?php echo $header_text; ?></small>
      <?php endif; ?>
      <a href="tel:<?php echo $header_phone_no; ?>" class="tel-link"> <?php echo $header_phone_no; ?></a>
      <?php if ( !empty( $header_sub_text ) ) : ?>
      <p> <?php echo $header_sub_text; ?> </p>
      <?php endif; ?>
    </div>
  </div>
</header>
