<?php
/**
 * Custom Child Theme Functions
 *
 * This file's parent directory can be moved to the wp-content/themes directory 
 * to allow this Child theme to be activated in the Appearance - Themes section of the WP-Admin.
 *
 * Included are a set of constants that can be defined to customize aspects of Thematic's 
 * functionality, as well as a sample function that will add a home link to your menu.
 * "Uncomment" or add more to cusomize the functionality of your Child Theme.
 *
 * More ideas can be found in the community documentation for Thematic
 * @link http://docs.thematictheme.com
 *
 * @package ThematicSampleChildTheme
 * @subpackage ThemeInit
 */



// Unleash the power of Thematic's comment form
//
// define('THEMATIC_COMPATIBLE_COMMENT_FORM', true);

// For backwards compatibility with some older child themes
// add_theme_support( 'thematic_legacy_feedlinks' ); // replaces define( 'THEMATIC_COMPATIBLE_FEEDLINKS', true );
// add_theme_support( 'thematic_legacy_body_class' ); // replaces define( 'THEMATIC_COMPATIBLE_BODY_CLASS', true );
// add_theme_support( 'thematic_legacy_post_class' ); // replaces define( 'THEMATIC_COMPATIBLE_POST_CLASS', true );


// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
//function childtheme_menu_args($args) {
//    $args = array(
//        'show_home' => 'Home',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => false
//    );
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args');
