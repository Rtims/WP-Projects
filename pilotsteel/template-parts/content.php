<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_archive( 'Equipment' ) ) : ?>

	<div class="eq-wraps">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<?php twentysixteen_post_thumbnail(); ?>
			</div>
			<div class="col-md-8 col-xs-12">
				<header class="entry-header">
					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
				</header><!-- .entry-header -->				
				<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 280, '...');?></p>
				<a class="btn-primary transition" href="<?php echo get_permalink(); ?>">Read More</a>
			</div>
		</div>
	</div>

	<!-- <?php //elseif ( is_archive( 'Projects' ) ) : ?>

	<div class="eq-wraps">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<?php //twentysixteen_post_thumbnail(); ?>
			</div>
			<div class="col-md-8 col-xs-12">
				<header class="entry-header">
					<?php //the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
				</header>			
				<p><?php $content //= get_the_content(); echo mb_strimwidth($content, 0, 280, '...');?></p>
				<a class="btn-primary transition" href="<?php //echo get_permalink(); ?>">Read More</a>
			</div>
		</div>
	</div> -->

	<?php else : ?>


		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php twentysixteen_entry_meta(); ?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->

	<?php endif; ?>

</article><!-- #post-## -->
