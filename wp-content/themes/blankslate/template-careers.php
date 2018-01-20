<?php /* Template Name: Careers */ ?>
<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h1>'.get_field("title").'</h1>
    <h2 class="mb-40">'.get_field("sub_title").'</h2>
    <button type="button" class="btn transition">'.__('Send Your CV').'</button>
';
include('content-header.php');
?>
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
<!--second section-->
<section class="block-st10">
    <div class="flex stagger_3">
        <div class="col col--12 col__md--6 col__lg--6">
            <div class="responsive-embed">
                <iframe width="560" height="315" src="<?php the_field('youtube'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col col--12 col__md--6 col__lg--6 contactsection">
            <?php the_field('benefits'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>