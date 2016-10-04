<?php
/**
 * ushipnetwork functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ushipnetwork
 */

if ( ! function_exists( 'ushipnetwork_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ushipnetwork_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ushipnetwork, use a find and replace
	 * to change 'ushipnetwork' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ushipnetwork', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Add featured image sizes
	set_post_thumbnail_size( 300, 200, true );
	add_image_size( 'post-thumb', 300, 200, true );
	add_image_size( 'post-feature', 790, 526, true );
  add_image_size( 'testimonials-thumb', 380, 254, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'ushipnetwork' ),
		'secondary' => esc_html__( 'Secondary Menu', 'ushipnetwork' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ushipnetwork_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ushipnetwork_setup
add_action( 'after_setup_theme', 'ushipnetwork_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ushipnetwork_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ushipnetwork_content_width', 640 );
}
add_action( 'after_setup_theme', 'ushipnetwork_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ushipnetwork_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ushipnetwork' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ushipnetwork_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ushipnetwork_scripts() {
	wp_enqueue_style( 'ushipnetwork-style', get_stylesheet_uri(), array(), '20161004', 'all' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/lib/jquery-2.2.0.min.js', array(), '20160121', true );

	wp_enqueue_script( 'jquery-touchswipe', get_template_directory_uri() . '/js/lib/jquery.touchswipe.min.js', array(), '20160418', true );

	wp_enqueue_script( 'ushipnetwork-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'ushipnetwork-header', get_template_directory_uri() . '/js/header.js', array(), '20160919', true );

	wp_enqueue_script( 'ushipnetwork-forms', get_template_directory_uri() . '/js/forms.js', array(), '20160714', true );

	wp_enqueue_script( 'ushipnetwork-utilities', get_template_directory_uri() . '/js/utilities.js', array(), '20160927', true );

	wp_enqueue_script( 'ushipnetwork-jquery-modal', get_template_directory_uri() . '/js/lib/jquery.modal.js', array(), '20160425', true );

	wp_enqueue_script( 'ushipnetwork-jquery-validate', get_template_directory_uri() . '/js/lib/jquery.validate.min.js', array(), '20160426', true );

	wp_enqueue_script( 'ushipnetwork-youtube-embed', get_template_directory_uri() . '/js/youtube-embed.js', array(), '20160728', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_page('Listings') ) {
	  wp_enqueue_script( 'jazz-widget-fixer', get_template_directory_uri() . '/js/jazz-widget-fixer.js', array(), '20160216', true );
	}

	if ( is_page_template('tabbed-page.php') ) {
  	wp_enqueue_script( 'ushipnetwork-hashchange', get_template_directory_uri() . '/js/hashchange.min.js', array(), '20160405', true );
  	wp_enqueue_script( 'ushipnetwork-tabbed-page', get_template_directory_uri() . '/js/tabbed-page.js', array(), '20160405', true );
	}
}
add_action( 'wp_enqueue_scripts', 'ushipnetwork_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Shorten post thumb titles
 */
function short_title($after = null, $length) {
	$mytitle = get_the_title();
	$size = strlen($mytitle);
	if($size>$length) {
		$mytitle = substr($mytitle, 0, $length);
		$mytitle = explode(' ',$mytitle);
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle).$after;
	}
	return $mytitle;
}

/**
 * Remove editor from pages as they're unused with ACF Pro
 */
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

/**
 * Remove prefixed archive title string (EX: Category: Media Coverage)
 */
add_filter( 'get_the_archive_title', function ( $title ) {
	if( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
  	$title = single_tag_title( '', false );
  } elseif ( is_author() ) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  }
	return $title;
});

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '...' . '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Add Google Analytics Tracking Code By home_url()
 */
function add_googleanalytics() {

	$currentsite = get_home_url();

  switch ($currentsite) {
    case 'https://about.uship.com':
      ?>
      <!-- Google Analytics -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-215948-47', 'auto');
        ga('send', 'pageview');
      </script>
      <?php
      break;
    case 'https://learn.uship.com':
      ?>
      <!-- Google Analytics -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-215948-48', 'auto');
        ga('send', 'pageview');
      </script>
      <?php
      break;
    case 'https://blog.uship.com':
      ?>
      <!-- Google Analytics -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-215948-10', 'auto');
        ga('send', 'pageview');
      </script>
      <?php
      break;
    default:
      break;
  }
}
add_action('wp_footer', 'add_googleanalytics');

/**
 * Add ACF Options Page
 */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Localization',
    'menu_title'  => 'Localization',
    'menu_slug'   => 'localization'
  ));

}

/**
 * Remove capabilities from editors
 */
function wpcodex_set_capabilities() {

  // Get the role object.
  $editor = get_role( 'editor' );

  // A list of capabilities to remove from editors.
  $caps = array(
    'manage_categories'
  );

  foreach ( $caps as $cap ) {
    // Remove the capability.
    $editor->remove_cap( $cap );
  }
}
add_action( 'init', 'wpcodex_set_capabilities' );

/**
 * Force the pasting of text only into TinyMCE editor
 */
function tinymce_paste_as_text( $init ) {
    $init['paste_as_text'] = true;

    // omit the pastetext button so that the user can't change it manually, current toolbar2 content as of 4.1.1 is "formatselect,underline,alignjustify,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo,wp_help"
    $init["toolbar2"] = "formatselect,underline,alignjustify,forecolor,removeformat,charmap,outdent,indent,undo,redo,wp_help";

    return $init;
}
add_filter('tiny_mce_before_init', 'tinymce_paste_as_text');