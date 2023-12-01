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
    'cta' => null,
    'image' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/icon-arrow-product.svg',
];
?>

<div class="idt-card-6">
    <div class="idt-card-6__row">
        <div class="idt-card-6__col-left">
            <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) && $configs[ 'image' ][ 'url' ] != '' ):?>
                <div class="idt-card-6__image-container">
                    <img class="idt-card-6__image"
                         src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                         alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                         width="<?php echo $configs[ 'image' ][ 'width' ];?>"
                         height="<?php echo $configs[ 'image' ][ 'height' ];?>"
                         loading="lazy">
                </div>
            <?php endif;?>
        </div>
        
        <div class="idt-card-6__col-right">
            <div class="idt-card-6__caption">
                <?php if ( isset( $configs[ 'title' ] ) && !empty( $configs[ 'title' ] ) ):?>
                    <div class="idt-card-6__category">
                        <h3><a href="#<?php /*echo $configs[ 'cta' ];*/?>"><?php echo $configs['title'];?></a></h3>
                    </div>
                <?php endif;?>

       <!--         <?php /*if ( isset( $configs[ 'cta' ] ) && !empty( $configs[ 'cta' ] ) ):*/?>
                    <div class="idt-card-6__cta">
                        <a class="idt-card-6__cta-item"
                           href="<?php /*echo $configs[ 'cta' ];*/?>">
                            <?php /*_e('Read more', 'insomniodev');*/?>
                            <div class="idt-figure">
                            </div>
                        </a>
                    </div>
                --><?php /*endif;*/?>
            </div>
        </div>
    </div>
</div>
