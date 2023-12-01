<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de un carousel
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
    'items' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}

$config_carousel = [
    'slidesToShow' => 2,
    'slidesToScroll' => 1,
    'centerMode' => false,
    'autoplay' => true,
    'autoplaySpeed' => 3000,
    'arrows' => true,
    'dots' => false,
    'appendArrows' => '.slide-arrow',
    'responsive' => [
        [
            'breakpoint' => 767,
            'settings' => [
                'slidesToShow' => 1,
                'slidesToScroll' => 1,
            ],
        ],
    ]
];
$config_carousel = json_encode( $config_carousel );
?>

<div class="idt-carousel-2">
    <div class="idt-container">
        <div class="idt-carousel-2__row">
            <div class="idt-carousel-2__col-left">
                <?php if (isset($configs['title']) && $configs['title'] != '') : ?>
                    <h2 class="idt-carousel-2__title idt-title"><?php echo $configs['title'] ?></h2>
                <?php endif; ?>

                <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                    <div class="idt-carousel-2__content">
                        <?php echo $configs[ 'content' ];?>
                    </div>
                <?php endif;?>

                <?php if ( isset( $configs[ 'cta' ] ) && !empty( $configs[ 'cta' ] ) ):?>
                    <div class="idt-carousel-2__cta">
                        <a class="idt-button"
                           href="<?php echo $configs[ 'cta' ][ 'url' ];?>"
                           target="<?php echo ( isset( $configs['cta']['target'] ) && $configs['cta']['target'] != '' ) ? $configs['cta']['target'] : '_self';?>">
                            <?php echo $configs[ 'cta' ][ 'title' ];?>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                <?php endif;?>
            </div>

            <div class="idt-carousel-2__col-right">
                <div class="idt-carousel-2__wrapper idt-slick-container">
                    <div class="idt-slick-carousel" data-config='<?php echo $config_carousel ?>' id="idt-carousel-arrow">
                        <?php if (isset($configs['items']) && !empty($configs['items'])) : ?>
                            <?php foreach ($configs['items'] as $item) : ?>
                                <?php $args = [
                                    'title' => ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ) ? $item[ 'title' ] : null,
                                    'content' => ( isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ) ? $item[ 'content' ] : null,
                                    'image' => ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ) ? $item[ 'image' ] : null,
                                ] ?>
                                <?php get_template_part('sections/cards/card', '1',  $args) ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="slide-arrow-global slide-arrow">
                </div>
            </div>
        </div>
    </div>
</div>
