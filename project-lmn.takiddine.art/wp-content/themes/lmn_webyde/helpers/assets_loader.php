<?php


/* CSS template */

class Theme_CSS_Loader {
    private $stylesheets;

    public function __construct() {
        $this->stylesheets = array();
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
    }

    public function add_stylesheet($url) {
        $this->stylesheets[] = $url;
    }

    public function enqueue_styles() {
        foreach ($this->stylesheets as $stylesheet) {
            wp_enqueue_style('theme-css-' . md5($stylesheet), $stylesheet);
        }
    }
}


$css_loader = new Theme_CSS_Loader();
$css_loader->add_stylesheet('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
$css_loader->add_stylesheet('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
$css_loader->add_stylesheet('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
$css_loader->add_stylesheet('https://fonts.googleapis.com/css2?family=Biryani:wght@400;600&display=swap');
$css_loader->add_stylesheet($css .'style.css?v=1.001');




class Theme_JS_Loader {
    private $scripts;

    public function __construct() {
        $this->scripts = array();
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    public function add_script($url) {
        $this->scripts[] = $url;
    }

    public function enqueue_scripts() {
        foreach ($this->scripts as $script) {
            wp_enqueue_script('theme-js-' . md5($script), $script, array('jquery'), null, true);
        }
    }
}


$js_loader = new Theme_JS_Loader();
$js_loader->add_script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js');
$js_loader->add_script('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
$js_loader->add_script('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');
$js_loader->add_script('https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js');
$js_loader->add_script('https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.6.0/tinycolor.min.js');
$js_loader->add_script($js . '/script.js?v=1.001');
