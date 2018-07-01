<?php get_header(); ?>
<?php
$frontpage_id = get_option('page_on_front');
?>
<!--first section-->
<section id="first_sec" class="sec first_sec">
    <?php
    // VARS
    $args = array(
        'post_type' => 'featured_area',
        'posts_per_page' => 5
    );
    // QUERY:
    $query = new WP_Query($args);
    ?>
    <div class="logo_container anim1 hidden">
        <span class="logo"></span>
        <span class="pagingInfo"><strong>01</strong>/ <?php echo str_pad(count($query->posts), 2, '0', STR_PAD_LEFT);; ?></span>
        <span class="no-selection BG_text"><?php _e('atec', 'blankslate'); ?></span>
    </div>
    <?php
    $slogan_txt = __('Engineering Consultancy', 'blankslate');
    include('aside.php');
    ?>
    <div class="carousel_arrows">
        <button type="button" class="slick-prev slick-arrow" aria-label="Previous" role="button"><?php _e('Previous'); ?></button>
        <button type="button" class="slick-next slick-arrow" aria-label="Next" role="button"><?php _e('Next'); ?></button>
    </div>
    <div class="carousel hidden">
        <?php
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="carousel_item" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>')">
                <div class="carousel_item_info hidden transition">
                    <h1><?php the_title() ?></h1>
                    <p><?php echo wp_filter_nohtml_kses(get_the_content()); ?></p>
                    <button type="button" class="btn transition" onclick="window.location = '<?php echo get_permalink( $post->post_parent ); ?>'"><?php _e('Read More', 'blankslate'); ?></button>
                </div>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</section>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <h1 class="sec_title"><span><?php _e('About', 'blankslate'); ?></span> <?php _e('ATEC', 'blankslate'); ?></h1>
    <span class="no-selection BG_text">
        <?php the_field('title',$frontpage_id); ?>
    </span>
    <div class="max_w">
        <div class="flex">
            <div class="col col--12 col__md--4 col__lg--4 col__lg--last">
                <div class="img-block stagger_1">
                    <img src="<?php the_field('image',$frontpage_id); ?>" />
                </div>
            </div>
            <div class="col col--12 col__md--4 col__lg--4">
                <div class="content-block stagger_1">
                    <?php the_field('description',$frontpage_id); ?>
                </div>
            </div>
            <div class="col col--12 col__md--4 col__lg--4">
                <div class="content-block Specialization stagger_1">
                    <h2><?php _e('Our Specialization', 'blankslate'); ?></h2>
                    <ul class="icons_list">
                        <li>
                            <div class="first_line_icon line_icon">
                                <svg class="transition slow" viewBox="0 0 75 55.8">
                                    <g fill="none" stroke="#B7D333">
                                        <path stroke-width="2" d="M65.2 53.5V28.9L45.7 24l-29.3 6.6v-8.2l29.3-9.8 19.6 8.2V9.3l-18-8.2L6.5 15.8v22.9l34.2-4.9V42L6.5 47v6.6"/>
                                        <path stroke-width="1" d="M49.7 24.8v30.1M60.3 18.7v9M11.4 38v8.6"/>
                                        <path stroke-width="3" d="M75 54.3H0"/>
                                    </g>
                                </svg>
                            </div>
                            <h3><?php _e('Architecture', 'blankslate'); ?></h3>
                        </li>
                        <li>
                            <div class="second_line_icon line_icon">
                                <svg class="transition slow" viewBox="0 0 75 38">
                                    <g fill="none" stroke="#B7D333">
                                        <path stroke-width="1" d="M59.7 15.4V34M51.1 10.4V34M32.6 1.7v19.8M10.4 11.6v26M40 21.6V38"/>
                                        <path stroke-width="3" d="M6.7 36.5H40M40.2 34h24.5"/>
                                        <path stroke-width="2" d="M10.4 21.6h40.9M32.3 1.6l41 20M33.1 1.4L1.7 16.6"/>
                                    </g>
                                </svg>
                            </div>
                            <h3><?php _e('Interiors', 'blankslate'); ?></h3>
                        </li>
                        <li>
                            <div class="third_line_icon line_icon">
                                <svg class="transition slow" viewBox="0 0 75 35.5">
                                    <g fill="none" stroke="#B7D333">
                                        <path stroke-width="2" d="M39 11.5v22.7m9-20.1v20.7"/>
                                        <path stroke-width="1" d="M.3 33.5h23.4l.1-32.1L4.2 21.9v11.6m70.8 0H24.8V8.9l36 7.8v16.8"/>
                                        <path stroke-width="2" d="M75 33.5H24.8V.8l45.1 12v20.7"/>
                                        <path stroke-width="1" d="M75 34.8H.3"/>
                                    </g>
                                </svg>
                            </div>
                            <h3><?php _e('Planing', 'blankslate'); ?></h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--third section-->
<section id="third_sec" class="sec third_sec">
    <h1 class="sec_title"><?php _e('<span>Our</span> Projects', 'blankslate'); ?></h1>
    <span class="no-selection BG_text"><?php _e('Projects', 'blankslate'); ?></span>
    <div class="filters-button-container">
        <div class="button-group filters-button-group stagger_2">
            <button class="button is-checked" data-filter="all"><?php _e('Show All', 'blankslate'); ?></button>
            <?php
            // VARS
            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => 4,
                'meta_key' => 'display_in_frontpage',
                'meta_value' => 1
            );
            // QUERY:
            $query1 = new WP_Query($args);
            $index = 0;
            $terms_ARR = array();
            $projects_ARR_HTML = array();
            ?>
            <?php
            while ($query1->have_posts()) : $query1->the_post();
                $index++;
                $terms = get_the_terms(get_the_ID(),'projects_types');
                array_push($projects_ARR_HTML,'
                <div class="col col--12 col__md--3 col__lg--3 element-item all '.$terms[0]->slug.'">
                    <a data-category="'.$terms[0]->slug.'" data-project="'.$index.'" class="project_unit" href="'.get_permalink($post->post_parent).'">
                        <h3 class="proj_title transition">'.get_the_title().'</h3>
                        <span class="proj_img">
                            <img class="transition" src="'.get_the_post_thumbnail_url($post->ID,'full').'">
                        </span>
                    </a>
                </div>');
                $terms_ARR[$terms[0]->slug] = $terms;
            endwhile;
            ?>
            <?php
            foreach($terms_ARR as $term){
            ?>
                <button class="button" data-filter="<?php echo $term[0]->slug; ?>"><?php echo $term[0]->name; ?></button>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="flex flex--center collapsed_columns projects_container grid stagger_3">
        <?php
        foreach($projects_ARR_HTML as $project_HTML){
            print $project_HTML;
        }
        ?>
    </div>
</section>
<!--fourth Section-->
<section id="fourth_sec" class="sec fourth_sec">
    <h1 class="sec_title"><?php _e('<span>Our</span> Clients', 'blankslate'); ?></h1>
    <span class="no-selection BG_text"><?php _e('clients', 'blankslate'); ?></span>
    <div class="max_w">
        <div class="flex flex--middle clients_list stagger_4">
            <div class="transition">
                <?php
                $size = 'large';
                $images = get_field('our_clients', $frontpage_id);
                if($images):
                ?>
                    <ol>
                        <?php foreach($images as $image): ?>
                            <li>
                                <img class="alignnone size-full" src="<?php echo $image['sizes'][$size]; ?>" alt="<?php echo $image['alt']; ?>" />
                            </li>
                        <?php endforeach; ?>
                    </ol>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js" type="text/javascript" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/projects.js" type="text/javascript" defer></script>
<?php get_footer(); ?>