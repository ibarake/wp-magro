<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de card para contenido número 3
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
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>
<div class="idt-card-3<?php echo ( $configs[ 'image_left' ] ) ? ' idt-card-3--image-left' : ''; ?>">
    <div class="idt-card-3__wrapper">
        <div class="idt-card-3__caption">
            <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                <div class="idt-card-3__title">
                    <h3><?php echo $configs[ 'title' ];?></h3>
                </div>
            <?php endif;?>

            <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                <div class="idt-card-3__content">
                    <?php echo $configs[ 'content' ];?>
                </div>
            <?php endif;?>
            <?php if ( isset( $configs[ 'cta' ] ) && !empty( $configs[ 'cta' ] ) ):?>
                <div class="idt-card-3__cta">
                    <a class="idt-button"
                       href="<?php echo $configs[ 'cta' ]['url'];?>"
                       target="<?php echo ( $configs[ 'cta' ]['target'] ) ? $configs[ 'cta' ]['target'] : '_self'; ?>"><?php echo $configs[ 'cta' ]['title'];?></a>
                </div>
            <?php endif;?>
        </div>
        <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
            <div class="idt-card-3__image-container">
                <img class="idt-card-3__image"
                     src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                     alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                     width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                     height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                     loading="lazy">
            </div>
        <?php endif;?>
    </div>
</div>
