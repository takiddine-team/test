<!-- جلب الهيدر -->
<?php  get_header();  ?>


<?php main_header(); ?>




<section class="hero-slider hero-style">
    <div class="swiper-container">
        
        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?php echo $images; ?>/slide/1.jpg">
                    <div class="container">
                        
                        <div class="play-btn" data-swiper-parallax="300">
                            <a href="#" class="dynamic-color-link"> <i class="bi bi-play-circle"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
                            <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?php echo $images; ?>/slide/2.jpg">
                    <div class="container">
                        
                        <div class="play-btn" data-swiper-parallax="300">
                            <a href="#" class="dynamic-color-link"> <i class="bi bi-play-circle"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
                            <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?php echo $images; ?>/slide/3.jpg">
                    <div class="container">
                        
                        <div class="play-btn" data-swiper-parallax="300">
                            <a href="#" class="dynamic-color-link"> <i class="bi bi-play-circle"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
                            <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?php echo $images; ?>/slide/4.jpg">
                    <div class="container">
                        <!--div data-swiper-parallax="300" class="slide-title">
                            <a href="#"> JAM OUT </a>
                        </div>
                        <div class="slide-btns">
                            <a href="#" >SEND US YOUR WORK</a>
                        </div-->
                        <div class="play-btn" data-swiper-parallax="300">
                            <a href="#" class="dynamic-color-link"> <i class="bi bi-play-circle"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
                            <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?php echo $images; ?>/slide/5.jpg">
                    <div class="container">
                        <!--div data-swiper-parallax="300" class="slide-title">
                            <a href="#"> JAM OUT </a>
                        </div>
                        <div class="slide-btns">
                            <a href="#" >SEND US YOUR WORK</a>
                        </div-->
                        <div class="play-btn" data-swiper-parallax="300">
                            <a href="#" class="dynamic-color-link"> <i class="bi bi-play-circle"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
                            <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?php echo $images; ?>/slide/6.jpg">
                    <div class="container">
                        <!--div data-swiper-parallax="300" class="slide-title">
                            <a href="#"> JAM OUT </a>
                        </div>
                        <div class="slide-btns">
                            <a href="#" >SEND US YOUR WORK</a>
                        </div-->
                        <div class="play-btn" data-swiper-parallax="300">
                            <a href="#" class="dynamic-color-link"> <i class="bi bi-play-circle"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
            
        </div>

        <!-- swipper controls -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
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
                
                <?php

                $artists_videos = ArtistsVideos::get_artists_with_last_video();

                $artist_name = $artist_video['artist_name'];
                $video_link = $artist_video['video_link'];
                $video_title = $artist_video['video_title'];
                $category = $artist_video['category'];
                $thumbnail = $artist_video['thumbnail'];
            
                
            
                // echo $video_link .'<br>';
                // echo $video_title .'<br>';
                // echo $category .'<br>';
                // echo $thumbnail .'<br>';



                // Loop through the array and generate the HTML for each artist's video
                foreach ($artists_videos as $artist_video) {
                    $video_link = $artist_video['video_link'];
                    $video_title = $artist_video['video_title'];
                    $category = $artist_video['category'];
                    $thumbnail = $artist_video['thumbnail'];

                    // Generate the HTML for the artist's video
                    ?>
                    <div class="swiper-slide">
                        <div class="r-video-card">
                            <a href="<?php echo $video_link; ?>">
                                <img src="<?php echo $thumbnail; ?>" >
                                <h5 class="video-category" style="background-color:;"><?php echo $category; ?></h5>
                                <h4 class="vide-title"><?php echo $video_title; ?></h4>
                            </a>
                        </div>
                    </div>
                    <?php
                }

                ?>    

            </div>
        </div>
    </div>
</section>








<section class="breaking-records">
    <div class="container-records">
        <div class="list">
            <div class="item">
                <span class="item-txt">LMN RECORDS</span>
                <span class="item-d">
                    <img src="<?php echo $images; ?>/Dot.png" class="item-dot">
                </span>
                <span class="item-txt">LMN RECORDS</span>
                <span class="item-d">
                    <img src="<?php echo $images; ?>/Dot.png" class="item-dot">
                </span>
                <span class="item-txt">LMN RECORDS</span>
                <span class="item-d">
                    <img src="<?php echo $images; ?>/Dot.png" class="item-dot">
                </span>
                <span class="item-txt">LMN RECORDS</span>
                <span class="item-d">
                    <img src="<?php echo $images; ?>/Dot.png" class="item-dot">
                </span>
            </div>
        </div>
        <div class="list">
            <div class="item">
                <span class="item-txt">LMN RECORDS</span>
                <span class="item-d">
                    <img src="<?php echo $images; ?>/Dot.png" class="item-dot">
                </span>
                <span class="item-txt">LMN RECORDS</span>
                <span class="item-d">
                    <img src="<?php echo $images; ?>/Dot.png" class="item-dot">
                </span>
                <span class="item-txt">LMN RECORDS</span>
                <span class="item-d">
                    <img src="<?php echo $images; ?>/Dot.png" class="item-dot">
                </span>
                <span class="item-txt">LMN RECORDS</span>
                <span class="item-d">
                    <img src="<?php echo $images; ?>/Dot.png" class="item-dot">
                </span>
            </div>
        </div>
    </div>
</section>


<?php 
    $certification_album_single = get_option('lmn_certification_album_single');
    $cumulative_youtube_views = get_option('lmn_cumulative_youtube_views');
    $instagram_followers = get_option('lmn_instagram_followers');
    $spotify_streams = get_option('lmn_spotify_streams');
?>



<section class="social-account">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="social-card">
                    <img src="<?php echo $images; ?>/social/so.png" alt="">
                    <h4> <span class="js-count-up" data-count="<?php echo esc_attr($certification_album_single); ?>">0</span> </h4>
                    <span> Certification Album <br> Et Single </span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="social-card">
                    <img src="<?php echo $images; ?>/social/youtube.png" alt="">
                    <h4> +<span class="js-count-up" data-count="<?php echo esc_attr($cumulative_youtube_views); ?>">0</span>M </h4>
                    <span> De Vues Cumulées <br> Sur Youtube </span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="social-card">
                    <img src="<?php echo $images; ?>/social/instagram.png" alt="">
                    <h4> +<span class="js-count-up" data-count="<?php echo esc_attr($instagram_followers); ?>">0</span>k </h4>
                    <span> D'abonnés Sur <br> Instagram </span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="social-card">
                    <img src="<?php echo $images; ?>/social/spotify.png" alt="">
                    <h4> +<span class="js-count-up" data-count="<?php echo esc_attr($spotify_streams); ?>">200</span>K </h4>
                    <span> Streams Sur <br> Spotify </span>
                </div>
            </div>
        </div>
    </div>
</section>




<?php  $partners = get_partners_list(); ?>
<?php if (!empty($partners)): ?>
<section class="partners">
    <div class="container">
        <div class="partners-title">
            <span> NOS PARTENAIRES </span>
        </div>
        <div class="row">
            <?php foreach ($partners as $partner) :
                    $partner_image = $partner['image'];  ?>
                    <div class="col-6 col-md-2">
                        <img class="partner-img" src="<?php echo $partner_image; ?>">
                    </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php endif; ?>


<?php main_footer() ?>

<!-- جلب الفوتر -->
<?php get_footer(); ?>