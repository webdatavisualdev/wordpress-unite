<?php
/**
 * Template part for displaying results in archive pages.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('uk-article uk-margin-large-bottom'); ?>>
	<header class="entry-header uk-margin">
		<?php the_title( sprintf( '<h2 class="entry-title uk-text-center-small"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta uk-article-meta uk-text-center-small">
			<?php ultra_framework_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<?php ultra_framework_post_thumbnail(); ?>

	<?php ultra_framework_excerpt(); ?>

	<ul>
		<li>Country: <?php $term_list = wp_get_post_terms($post->ID, 'country', array("fields" => "names")); echo $term_list[0]; ?></li>
		<li>Genre: <?php $term_list = wp_get_post_terms($post->ID, 'film-genre', array("fields" => "names")); echo $term_list[0]; ?></li>
		<?php $custom_fields = get_post_custom();
			echo "<li>Ticket Price: ".$custom_fields['Ticket Price'][0]."</li>";
			echo "<li>Release Date: ".$custom_fields['Release Date'][0]."</li>";
		?>
	</ul>

	<footer class="entry-footer">
		<?php ultra_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->