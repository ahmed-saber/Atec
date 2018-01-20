<aside id="sidebar" role="complementary">
    <div class="block-st9">
        <h2>Recent Posts</h2>
        <div class="news-block">
            <?php
            // VARS
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3
            );
            // QUERY:
            $wp_query = new WP_Query($args);
            ?>
            <?php
            while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
                <div class="item-st3">
                        <div class="flex">
                            <div class="col col--12 col__md--4 col__lg--4 item-st2-img-holder">
                                <a href="<?php echo get_permalink( $post->post_parent ); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>">
                                </a>
                            </div>
                            <div class="col col--12 col__md--6 col__lg--8 item-st2-desc-holder">
                                <div class="item-st2-desc">
                                    <p><?php echo substr(get_the_excerpt(), 0, 90); ?>...</p>
                                    <section class="entry-meta clearfix">
                                        <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            endwhile;
            ?>
            <?php
            $terms = get_terms( array(
                'taxonomy' => 'news_categories',
                'hide_empty' => false,
            ) );
            echo '<ul class="tags-st1">';
            foreach($terms as $term){
                echo '<li><a href="'.get_term_link($term,$taxonomy_name).'">'.$term->name.'</a></li>';
            }
            echo '</ul>';
            ?>
        </div>
    </div>
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
        <div id="primary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>