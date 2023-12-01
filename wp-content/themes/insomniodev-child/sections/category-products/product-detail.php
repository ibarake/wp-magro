<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura del detalle de post del producto
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
    'image' => null,
    'price' => null,
    'cta' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-blancas.svg',
    "figure_2" => IDT_THEME_CHILD_DIR . '/assets/images/formas-blancas-1.svg',
];
?>

<section class="idt-product-detail">
    <?php if ( isset( $figures[ 'figure_1' ] ) && !empty( $figures[ 'figure_1' ] ) ):?>
        <div class="idt-figure idt-product-detail__figure">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_1' ];?>"@
                 alt="figura magro"
                 width="492"
                 height="442"
                 loading="lazy">
        </div>
    <?php endif;?>

    <?php if ( isset( $figures[ 'figure_2' ] ) && !empty( $figures[ 'figure_2' ] ) ):?>
        <div class="idt-figure idt-product-detail__figure-2">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_2' ];?>"@
                 alt="figura magro"
                 width="200"
                 height="200"
                 loading="lazy">
        </div>
    <?php endif;?>

    <div class="idt-product-detail__section">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-5">
                    <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                        <div class="idt-product-detail__image-container">
                            <img class="idt-product-detail__image"
                                 src="<?php echo $configs[ 'image' ][ 'src' ];?>"
                                 alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                                 width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                                 height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                                 loading="lazy">
                        </div>
                    <?php endif;?>
                </div>

                <div class="col-lg-5">
                    <div class="idt-product-detail__wrapper">
                        <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                            <h1 class="idt-product-detail__title">
                                <?php echo $configs[ 'title' ];?>
                            </h1>
                        <?php endif;?>

                        <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                            <div class="idt-product-detail__content">
                                <?php echo $configs[ 'content' ];?>
                            </div>
                        <?php endif;?>

                        <?php if ( isset( $configs[ 'price' ] ) && $configs[ 'price' ] != '' ):?>
                            <div class="idt-product-detail__price">
                                <p><?php echo $configs[ 'price' ];?> <span class="idt-product-detail__unid">Unid.</span></p>
                            </div>
                        <?php endif;?>

                        <?php if ( isset( $configs[ 'cta' ] ) && !empty( $configs[ 'cta' ] ) ):?>
                            <div class="idt-product-detail__cta">
                                <a class="idt-button"
                                   href="<?php echo $configs[ 'cta' ]['url'];?>"
                                   target="<?php echo ( $configs[ 'cta' ]['target'] ) ? $configs[ 'cta' ]['target'] : '_self'; ?>">
                                    <?php echo $configs[ 'cta' ]['title'];?>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
