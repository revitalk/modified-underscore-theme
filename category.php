<?php
/**
 * The template for displaying category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package apnm
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					single_cat_title('<h1 class="page-title">', '</h1>');
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			get_template_part( 'template-parts/content', 'page' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'page' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
