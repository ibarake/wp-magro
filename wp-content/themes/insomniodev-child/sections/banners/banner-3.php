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
    'cta' => null,
    'image' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>

<div class="idt-banner-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="idt-banner-3__box">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                                <div class="idt-banner-3__image-container">
                                    <img class="idt-banner-3__image"
                                         src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                                         alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                                         width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                                         height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                                         loading="lazy">
                                </div>
                            <?php endif;?>
                        </div>

                        <div class="col-lg-8">
                            <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ||
                                isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                                <div class="idt-banner-3__caption">
                                    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                                        <div class="idt-banner-3__title">
                                            <h2><?php echo $configs[ 'title' ];?></h2>
                                        </div>
                                    <?php endif;?>

                                    <?php if ( isset( $configs[ 'cta' ] ) && !empty( $configs[ 'cta' ] ) ):?>
                                        <div class="idt-carousel-1__cta">
                                            <a class="idt-button idt-button--white"
                                               href="<?php echo $configs[ 'cta' ][ 'url' ];?>"
                                               target="<?php echo ( isset( $configs['cta']['target'] ) && $configs['cta']['target'] != '' ) ? $configs['cta']['target'] : '_self';?>">
                                                <?php echo $configs[ 'cta' ][ 'title' ];?>
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    <?php endif;?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
