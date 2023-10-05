<?php

define( 'MODE_DEBUG', true );


 /**
 * @author soulaimane takiddine <takiddine.job@gmail.com>
 * @copyright 2018 soulaimane takiddine
 * @website  <www.takiddine.com>
 **/

if(!defined('ABSPATH')) {
    exit;
}

if ( !defined( 'THEME_DIR' ) ) {
    define( 'THEME_DIR', get_template_directory() );
}

if ( !defined( 'THEME_URL' ) ) {
    define( 'THEME_URL', get_template_directory_uri() );
}

if ( !defined( 'THEME_HELPERS' ) ) {
    define( 'THEME_HELPERS', get_template_directory() .'/helpers' );
}

/*
*   INITIALIZE FILES DIRECTORY
*/
$css                = THEME_URL . '/core/assets/css/';
$js                 = THEME_URL . '/core/assets/js/';
$images             = THEME_URL . '/core/assets/images/';
// $iransansFont       = THEME_URL . '/core/assets/arfont/iransans/font.css';




// wordpress theme Setup
require_once THEME_DIR. '/core/setup.php';

// Functions
require_once THEME_DIR. '/core/functions.php';

// Assets To Load JS and Css files
// require_once THEME_DIR. '/core/assets.php';

// Load MetaBoxs
// require_once THEME_DIR. '/core/metabox.php';

// Load Shortcodes
// require_once THEME_DIR. '/core/shortcodes.php';

// Load security
require_once THEME_DIR. '/core/security.php';

// Load widgets 
require_once THEME_DIR. '/core/widgets.php';

// Arabic Fonts 
// require_once THEME_DIR. '/core/arab-font.php';    

// AJAX
// require_once THEME_DIR. '/core/ajax.php';

/*
*   Redux Framework : theme Settings
*   For More Help : https://docs.reduxframework.com
*/
// include_once THEME_DIR . '/core/theme-options/ReduxCore/framework.php';
// require_once THEME_DIR.  '/core/theme-options/config.php';


/*
*   Codestar Framework : theme Settings
*   For More Help : http://codestarframework.com/documentation 
*/
// require_once THEME_DIR .'/core/codestar/cs-framework.php';



// Bootstrap Nav Walker 
// require_once THEME_DIR. '/core/class-wp-bootstrap-navwalker.php';

// require_once THEME_DIR . '/core/redux-metaboxes/metaboxes_api.php';


// HTML Compressor 
if( ! MODE_DEBUG ) {
    require_once THEME_DIR. '/core/html-compressor.php';
}

// portfolio
//require_once THEME_DIR. '/core/gallery_folio/plugin.php';
//require_once THEME_DIR. '/core/gallery_video/plugin.php';

/*
 To do , if the Theme is not activated , stop all the down stop to apear , the only thing will apear is activation page
* now i have the extension of metabox , so every thing is fucked , yay baby
*/
//require_once THEME_DIR. '/core/libraries/init.php';



$current_user = wp_get_current_user();

if ( $current_user->ID !== 2 ) {
  
    function post_remove ()      //creating functions post_remove for removing menu item
    { 
       remove_menu_page('edit.php');
       remove_menu_page('edit-comments.php');
       remove_menu_page('themes.php');
       remove_menu_page('plugins.php');
    }
    
    add_action('admin_menu', 'post_remove');
    


    add_action('admin_head', 'my_custom_fonts');

    function my_custom_fonts() {
    echo '<style>
    li#toplevel_page_edit-post_type-acf-field-group , li#menu-tools {
        display: none;
    }
    </style>';
    }


} 








require_once THEME_HELPERS . '/assets_loader.php';
require_once THEME_HELPERS . '/cpt.php';
// require_once THEME_HELPERS . '/artists_videos_repeatable.php';
// require_once THEME_HELPERS . '/social_media_artists.php';
require_once THEME_HELPERS . '/get_artists.php';
require_once THEME_HELPERS . '/get_artists.php';
require_once THEME_HELPERS . '/get_categories.php';
// require_once THEME_HELPERS . '/partners.php';
// require_once THEME_HELPERS . '/home_page_settings.php';
// require_once THEME_HELPERS . '/home_page_videos.php';
require_once THEME_HELPERS . '/main.php';




if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Partner Settings',
        'menu_title'    => 'Partners LOGOS',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme social media Settings',
        'menu_title'    => 'Footer Social Media',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}



