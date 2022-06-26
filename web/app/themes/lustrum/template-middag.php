<?php 
    /**
     * Template Name: Nostalgische middag
     */

    get_header();

    $image = get_field('image');
    $audio_button = get_field('audio_button');
    $video_button = get_field('video_button');
?>

<main>
    <section class="hero" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('<?php echo $image['sizes']['large'] ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="hero__content">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <?php the_content(); ?>

            <div class="buttons">
                <?php 
                    if($audio_button) {
                        $link = $audio_button['url'];
                        $title = $audio_button['title'];
                ?>
                    <a href="<?php echo bloginfo('url'); ?><?php echo $link ?>">
                        <button>
                            <?php echo $title ?>
                        </button>
                    </a>
                <?php } ?>

                <?php 
                    if($video_button) {
                        $link = $video_button['url'];
                        $title = $video_button['title'];
                ?>
                    <a href="<?php echo bloginfo('url'); ?><?php echo $link ?>">
                        <button>
                            <?php echo $title ?>
                        </button>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>