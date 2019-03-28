<?php get_header(); ?>


<div class="content">

<!-- SWIPER BEGIN -->

	<div class="swiper-container" style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/images/content.jpg' ?>)">
		<?php if ( is_category() || is_tag() ) { ?>

			<h1 class="main-title"><?php echo single_cat_title() ?></h1>

		<?php } ?>
			<div class="swiper-wrapper">

				<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

					<div class="swiper-slide">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<a class="post__featured-image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo the_post_thumbnail_url('myportfolio_single'); ?>)">

								</a>


								<div class="post__info">
									<h2 class="post__info__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

									<p class="post__info__datas"> <?php the_time('j M , Y') ?> - <?php the_category(', '); ?></p>
								</div>






						</article>
					</div>

				<?php endwhile; ?>

				<div class="pagination">

					<?php /* Pagination */

					global $wp_query;
					$big = 999999999; // need an unlikely integer
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
					) );

					?>

				</div>

			<?php else : ?>

			  <h3> <?php esc_html_e('Sorry, no posts matched your criteria.', 'myportfolio'); ?> </h3>

			<?php endif; ?>


			</div>

		<div class="swiper-pagination"></div>
		<!-- Add Arrows -->
	 <div class="swiper-button-next"></div>
	 <div class="swiper-button-prev"></div>
	 </div>

	</div>

<!-- SWIPER END -->

</div>

<aside class="sidebar">
		<?php get_sidebar(); ?>
</aside>


<?php get_footer(); ?>
