<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h1>'.get_the_title().'</h1>
';
include('content-header.php');
?>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <div class="max_w">
        <div class="flex">
            <div class="col col--12 col__md--8 col__lg--8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title mb-10" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> <div class="fr"><?php edit_post_link(); ?></div></h1>
                    <section class="entry-content">
                        <?php
                        // check if the repeater field has rows of data
                        if( have_rows('project_details')):
                        ?>
                        <div class="project-images-slider">
                            <?php
                                // loop through the rows of data
                                while (have_rows('project_details')) : the_row();
                                    $image = get_sub_field('project_images');
                                    ?>
                                    
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php
                                endwhile;
                            ?>
                        </div>
                        <div class="project-images-slider-arrows text_center"></div>
                        <script>
                        window.onload = function(e){ 
                            $('.project-images-slider').slick({
                                autoplay:true,
                                arrows: true,
                                appendArrows:'.project-images-slider-arrows'
                            });
                        };
                        </script>
                        <?php
                        else :
                            echo 'No images found';
                        endif;
                        ?>
                        <?php the_content(); ?>
                        <div class="entry-links"><?php wp_link_pages(); ?></div>
                    </section>
                    <?php if (!is_search()) get_template_part( 'entry-footer' ); ?>
                </article>
                <?php if (!post_password_required()) comments_template('',true); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="col col--12 col__md--4 col__lg--4">
                &nbsp;
            </div>
        </div>
    </div>
<?php get_footer(); ?>