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
    'items' => null,
    'class' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-2.svg',
    "figure_2" => IDT_THEME_CHILD_DIR . '/assets/images/formas-3.svg',
];
?>

<div class="idt-grid-2<?php if ( $configs['class'] ) echo ' '.$configs['class']; else ''; ?>">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5">
                <div class="idt-grid-2__wrapper">
                    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                        <div class="idt-grid-2__title">
                            <h2><?php echo $configs[ 'title' ];?></h2>
                        </div>
                    <?php endif;?>

                    <div class="idt-grid-2__content">
                        <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                            <?php echo $configs[ 'content' ];?>
                        <?php endif;?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <?php if( isset( $configs['items'] ) && !empty( $configs['items'] ) ): ?>
                    <div id="idt-grid-2__carousel" class="carousel slide idt-grid-2__carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php if ( isset( $configs[ 'items' ] ) && !empty( $configs[ 'items' ] ) ):?>
                                <?php foreach ( $configs['items'] as $key => $item ) :?>
                                    <div class="carousel-item <?php echo ( $key == 0 ) ? ' active' : '' ?>" data-bs-interval="100000">
                                        <?php if ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ):?>
                                            <div class="idt-grid-2__image-container">
                                                <img class="idt-grid-2__image"
                                                     src="<?php echo $item[ 'image' ][ 'url' ];?>"
                                                     alt="<?php echo $item[ 'image' ][ 'alt' ];?>"
                                                     width="<?php echo $item[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                                                     height="<?php echo $item[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                                                     loading="lazy">
                                            </div>
                                        <?php endif;?>

                                        <?php if ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' || isset( $item[ 'content' ] ) && $item[ 'content' ] != '' || isset( $item[ 'cta' ] ) && !empty( $item[ 'cta' ] ) ):?>
                                        <div class="idt-grid-2__caption">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <?php if ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ):?>
                                                        <div class="idt-grid-2__caption-title">
                                                            <h3><?php echo $item[ 'title' ];?></h3>
                                                        </div>
                                                    <?php endif;?>
                                                </div>
                                                <div class="col-10 col-lg-7">
                                                    <?php if ( isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ):?>
                                                        <div class="idt-grid-2__caption-description">
                                                            <p><?php echo $item[ 'content' ];?></p>
                                                        </div>
                                                    <?php endif;?>
                                                </div>
                                                <div class="col-2">
                                                    <?php if ( isset( $item[ 'cta' ] ) && !empty( $item[ 'cta' ] ) ):?>
                                                        <div class="idt-grid-2__caption-cta">
                                                            <a class="idt-button-arrow"
                                                               href="<?php echo $item[ 'cta' ][ 'url' ];?>"
                                                               target="<?php echo ( isset( $item['cta']['target'] ) && $item['cta']['target'] != '' ) ? $item['cta']['target'] : '_self';?>">
                                                                <i class="fas fa-chevron-right"></i>
                                                            </a>
                                                        </div>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;?>
                        </div>
                        <?php if(count($configs['items']) > 1): ?>
                            <div class="idt-grid-2__controller">
                                <button class="carousel-control-prev" type="button" data-bs-target="#idt-grid-2__carousel" data-bs-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <?php if(count($configs['items']) < 4): ?>
                                    <div class="carousel-indicators">
                                        <?php foreach ( $configs['items'] as $key => $item ): ?>
                                            <button type="button"
                                                    data-bs-target="#idt-grid-2__carousel"
                                                    data-bs-slide-to="<?php echo $key ?>"
                                                    class="carousel-indicators__item <?php echo ( $key == 0 ) ? 'active' : '' ?>"
                                                    aria-current="<?php echo ( $key == 0 ) ? 'true' : 'false' ?>"
                                                    aria-label="Slide <?php echo $key++ ?>"></button>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>

                                <button class="carousel-control-next" type="button" data-bs-target="#idt-grid-2__carousel" data-bs-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>

    <?php if ( isset( $figures[ 'figure_1' ] ) && !empty( $figures[ 'figure_1' ] ) ):?>
        <div class="idt-figure idt-figure-1">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_1' ];?>"
                 alt="forma de magro"
                 width="300"
                 height="300"
                 loading="lazy">
        </div>
    <?php endif;?>

    <?php if ( isset( $figures[ 'figure_2' ] ) && !empty( $figures[ 'figure_2' ] ) ):?>
        <div class="idt-figure idt-figure-2">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_2' ];?>"
                 alt="forma de magro"
                 width="430"
                 height="480"
                 loading="lazy">
        </div>
    <?php endif;?>
</div>
