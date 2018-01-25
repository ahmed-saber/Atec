<?php /* Template Name: Roles */ ?>
<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h1>'.get_field("title").'</h1>
    <h2 class="mb-40">'.get_field("sub_title").'</h2>
';
include('content-header.php');
?>
<div class="block-st5">
    <div class="max_w">
        <div class="flex">
            <?php
            // VARS
            $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
            $args = array(
                'post_type' => 'positions',
                'posts_per_page' => 3,
                'paged' => $paged
            );
            // QUERY:
            $wp_query = new WP_Query($args);
            ?>
            <?php
            while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
                <div class="col col--12 col__md--12 col__lg--12">
                    <div class="item-st2">
                        <div class="flex">
                            <div class="col col--12 col__md--6 col__lg--8 item-st2-img-holder">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-h">
                            </div>
                            <div class="col col--12 col__md--6 col__lg--4 item-st2-desc-holder">
                                <div class="item-st2-desc">
                                    <h2><?php the_title() ?></h2>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <hr>
                                    <section class="entry-meta mb-40 clearfix">
                                        <span class="entry-date fr"><?php the_time(get_option('date_format')); ?></span>
                                    </section>
                                    <section class="clearfix">
                                        <span class="entry-link fr"><a class="link" href="<?php echo get_permalink($post->post_parent); ?>"><?php _e('More', 'blankslate'); ?> <i class="fa <?php echo (get_locale() == 'ar') ? 'fa-angle-left' : 'fa-angle-right' ?>" aria-hidden="true"></i></a></span>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
        <?php wpbeginner_numeric_posts_nav(); ?>
    </div>
</div>
<?php get_footer(); ?>