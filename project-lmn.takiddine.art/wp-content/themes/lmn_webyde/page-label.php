<?php /* Template Name: label */ ?>


<?php get_header();  ?>
<?php main_header(); ?>



<section class="hero-about" style="background-image: url('<?php echo $images; ?>/slide/about.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="hero-about-content">
                    <h3 class="ha-title"> <?php the_field('page_title'); ?> </h3>
                    <p class="ha-rapa"> <?php the_field('description_label'); ?> .</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php  $history_list = get_field('history_list'); ?>

<?php if(!empty($history_list)): ?>
  <section class="timeline">

<ol>

   <?php  foreach($history_list as $item ):?>
    <li>
    <div>
      <h4><?php echo $item['history_title'] ?></h4>
      <p> 
          <?php echo $item['history_description'] ?>
          <br>
          <span class="time"><?php echo $item['history_year'] ?></span>
      </p>        
    </div>
  </li>
  <?php endforeach; ?>
  <li></li>
</ol>

</section>
<?php endif; ?>



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
<?php get_footer(); ?>