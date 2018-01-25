<?php /* Template Name: Careers */ ?>
<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h1>'.get_field("title").'</h1>
    <h2 class="mb-40">'.get_field("sub_title").'</h2>
    <button type="button" class="btn transition" onclick="window.location = \'#applyto\'">'.__('Send Your CV', 'blankslate').'</button>
';
include('content-header.php');
?>

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

<section id="second_sec" class="sec second_sec">
    <div class="max_w">
        <h1 class="sec_title"><span><?php echo __('Open', 'blankslate'); ?></span> <?php echo __('Positions', 'blankslate'); ?> <a href=""><?php echo __('View all Roles', 'blankslate'); ?></a></h1>
        <div class="flex">
            <?php
            // VARS
            $args = array(
                'post_type' => 'positions',
                'posts_per_page' => 3
            );
            // QUERY:
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="col col--12 col__md--4 col__lg--4">
                    <div class="job-st1">
                        <div class="job-st1-img">
                            <a href="<?php echo get_permalink( $post->post_parent ); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>">
                                <i></i>
                            </a>
                        </div>
                        <div class="job-st1-desc">
                            <h3><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php the_field('sub_title'); ?></a></h3>
                            <h4><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php the_title() ?></a></h4>
                            <div class="date"><?php the_time( get_option( 'date_format' ) ); ?></div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</section>

<div id="applyto" class="applyto">
    <div class="max_w">
        <h1><?php echo __('Submit your CV', 'blankslate'); ?></h1>
        <div class="flex">
            <div class="col col--12 col__md--12 col__lg--12">
            <?php
            if(get_locale() == 'ar'){
                echo do_shortcode('[contact-form-7 id="212" title="Submit your CV AR"]');
            }else{
                echo do_shortcode('[contact-form-7 id="173" title="Submit your CV"]');
            }
            ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>