<?php /* Template Name: Artists */ ?>

<?php get_header();  ?>


<?php
    $categories   = ArtistesCategory::get_categories();
    $all_artistes = ArtistesManager::get_artistes();
?>

<?php main_header(); ?>

<section class="breaking-records-categories">
    <div class="categories-swiper">
        <div class="swiper-wrapper">
            <?php foreach ($categories as $category): ?>
            <div class="swiper-slide">
                <a href="javascript:;" class="item-txt" style="background-color: <?php echo $category['background']; ?>;">
                    <?php echo $category['title']; ?>
                </a>
            </div>
            <?php endforeach; ?> 
        </div>
    </div>
</section>

<section class="all-artistes">
    <div class="container-fluid-2">
        <div class="all-artistes-con">
            <div class="row">
                <form action="" id="search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button id="button-addon8" type="submit" class="btn"> <i class="bi bi-search"></i> </button>
                        </div>
                        <input type="search" placeholder="Start Searching" class="form-control">
                    </div>
                </form>
            </div>
            <div class="row">
                    <?php foreach ($all_artistes as $artiste): ?>

                    <?php
                        $thumbnail_url  = $artiste['thumbnail'];
                        $title          = $artiste['title'];
                        $url            = $artiste['url'];
                        $category       = $artiste['category'];
                        $color          = $artiste['color'];
                        $background     = $artiste['background'];
                    ?>

					<div class="col-md-4 mt-4">                        
                        <div class="search-artiste-card">
                            <a href="<?php echo $url; ?>">
                                <img src="<?php echo $thumbnail_url; ?>" />
                            </a>

                            <div class="artiste title">
                                <a href="<?php echo $url; ?>" class="a-title"><?php echo $title; ?></a>

                                <?php if( !empty( $category ) ): ?>
                                <a class="a-category" style="background: <?php echo $background; ?>"><?php echo $category; ?></a>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                                    
            </div>
        </div>
    </div>
</section>


<?php main_footer() ?>
<?php get_footer(); ?>