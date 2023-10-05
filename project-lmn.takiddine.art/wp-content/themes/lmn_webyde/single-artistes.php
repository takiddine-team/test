<?php get_header();  ?>
<?php main_header(); ?>


<?php


    $twitter   = get_field('twitter_artist');
    $facebook  = get_field('facebook_artist');
    $instagram = get_field('instagram_artist');
    $youtube   = get_field('youtube_artist');
    $spotify   = get_field('spotify_artist');
    $thumbnail_url = get_field('artistes_image');
    $videos = get_field('artistes_videos');



?>





<section class="artiste-info">
    <div class="container-fluid-2">
        <div class="row">
            <div class="col-md-6">
                <div class="single-info">
                    <div class="container-records">
                        <div class="list">
                            <div class="item">
                                <span class="item-txt"><?php the_title(); ?></span>
                                <span class="item-txt"><?php the_title(); ?></span>
                            </div>
                        </div>
                        <div class="list">
                            <div class="item">
                                <span class="item-txt"><?php the_title(); ?></span>
                                <span class="item-txt"><?php the_title(); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="artist-content">
                        <?php the_content(); ?>
                    </div>

                    
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="single-img-card">
                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>">

                    <ul>
                        <?php if (!empty($facebook)) : ?>
                            <li> <a href="<?php echo esc_url($facebook); ?>"><i class="bi bi-facebook"></i></a> </li>
                        <?php endif; ?>
                        <?php if (!empty($twitter)) : ?>
                            <li> <a href="<?php echo esc_url($twitter); ?>"><i class="bi bi-twitter"></i></a> </li>
                        <?php endif; ?>
                        <?php if (!empty($instagram)) : ?>
                            <li> <a href="<?php echo esc_url($instagram); ?>"><i class="bi bi-instagram"></i></a> </li>
                        <?php endif; ?>
                        <?php if (!empty($youtube)) : ?>
                            <li> <a href="<?php echo esc_url($youtube); ?>"><i class="bi bi-youtube"></i></a> </li>
                        <?php endif; ?>
                        <?php if (!empty($spotify)) : ?>
                            <li> <a href="<?php echo esc_url($spotify); ?>"><i class="bi bi-spotify"></i></a> </li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>







<section class="recent-viceos">
    <div class="container-fluid-2">
        <div class="recent-viceos-title">
            <div class="title-btns">
                <h3> DERNIERES VIDEOS </h3>
                <div class="swp-btns recent-button-prev"> <i class="bi bi-arrow-left"></i> </div>
                <div class="swp-btns recent-button-next"> <i class="bi bi-arrow-right"></i> </div>                    
            </div>
        </div>
        <div class="recent-viceos-swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->

                    <?php
                        if (!empty($videos)) {
                            foreach ($videos as $video) {
                                // print_r($video);
                                // exit;
                                $video_link = $video['link'];
                                $video_title = $video['title'];
                                $video_category = $video['category']->name ?? '';
                                $thumbnail = $video['thumbnail'];
                        ?>
                        <div class="swiper-slide">
                            <div class="r-video-card">
                                <a href="<?php echo esc_url($video_link); ?>">
                                    <img src="<?php echo esc_url($thumbnail); ?>">
                                    <h5 class="video-category" style="background-color:#C578FF;"><?php echo esc_html($video_category); ?></h5>
                                    <h4 class="vide-title"><?php echo esc_html($video_title); ?></h4>
                                </a>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
            </div>
        </div>
    </div>
</section>




<?php main_footer() ?>
<?php get_footer(); ?>

