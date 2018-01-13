<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<?php
$contentHeaderData = "
    <h1>".get_field('title')."</h1>
    <h2>".get_field('sub_title')."</h2>
";
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
<?php get_footer(); ?>