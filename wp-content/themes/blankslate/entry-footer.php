<div class="entry-footer">
    <?php
    $terms = get_the_terms($post->ID,'news_categories');
    if($terms){
        echo '<ul class="tags-st1">';
        foreach($terms as $term){
            echo '<li><a href="'.get_term_link($term,'projects_types').'">'.$term->name.'</a></li>';
        }
        echo '</ul>';
    }
    ?>
</div> 