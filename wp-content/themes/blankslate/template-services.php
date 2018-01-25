<?php /* Template Name: Services */ ?>
<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h2>'.get_field("sub_title").'</h2>
    <h1 class="mb-40">'.get_field("title").'</h1>
    <button type="button" class="btn transition">'.__('REQUEST QUOTE', 'blankslate').'</button>
';
include('content-header.php');
?>
<div class="block-st4">
    <div class="max_w">
        <div class="flex">
            <?php
            // VARS
            $args = array(
                'post_type' => 'services'
            );
            // QUERY:
            $query1 = new WP_Query($args);
            $index = 0;
            ?>
            <?php
            while ($query1->have_posts()) : $query1->the_post();
                $index++;
                $odd = ($index % 2 == 0) ? 'odd' : '';
            ?>
                <div class="col col--12 col__md--12 col__lg--12">
                    <div class="item-st1 <?php echo $odd; ?>">
                        <div class="flex flex--middle">
                            <div class="col col--12 col__md--6 col__lg--8 item-st1-img-holder">
                                <div class="item-st1-img">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-w">
                                </div>
                            </div>
                            <div class="col col--12 col__md--6 col__lg--4 item-st1-desc-holder">
                                <div class="item-st1-desc">
                                    <div class="icon">
                                        <img src="<?php the_field('icon', $post->ID); ?>">
                                    </div>
                                    <h2><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php the_title() ?></a></h2>
                                    <p><?php  echo get_the_excerpt(); ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>