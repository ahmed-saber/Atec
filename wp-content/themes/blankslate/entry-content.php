<section class="entry-content">
    <?php
    if (has_post_thumbnail()){
    ?>
    <img src="<?php the_post_thumbnail_url('full') ?>" class="img-w mb-30">
    <?php
    }
    ?>
    <?php the_content(); ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
</section>