<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/*
 * Clase encargada del manejo de las peticiones ajax del del tema hijo
 * @version 0.0.1
*/
class ld_child_ajax_handler {

	/*
	 * Imprime una lista de tiendas en formato HTML
	 * @version 0.0.1
	*/
	public static function filter_stores() {
		$data = file_get_contents("php://input");

		$response = [
			'message' => '',
			'errors' => [],
			'status' => 0
		];

		if ( isset( $data ) ) {
			$data = json_decode( $data );
			$args = [
				'post_type' => 'store',
				'order' => 'ASC',
				'orderby' => 'ASC',
				'post_status' => 'publish',
				'posts_per_page' => 50,
				'paged' => (int)$data->page,
				'meta_query' => [],
			];

			if ( $data->name != '' ) {
				$args[ 'meta_query' ][] = [
					'key'     => 'address_location',
					'value'   => $data->name,
					'compare' => 'LIKE',
				];
			}

			if ( $data->cat > 0 ) {
				$args[ 'cat' ] = (int)$data->cat;
			}

			$stores = new WP_Query( $args );

			if ( $stores->have_posts() ) {

				ob_start();
				while( $stores->have_posts() ): $stores->the_post();
					get_template_part( 'sections/landingpage/location', 'card' );
				endwhile; wp_reset_query();

				$response[ 'message' ] = ob_get_clean();
				$response[ 'status' ] = 1;

			} else {
				$response[ 'errors' ][] = 'No se encontaron resultados para la busqueda';
			}

		}

		echo json_encode( $response );
		wp_die();

	}

}
