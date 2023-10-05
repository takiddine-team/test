<?php




class ArtistsVideos {
    public static function get_artists_with_last_video() {
        $artists_videos = array();

        // Get all artists
        $artists = get_posts(array(
            'post_type' => 'artistes',
            'posts_per_page' => -1,
        ));

        foreach ($artists as $artist) {
            $videos = get_artistes_videos($artist->ID);

            if (!empty($videos)) {
                // Sort the videos by date (newest first)
                usort($videos, function ($a, $b) {
                    $date_a = strtotime($a['video_date']);
                    $date_b = strtotime($b['video_date']);
                    return $date_b - $date_a;
                });

                // Get the last video
                $last_video = $videos[0];

                // Add the artist and last video data to the array
                $artists_videos[] = array(
                    'artist_name' => $artist->post_title,
                    'video_link' => $last_video['video_link'],
                    'video_title' => $last_video['video_title'],
                    'category' => $last_video['video_category'],
                    'thumbnail' => $last_video['thumbnail'],
                );
            }
        }

        return $artists_videos;
    }
}
