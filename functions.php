<?php
if ( function_exists('register_sidebar') ) register_sidebar(array('name'=>'Sidebar',
));
?>

<?php add_action('wp_enqueue_scripts','enqueue_my_styles_scripts');
function enqueue_my_styles_scripts() {
    wp_enqueue_style('my-styles',get_stylesheet_directory_uri().'/style.css');
}
?>

<?php register_sidebar( 'Left Sidebar', '1','Left Sidebar','sidebar-left' ); ?> 