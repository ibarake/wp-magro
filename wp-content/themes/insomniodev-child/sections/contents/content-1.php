<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
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
    'items' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>
<?php if ( isset( $configs[ 'items' ] ) && !empty( $configs[ 'items' ] ) ):?>
    <div class="idt-content-1">
        <?php foreach ( $configs['items'] as $key => $item ) :?>
            <div class="idt-content-1__section">
                <div class="idt-container">
                    <div class="idt-content-1__row">
                        <div class="idt-content-1__col-left">
                            <?php if ( isset( $item[ 'image_content' ] ) && !empty( $item[ 'image_content' ] ) ):?>
                                <div class="idt-content-1__image-container">
                                    <img class="idt-content-1__image"
                                         src="<?php echo $item[ 'image_content' ][ 'url' ];?>"
                                         alt="<?php echo $item[ 'image_content' ][ 'alt' ];?>"
                                         width="<?php echo $item[ 'image_content' ][ 'sizes' ][ 'large-width' ];?>"
                                         height="<?php echo $item[ 'image_content' ][ 'sizes' ][ 'large-height' ];?>"
                                         loading="lazy">
                                </div>
                            <?php endif;?>
                        </div>

                        <div class="idt-content-1__col-right">
                            <?php if ( $item['type_content'] === 'tabs' ):?>

                                <div class="idt-content-1__tab">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <?php if (isset($item['loop_tabs']) && !empty($item['loop_tabs'])) : ?>
                                                <?php foreach ($item['loop_tabs'] as $key => $elem) : ?>
                                                    <?php if (isset($elem['title']) && $elem['title'] != '') : ?>
                                                        <h2 class="nav-link<?php echo ($key == 0) ? ' active' : '' ?>"
                                                            id="nav-<?php echo $key+1; ?>-tab"
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#nav-<?php echo $key+1; ?>"
                                                            type="button"
                                                            role="tab"
                                                            aria-controls="nav-<?php echo $key+1; ?>"
                                                            aria-selected="true">
                                                            <?php echo $elem['title']; ?>
                                                        </h2>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </nav>

                                    <div class="tab-content" id="nav-tabContent">
                                        <?php if (isset($item['loop_tabs']) && !empty($item['loop_tabs'])) : ?>
                                            <?php foreach ($item['loop_tabs'] as $key => $elem) : ?>
                                                <div class="tab-pane fade show<?php echo ( $key == 0 ) ? ' active' : '' ?>"
                                                     id="nav-<?php echo $key+1; ?>"
                                                     role="tabpanel"
                                                     aria-labelledby="nav-<?php echo $key+1; ?>-tab">

                                                    <?php if ( isset( $elem[ 'content' ] ) && $elem[ 'content' ] != '' ):?>
                                                        <div class="idt-content-1__tab-description">
                                                            <?php echo $elem[ 'content' ];?>
                                                        </div>
                                                    <?php endif;?>

                                                    <?php if ( isset( $elem[ 'cta' ] ) && !empty( $elem[ 'cta' ] ) ):?>
                                                        <div class="idt-content-1__tab-cta">
                                                            <a class="idt-button"
                                                               href="<?php echo $elem[ 'cta' ][ 'url' ];?>"
                                                               target="<?php echo ( isset( $elem['cta']['target'] ) && $elem['cta']['target'] != '' ) ? $elem['cta']['target'] : '_self';?>">
                                                                <?php echo $elem[ 'cta' ][ 'title' ];?>
                                                                <i class="fas fa-chevron-right"></i>
                                                            </a>
                                                        </div>
                                                    <?php endif;?>

                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            <?php else : ?>

                                <?php if ( isset( $item[ 'content_default' ] ) && $item[ 'content_default' ] != '' ):?>
                                    <div class="idt-content-1__content">
                                        <?php echo $item[ 'content_default' ];?>
                                    </div>
                                <?php endif;?>

                                <?php if ( isset( $item[ 'cta_default' ] ) && !empty( $item[ 'cta_default' ] ) ):?>
                                    <div class="idt-content-1__cta">
                                        <a class="idt-button"
                                           href="<?php echo $item[ 'cta_default' ][ 'url' ];?>"
                                           target="<?php echo ( isset( $item['cta_default']['target'] ) && $item['cta_default']['target'] != '' ) ? $item['cta_default']['target'] : '_self';?>">
                                            <?php echo $item[ 'cta_default' ][ 'title' ];?>
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
<?php endif;?>