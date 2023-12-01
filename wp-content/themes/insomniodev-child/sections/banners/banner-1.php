<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de un banner principal
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
    'images' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>

<div class="idt-banner-1">
    <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
        <div class="idt-banner-1__image-container">
            <img class="idt-banner-1__image"
                 src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                 alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                 width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                 height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                 loading="lazy">
        </div>
    <?php endif;?>
    <?php if ( isset( $configs[ 'images' ] ) && !empty( $configs[ 'images' ] ) ):?>
        <div class="idt-banner-1__image-container">
            <picture>
                <?php if( isset( $configs['images']['mobile'] ) && !empty( $configs['images']['mobile'] ) ): ?>
                    <source media="( max-width: 567px )"
                            srcset="<?php echo $configs['images']['mobile']['url'] ?>">
                <?php endif; ?>
                <?php if( isset( $configs['images']['landscape'] ) && !empty( $configs['images']['landscape'] ) ): ?>
                    <source media="( max-width: 767px )"
                            srcset="<?php echo $configs['images']['landscape']['url'] ?>">
                <?php endif; ?>
                <?php if( isset( $configs['images']['tablet'] ) && !empty( $configs['images']['tablet'] ) ): ?>
                    <source media="( max-width: 991px )"
                            srcset="<?php echo $configs['images']['tablet']['url'] ?>">
                <?php endif; ?>

                <?php if( isset( $configs['images']['desktop'] ) && !empty( $configs['images']['desktop'] ) ): ?>
                    <source media="( min-width: 992px )"
                            srcset="<?php echo $configs['images']['desktop']['url'] ?>">
                    <img class="idt-banner-1__image"
                         src="<?php echo $configs['images']['desktop']['url'] ?>"
                         alt="<?php echo $configs['images']['desktop']['alt'] ?>"
                         width="<?php echo $configs['images']['desktop']['sizes']['large-width']; ?>"
                         height="<?php echo $configs['images']['desktop']['sizes']['large-height']; ?>"
                         loading="lazy">
                <?php endif; ?>
            </picture>
        </div>
    <?php endif;?>

    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ||
        isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
        <div class="idt-banner-1__caption">
            <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                <div class="idt-banner-1__title">
                    <h1><?php echo $configs[ 'title' ];?></h1>
                </div>
            <?php endif;?>

            <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                <div class="idt-banner-1__description">
                    <?php echo $configs[ 'content' ];?>
                </div>
            <?php endif;?>

            <?php if ( isset( $configs[ 'cta' ] ) && !empty( $configs[ 'cta' ] ) ):?>
                <div class="idt-carousel-1__cta">
                    <a class="idt-button"
                       href="<?php echo $configs[ 'cta' ][ 'url' ];?>"
                       target="<?php echo ( isset( $configs['cta']['target'] ) && $configs['cta']['target'] != '' ) ? $configs['cta']['target'] : '_self';?>">
                        <?php echo $configs[ 'cta' ][ 'title' ];?>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            <?php endif;?>
        </div>
    <?php endif;?>

    <div class="idt-icon-scroll"></div>

    <div class="idt-figure">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="300" viewBox="0 0 300 300">
            <defs>
                <clipPath id="clip-path">
                    <rect id="Rectángulo_3240" data-name="Rectángulo 3240" width="300" height="300" transform="translate(0 441)" fill="#fff" stroke="#707070" stroke-width="1"/>
                </clipPath>
            </defs>
            <g id="formas-home-1" transform="translate(0 -441)" clip-path="url(#clip-path)">
                <g id="Grupo_9632" data-name="Grupo 9632" transform="translate(-456.598 198.074)">
                    <path id="Trazado_12870" data-name="Trazado 12870" d="M25.98,269.611A25.979,25.979,0,0,1,0,243.635C0,109.293,109.289,0,243.626,0A242.952,242.952,0,0,1,325.8,14.212a25.978,25.978,0,0,1-17.519,48.914,191.1,191.1,0,0,0-64.652-11.17c-105.686,0-191.669,85.987-191.669,191.678A25.981,25.981,0,0,1,25.98,269.611" transform="translate(557.418 505.755) rotate(-158)" fill="#85bd0c"/>
                    <path id="Trazado_12871" data-name="Trazado 12871" d="M34.013,471.082A34.016,34.016,0,0,1,0,437.069C0,196.067,196.061,0,437.057,0A435.173,435.173,0,0,1,595.1,29.464a34.015,34.015,0,1,1-24.614,63.422A367.445,367.445,0,0,0,437.057,68.032c-203.48,0-369.03,165.556-369.03,369.037a34.015,34.015,0,0,1-34.013,34.013" transform="matrix(-0.883, -0.469, 0.469, -0.883, 544.622, 705.521)" fill="#ff682c"/>
                </g>
            </g>
        </svg>
    </div>
</div>
