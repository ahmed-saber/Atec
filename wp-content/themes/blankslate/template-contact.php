<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php
if (has_post_thumbnail($post->ID)){
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
}
?>
<!--first section-->
<section class="block-st1 animate-blocks" style="background-image:url('<?php echo $image[0]; ?>')">
    <div class="logo_container anim1 hidden">
        <span class="logo"></span>
        <span class="no-selection BG_text"><?php _e('atec'); ?></span>
    </div>
    <aside class="clearfix anim1 hidden">
        <div class="social">
            <a href="<?php echo $GLOBALS['cgv']['instagram'] ?>" class="instagram">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path d="M12.9.2H5.1C2.4.2.2 2.4.2 5.1v7.8c0 2.7 2.2 4.9 4.9 4.9h7.8c2.7 0 4.9-2.2 4.9-4.9V5.1c0-2.7-2.2-4.9-4.9-4.9zm3.5 12.7c0 1.9-1.6 3.5-3.5 3.5H5.1c-1.9 0-3.5-1.6-3.5-3.5V5.1c0-1.9 1.6-3.5 3.5-3.5h7.8c1.9 0 3.5 1.6 3.5 3.5v7.8z"/>
                    <path d="M9 4.4C6.5 4.4 4.4 6.5 4.4 9c0 2.5 2 4.6 4.6 4.6s4.6-2 4.6-4.6c0-2.5-2.1-4.6-4.6-4.6zm0 7.7c-1.7 0-3.1-1.4-3.1-3.1S7.3 5.9 9 5.9s3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1z"/>
                    <circle cx="13.7" cy="4.4" r="1.2"/>
                </svg>
            </a>
            <a href="<?php echo $GLOBALS['cgv']['linkedin'] ?>" class="linkedin">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path d="M4.5,17H0.8V6.2h3.7V17z M2.6,4.7c-1.3,0-2-0.8-2-1.8S1.5,1,2.6,1s2,0.8,2,1.8S3.8,4.7,2.6,4.7z M17.3,17h-3.7v-5.8 c0-1.5-0.5-2.5-1.8-2.5c-1,0-1.7,0.7-1.8,1.3v7H6.5V6.2h3.7v1.5c0.5-0.7,1.3-1.8,3.2-1.8c2.3,0,4.2,1.5,4.2,4.8 C17.5,10.7,17.3,17,17.3,17z M9.8,8C9.8,7.8,9.8,7.8,9.8,8z"/>
                </svg>

            </a>
            <a href="<?php echo $GLOBALS['cgv']['twitter'] ?>" class="twitter">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path d="M16 5.4v.5c0 4.8-3.6 10.2-10.2 10.2-2 0-3.9-.6-5.5-1.6h.9c1.7 0 3.2-.6 4.5-1.5-1.7 0-3-1-3.5-2.5.2 0 .4.1.7.1.3 0 .6 0 .9-.1C2.2 10.2.9 8.7.9 7c.5.3 1 .4 1.6.4C1.6 6.7 1 5.6 1 4.3c0-.7.2-1.3.5-1.8 1.8 2.2 4.4 3.6 7.4 3.8-.1-.3-.1-.5-.1-.8 0-2 1.6-3.6 3.6-3.6 1 0 2 .4 2.6 1.1.8-.2 1.6-.5 2.3-.9-.3.8-.8 1.5-1.6 2 .7-.1 1.4-.3 2.1-.6-.5.8-1.1 1.4-1.8 1.9z"/>
                </svg>
            </a>
            <a href="<?php echo $GLOBALS['cgv']['facebook'] ?>" class="facebook">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path d="M7.8,18V9.4H6V6.2h1.8v-2c0-1.5,0.7-3.8,3.8-3.8h2.8v3h-2c-0.3,0-0.8,0.1-0.8,0.9v1.9h2.8l-0.3,3.1h-2.5V18H7.8z"/>
                </svg>
            </a>
        </div>
    </aside>
    <div class="title-st1">
        <h2>Get In Touch</h2>
        <h1>Contacts</h1>
    </div>
</section>
<!--second section-->
<section class="sec block-st3 animate-blocks">
    <div class="flex">
        <div class="col col--12 col__md--6 col__lg--6">
            <img src="<?php the_field('contact_image',$frontpage_id); ?>" class="img-w" />
        </div>
        <div class="col col--12 col__md--6 col__lg--6 contactsection">
            <?php the_field('contactus'); ?>
            <span class="no-selection BG_text"><?php _e('contact'); ?></span>
            <button type="button" class="btn transition" onclick="window.location = '#fifth_sec'"><?php _e('Send Us Mail'); ?></button>
        </div>
    </div>
</section>
<!--second section-->
<section id="second_sec" class="sec second_sec animate-blocks">
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