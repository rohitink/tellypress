<?php
/**
 * @package TellyPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    	<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail(array(150,150));
		}
		?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php tellypress_posted_on(); ?>
				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'tellypress' ) );
                    if ( $categories_list && tellypress_categorized_blog() ) :
                ?>
                <span class="cat-links">
                    <?php printf( __( 'in %1$s', 'tellypress' ), $categories_list ); ?>
                </span>
                <?php endif; // End if categories ?>
    
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'tellypress' ) );
                    if ( $tags_list ) :
                ?>
                <span class="tags-links">
                    <?php //printf( __( 'Tagged %1$s', 'tellypress' ), $tags_list ); ?>
                </span>
                <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>
    
            <?php /*if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link">
			<?php comments_popup_link( __( 'Leave a comment', 'tellypress' ), __( '1 Comment', 'tellypress' ), __( '% Comments', 'tellypress' ) ); ?></span>
            <?php endif; */?>
    
            <?php //edit_post_link( __( 'Edit', 'tellypress' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
    	
		<?php 
			if(strlen(get_the_title()) >= 87)
				echo substr(get_the_excerpt(), 0,120)."....";
			else if(strlen(get_the_title()) >= 40)
				echo substr(get_the_excerpt(), 0,150)."....";	
			else	
				echo substr(get_the_excerpt(), 0,195)."...."; ?>
        
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'tellypress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
