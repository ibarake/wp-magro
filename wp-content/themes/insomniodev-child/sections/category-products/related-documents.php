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
    'title_documents' => null,
    'loop_documents' => null,
    'loop_specifications' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
$figures = [
    "figure" => IDT_THEME_CHILD_DIR . '/assets/images/icon-descarga-pdf.svg',
];
?>
<div class="idt-related-documents">
    <div class="container">
        <?php if ( isset( $configs[ 'title_documents' ] ) && $configs[ 'title_documents' ] != '' ):?>
            <div class="idt-related-documents__title">
                <h2 class="idt-title-2"><?php echo $configs[ 'title_documents' ];?></h2>
            </div>
        <?php endif;?>

        <div class="row">
            <div class="col-lg-6">
                <div class="idt-related-documents__documents">
                    <?php if (isset($configs['loop_documents']) && !empty($configs['loop_documents'])) : ?>
                        <?php foreach ($configs['loop_documents'] as $item) : ?>

                            <?php if ( isset( $item[ 'file_document' ] ) && $item[ 'file_document' ] != '' ):?>
                                <div class="idt-related-documents__documents-item">
                                    <a class="idt-related-documents__documents-link"
                                        href="<?php echo $item[ 'file_document' ]['url'];?>"
                                       target="_blank">
                                        <?php echo $item[ 'file_document' ]['title'];?>

                                        <?php if ( isset( $figures[ 'figure' ] ) && !empty( $figures[ 'figure' ] ) ):?>
                                            <div class="idt-figure idt-related-documents__figure">
                                                <img class="idt-figure__image"
                                                     src="<?php echo $figures[ 'figure' ];?>"@
                                                     alt="icon pdf magro"
                                                     width="20"
                                                     height="20"
                                                     loading="lazy">
                                            </div>
                                        <?php endif;?>
                                    </a>
                                </div>
                            <?php endif;?>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="idt-related-documents__specifications">
                    <?php if (isset($configs['loop_specifications']) && !empty($configs['loop_specifications'])) : ?>
                        <?php foreach ($configs['loop_specifications'] as $item) : ?>

                            <?php if ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' || isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ):?>
                                <div class="idt-related-documents__specifications-item">
                                    <div class="col-left">
                                        <?php if ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ):?>
                                            <div class="idt-related-documents__specifications-image-container">
                                                <img class="idt-related-documents__specifications-image"
                                                     src="<?php echo $item[ 'image' ][ 'url' ];?>"
                                                     alt="<?php echo $item[ 'image' ][ 'alt' ];?>"
                                                     width="<?php echo $item[ 'image' ][ 'sizes' ][ 'large-width' ];?>"
                                                     height="<?php echo $item[ 'image' ][ 'sizes' ][ 'large-height' ];?>"
                                                     loading="lazy">
                                            </div>
                                        <?php endif;?>
                                    </div>

                                    <div class="col-right">
                                        <?php if ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ):?>
                                            <div class="idt-related-documents__specifications-title">
                                                <h3><?php echo $item[ 'title' ];?></h3>
                                            </div>
                                        <?php endif;?>
                                        <?php if ( isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ):?>
                                            <div class="idt-related-documents__specifications-content">
                                                <p><?php echo $item[ 'content' ];?></p>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            <?php endif;?>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>