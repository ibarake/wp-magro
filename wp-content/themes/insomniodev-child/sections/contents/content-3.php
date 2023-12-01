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
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-5.svg',
];
?>

<div class="idt-content-3">
    <div class="idt-content-3__wrapper">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                        <div class="idt-content-3__title">
                            <h2><?php echo $configs[ 'title' ];?></h2>
                        </div>
                    <?php endif;?>
                </div>

                <div class="col-lg-7">
                    <div class="idt-content-3__box">
                        <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                            <?php echo $configs[ 'content' ];?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if ( isset( $figures[ 'figure_1' ] ) && !empty( $figures[ 'figure_1' ] ) ):?>
        <div class="idt-figure idt-figure-1">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_1' ];?>"
                 alt="forma de magro"
                 width="400"
                 height="300"
                 loading="lazy">
        </div>
    <?php endif;?>
</div>
