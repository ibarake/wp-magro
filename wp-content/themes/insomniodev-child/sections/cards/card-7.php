<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de contenido informativo
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
    'category' => null,
    'cta' => null,
    'image' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>

<div class="idt-card-7">
    <div class="idt-card-7__box">
        <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
            <div class="idt-card-7__image-container">
                <img class="idt-card-7__image"
                     src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                     alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                     width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                     height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                     loading="lazy">
            </div>
        <?php endif;?>

        <div class="idt-card-7__caption">
            <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                <div class="idt-card-7__title">
                    <h3><a href="<?php echo $configs[ 'cta' ];?>"><?php echo $configs['title'];?></a></h3>
                </div>
            <?php endif;?>
            <?php if ( isset( $configs[ 'category' ] ) && !empty( $configs[ 'category' ] ) ):?>
                <div class="idt-card-7__title">
                    <h3><a href="<?php echo $configs[ 'cta' ];?>"><?php echo ($configs[ 'category' ][0]->name);?></a></h3>
                </div>
            <?php endif;?>

            <?php if ( isset( $configs[ 'cta' ] ) && !empty( $configs[ 'cta' ] ) ):?>
                <div class="idt-card-7__cta">
                    <a class="idt-button"
                       href="<?php echo $configs[ 'cta' ];?>">
                        <?php _e('Conoce más', 'insomniodev-child');?>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
