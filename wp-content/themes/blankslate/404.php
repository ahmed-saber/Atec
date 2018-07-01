<?php get_header(); ?>
<?php
$contentHeaderData = "
    <h1>".__( 'Not Found', 'blankslate' )."</h1>
    <h2>".__( 'Nothing found for the requested page. Try a search instead?', 'blankslate' )."</h2>
";
include(locate_template('content-header.php',false,false));
?>
<?php get_footer(); ?>