<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de una card de post recientes del blog
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
    'link' => null,
    'date' => null,
    'category' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}

$camera_placeholder = IDT_THEME_CHILD_DIR . '/assets/images/camera-placeholder-400x400.png';

$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' );

$figures = [
    "arrow" => IDT_THEME_CHILD_DIR . '/assets/images/icon-arrow-circle-blog.svg',
];
?>
<div itemscope itemtype="http://schema.org/Article" class="idt-recent-post-card">

    <div class="d-none" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <img src="<?php echo $custom_logo_src[0]; ?>"/>
            <meta itemprop="url" content="<?php echo $custom_logo_src[0]; ?>">
            <meta itemprop="width" content="400">
            <meta itemprop="height" content="60">
        </div>

        <meta itemprop="name"
              content="<?php echo ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ) ? $configs[ 'title' ] : ''; ?>">
    </div>

    <meta itemprop="headline"
          content="<?php echo ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ) ? $configs[ 'title' ] : ''; ?>" />
    <meta itemprop="author"
          content="<?php echo ( isset( $configs[ 'author' ] ) && $configs[ 'author' ] != '' ) ? $configs[ 'author' ] : ''; ?>"/>

    <div class="idt-recent-post-card__box">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="idt-recent-post-card__img-container">
                    <a href="<?php echo ( isset( $configs[ 'link' ] ) && $configs[ 'link' ] != '' ) ? $configs[ 'link' ] : '#';?>">
                        <?php if ( isset( $configs[ 'image' ] ) && !empty( $configs[ 'image' ] ) ):?>
                            <img class="idt-recent-post-card__image"
                                 src="<?php echo $configs[ 'image' ][ 'src' ];?>"
                                 alt="<?php echo $configs[ 'image' ][ 'alt' ];?>"
                                 width="300"
                                 height="200"
                                 loading="lazy">
                        <?php else: ?>
                            <img class="idt-recent-post-card__image"
                                 src="<?php echo $camera_placeholder;?>"
                                 alt="<?php echo ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ) ? $configs[ 'title' ] : ''; ?>"
                                 loading="lazy">
                        <?php endif; ?>
                    </a>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="idt-recent-post-card__wrapper">
                    <div class="row">
                        <div class="col-7">
                            <?php if ( isset( $configs[ 'category' ] ) && !empty( $configs[ 'category' ] ) ):?>
                                <a class="idt-recent-post-card__category" href="<?php echo $configs[ 'link' ];?>"><?php echo ($configs[ 'category' ][0]->name);?></a>
                            <?php endif; ?>
                        </div>

                        <div class="col-5">
                            <?php if ( isset( $configs[ 'date' ] ) && $configs[ 'date' ] != '' ):?>
                                <span class="idt-recent-post-card__date"><?php echo $configs[ 'date' ];?></span>
                            <?php endif; ?>
                        </div
                    </div>
                </div>

                <div class="row align-items-end">
                    <div class="col-lg-10">
                        <div class="idt-recent-post-card__content">
                            <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                                <h3 itemprop="name" class="idt-recent-post-card__title">
                                    <a href="<?php echo $configs[ 'link' ];?>"><?php echo $configs[ 'title' ];?></a>
                                </h3>
                            <?php endif; ?>

                            <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                                <div class="idt-recent-post-card__excerpt">
                                    <p><?php echo $configs[ 'content' ];?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-2 text-end">
                        <a class="idt-recent-post-card__cta"
                           href="<?php echo $configs[ 'link' ];?>">
                            <?php if ( isset( $figures[ 'arrow' ] ) && !empty( $figures[ 'arrow' ] ) ):?>
                                <img class="idt-recent-post-card__arrow"
                                     src="<?php echo $figures[ 'arrow' ];?>"
                                     alt="flecha right"
                                     width="30"
                                     height="30"
                                     loading="lazy">
                            <?php endif;?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
