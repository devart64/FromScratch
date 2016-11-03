
<?php
require get_template_directory().'/inc/control.php';
?>

<?php
 automatic_feed_links(false);

 if ( function_exists('register_sidebar')) register_sidebar();
 ?>
<?php register_nav_menus(array(
    'topmenu' =>__('Top menu', 'FromScratch')
));

$args = array(
    'width'         => 256,
    'heigth'        => 256,
    'default-image' => get_template_directory_uri() . 'images/maison.png');
add_theme_support( 'custom-header', $args);

add_theme_support('post-thumbnails');

function themeFromScratch_widgets_init(){

    register_sidebar(array(
        'name'          => __('Header', 'FromScratch'),
        'id'            => 'header',
        'description'   => __('zone de widget dans l\'entete.', 'FromScratch'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'themeFromScratch_widgets_init');


 function FromScratch_widgets_init(){
     register_sidebar(array(
        'name' => __('Slideshow', 'FromScratch'),
        'id' => 'slideshow',
        'description' => __('zone de widget du slider.', 'FromScratch'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'FromScratch_widgets_init');

register_sidebar(
    array(
        'name' => 'sidebar acceuil',
        'id'   => 'sidebar-home',
        'description' => 'sidebar 3 colones pied de page de l\'accueil',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
);
add_action('widget_init', 'FomScratch_widget_init');
?>


