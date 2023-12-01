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
    'items_carousel' => null,
    'items_locations' => null,
    'image' => null,
    'id'=> null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-7.svg',
];
?>

<div class="idt-carousel-4">
    <div class="container">
        <div class="row align-items-center justify-content-between column-reverse">
            <div class="col-lg-5">
                <div class="idt-carousel-4__box">
                    <div class="idt-carousel-4__caption">
                        <?php if (isset($configs['title']) && $configs['title'] != '') : ?>
                            <h2 class="idt-carousel-4__title"><?php echo $configs['title'] ?></h2>
                        <?php endif; ?>

                        <?php if (isset($configs['content']) && $configs['content'] != '') : ?>
                            <div class="idt-carousel-4__content">
                                <?php echo $configs['content'] ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if( isset( $configs['items_carousel'] ) && !empty( $configs['items_carousel'] ) ): ?>
                        <div id="<?php echo $configs['id']; ?>" class="carousel slide idt-carousel-4__carousel" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php if ( isset( $configs['items_carousel'] ) && !empty( $configs['items_carousel'] ) ):?>
                                    <?php foreach ( $configs['items_carousel'] as $key => $item ) :?>
                                        <div class="carousel-item<?php if( $key == 0 ) echo ' active'; ?>" data-bs-interval="3000">
                                            <?php $args = [
                                                'title' => ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ) ? $item[ 'title' ] : null,
                                                'phone' => ( isset( $item[ 'phone' ] ) && !empty( $item[ 'phone' ] ) ) ? $item[ 'phone' ] : null,
                                                'email' => ( isset( $item[ 'email' ] ) && !empty( $item[ 'email' ] ) ) ? $item[ 'email' ] : null,
                                                'image' => ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ) ? $item[ 'image' ] : null,
                                            ] ?>
                                            <?php get_template_part('sections/cards/card', '4',  $args) ?>
                                        </div>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                            <?php if( count( $configs['items_carousel'] ) > 1 ) : ?>
                                <div class="idt-carousel-4__controller">
                                <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $configs['id'] ?>" data-bs-slide="prev">
                                    <i class="fas fa-chevron-left"></i>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <?php if( count( $configs['items_carousel'] ) <= 4 ) : ?>
                                    <div class="carousel-indicators">
                                        <?php $index = 0;
                                        foreach ( $configs['items_carousel'] as $key => $items ): ?>
                                            <button class="carousel-indicators__item <?php if( $key == 0 ) echo 'active'; ?>"
                                                    type="button"
                                                    data-bs-target="#<?php echo $configs['id']; ?>"
                                                    data-bs-slide-to="<?php echo $key; ?>"
                                                <?php if( $key == 0 ) echo 'aria-current="true"'; ?>
                                                    aria-label="Slide <?php echo $key; ?>">
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif;?>
                                <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $configs['id'] ?>" data-bs-slide="next">
                                    <i class="fas fa-chevron-right"></i>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <?php endif;?>
                        </div>
                    <?php endif;?>
                </div>
            </div>

            <div class="col-lg-6">
                <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                    <div class="idt-carousel-4__image-container">
                        <img class="idt-carousel-4__image"
                             src="<?php echo $configs[ 'image' ][ 'url' ];?>"
                             alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                             width="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                             height="<?php echo $configs[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                             loading="lazy">
                    </div>
                <?php endif;?>

                <ol class="idt-carousel-4__locations">
                    <?php if (isset($configs['items_locations']) && !empty($configs['items_locations'])) : ?>
                        <?php foreach ($configs['items_locations'] as $list) : ?>

                            <?php if (isset($list['location']) && $list['location'] != '') : ?>
                                <li class="idt-carousel-4__locations-item">
                                    <?php echo $list['location']; ?>
                                </li>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
    </div>

    <?php if ( isset( $figures[ 'figure_1' ] ) && !empty( $figures[ 'figure_1' ] ) ):?>
        <div class="idt-figure idt-figure-1">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_1' ];?>"
                 alt="forma de magro"
                 width="300"
                 height="300"
                 loading="lazy">
        </div>
    <?php endif;?>
</div>
