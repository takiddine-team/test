<?php



class ArtistesManager {
   

    public static function get_artistes() {
        $args = array(
            'post_type'      => 'artistes',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);
        $artistes = array();

        while ($query->have_posts()) {
            $query->the_post();
            
            $artist_url = get_permalink($artist_id);
            $artist_id = get_the_ID();
            $artist_title = get_the_title();
            $artist_thumbnail = get_the_post_thumbnail_url();
            $artist_category = '';

            // Get the first category of the artist
            $categories = get_the_terms($artist_id, 'artistes_category');
            if (!empty($categories) && !is_wp_error($categories)) {
                $first_category = reset($categories);
                $artist_category = $first_category->name;
                $term_id = $first_category->term_id;
                $term_meta = get_option("taxonomy_$term_id");
                $artist_category_background = !empty($term_meta['category-background']) ? $term_meta['category-background'] : '';
                $artist_category_color = !empty($term_meta['category-color']) ? $term_meta['category-color'] : '';
            }
             

            $artistes[] = array(
                'id'                  => $artist_id,
                'url'                 => $artist_url,
                'title'               => $artist_title,
                'thumbnail'           => $artist_thumbnail,
                'category'            => $artist_category,
                'background' => $artist_category_background,
                'color'      => $artist_category_color,
            );
        }

        wp_reset_postdata();

        return $artistes;
    }



}


