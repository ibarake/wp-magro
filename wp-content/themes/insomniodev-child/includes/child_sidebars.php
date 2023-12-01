<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/*
 * Clase encargada de registrar los widgets del tema hijo
 * @version 0.0.1
*/
class ld_child_sidebars {

	/**
	 * Constructor de la clase
	 */
	public function __construct() {
		$this->ldRegisterSidebars();
	}

	/**
	 * Registra los sidebars iniciales del tema
	 */
	function ldRegisterSidebars() {

		register_sidebar(
			[
				'name'          => __( 'Footer', 'insomniodev' ) . ' 5',
				'id'            => 'idt-sidebar-footer-5',
				'description'   => __( 'Add widgets here to appear in your footer', 'insomniodev' ),
				'before_widget' => '<section class="idt-widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="idt-widget-title">',
				'after_title'   => '</h2>'
			]
		);

        register_sidebar(
            [
                'name'          => __( 'Blog Newsletter', 'insomniodev' ),
                'id'            => 'idt-sidebar-footer-6',
                'description'   => __( 'Add widgets here to appear in your footer', 'insomniodev' ),
                'before_widget' => '<section class="idt-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="idt-widget-title">',
                'after_title'   => '</h2>'
            ]
        );

        register_sidebar(
            [
                'name'          => __( 'Imagen Isotipo', 'insomniodev' ),
                'id'            => 'idt-sidebar-footer-7',
                'description'   => __( 'Add widgets here to appear in your footer', 'insomniodev' ),
                'before_widget' => '<section class="idt-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="idt-widget-title">',
                'after_title'   => '</h2>'
            ]
        );

        register_sidebar(
            [
                'name'          => __( 'Imagen de Fondo', 'insomniodev' ),
                'id'            => 'idt-sidebar-footer-8',
                'description'   => __( 'Add widgets here to appear in your footer', 'insomniodev' ),
                'before_widget' => '<section class="idt-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="idt-widget-title">',
                'after_title'   => '</h2>'
            ]
        );

	}
}
