<?php /* Template Name: contact */ ?>

<?php get_header();  ?>
<?php main_header(); ?>





<section class="contact-anim">
    <div class="container-contact">
        <div class="list">
            <div class="item">
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
            </div>
        </div>
        <div class="list">
            <div class="item">
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
                <span class="item-txt">Contactez-nous</span>
            </div>
        </div>
    </div>
</section>

<section class="contact-us">
    <div class="container-fluid-2">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $images; ?>/contact.jpg" alt="" srcset="">
            </div>
            <div class="col-md-6">
                <form action="" id="contact-us">

                    <label class="sr-only" for="name">YOUR NAME</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="bi bi-person"></i> </div>
                        </div>
                        <input type="text" class="form-control" id="name" placeholder="Full name" required>
                    </div>

                    <label class="sr-only" for="email">E-MAIL</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="bi bi-envelope"></i> </div>
                        </div>
                        <input type="text" class="form-control" id="email" placeholder="Email" required>
                    </div>

                    <label class="sr-only" for="phone">PHONE</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="bi bi-telephone-outbound"></i> </div>
                        </div>
                        <input type="text" class="form-control" id="phone" placeholder="Phone" required>
                    </div>

                    <label class="sr-only" for="message">MESSAGE</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="bi bi-chat-left-text"></i> </div>
                        </div>
                        <textarea type="text" class="form-control" id="message" rows="8" required></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary mb-2">send</button>
                </form>
            </div>
        </div>
    </div>
</section>




<?php main_footer() ?>
<?php get_footer(); ?>