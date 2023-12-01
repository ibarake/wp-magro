<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de un carrusel de contenido informativo
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Insomnio DEV Child
 * @since 1.0
 * @version 1.0
 */
$configs = [
    'items' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>
<div class="idt-category-products">
    <?php if (isset($configs['items']) && !empty($configs['items'])) : ?>
        <?php foreach ($configs['items'] as $item) : ?>
            <div class="idt-category-products__section">
                <?php $args = [
                    'title' => ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ) ? $item[ 'title' ] : null,
                    'content' => ( isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ) ? $item[ 'content' ] : null,
                    'image' => ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ) ? $item[ 'image' ] : null,
                    'price' => ( isset( $item[ 'price' ] ) && $item[ 'price' ] != '' ) ? $item[ 'price' ] : null,
                    'cta' => ( isset( $item[ 'cta' ] ) && !empty( $item[ 'cta' ] ) ) ? $item[ 'cta' ] : null,
                    'title_tab' => ( isset( $item[ 'title_tab' ] ) && $item[ 'title_tab' ] != '' ) ? $item[ 'title_tab' ] : null,
                    'loop_tabs' => ( isset( $item[ 'loop_tabs' ] ) && !empty( $item[ 'loop_tabs' ] ) ) ? $item[ 'loop_tabs' ] : null,
                    'title_documents' => ( isset( $item[ 'title_documents' ] ) && $item[ 'title_documents' ] != '' ) ? $item[ 'title_documents' ] : null,
                    'loop_documents' => ( isset( $item[ 'loop_documents' ] ) && !empty( $item[ 'loop_documents' ] ) ) ? $item[ 'loop_documents' ] : null,
                    'loop_specifications' => ( isset( $item[ 'loop_specifications' ] ) && !empty( $item[ 'loop_specifications' ] ) ) ? $item[ 'loop_specifications' ] : null,
                ] ?>
                <?php get_template_part('sections/category-products/product', 'detail',  $args) ?>

                <?php get_template_part( 'sections/tabs/tab', '2', $args );?>

                <?php get_template_part( 'sections/category-products/related', 'documents', $args );?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
