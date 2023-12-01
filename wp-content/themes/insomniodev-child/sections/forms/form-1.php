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
    'shortcode' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>

<div class="idt-form-1">
    <div class="container">
        <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
            <div class="idt-form-1__title">
                <h2><?php echo $configs[ 'title' ];?></h2>
            </div>
        <?php endif;?>

        <div class="idt-form-1__form">
            <?php if ( isset( $configs[ 'shortcode' ] ) && $configs[ 'shortcode' ] != '' ):?>
                <?php echo do_shortcode($configs[ 'shortcode' ]);?>
            <?php endif;?>
        </div>
    </div>
</div>
