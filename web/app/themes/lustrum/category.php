<?php 
    get_header();

    $term = get_queried_object();
    $image = get_field('image', $term);
?>

<main>
    <section class="hero" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('<?php echo $image['sizes']['large'] ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="hero__content">
                <h1><?php single_cat_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container category">
        <?php 
            if (have_posts()) : while (have_posts()) : the_post();

            $link = get_the_permalink();
            $thumbnail = get_the_post_thumbnail_url();
            $title = get_the_title();
        ?>

        <a href="<?php echo $link ?>" class="card">
            <div>
                <div class="card-thumbnail">
                    <img src="<?php echo $thumbnail ?>" width="100%" height="100%" style="object-fit:cover;" />
                </div>
                <div class="card-content">
                    <?php echo $title ?>
                </div>
            </div>
        </a>

        <?php
            endwhile;
            endif;
        ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>