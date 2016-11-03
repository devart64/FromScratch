<?php
/**
 * Template Name: contact page
 */
get_header();
?>

<?php
# ========================
# Traitement du formulaire (envoi du mail)
# ========================
if( isset($_POST['contact_traitement']) ){
	?>
	<div class="post">
	<h1>Mail pas envoyé !</h1>
	<p>Il s'agit simplement d'un exemple, la partie traitement n'est pas opérationnelle, ça n'est pas l'objet de ce chapitre.</p>
	<pre>$_POST : <?php print_r($_POST); ?></pre>
	</div>
	<?php
}


# =======================
# Affichage du formulaire
# =======================
else {
?>
<div class="post">
	<?php if (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div><?php the_content(); ?></div>
	<?php endif; ?>


</div>
<?php } ?>

