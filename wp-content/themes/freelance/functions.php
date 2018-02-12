<?php
function widget_mytheme_search() {
?>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_mytheme_search');
?>
<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
