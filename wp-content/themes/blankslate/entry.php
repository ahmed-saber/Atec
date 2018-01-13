<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="entry-title mb-10" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> <div class="fr"><?php edit_post_link(); ?></div></h1>
    <?php get_template_part('entry', 'meta'); ?>
    <?php get_template_part('entry', ( is_archive() || is_search() ? 'summary' : 'content')); ?>
    <?php if (!is_search()) get_template_part( 'entry-footer' ); ?>
</article>