<?php /* Template Name: Projects */ ?>
<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h1>'.get_field("title").'</h1>
    <h2>'.get_field("sub_title").'</h2>
';
include('content-header.php');
?>
<section id="third_sec" class="third_sec">
    <span class="no-selection BG_text"><?php _e('Projects', 'blankslate'); ?></span>
    <div class="filters-button-container">
        <div class="button-group filters-button-group stagger_2">
            <button class="button is-checked" data-filter="all"><?php _e('Show All', 'blankslate'); ?></button>
            <?php
            $terms = get_terms( array(
                'taxonomy' => 'projects_types',
                'hide_empty' => true
            ) );
            foreach($terms as $term){
                ?>
                    <button class="button" data-filter="<?php echo $term->name; ?>"><?php echo $term->name; ?></button>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="flex flex--center collapsed_columns projects_container grid stagger_3">
        <?php
        // VARS
        $args = array(
            'post_type' => 'projects'
        );
        // QUERY:
        $query1 = new WP_Query($args);
        $index = 0;
        ?>
        <?php
        while ($query1->have_posts()) : $query1->the_post();
            $index++;
            $terms = get_the_terms(get_the_ID(),'projects_types');
        ?>
            <div class="col col--12 col__md--3 col__lg--3 element-item all <?php echo $terms[0]->name; ?>">
                <a data-category="<?php echo $terms[0]->name; ?>" data-project="<?php echo $index; ?>" class="project_unit" href="<?php echo get_permalink($post->post_parent); ?>">
                    <h3 class="proj_title transition"><?php the_title() ?></h3>
                    <span class="proj_img">
                        <img class="transition" src="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>">
                    </span>
                </a>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</section>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/projects.js" type="text/javascript" defer></script>
<?php get_footer(); ?>