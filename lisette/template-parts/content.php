<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lisette
 */

?>



<!-- here you can style the posts -->
<figure class="item">
<div class="middle">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lisette' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lisette' ),
				'after'  => '</div>',
			) );
		?>
      </a>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
</div>
</figure>




