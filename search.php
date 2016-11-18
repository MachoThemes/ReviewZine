<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package islemag
 */

get_header(); ?>
<div class="container">
    <div class="row">
        <div class="islemag-content-left col-md-8">


		<?php

      if ( have_posts() ) : ?>

  			<header class="page-header">
  				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'islemag' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
  			</header><!-- .page-header -->

  			<?php
        while ( have_posts() ) : the_post();

  				/**
  				 * Run the loop for the search to output the results.
  				 * If you want to overload this in a child theme then include a file
  				 * called content-search.php and that will be used instead.
  				 */
  				get_template_part( 'template-parts/content', 'search' );

        endwhile;
        
        echo '<div class="reviewzine-pagination">';
        echo paginate_links( array( 'prev_next' => false ) );
        echo '</div>';

        ?>

		<?php

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>

		</div>
    <?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>