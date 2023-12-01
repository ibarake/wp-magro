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
    'content' => null,
    'image' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>

<div class="idt-card-2">
    <div class="idt-card-2__wrapper">
        <div class="idt-card-2__row">
            <div class="idt-card-2__col-left">
                <div class="idt-card-2__caption">
                    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                        <div class="idt-card-2__title">
                            <h3><?php echo $configs[ 'title' ];?></h3>
                        </div>
                    <?php endif;?>

                    <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                        <div class="idt-card-2__description">
                            <?php echo $configs[ 'content' ];?>
                        </div>
                    <?php endif;?>
                </div>
            </div>

            <div class="idt-card-2__col-right">
                <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                    <div class="idt-card-2__image-container">
                        <img class="idt-card-2__image"
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
