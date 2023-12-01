<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de tabs
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
    'items' => null,
    'class' => null,
    'id' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-8.svg',
];
?>

<div class="idt-tab-1<?php if ( $configs[ 'class' ] ) echo $configs[ 'class' ]; else ''; ?>">
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

    <div class="container">
        <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
            <div class="idt-tab-1__title">
                <h1 class="idt-title"><?php echo $configs[ 'title' ];?></h1>
            </div>
        <?php endif;?>

        <div class="idt-tab-1__tab">
            <div class="idt-tab-1__tab--before">
                <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                    <?php if (isset($configs['items']) && !empty($configs['items'])) : ?>
                        <?php foreach ($configs['items'] as $key => $item) : ?>
                            <?php if (isset($item['title']) && $item['title'] != '') : ?>
                                <h2 class="nav-link<?php echo ($key == 0) ? ' active' : '' ?>"
                                    id="nav-<?php echo $key+1; ?>-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav-<?php echo $key+1; ?>"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav-<?php echo $key+1; ?>"
                                    aria-selected="true">
                                    <?php echo $item['title']; ?>
                                </h2>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </nav>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <?php if (isset($configs['items']) && !empty($configs['items'])) : ?>
                    <?php foreach ($configs['items'] as $key => $item) : ?>
                        <div class="tab-pane fade show<?php echo ( $key == 0 ) ? ' active' : '' ?>"
                             id="nav-<?php echo $key+1; ?>"
                             role="tabpanel"
                             aria-labelledby="nav-<?php echo $key+1; ?>-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <?php if ( $item['select_elem'] === 'imagemap' ):?>

                                        <?php if ( isset( $item[ 'map_image' ] ) && !empty( $item[ 'map_image' ] ) ):?>
                                            <div class="idt-tab-1__image-container-map">
                                                <img class="idt-tab-1__image-map"
                                                     src="<?php echo $item[ 'map_image' ][ 'url' ];?>"
                                                     alt="<?php echo $item[ 'map_image' ][ 'alt' ];?>"
                                                     width="<?php echo $item[ 'map_image' ][ 'sizes' ][ 'large-width' ];?>"
                                                     height="<?php echo $item[ 'map_image' ][ 'sizes' ][ 'large-height' ];?>"
                                                     loading="lazy">
                                            </div>
                                        <?php endif;?>

                                    <?php else : ?>


                                        <?php if ( isset( $item[ 'iframe' ] ) && $item[ 'iframe' ] != '' ):?>
                                            <div class="idt-tab-1__tab-iframe">
                                                <?php echo $item[ 'iframe' ];?>
                                            </div>
                                        <?php endif;?>
                                    <?php endif;?>
                                </div>
                                <div class="col-lg-5">
                                    <div class="idt-tab-1__tab-wrapper">
                                        <div class="idt-tab-1__tab-box">
                                            <?php if ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ):?>
                                                <div class="idt-tab-1__image-container">
                                                    <img class="idt-tab-1__image"
                                                         src="<?php echo $item[ 'image' ][ 'url' ];?>"
                                                         alt="<?php echo $item[ 'image' ][ 'alt' ];?>"
                                                         width="<?php echo $item[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                                                         height="<?php echo $item[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                                                         loading="lazy">
                                                </div>
                                            <?php endif;?>

                                            <?php if ( isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ):?>
                                                <div class="idt-tab-1__tab-content">
                                                    <?php echo $item[ 'content' ];?>
                                                </div>
                                            <?php endif;?>
                                        </div>

                                        <?php if( isset( $item['loop_consultants'] ) && !empty( $item['loop_consultants'] ) ): ?>
                                            <div id="<?php echo $configs['id']; ?><?php echo $key + 1; ?>" class="carousel slide idt-tab-1__carousel__container idt-tab-1__carousel__<?php echo $key + 1; ?>" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php if ( isset( $item['loop_consultants'] ) && !empty( $item['loop_consultants'] ) ):?>
                                                        <?php foreach ( $item['loop_consultants'] as $elemKey => $elem ) :?>
                                                            <div class="carousel-item <?php echo ( $elemKey == 0 ) ? ' active' : '' ?>" data-bs-interval="10000">
                                                                <?php $args = [
                                                                    'title' => ( isset( $elem[ 'title' ] ) && $elem[ 'title' ] != '' ) ? $elem[ 'title' ] : null,
                                                                    'location' => ( isset( $elem[ 'location' ] ) && $elem[ 'location' ] != '' ) ? $elem[ 'location' ] : null,
                                                                    'phone' => ( isset( $elem[ 'phone' ] ) && !empty( $elem[ 'phone' ] ) ) ? $elem[ 'phone' ] : null,
                                                                    'email' => ( isset( $elem[ 'email' ] ) && !empty( $elem[ 'email' ] ) ) ? $elem[ 'email' ] : null,
                                                                    'image' => ( isset( $elem[ 'image' ] ) && !empty( $elem[ 'image' ] ) ) ? $elem[ 'image' ] : null,
                                                                ] ?>
                                                                <?php get_template_part('sections/cards/card', '4',  $args) ?>
                                                            </div>
                                                        <?php endforeach;?>
                                                    <?php endif;?>
                                                </div>
                                                <div class="idt-tab-1__carousel__controller">
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $configs['id'] ?><?php echo $key + 1; ?>" data-bs-slide="prev">
                                                        <i class="fas fa-chevron-left"></i>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <div class="carousel-indicators">
                                                        <?php
                                                        foreach ( $item['loop_consultants'] as $elemKey => $elem ): ?>
                                                            <button class="carousel-indicators__item <?php if( $elemKey == 0 ) echo 'active'; ?>"
                                                                    type="button"
                                                                    data-bs-target="#<?php echo $configs['id']; ?><?php echo $key + 1; ?>"
                                                                    data-bs-slide-to="<?php echo $elemKey; ?>"
                                                                <?php if( $elemKey == 0 ) echo 'aria-current="true"'; ?>
                                                                    aria-label="Slide <?php echo $elemKey; ?>">
                                                            </button>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $configs['id'] ?><?php echo $key + 1; ?>" data-bs-slide="next">
                                                        <i class="fas fa-chevron-right"></i>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
