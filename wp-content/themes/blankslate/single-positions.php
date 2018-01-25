<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h1>'.get_the_title().'</h1>
';
include('content-header.php');
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
<div id="applyto" class="applyto">
    <div class="max_w">
        <h1><?php echo __('Submit your CV'); ?></h1>
        <div class="flex">
            <div class="col col--12 col__md--12 col__lg--12">
            <?php
            echo do_shortcode('[contact-form-7 id="173" title="Submit your CV"]');
            ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>