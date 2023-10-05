


<?php $home_url = home_url(); ?>


<section class="send-us-project">
<div class="container-fluid-2">
    <div class="send-us-div">                
        <div class="send-us-title">
            <h4> Envoyez-nous votre projet ! </h4>
        </div>
        <div class="send-us-line">
            <span class="send-line"></span>
        </div>
        <div class="send-us-btn">
            <a href="<?php  echo $home_url ?>/contact"> Contactez-nous </a>
        </div>
    </div>
</div>
</section>


<footer class="main-footer">
<div class="container-fluid-2">
    <div class="footer-content">
        <div class="row">
            <div class="col-6 col-md-8">
                <ul class="footer-link">
                    <li> <a href="<?php  echo $home_url ?>"> ACCUEIL </a> </li>
                    <li> <a href="<?php  echo $home_url ?>/les-artistes"> ARTISTS </a> </li>
                    <li> <a href="<?php  echo $home_url ?>/label"> LABEL </a> </li>
                    <li> <a href="<?php  echo $home_url ?>/contact"> CONTACT </a> </li>
                </ul>
            </div>
            <div class="col-6 col-md-4">
                <ul class="footer-link">
                    <li> <a href="<?php echo get_field('youtube_link', 'option'); ?>"> <i class="bi bi-youtube"></i> YOUTUBE </a> </li>
                    <li> <a href="<?php echo get_field('instagram_link', 'option'); ?>"> <i class="bi bi-instagram"></i> INSTAGRAM </a> </li>
                    <li> <a href="<?php echo get_field('twitter_link', 'option'); ?>"> <i class="bi bi-twitter"></i> TWITTER </a> </li>
                    <li> <a href="<?php echo get_field('facebook_link', 'option'); ?>"> <i class="bi bi-facebook"></i> FACEBOOK </a> </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p> © 2023 LMN RECORDS. TOUT DROIT RÉSERVÉ. </p>
        </div>
    </div>
</div>
</footer>