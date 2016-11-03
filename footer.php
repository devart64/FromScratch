
<?php get_sidebar(); ?>
</div> <!-- fin #main -->
</div>
<?php wp_footer(); ?>

<?php
if (has_post_thumbnail()):
    the_post_thumbnail();
    ?>
    <div class="post-img"><?php  the_post_thumbnail();?></div>
<?php endif;?>



</body>
</html>
