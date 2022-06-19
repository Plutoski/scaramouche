<?php 
    get_header();

    $image = get_field('image');
?>

<div>
    <div class="container">
        <img src="<?php echo $image['sizes']['large'] ?>" />
    </div>
</div>

<?php get_footer(); ?>