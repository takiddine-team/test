<?php





class LMN_Settings_Page {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_settings_page'));
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_settings_page() {
        add_menu_page(
            __('LMN Settings', 'text-domain'),
            __('LMN', 'text-domain'),
            'manage_options',
            'lmn-settings',
            array($this, 'settings_page_content'),
            'dashicons-admin-generic',
            20
        );
    }

    public function settings_page_content() {
        ?>
        <div class="wrap">
            <h1><?php echo esc_html__('LMN Settings', 'text-domain'); ?></h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('lmn_settings_group');
                do_settings_sections('lmn_settings_page');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    public function register_settings() {
        add_settings_section(
            'lmn_settings_section',
            __('LMN Settings Section', 'text-domain'),
            array($this, 'settings_section_callback'),
            'lmn_settings_page'
        );

        add_settings_field(
            'lmn_certification_album_single',
            __('Certification Album Et Single', 'text-domain'),
            array($this, 'certification_album_single_callback'),
            'lmn_settings_page',
            'lmn_settings_section'
        );

        add_settings_field(
            'lmn_cumulative_youtube_views',
            __('De Vues Cumulées Sur Youtube', 'text-domain'),
            array($this, 'cumulative_youtube_views_callback'),
            'lmn_settings_page',
            'lmn_settings_section'
        );

        add_settings_field(
            'lmn_instagram_followers',
            __('D\'abonnés Sur Instagram', 'text-domain'),
            array($this, 'instagram_followers_callback'),
            'lmn_settings_page',
            'lmn_settings_section'
        );

        add_settings_field(
            'lmn_spotify_streams',
            __('Streams Sur Spotify', 'text-domain'),
            array($this, 'spotify_streams_callback'),
            'lmn_settings_page',
            'lmn_settings_section'
        );

        register_setting('lmn_settings_group', 'lmn_certification_album_single');
        register_setting('lmn_settings_group', 'lmn_cumulative_youtube_views');
        register_setting('lmn_settings_group', 'lmn_instagram_followers');
        register_setting('lmn_settings_group', 'lmn_spotify_streams');
    }

    public function settings_section_callback() {
        echo '<p>' . __('LMN settings section description.', 'text-domain') . '</p>';
    }

    public function certification_album_single_callback() {
        $value = get_option('lmn_certification_album_single');
        echo '<input type="text" name="lmn_certification_album_single" value="' . esc_attr($value) . '" />';
    }

    public function cumulative_youtube_views_callback() {
        $value = get_option('lmn_cumulative_youtube_views');
        echo '<input type="text" name="lmn_cumulative_youtube_views" value="' . esc_attr($value) . '" />';
    }

    public function instagram_followers_callback() {
        $value = get_option('lmn_instagram_followers');
        echo '<input type="text" name="lmn_instagram_followers" value="' . esc_attr($value) . '" />';
    }

    public function spotify_streams_callback() {
        $value = get_option('lmn_spotify_streams');
        echo '<input type="text" name="lmn_spotify_streams" value="' . esc_attr($value) . '" />';
    }
}

new LMN_Settings_Page();









