<?php
/**
 * Template part for displaying single posts content.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('uk-article uk-margin-large-bottom'); ?>>

	<header class="entry-header uk-margin">
		
		<?php the_title( '<h1 class="entry-title uk-article-title uk-text-center-small">', '</h1>' ); ?>
		
       <div class="entry-meta uk-article-meta uk-text-center-small">
			<?php ultra_framework_posted_on(); ?>
		</div><!-- .entry-meta -->
		
    </header><!-- .entry-header -->
	
	<?php ultra_framework_post_thumbnail(); ?>
	
	<?php ultra_framework_excerpt(); ?>

	<div class="entry-content uk-margin">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ultra-framework' ),
				'after'  => '</div>',
			) );
		?>
		<ul>
			<li>Country: <?php $term_list = wp_get_post_terms($post->ID, 'country', array("fields" => "names")); echo $term_list[0]; ?></li>
			<li>Genre: <?php $term_list = wp_get_post_terms($post->ID, 'film-genre', array("fields" => "names")); echo $term_list[0]; ?></li>
			<?php $custom_fields = get_post_custom();
				echo "<li>Ticket Price: ".$custom_fields['Ticket Price'][0]."</li>";
				echo "<li>Release Date: ".$custom_fields['Release Date'][0]."</li>";
			?>
		</ul>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ultra_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
