<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package techengage
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div id="sidebar-right" class="techengage-sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside><!-- #secondary -->