<?php
if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Clase encargada de registra los tipos de post y taxonomias del tema hijo
 */
class child_taxonomies {
    public function register_post_and_tax() {

        register_post_type(
            'catalog',
            [
                'description' => __( 'Productos', 'insomniodev' ),
                'labels' => [
                    'name' => __( 'Productos', 'insomniodev' ),
                    'singular_name' => __( 'Producto', 'insomniodev' ),
                    'add_new' => __( 'Nuevo Producto', 'insomniodev' ),
                    'add_new_item' => __( 'Nuevo Producto', 'insomniodev' ),
                    'edit_item' => __( 'Editar Producto', 'insomniodev' ),
                    'search_items' => __( 'Buscar Producto', 'insomniodev' ),
                ],
                'public' => true,
                'has_archive' => true,
                'show_in_menu' => true,
                'show_ui' => true,
                'supports' => [
                    'title',
                    'editor',
                    'thumbnail',
                    'category',
                    'tag'
                ],
                'menu_icon' => 'dashicons-products',
                'taxonomies' => [ 'catalog_category' ],
                'rewrite' => [ 'slug' => __( 'catalogos', 'insomniodev' ) ]
            ]
        );

        register_taxonomy(
            'catalog_category',
            [
                'catalog'
            ],
            [
                'labels' => [
                    'name' => __( 'Categorías de productos', 'insomniodev' ),
                    'singular_name' => __( 'Categoría de productos', 'insomniodev' ),
                    'add_new' => __( 'Nueva categoría de producto', 'insomniodev' ),
                    'add_new_item' => __( 'Nueva categoría de producto', 'insomniodev' ),
                    'edit_item' => __( 'Editar categoría de producto', 'insomniodev' ),
                    'search_items' => __( 'Buscar categoría de producto', 'insomniodev' ),
                ],
                'show_in_menu' => true,
                'show-ui' => true,
                'show_admin_column' => true,
                'query_var'         => true,
                'rewrite' => [ 'slug' => __( 'categoria-productos', 'insomniodev' ) ],
                'hierarchical'      =>  true,
            ]
        );

    }
}
