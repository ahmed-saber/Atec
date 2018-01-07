<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php
if (has_post_thumbnail($post->ID)){
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
}
?>
<!--first section-->
<section class="block-st1" style="background-image:url('<?php echo $image[0]; ?>')">
    <div class="logo_container anim1 hidden">
        <span class="logo"></span>
        <span class="no-selection BG_text"><?php _e('atec'); ?></span>
    </div>
    <?php
    include('aside.php');
    ?>
    <div class="title-st1">
        <h2><?php the_field('sub_title'); ?></h2>
        <h1><?php the_field('title'); ?></h1>
    </div>
</section>
<!--second section-->
<section class="block-st3">
    <div class="flex">
        <div class="col col--12 col__md--6 col__lg--6">
            <img src="<?php the_field('contact_image'); ?>" class="img-w" />
        </div>
        <div class="col col--12 col__md--6 col__lg--6 contactsection">
            <?php echo get_post_field('post_content', $post_id); ?>
            <span class="no-selection BG_text"><?php _e('contact'); ?></span>
            <button type="button" class="btn transition" onclick="window.location = '#fifth_sec'"><?php _e('Send Us Mail'); ?></button>
        </div>
    </div>
</section>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <h1 class="sec_title mb30">
        <span><?php _e('We Are'); ?></span> <?php _e('Worldwide'); ?>
    </h1>
    <div class="max_w">
        <div class="flex">
            <div class="col col--12 col__md--12 col__lg--12">
                <div class="content-block stagger_1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Worldwide.png" class="img-w">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>