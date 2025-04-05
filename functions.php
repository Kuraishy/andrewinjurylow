<?php
require get_template_directory() . '/inc/custom_post_type.php';
function andrewinjurylow_completly_disable_block_editor( $use_block_editor ) {
	return false;
}
add_filter( 'use_block_editor_for_post_type', 'andrewinjurylow_completly_disable_block_editor' );

function andrewinjurylow_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
	array(
		'primary'	 => __( 'Main Menu', 'andrewinjurylow' ),
		'footer'	 => __( 'Footer Menu', 'andrewinjurylow' ),
	) );
}
add_action( 'after_setup_theme', 'andrewinjurylow_setup' );

function andrewinjurylow_theme_scripts() {
	global $wp_query;

	wp_enqueue_style( 'andrewinjurylow-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'andrewinjurylow-smartmenu', get_template_directory_uri() . '/css/smartmenu.css', array(), null );
	wp_enqueue_style( 'andrewinjurylow-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), null );
	wp_enqueue_style( 'andrewinjurylow-font-awesome', get_template_directory_uri() . '/css/fontawesome.css', array(), null );
	wp_enqueue_style( 'andrewinjurylow-main', get_template_directory_uri() . '/css/main.css', array(), null );
	wp_enqueue_style( 'andrewinjurylow-main-responsive', get_template_directory_uri() . '/css/main-responsive.css', array(), null );
	wp_enqueue_style( 'andrewinjurylow-contact', get_template_directory_uri() . '/css/contact.css', array(), null );
	wp_enqueue_style( 'andrewinjurylow-style', get_stylesheet_uri() );
	
	if ( is_page() && is_page_template( 'page-templates/template-home.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/home.css', array(), null );
	}else if ( is_page() && is_page_template( 'page-templates/template-elite-client-landing-pages.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/elite-client-landing-pages.css', array(), null );
	} else if ( is_page() && is_page_template( 'page-templates/template-ppc-page.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/ppc.css', array(), null );
	}
	else if ( is_page() && is_page_template( 'page-templates/template-case-result.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/case-result.css', array(), null );
	}else if ( is_page() && is_page_template( 'page-templates/template-thank-you.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/thank-you.css', array(), null );
	} else if ( is_page() && is_page_template( 'page-templates/template-attorney-bio.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/attorney-bio.css', array(), null );
	} else if ( is_page() && is_page_template( 'page-templates/template-contact.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/contact-us-page.css', array(), null );
	} else if ( is_page() && is_page_template( 'page-templates/template-location-landing-page.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/location-landing-page.css', array(), null );
		wp_enqueue_style( 'andrewinjurylow-page-sidebar', get_template_directory_uri() . '/css/coman-sidebar.css', array(), null );
	}
	 else if ( is_page() && is_page_template( 'page-templates/template-super-landing-page.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/super-landing-page.css', array(), null );
		wp_enqueue_style( 'andrewinjurylow-page-sidebar', get_template_directory_uri() . '/css/coman-sidebar.css', array(), null );
	}
	 else if ( is_page() && is_page_template( 'page-templates/template-practice-area.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/practice-area-template.css', array(), null );
		wp_enqueue_style( 'andrewinjurylow-page-sidebar', get_template_directory_uri() . '/css/coman-sidebar.css', array(), null );
	}else if ( is_page() && is_page_template( 'page-templates/template-practice-area-index.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/practice-area-index.css', array(), null );
	}  
	else if ( is_page() && is_page_template( 'page-templates/template-testimonial.php' ) ) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/testimonial.css', array(), null );
		wp_enqueue_style( 'andrewinjurylow-page-sidebar', get_template_directory_uri() . '/css/coman-sidebar.css', array(), null );
	} else if ( is_404() ) {
		wp_enqueue_style( 'default-content-page', get_template_directory_uri() . '/css/default-content-page.css', array(), null );
		wp_enqueue_style( 'coman-sidebar', get_template_directory_uri() . '/css/coman-sidebar.css', array(), null );
	}else if ( is_page() && !is_page_template()) {
		wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/default-content-page.css', array(), null );
		wp_enqueue_style( 'andrewinjurylow-page-sidebar', get_template_directory_uri() . '/css/coman-sidebar.css', array(), null );
	} else {
		if(is_single()) {
			wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/blog-post.css', array(), null );
			wp_enqueue_style( 'andrewinjurylow-page-sidebar', get_template_directory_uri() . '/css/coman-sidebar.css', array(), null );
		} else {
			wp_enqueue_style( 'andrewinjurylow-page-style', get_template_directory_uri() . '/css/blog-index.css', array(), null );
			wp_enqueue_style( 'andrewinjurylow-page-sidebar', get_template_directory_uri() . '/css/coman-sidebar.css', array(), null );
		}
	}
	
    wp_enqueue_script( 'andrewinjurylow-wistia', 'https://fast.wistia.com/embed/medias/g9tdlp0rre.jsonp', array(), null );
    wp_enqueue_script( 'andrewinjurylow-wistia-v1', 'https://fast.wistia.com/assets/external/E-v1.js', array(), null );
	wp_enqueue_script( 'andrewinjurylow-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), null );
	wp_enqueue_script( 'andrewinjurylow-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), null );
	wp_enqueue_script( 'andrewinjurylow-smartmenu', get_template_directory_uri() . '/js/smartmenu.js', array( 'jquery' ), null );
	wp_enqueue_script( 'andrewinjurylow-custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), null );
	
	wp_localize_script( 'andrewinjurylow-custom', 'andrewinjurylow_loadmore_params', array(
		'ajaxurl'		 => site_url() . '/wp-admin/admin-ajax.php',
		'posts'			 => json_encode( $wp_query->query_vars ),
		'current_page'	 => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
		'max_page'		 => $wp_query->max_num_pages
	) );
}
add_action( 'wp_enqueue_scripts', 'andrewinjurylow_theme_scripts' );

function andrewinjurylow_load_more()
{
    $ajaxposts = new WP_Query([
        "post_type" => "post",
        "posts_per_page" => 10,
        "orderby" => "date",
        "order" => "DESC",
        "paged" => $_POST["paged"],
    ]);

    $response = "";
    ?>
<?php if ($ajaxposts->have_posts()) {
    while ($ajaxposts->have_posts()):
        $ajaxposts->the_post();
        $response .= get_template_part(
            "template-parts/content",
            get_post_format()
        );
    endwhile;
} else {
    $response = "";
} ?>
<?php
 echo $response;
 exit();
}
add_action("wp_ajax_andrewinjurylow_load_more", "andrewinjurylow_load_more");
add_action("wp_ajax_nopriv_andrewinjurylow_load_more", "andrewinjurylow_load_more");
function load_more_case_results() {
   $ajaxposts = new WP_Query([
    'post_type' => 'case-result',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'ASC',
    'paged' => $_POST['paged'],
  ]);

  $response = '';

  if($ajaxposts->have_posts()) {
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $response .= get_template_part( 'template-parts/caseresult');
    endwhile;
  } else {
    $response = '';
  }
  echo $response;
  exit;
}
add_action('wp_ajax_load_more_case_results', 'load_more_case_results');
add_action('wp_ajax_nopriv_load_more_case_results', 'load_more_case_results');

function testimonial_load_more() {
  $ajaxposts = new WP_Query([
    'post_type' => 'testimonial',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $_POST['paged'],
  ]);

  $response = '';

  if($ajaxposts->have_posts()) {
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $response .= get_template_part( 'template-parts/testimonial');
    endwhile;
  } else {
    $response = '';
  }
  echo $response;
  exit;
}
add_action('wp_ajax_testimonial_load_more', 'testimonial_load_more');
add_action('wp_ajax_nopriv_testimonial_load_more', 'testimonial_load_more');

function andrewinjurylow_title_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'andrewinjurylow_title_archive_title' );

function andrewinjurylow_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'andrewinjurylow_excerpt_length', 999 );

function andrewinjurylow_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'andrewinjurylow_excerpt_more' );

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => __( 'Theme General Settings', 'andrewinjurylow' ),
		'menu_title' => __( 'Theme Settings', 'andrewinjurylow' ),
		'menu_slug'	 => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'	 => false
	) );
	
    acf_add_options_sub_page([
        "page_title" => "Sidebars",
        "menu_title" => "Sidebars",
        "parent_slug" => "theme-general-settings",
    ]);
	acf_add_options_sub_page([
        "page_title" => "Shortcode",
        "menu_title" => "Shortcode",
        "parent_slug" => "theme-general-settings",
    ]);
	acf_add_options_sub_page([
        "page_title" => "404 Page",
        "menu_title" => "404 Page",
        "parent_slug" => "theme-general-settings",
    ]);
	acf_add_options_sub_page([
        "page_title" => "Header & Footer Scripts",
        "menu_title" => "Header & Footer Scripts",
        "parent_slug" => "theme-general-settings",
    ]);
}


