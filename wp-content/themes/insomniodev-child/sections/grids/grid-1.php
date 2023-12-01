<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part para grid con contenido
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
    'image' => null,
    'image_left' => false,
    'align_center' => false,
    'justify_between' => false,
    'style' => 0,
    'class' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-4.svg',
];
?>

<div class="idt-grid-1 <?php if ( $configs[ 'class' ] ) echo $configs[ 'class' ]; else ''; ?> <?php echo ( $configs[ 'image_left' ] ) ? ' idt-grid-1--image-left' : ''; ?>" id="formulario">
    <div class="container">
        <div class="row<?php echo ( $configs['align_center'] ) ? ' align-items-center' : '' ?><?php echo ( $configs['justify_between'] ) ? ' justify-content-between' : '' ?> idt-grid-1__row">
            <?php if( $configs['style'] === 0 ): ?>
                <div class="col-lg-6">
                    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                        <h2 class="idt-grid-1__title"><?php echo $configs[ 'title' ];?></h2>
                    <?php endif;?>
                    <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                        <div class="idt-grid-1__content">
                            <?php echo $configs[ 'content' ];?>
                        </div>
                    <?php endif;?>
                </div>
                <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                    <div class="col-lg-6">
                        <div class="idt-grid-1__image-container">
                            <img class="idt-grid-1__image"
                                 src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                                 alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                                 width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                                 height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                                 loading="lazy">
                        </div>
                    </div>
                <?php endif;?>
            <?php else: ?>
                <div class="col-lg-5">
                    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                        <h2 class="idt-grid-1__title"><?php echo $configs[ 'title' ];?></h2>
                    <?php endif;?>
                    <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                        <div class="idt-grid-1__content">
                            <?php echo $configs[ 'content' ];?>
                        </div>
                    <?php endif;?>
                </div>
                <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                    <div class="col-lg-5">
                        <div class="idt-grid-1__image-container">
                            <img class="idt-grid-1__image"
                                 src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                                 alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                                 width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                                 height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                                 loading="lazy">
                        </div>
                    </div>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>

    <?php if ( isset( $figures[ 'figure_1' ] ) && !empty( $figures[ 'figure_1' ] ) ):?>
        <div class="idt-figure idt-figure-1">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_1' ];?>"
                 alt="forma de magro"
                 width="750"
                 height="300"
                 loading="lazy">
        </div>
    <?php endif;?>

</div>
