<?php




class ArtistesCategory {

    // Get Categories
    public static function get_categories() {
        $categories = get_terms(array(
            'taxonomy'   => 'artistes_category',
            'hide_empty' => false,
        ));

        $clean_categories = array();

        foreach ($categories as $category) {
            $term_id = $category->term_id;
            $term_meta = get_option("taxonomy_$term_id");
            $background_color = !empty($term_meta['category-background']) ? $term_meta['category-background'] : '';
            $text_color = !empty($term_meta['category-color']) ? $term_meta['category-color'] : '';

            $clean_categories[] = array(
                'title'   => $category->name,
                'background' => $background_color,
                'color'   => $text_color,
            );
        }

        return $clean_categories;
    }
}



