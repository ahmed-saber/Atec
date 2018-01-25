<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<?php
$contentHeaderData = '
    <h2>'.get_field("sub_title").'</h2>
    <h1 class="mb-40">'.get_field("title").'</h1>
    <!--button type="button" class="btn transition">'.__('Call to Action', 'blankslate').'</button-->
';
include('content-header.php');
?>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <h1 class="sec_title">
        <span><?php the_field('who_we_are_title'); ?></span>
    </h1>
    <div class="max_w">
        <div class="flex">
            <div class="col col--12 col__md--12 col__lg--12">
                <div class="content-block stagger_1">
                    <?php echo wpautop($post->post_content); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <h1 class="sec_title mb-30">
    <span><?php _e('Our', 'blankslate'); ?></span> <?php _e('Specialization', 'blankslate'); ?></h1>
    <span class="no-selection BG_text"><?php _e('News', 'blankslate'); ?></span>
    <div class="max_w">
        <div class="flex">
            <div class="col col--12 col__md--4 col__lg--4">
                <div class="block-st2">
                    <div class="svg-ico">
                        <svg viewBox="0 0 75 55.8">
                            <g fill="none" stroke="#B7D333">
                                <path stroke-width="2" d="M65.2 53.5V28.9L45.7 24l-29.3 6.6v-8.2l29.3-9.8 19.6 8.2V9.3l-18-8.2L6.5 15.8v22.9l34.2-4.9V42L6.5 47v6.6"
                                />
                                <path stroke-width="1" d="M49.7 24.8v30.1M60.3 18.7v9M11.4 38v8.6" />
                                <path stroke-width="3" d="M75 54.3H0" />
                            </g>
                        </svg>
                    </div>
                    <?php the_field('architecture'); ?>
                </div>
            </div>
            <div class="col col--12 col__md--4 col__lg--4">
                <div class="block-st2">
                    <div class="svg-ico">
                        <svg viewBox="0 0 75 38">
                            <g fill="none" stroke="#B7D333">
                                <path stroke-width="1" d="M59.7 15.4V34M51.1 10.4V34M32.6 1.7v19.8M10.4 11.6v26M40 21.6V38" />
                                <path stroke-width="3" d="M6.7 36.5H40M40.2 34h24.5" />
                                <path stroke-width="2" d="M10.4 21.6h40.9M32.3 1.6l41 20M33.1 1.4L1.7 16.6" />
                            </g>
                        </svg>
                    </div>
                    <?php the_field('interiors'); ?>
                </div>
            </div>
            <div class="col col--12 col__md--4 col__lg--4">
                <div class="block-st2">
                    <div class="svg-ico">
                        <svg viewBox="0 0 75 35.5">
                            <g fill="none" stroke="#B7D333">
                                <path stroke-width="2" d="M39 11.5v22.7m9-20.1v20.7" />
                                <path stroke-width="1" d="M.3 33.5h23.4l.1-32.1L4.2 21.9v11.6m70.8 0H24.8V8.9l36 7.8v16.8" />
                                <path stroke-width="2" d="M75 33.5H24.8V.8l45.1 12v20.7" />
                                <path stroke-width="1" d="M75 34.8H.3" />
                            </g>
                        </svg>
                    </div>
                    <?php the_field('planing'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--second section-->
<section id="second_sec" class="sec second_sec">
    <h1 class="sec_title mb-30">
        <?php _e('<span>We Are</span> Worldwide', 'blankslate'); ?>
    </h1>
    <div class="max_w">
        <div class="flex">
            <div class="col col--12 col__md--12 col__lg--12">
                <div class="content-block stagger_1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Worldwide.png" class="img-w">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>