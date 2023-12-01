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
    'slidesToShow' => 1,
    'centerMode' => true,
    'autoplay' => true,
    'autoplaySpeed' => 3000,
    'arrows' => true,
    'dots' => false,
    'appendArrows' => '.slide-arrow',
];
$config_carousel = json_encode( $config_carousel );
?>

<div class="idt-carousel-3">
    <div class="container">
        <?php if (isset($configs['title']) && $configs['title'] != '') : ?>
            <h2 class="idt-carousel-3__title"><?php echo $configs['title'] ?></h2>
        <?php endif; ?>
    </div>

    <div class="idt-carousel-3__container">
        <div class="idt-carousel-3__wrapper idt-slick-container">
            <div class="idt-slick-carousel" data-config='<?php echo $config_carousel ?>' id="idt-carousel-arrow">
                <?php if (isset($configs['items']) && !empty($configs['items'])) : ?>
                    <?php foreach ($configs['items'] as $item) : ?>
                        <?php $args = [
                            'title' => ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ) ? $item[ 'title' ] : null,
                            'content' => ( isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ) ? $item[ 'content' ] : null,
                            'image' => ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ) ? $item[ 'image' ] : null,
                        ] ?>
                        <?php get_template_part('sections/cards/card', '2',  $args) ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="slide-arrow-global slide-arrow">
        </div>
    </div>
</div>
