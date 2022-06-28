<?php 
    get_header();

    $thumbnail = get_the_post_thumbnail_url();
?>

<main>
    <section class="hero" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('<?php echo $thumbnail ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="hero__content">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>