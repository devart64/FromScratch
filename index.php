<?php get_header(); ?> <!-- ouvrir header.php -->



<?php if(have_posts()):
              while(have_posts()):
                    the_post();
?>


    <div <?php post_class();?>id="post-<?php the_ID();?>">
        <?php $category = get_the_category(); $class_category = $category[0]->slug; ?>
        <div class="post-top<?php echo $class_category; ?>">
            <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a> </h1>
            <div class="post-cat"><?php the_category(",");?></div>
            <div class="post-date"><?php echo get_the_time("d/m/Y"); ?></div>

        </div>
</div>
<?php
     endwhile; endif;
?>

<div id="slideshow">
    <?php
    if(is_active_sidebar('slideshow')){
     echo' <div id="slideshowwidget">';
             dynamic_sidebar('slideshow');
      echo  '</div>';
    }
?>
<div class="bienvenue">
<p>Bienvenue dans notre belle ville.</p>
</div>
</div>

<div class="paragraphe-acceuil">
    <p>Sur ce site vous trouverez, les actualités de la ville mise à jour quotidiennement.</p>
    <p>Les activités proposées par la commune mais aussi celles des indépendants.</p>
    <p>Les activités du mois regroupent les concerts, spectacle et autres sorties organisées.</p>
    <p>La page de contact vous permets de nous contacter pour tout renseignement complémentaire.</p>

</div>

<?php
if(is_active_sidebar('sidebar-home')){
    echo '<ul id="sidebar_home">';
    dynamic_sidebar('sidebar-home');
    echo '</ul>';
}
?>









    
   
    
    
    
    
    
    
<?php get_footer(); ?>    
    
