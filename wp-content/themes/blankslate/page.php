<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<?php
if (has_post_thumbnail($post->ID)){
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
}
?>
<!--first section-->
<section class="block-st1 firstSec" style="background-image:url('<?php echo ($image[0]) ? $image[0] : get_template_directory_uri(); ?>/assets/img/bg/BG6.jpg; '">
    <div class="logo_container anim1 hidden">
        <span class="logo"></span>
        <span class="no-selection BG_text"><?php _e('atec'); ?></span>
    </div>
    <?php
    include('aside.php');
    ?>
    <div class="title-st1">
        <h1><?php the_field('title'); ?></h1>
        <h2><?php the_field('sub_title'); ?></h2>
    </div>
</section>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <div class="max_w">
        <div class="flex">
            <div class="col col--12 col__md--12 col__lg--12">
                <div class="content-block">
                    <?php echo wpautop($post->post_content); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>