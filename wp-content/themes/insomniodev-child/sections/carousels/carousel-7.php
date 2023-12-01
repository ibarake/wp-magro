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
    "title" => null,
    "items" => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}

$config_carousel = [
    'slidesToShow' => 4,
    'slidesToScroll' => 4,
    'centerMode' => true,
    'centerPadding' => '0',
    'autoplay' => true,
    'autoplaySpeed' => 3000,
    'arrows' => true,
    'dots' => false,
    'appendArrows' => '.slide-arrow',
    'responsive' => [
        [
            'breakpoint' => 1199,
            'settings' => [
                'slidesToShow' => 3,
                'slidesToScroll' => 3,
            ],
        ],
        [
            'breakpoint' => 991,
            'settings' => [
                'slidesToShow' => 1,
                'slidesToScroll' => 1,
            ],
        ],
    ]
];
$config_carousel = json_encode( $config_carousel );
?>


<div class="idt-carousel-7">
    <div class="container">
        <?php if (isset($configs['title']) && $configs['title'] != '') : ?>
            <h2 class="idt-carousel-7__title idt-title-2 text-center"><?php echo $configs['title'] ?></h2>
        <?php endif; ?>

        <div class="idt-carousel-7__wrapper idt-slick-container">
            <div class="idt-slick-carousel" data-config='<?php echo $config_carousel ?>'>
                <?php if (isset($configs['items']) && !empty($configs['items'])) : ?>
                    <?php foreach ($configs['items'] as $item) : ?>
                        <?php $args = [
                            'title' => ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ) ? $item[ 'title' ] : null,
                            'category' => ( isset( $item[ 'category' ] ) && !empty( $item[ 'category' ] ) ) ? $item[ 'category' ] : null,
                            'cta' => ( isset( $item[ 'cta' ] ) && !empty( $item[ 'cta' ] ) ) ? $item[ 'cta' ] : null,
                            'image' => ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ) ? $item[ 'image' ] : null,
                        ] ?>
                        <?php get_template_part('sections/cards/card', '7',  $args) ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="slide-arrow-global slide-arrow"></div>
    </div>
</div>
