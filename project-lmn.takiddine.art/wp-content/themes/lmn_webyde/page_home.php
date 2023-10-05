<?php /* Template Name: Home page */ ?>

<!-- جلب الهيدر -->
<?php  get_header();  ?>
<?php main_header(); ?>


<pre>
<?php


// echo $facebook = get_field('facebook_link', 'option');
// echo $twitter = get_field('twitter_link', 'option');
// echo $instagram = get_field('instagram_link', 'option');
// echo $youtube = get_field('youtube_link', 'option');

// exit;
?>
</pre>

<?php 
    $certification_album_single = get_field('certification_album_et_single');
    $cumulative_youtube_views = get_field('de_vues_cumulees_sur_youtube');
    $instagram_followers = get_field('dabonnes_sur_instagram');
    $spotify_streams = get_field('streams_sur_spotify');
?>

<?php $home_videos = get_field('dernieres_videos'); ?>





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


                <?php if( ! empty($home_videos) ): ?>
                    <?php  foreach($home_videos as $video): ?>
                        <div class="swiper-slide">
                            <div class="r-video-card">
                                <a href="<?php echo $video['video_link']; ?>">
                                    <img src="<?php echo $video['video_thumbnail']; ?>" >
                                    <h4 class="vide-title"><?php echo $video['video_title']; ?></h4>
                                </a>
                            </div>
                        </div>
                    <?php  endforeach; ?>
                <?php  endif; ?>


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


<?php $partners = get_field('partners', 'option') ?>
<?php if (!empty($partners)): ?>
<section class="partners">
    <div class="container">
        <div class="partners-title">
            <span> NOS PARTENAIRES </span>
        </div>
        <div class="row">
            <?php foreach ($partners as $partner) :
                    $partner_image = $partner['logo'];  ?>
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