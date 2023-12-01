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
    'title' => null,
    'content' => null,
    'cta' => null,
    'items' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-productos-1.svg',
];
?>

<div class="idt-grid-5">
    <?php if ( isset( $figures[ 'figure_1' ] ) && !empty( $figures[ 'figure_1' ] ) ):?>
        <div class="idt-figure idt-grid-5__figure">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_1' ];?>"
                 alt="figura magro"
                 width="300"
                 height="300"
                 loading="lazy">
        </div>
    <?php endif;?>

    <div class="container">
        <div class="idt-grid-5__wrapper">
            <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                <div class="idt-grid-5__title">
                    <h2 class="idt-title-2"><?php echo $configs[ 'title' ];?></h2>
                </div>
            <?php endif;?>

            <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                <div class="idt-grid-5__content">
                    <p><?php echo $configs[ 'content' ];?></p>
                </div>
            <?php endif;?>

            <?php if ( isset( $configs[ 'cta' ] ) && !empty( $configs[ 'cta' ] ) ):?>
                <div class="idt-grid-5__cta">
                    <a class="idt-button"
                       href="<?php echo $configs[ 'cta' ]['url'];?>"
                       target="<?php echo ( $configs[ 'cta' ]['target'] ) ? $configs[ 'cta' ]['target'] : '_self'; ?>">
                        <?php echo $configs[ 'cta' ]['title'];?>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            <?php endif;?>
        </div>

        <?php if( isset( $configs['items'] ) && !empty( $configs['items'] ) ): ?>
            <div class="idt-grid-5__section">
                <div class="row">
                    <?php if ( isset( $configs[ 'items' ] ) && !empty( $configs[ 'items' ] ) ):?>
                        <?php foreach ( $configs['items'] as $key => $item ) :?>
                            <div class="col-lg-4">
                                <?php $args = [
                                    'title' => ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ) ? $item[ 'title' ] : null,
                                    'category' => ( isset( $item[ 'category' ] ) && !empty( $item[ 'category' ] ) ) ? $item[ 'category' ] : null,
                                    'cta' => ( isset( $item[ 'cta' ] ) && !empty( $item[ 'cta' ] ) ) ? $item[ 'cta' ] : null,
                                    'image' => ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ) ? $item[ 'image' ] : null,
                                ] ?>
                                <?php get_template_part('sections/cards/card', '6',  $args) ?>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        <?php endif;?>
    </div>
</div>