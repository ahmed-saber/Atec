<?php
if ($post->post_type == 'page' && has_post_thumbnail($post->ID)){
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
}
?>
<!--first section-->
<section class="block-st1 firstSec" style="background-image:url('<?php echo isset($image) ? $image[0] : get_template_directory_uri().'/assets/img/bg/default.jpg'; ?>')">
    <div class="logo_container anim1 hidden">
        <span class="logo"></span>
        <span class="no-selection BG_text"><?php _e('atec'); ?></span>
    </div>
    <?php
    include('aside.php');
    ?>
    <div class="title-st1">
        <?php
        echo $contentHeaderData;
        ?>
    </div>
</section>