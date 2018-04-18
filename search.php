<?php
/**
 * The template for displaying search results pages.
 *
 * @package TechEngage
 */

get_header(); 
?>
<div class="clearfix"></div>
<main id="content">
  <div class="container">
    <div class="row">
      <div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-lg-12 col-md-12"; } else { echo "col-lg-9 col-md-9"; } ?>">
        <div class="content-container">
	        <div class="row">
		        <?php 
					global $i;
					if ( have_posts() ) : ?>
					<h2 class="search-result">
						<?php printf( esc_html__( "Search Results for: %s", 'techengage' ), '<span>' . get_search_query() . '</span>' );?>	
					</h2>
					<?php while ( have_posts() ) : the_post();  
					 get_template_part('content','');
					 endwhile; else : ?>
					<h2><?php esc_html_e('Not Found','techengage'); ?></h2>
					<div class="">
					<p><?php esc_html_e('Sorry, Do Not match.','techengage' ); ?>
					</p>
					<?php get_search_form(); ?>
					</div><!-- .blog_con_mn -->
					<?php endif; ?>
					<div class="col-lg-12 text-center">
			          	<?php
						//Previous / next page navigation
						the_posts_pagination( array(
						'prev_text'          => '<i class="fa fa-long-arrow-left"></i>',
						'next_text'          => '<i class="fa fa-long-arrow-right"></i>',
						'screen_reader_text' => ' ',
						) );
					?>
	         		</div>
	         </div>
     	</div>
      </div>
	  <aside class="col-md-3 col-lg-3">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>
<?php
get_footer();
?>