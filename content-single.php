<?php
/**
 * @package TellyPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="single-entry-title entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta single-entry-meta">
			<?php //tellypress_posted_on(); ?>
            
				<span class="author-link">
				<?php printf( __( '<img class=icon src='.get_template_directory_uri().'/images/author.png><a href='.the_author_meta('user_url').'> %1$s</a> ', 'tellypress' ), get_the_author() ); ?>
				</span>
                <span class="date-link">
				<?php printf( __( '<img class=icon src='.get_template_directory_uri().'/images/date.png> %1$s', 'tellypress' ), the_date() ); ?>
				</span>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'tellypress' ) );
				if ( $categories_list && tellypress_categorized_blog() ) :
			?>
			<span class="cat-link">
				<?php printf( __( '<img class=icon src='.get_template_directory_uri().'/images/cat.png> %1$s', 'tellypress' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="single-entry-content entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'tellypress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="footer-meta entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'tellypress' ) );

				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'Tags: %1$s. ', 'tellypress' );
				} else {
					$meta_text = __( '', 'tellypress' );
				}

			printf(
				$meta_text, $tag_list
			);
		?>

		<?php edit_post_link( __( 'Edit', 'tellypress' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