function is_blog_page() {
    global $post;
    if($post->id == get_option( 'page_for_posts' )) {
		return true;
	}
	return false;
}

//shortcode
function free_consultation_shortcode($atts) {
    // Shortcode attributes
    $atts = shortcode_atts(array(
        'id' => '', // Default value for the id attribute
    ), $atts);

    // Get the id attribute value
    $row_id = $atts['id'];

    // Check if ACF repeater field exists
    if (have_rows('free_consultation_shortcode','option')) {
        // Loop through each row of the repeater field
        //$row_index = 0;
        while (have_rows('free_consultation_shortcode','option')) {
            the_row();
              $row_index = get_row_index();

            if ($row_index == $row_id) {
                // Capture the output of the template part
                ob_start();
                get_template_part('shortcode/free-consultation');
                $content = ob_get_clean();
				
                return $content;
            }
        }
    }

    return '';
}
add_shortcode('free-consultation', 'free_consultation_shortcode');
function user_bio_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => '', // Default value for the id attribute
    ), $atts);

    $row_id = $atts['id'];
    $found_content = '';

    // Check if ACF repeater field exists
    if (have_rows('user_bio_block', 'option')) {
        // Loop through each row of the repeater field
        while (have_rows('user_bio_block', 'option')) {
            the_row();
            $row_index = get_row_index();

            if ($row_index == $row_id) {
                // Capture the output of the template part
                ob_start();
                get_template_part('shortcode/user-bio');
                $found_content = ob_get_clean();
            }
        }
        reset_rows(); // Reset the repeater loop
    }

    if (!empty($found_content)) {
        return $found_content;
    }

    return 'No matching row found or no rows available.';
}
add_shortcode('user-bio', 'user_bio_shortcode');

