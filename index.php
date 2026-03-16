<?php
get_header();
?>
<main id="main-content" class="container">
    <section>
        <h1>Información para circular en regla en Argentina</h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('card'); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo esc_html(get_the_excerpt()); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No hay contenidos publicados todavía.</p>
        <?php endif; ?>
    </section>
</main>
<?php
get_footer();