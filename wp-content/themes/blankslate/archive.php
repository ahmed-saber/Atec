<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h1>'.get_the_title().'</h1>
';
include(locate_template('content-header.php',false,false));
?>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <div class="max_w">
        <div class="flex">
            <div class="col col--12 col__md--8 col__lg--8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title mb-10" title="<?php the_title_attribute(); ?>"><a href="<?php echo get_permalink($post->post_parent); ?>"><?php the_title(); ?></a> <div class="fr"><?php edit_post_link(); ?></div></h1>
                    <?php get_template_part('entry', 'meta'); ?>
                    <?php get_template_part('entry', ( is_archive() || is_search() ? 'summary' : 'content')); ?>
                </article>
                <?php if (!post_password_required()) comments_template('',true); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="col col--12 col__md--4 col__lg--4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>