<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Apace
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'apa-article' ); ?>>
	
	<?php apace_post_thumbnail(); ?>

	<div class="apa-article-box">

		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
						apace_entry_meta();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_excerpt();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'apace' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

	</div><!-- .apa-article-box -->

</article><!-- #post-<?php the_ID(); ?> -->
