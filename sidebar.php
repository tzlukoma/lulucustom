<div id="side" class="sidebar">
<li id="search" class="widget-container widget_search">
	<?php get_search_form(); ?>
</li>
<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
	</ul>
<?php endif; ?>
</div>


