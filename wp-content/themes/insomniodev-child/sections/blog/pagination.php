<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template para el paginador de los posts
 * @package WordPress
 * @subpackage latindev
 * @since 1.0
 * @version 1.0
 */

global $wp_query;
$total = $wp_query->max_num_pages;
if ( $total > 1 )  {

	$current_page = get_query_var( 'paged' );

	if ( !$current_page ) {
		$current_page = 1;
	}

	$format = empty( get_option( 'permalink_structure' ) ) ? '&page=%#%' : 'page/%#%/';
	?>
<div class="idt-pagination">
    <?php
		echo paginate_links( [
			'base' => get_pagenum_link( 1 ) . '%_%',
			'format' => $format,
			'current' => $current_page,
			'prev_next' => True,
			'prev_text' => __( '<img class="idt-btn-arrow" src="'.IDT_THEME_CHILD_DIR.'/assets/images/flecha-blanca-derecha.svg" alt="arrow right"width="42" height="42" loading="lazy" />' ),
			'next_text' => __( '<img class="idt-btn-arrow" src="'.IDT_THEME_CHILD_DIR.'/assets/images/flecha-blanca-derecha.svg" alt="arrow left"width="42" height="42" loading="lazy" />' ),
			'total' => $total,
			'mid_size' => 4,
			'type' => 'list'
		] );
		?>
</div>
<?php
}