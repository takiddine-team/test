<?php




function create_artistes_cpt() {
    $labels = array(
        'name' => 'Artistes',
        'singular_name' => 'Artiste',
        'menu_name' => 'Artistes',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Artiste',
        'edit' => 'Edit',
        'edit_item' => 'Edit Artiste',
        'new_item' => 'New Artiste',
        'view' => 'View',
        'view_item' => 'View Artiste',
        'search_items' => 'Search Artistes',
        'not_found' => 'No artistes found',
        'not_found_in_trash' => 'No artistes found in trash',
        'parent' => 'Parent Artiste'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'artistes'),
    );

    register_post_type('artistes', $args);
}
add_action('init', 'create_artistes_cpt');










// Register Custom Taxonomy
function register_artistes_category_taxonomy() {
    $labels = array(
        'name'              => _x('Categories', 'taxonomy general name', 'text-domain'),
        'singular_name'     => _x('Category', 'taxonomy singular name', 'text-domain'),
        'search_items'      => __('Search Categories', 'text-domain'),
        'all_items'         => __('All Categories', 'text-domain'),
        'parent_item'       => __('Parent Category', 'text-domain'),
        'parent_item_colon' => __('Parent Category:', 'text-domain'),
        'edit_item'         => __('Edit Category', 'text-domain'),
        'update_item'       => __('Update Category', 'text-domain'),
        'add_new_item'      => __('Add New Category', 'text-domain'),
        'new_item_name'     => __('New Category Name', 'text-domain'),
        'menu_name'         => __('Categories', 'text-domain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'category'),
    );

    register_taxonomy('artistes_category', array('artistes'), $args);
}
add_action('init', 'register_artistes_category_taxonomy');

// Add Custom Fields to Category Edit and Add Forms
// Add Custom Fields to Category Edit and Add Forms
function artistes_category_fields($term) {
    $term_id = $term->term_id;
    $term_meta = get_option("taxonomy_$term_id");
    $background_color = !empty($term_meta['category-background']) ? $term_meta['category-background'] : '';
    $text_color = !empty($term_meta['category-color']) ? $term_meta['category-color'] : '';
    ?>
    <div class="form-field term-group">
        <label for="category-background"><?php _e('Background Color', 'text-domain'); ?></label>
        <input type="text" id="category-background" name="term_meta[category-background]" class="color-field" value="<?php echo esc_attr($background_color); ?>">
        <p><?php _e('Enter the background color for this category.', 'text-domain'); ?></p>
    </div>

    <div class="form-field term-group">
        <label for="category-color"><?php _e('Text Color', 'text-domain'); ?></label>
        <input type="text" id="category-color" name="term_meta[category-color]" class="color-field" value="<?php echo esc_attr($text_color); ?>">
        <p><?php _e('Enter the text color for this category.', 'text-domain'); ?></p>
    </div>

    <script>
        jQuery(document).ready(function($) {
            $('.color-field').wpColorPicker();
        });
    </script>
    <?php
}

add_action('artistes_category_add_form_fields', 'artistes_category_fields');
add_action('artistes_category_edit_form_fields', 'artistes_category_fields');

// Save Custom Fields
function save_artistes_category_fields($term_id) {
    if (isset($_POST['term_meta'])) {
        $term_meta = get_option("taxonomy_$term_id");
        $cat_keys = array_keys($_POST['term_meta']);

        foreach ($cat_keys as $key) {
            if (isset($_POST['term_meta'][$key])) {
                $term_meta[$key] = sanitize_text_field($_POST['term_meta'][$key]);
            }
        }

        // Save the custom fields data
        update_option("taxonomy_$term_id", $term_meta);
    }
}
add_action('edited_artistes_category', 'save_artistes_category_fields');
add_action('create_artistes_category', 'save_artistes_category_fields');

// Display Category Colors on Frontend
function display_artistes_category_colors($category) {
    $term_id = $category->term_id;
    $term_meta = get_option("taxonomy_$term_id");
    $background_color = !empty($term_meta['category-background']) ? $term_meta['category-background'] : '';
    $text_color = !empty($term_meta['category-color']) ? $term_meta['category-color'] : '';

    echo '<div class="category-colors">';
    echo '<span style="padding: 15px 20px; margin-top: 5px; display: inline-block; font-size: 19px; font-weight: bold;background-color: ' . esc_attr($background_color) . '; color: ' . esc_attr($text_color) . ';">' . $category->name . '</span>';
    echo '</div>';
}
add_action('artistes_category_add_form_fields', 'display_artistes_category_colors');
add_action('artistes_category_edit_form_fields', 'display_artistes_category_colors');