function review_widget_shortcode($atts) {
    // Shortcode attributes
    $atts = shortcode_atts(array(
        'id' => '', // Default value for the id attribute
    ), $atts);

    // Get the id attribute value
    $row_id = $atts['id'];

    // Check if ACF repeater field exists
    if (have_rows('review_widget','option')) {
        // Loop through each row of the repeater field
        //$row_index = 0;
        while (have_rows('review_widget','option')) {
            the_row();
              $row_index = get_row_index();

            if ($row_index == $row_id) {
                // Capture the output of the template part
                ob_start();
                get_template_part('shortcode/review-widget');
                $content = ob_get_clean();
				
                return $content;
            }
        }
    }

    return '';
}
add_shortcode('review-widget', 'review_widget_shortcode');

// Enqueue schema script on pages using specific templates
function enqueue_schema_script() {
    if (is_page_template('page-templates/template-practice-area.php') ||is_page_template('page-templates/template-super-landing-page.php') ||is_page_template('page-templates/template-practice-area-index.php') || is_page_template('page-templates/template-case-result.php') || is_page_template('page-templates/template-contact.php') || is_page_template('page-templates/template-thank-you.php') || is_page_template('page-templates/template-home.php') || is_page_template('page-templates/template-ppc-page.php') || is_page_template('page-templates/template-elite-client-landing-pages.php') || is_page_template('page-templates/template-testimonial.php') || is_page_template('page-templates/template-attorney-bio.php') ||is_page_template('page-templates/template-location-landing-page.php') || is_singular()) {
        $schema_script = get_field('schema_scripts');
        if ($schema_script) {
            echo $schema_script;
        }
    }
	if ( is_home() && ! is_front_page() ) {
   $schema_script = get_field('schema_scripts');
        if ($schema_script) {
            echo $schema_script;
        }
}
}
add_action('wp_head', 'enqueue_schema_script');

// Custom Logo Per Page
// Check if ACF plugin is active
if( function_exists('acf_add_local_field_group') ):

// Your JSON data
$json_data = '[
    {
        "key": "group_645e7b3b89218",
        "title": "Custom Page Logo",
        "fields": [
            {
                "key": "field_645e7b5b6ec2e",
                "label": "Header",
                "name": "",
                "aria-label": "",
                "type": "tab",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "",
                    "class": "",
                    "id": ""
                },
                "placement": "top",
                "endpoint": 0
            },
            {
                "key": "field_655d7b1e8edf4",
                "label": "Logo",
                "name": "page_header_logo",
                "aria-label": "",
                "type": "image",
                "instructions": "",
                "required": 0,
                "conditional_logic": 0,
                "wrapper": {
                    "width": "",
                    "class": "",
                    "id": ""
                },
                "return_format": "url",
                "preview_size": "medium",
                "library": "all",
                "min_width": "",
                "min_height": "",
                "min_size": "",
                "max_width": "",
                "max_height": "",
                "max_size": "",
                "mime_types": ""
            }
        ],
        "location": [
            [
                {
                    "param": "post_type",
                    "operator": "==",
                    "value": "page"
                }
            ]
        ],
        "menu_order": 0,
        "position": "normal",
        "style": "default",
        "label_placement": "top",
        "instruction_placement": "label",
        "hide_on_screen": [
            "excerpt",
            "discussion",
            "comments",
            "revisions",
            "author",
            "send-trackbacks"
        ],
        "active": true,
        "description": "",
        "show_in_rest": 0
    }
]';

// Decode JSON data
$field_groups = json_decode($json_data, true);

// Loop through each field group and add it
foreach ($field_groups as $field_group) {
    acf_add_local_field_group($field_group);
}

endif;
