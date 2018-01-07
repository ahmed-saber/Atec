<?php /* Template Name: Projects */ ?>
<?php get_header(); ?>
<?php
if (has_post_thumbnail($post->ID)){
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
}
?>
<!--first section-->
<section class="block-st1" style="background-image:url('<?php echo $image[0]; ?>')">
    <div class="logo_container anim1 hidden">
        <span class="logo"></span>
        <span class="no-selection BG_text">atec</span>
    </div>
    <?php
    include('aside.php');
    ?>
    <div class="title-st1">
        <h2><?php the_field('sub_title'); ?></h2>
        <h1><?php the_field('title'); ?></h1>
    </div>
</section>
<section id="third_sec" class="third_sec">
    <span class="no-selection BG_text"><?php _e('Projects'); ?></span>
    <div class="filters-button-container">
        <div class="button-group filters-button-group stagger_2">
            <button class="button is-checked" data-filter="all"><?php _e('Show All'); ?></button>
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
                <a data-category="<?php echo $terms[0]->name; ?>" data-project="<?php echo $index; ?>" class="project_unit" href="#">
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
<?php get_footer(); ?>