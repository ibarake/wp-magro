<?php
if (!defined('ABSPATH')) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de un carrusel de contenido informativo
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
    'type' => null,
    'items' => null,
    'content' => null,
    'image' => null,
    'background' => null,
    'class' => null,
];
if (isset($args) && !empty($args)) {
    $configs = array_merge($configs, $args);
}
$figures = [
    "figure_1" => IDT_THEME_CHILD_DIR . '/assets/images/formas-2.svg',
];
?>

<div class="idt-content-2 <?php echo $configs['class']; ?>">
    <?php if (isset($configs['background']) && !empty($configs['background'])) : ?>
        <div class="idt-content-2__image-container">
            <img class="idt-content-2__image" src="<?php echo $configs['background']['url']; ?>" alt="<?php echo $configs['background']['alt']; ?>" width="<?php echo $configs['background']['sizes']['large-width']; ?>" height="<?php echo $configs['background']['sizes']['large-height']; ?>" loading="lazy">
        </div>
    <?php endif; ?>

    <div class="idt-content-2__wrapper">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <?php if (isset($configs['image']) && !empty($configs['image'])) : ?>
                        <div class="idt-content-2__wrapper-image-container">
                            <img class="idt-content-2__wrapper-image" src="<?php echo $configs['image']['url']; ?>" alt="<?php echo $configs['image']['alt']; ?>" width="<?php echo $configs['image']['sizes']['large-width']; ?>" height="<?php echo $configs['image']['sizes']['large-height']; ?>" loading="lazy">
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (isset($configs['type']) && $configs['type'] != '') : ?>
                    <div class="col-lg-6">

                        <?php if ($configs['type'] == 'list') : ?>
                            <?php if (
                                isset($configs['title']) && $configs['title'] != '' ||
                                isset($configs['items']) && empty($configs['items']) ||
                                isset($configs['cta']) && empty($configs['cta'])
                            ) : ?>
                                <div class="idt-content-2__box">
                                    <?php if (isset($configs['title']) && $configs['title'] != '') : ?>
                                        <div class="idt-content-2__title">
                                            <h2><?php echo $configs['title']; ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (isset($configs['items']) && !empty($configs['items'])) : ?>
                                        <div class="idt-content-2__list">
                                            <?php foreach ( $configs['items'] as $item ) : ?>
                                                <?php if (isset($item['title']) && $item['title'] != '' || isset($item['content']) && $item['content'] != '') : ?>
                                                    <div class="idt-content-2__list-item">
                                                        <?php if (isset($item['title']) && $item['title'] != '') : ?>
                                                            <h3><?php echo $item['title']; ?></h3>
                                                        <?php endif; ?>

                                                        <?php if (isset($item['content']) && $item['content'] != '') : ?>
                                                            <p><?php echo $item['content']; ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (isset($configs['cta']) && !empty($configs['cta'])) : ?>
                                        <div class="idt-content-2__cta">
                                            <a class="idt-button idt-button--white" href="<?php echo $configs['cta']['url']; ?>" target="<?php echo (isset($configs['cta']['target']) && $configs['cta']['target'] != '') ? $configs['cta']['target'] : '_self'; ?>">
                                                <?php echo $configs['cta']['title']; ?>
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                        <?php elseif ($configs['type'] == 'content') : ?>

                            <?php if (
                                isset($configs['title']) && $configs['title'] != '' ||
                                isset($configs['content']) && $configs['content'] != '' ||
                                isset($configs['cta']) && empty($configs['cta'])
                            ) : ?>
                                <div class="idt-content-2__caption">
                                    <?php if ($configs['title'] != '') : ?>
                                        <div class="idt-content-2__title">
                                            <h2><?php echo $configs['title']; ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (isset($configs['content']) && $configs['content'] != '') : ?>
                                        <div class="idt-content-2__content">
                                            <?php echo $configs['content']; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (isset($configs['cta']) && !empty($configs['cta'])) : ?>
                                        <div class="idt-content-2__cta">
                                            <a class="idt-button idt-button--orange" href="<?php echo $configs['cta']['url']; ?>" target="<?php echo (isset($configs['cta']['target']) && $configs['cta']['target'] != '') ? $configs['cta']['target'] : '_self'; ?>">
                                                <?php echo $configs['cta']['title']; ?>
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>


    <?php if ( isset( $figures[ 'figure_1' ] ) && !empty( $figures[ 'figure_1' ] ) ):?>
        <div class="idt-figure">
            <img class="idt-figure__image"
                 src="<?php echo $figures[ 'figure_1' ];?>"
                 alt="forma de magro"
                 width="300"
                 height="300"
                 loading="lazy">
        </div>
    <?php endif;?>
</div>