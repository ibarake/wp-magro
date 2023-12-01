<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de un banner principal
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Insomnio DEV Child
 * @since 1.0
 * @version 1.0
 */
$configs = [
    'title_tab' => null,
    'loop_tabs' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>

<div class="idt-tab-2">
    <div class="container">
        <?php if ( isset( $configs[ 'title_tab' ] ) && $configs[ 'title_tab' ] != '' ):?>
            <div class="idt-tab-2__title text-center">
                <h2 class="idt-title-2"><?php echo $configs[ 'title_tab' ];?></h2>
            </div>
        <?php endif;?>

        <div class="idt-tab-2__tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <?php if (isset($configs['loop_tabs']) && !empty($configs['loop_tabs'])) : ?>
                        <?php foreach ($configs['loop_tabs'] as $key => $item) : ?>
                            <?php if (isset($item['title']) && $item['title'] != '') : ?>
                                <h3 class="nav-link<?php echo ($key == 0) ? ' active' : '' ?>"
                                    id="nav-<?php echo $key+1; ?>-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav-<?php echo $key+1; ?>"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav-<?php echo $key+1; ?>"
                                    aria-selected="true">
                                    <?php echo $item['title']; ?>
                                </h3>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <?php if (isset($configs['loop_tabs']) && !empty($configs['loop_tabs'])) : ?>
                    <?php foreach ($configs['loop_tabs'] as $key => $item) : ?>
                        <div class="tab-pane fade show<?php echo ( $key == 0 ) ? ' active' : '' ?>"
                             id="nav-<?php echo $key+1; ?>"
                             role="tabpanel"
                             aria-labelledby="nav-<?php echo $key+1; ?>-tab">

                            <?php if ( isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ):?>
                                <div class="idt-tab-2__tab-description">
                                    <?php echo $item[ 'content' ];?>
                                </div>
                            <?php endif;?>

                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
