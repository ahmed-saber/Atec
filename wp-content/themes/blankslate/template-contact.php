<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h1>'.get_field("title").'</h1>
    <h2>'.get_field("sub_title").'</h2>
    <button type="button" class="btn transition" onclick="window.location = \'#fifth_sec\'">'.__('Send Us Mail', 'blankslate').'</button>
';
include(locate_template('content-header.php',false,false));
?>
<!--second section-->
<section class="block-st3">
    <div class="flex stagger_3">
        <div class="col col--12 col__md--6 col__lg--6">
            <img src="<?php the_field('contact_image'); ?>" class="img-w target" />
        </div>
        <div class="col col--12 col__md--6 col__lg--6 contactsection">
            <div class="target">
                <?php echo wpautop($post->post_content); ?>
                <span class="no-selection BG_text"><?php _e('contact', 'blankslate'); ?></span>
                <button type="button" class="btn transition" onclick="window.location = '#fifth_sec'"><?php _e('Send Us Mail', 'blankslate'); ?></button>
            </div>
        </div>
    </div>
</section>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <h1 class="sec_title mb-30">
        <span><?php _e('We Are', 'blankslate'); ?></span> <?php _e('Worldwide', 'blankslate'); ?>
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