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
    'sub_title' => null,
    'content' => null,
    'image' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}

?>

<div class="idt-grid-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="idt-grid-3__wrapper">
                    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                        <h1 class="idt-grid-3__title idt-title idt-title--big idt-title--white"><?php echo $configs[ 'title' ];?></h1>
                    <?php endif;?>
                    <?php if ( isset( $configs[ 'sub_title' ] ) && $configs[ 'sub_title' ] != '' ):?>
                        <h2 class="idt-grid-3__sub-title idt-title-2 idt-title-2--white"><?php echo $configs[ 'sub_title' ];?></h2>
                    <?php endif;?>
                    <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                        <div class="idt-grid-3__content idt-scroll-1"><?php echo $configs[ 'content' ];?></div>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                    <div class="idt-grid-3__image-container">
                        <img class="idt-grid-3__image"
                             src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                             alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                             width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                             height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                             loading="lazy">
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
