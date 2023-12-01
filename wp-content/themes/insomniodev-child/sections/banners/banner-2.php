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
    'shortcode' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-6.svg',
    "figure_2" => IDT_THEME_CHILD_DIR . '/assets/images/formas-8.svg',
];
?>

<div class="idt-banner-2">
    <?php if ( isset( $figures[ 'figure_2' ] ) && !empty( $figures[ 'figure_2' ] ) ):?>
        <div class="idt-figure idt-figure-2">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_2' ];?>"
                 alt="forma de magro"
                 width="300"
                 height="300"
                 loading="lazy">
        </div>
    <?php endif;?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ||
                    isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                    <div class="idt-banner-2__caption">
                        <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                            <div class="idt-banner-2__title">
                                <h1 class="idt-title"><?php echo $configs[ 'title' ];?></h1>
                            </div>
                        <?php endif;?>

                        <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                            <div class="idt-banner-2__content">
                                <?php echo $configs[ 'content' ];?>
                            </div>
                        <?php endif;?>
                    </div>
                <?php endif;?>
            </div>

            <div class="col-lg-6 col-xl-5">
                <?php if ( isset( $configs[ 'shortcode' ] ) && $configs[ 'shortcode' ] != '' ):?>
                    <div class="idt-banner-2__form">
                        <?php echo do_shortcode($configs[ 'shortcode' ]);?>
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
                 width="350"
                 height="300"
                 loading="lazy">
        </div>
    <?php endif;?>
</div>
