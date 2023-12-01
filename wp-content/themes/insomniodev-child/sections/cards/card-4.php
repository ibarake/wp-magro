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
    'location' => null,
    'phone' => null,
    'email' => null,
    'image' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>
<div class="idt-card-4">
    <div class="row">
        <div class="col-lg-3">
            <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                <div class="idt-card-4__image-container">
                    <img class="idt-card-4__image"
                         src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                         alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                         width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                         height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                         loading="lazy">
                </div>
            <?php endif;?>
        </div>
        
        <div class="col-lg-9">
            <div class="idt-card-4__caption">
                <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                    <div class="idt-card-4__title">
                        <h3><?php echo $configs[ 'title' ];?></h3>
                    </div>
                <?php endif;?>

                <?php if ( isset( $configs[ 'location' ] ) && $configs[ 'location' ] != '' ):?>
                    <div class="idt-card-4__location">
                        <h4><?php echo $configs[ 'location' ];?></h4>
                    </div>
                <?php endif;?>

                <?php if ( isset( $configs[ 'phone' ] ) && !empty( $configs[ 'phone' ] ) ):?>
                    <div class="idt-card-4__cta cta-1">
                        <p>Celular</p>
                        <a href="<?php echo $configs[ 'phone' ]['url'];?>"
                           target="<?php echo ( $configs[ 'phone' ]['target'] ) ? $configs[ 'phone' ]['target'] : '_self'; ?>">
                            <?php echo $configs[ 'phone' ]['title'];?>
                        </a>
                    </div>
                <?php endif;?>

                <?php if ( isset( $configs[ 'email' ] ) && !empty( $configs[ 'email' ] ) ):?>
                    <div class="idt-card-4__cta cta-2">
                        <p>Email</p>
                        <a href="<?php echo $configs[ 'email' ]['url'];?>"
                           target="<?php echo ( $configs[ 'email' ]['target'] ) ? $configs[ 'email' ]['target'] : '_self'; ?>">
                            <?php echo $configs[ 'email' ]['title'];?>
                        </a>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
