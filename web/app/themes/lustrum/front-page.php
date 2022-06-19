<?php 
    get_header();

    $image = get_field('image');
?>

<main>
    <section class="hero" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('<?php echo $image['sizes']['large'] ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="hero__content">
                <h1>Lustrumweek</h1>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <h5 class="main-content__title">GST viert haar 5e verjaardag</h5>
            <p>Dit jaar bestaat de vereniging 5 jaar en dat vieren wij in de Lustrumweek van 27 juni t/m 2 juli 2022.</p>
            <p>We hebben verschillende activiteiten voor jullie in petto, van borrelen tot theater maken en/of zien.
            Voor de precieze informatie wat betreft de activiteiten, check de pagina met ‘weekoverzicht’.</p>
            <p>Wees erbij!</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>