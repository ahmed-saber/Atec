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
                <?php get_template_part('entry'); ?>
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