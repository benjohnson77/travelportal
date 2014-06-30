<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since 1.0
 */
get_header(); ?>
<div id="page">
	<div id="content" class="container">
		<div class="row">
			<div class="col-md-8">	

					<?php if ( have_posts() ) : ?>

						<header id="archive-header">
						<!-- 	<div class="container"> -->
								<div class="row">

									<h1 class="page-title">
										<?php if ( is_category() ) : ?>
											<?php echo single_cat_title( '', false ); ?>
										<?php elseif ( is_author() ) : ?>
											<?php printf( __( 'Author Archive for %s', 'lobster' ), get_the_author_meta( 'display_name', get_query_var( 'author' ) ) ); ?>
										<?php elseif ( is_tag() ) : ?>
											<?php printf( __( 'Tag Archive for %s', 'lobster' ), single_tag_title( '', false ) ); ?>
										<?php elseif ( is_day() ) : ?>
											<?php printf( __( 'Daily Archives: %s', 'lobster' ), get_the_date() ); ?>
										<?php elseif ( is_month() ) : ?>
											<?php printf( __( 'Monthly Archives: %s', 'lobster' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'lobster' ) ) ); ?>
										<?php elseif ( is_year() ) : ?>
											<?php printf( __( 'Yearly Archives: %s', 'lobster' ), get_the_date( _x( 'Y', 'yearly archives date format', 'lobster' ) ) ); ?>
										<?php else : ?>
											<?php _e( 'Blog Archives', 'lobster' ); ?>
										<?php endif; ?>
									</h1><!-- .page-title -->
								<?php
								if ( is_category() ) :
									if ( $category_description = category_description() )
										echo '<h3 class="archive-meta">' . $category_description . '</h2>';
								endif;

								if ( is_author() ) :
									$curauth = ( get_query_var( 'author_name' ) ) ? get_user_by( 'slug', get_query_var( 'author_name' ) ) : get_userdata( get_query_var( ' author' ) );
									if ( isset( $curauth->description ) )
										echo '<h3 class="archive-meta">' . $curauth->description . '</h2>';
								endif;
								?>
								</div>
							<!-- </div> -->
						</header><!-- #archive-header -->
						<!-- <div class="container"> -->
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="row">
								<div class="tour-image col-md-3">
									<img src="<?php echo get_post_meta( get_the_ID(), 'ProductionImage', true); ?>">
								</div>
								<div class="post-list col-md-9">
									<h2><?php echo get_the_title(); ?></h2>
									<p><?php echo get_the_excerpt(); ?></p>
									
								</div>
							</div>
						<?php endwhile; 
								lobster_pagination();
							else :
								get_template_part( 'content', 'none' );
							endif;
							?>
						<!-- </div> -->
				
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
	</div>
</div>
<?php get_footer(); ?>