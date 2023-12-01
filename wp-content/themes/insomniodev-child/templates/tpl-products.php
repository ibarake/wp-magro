<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template de con la estructura de la pagina de "Productos"
 *
 * Template Name: Productos
 *
 * @package WordPress
 * @subpackage InsomnioDEV
 * @since 1.0
 * @version 1.0
 */
get_header();
$post = get_post();
global $idt_child_helper;
$idt_child_helper = new idt_child_helper();
$configs = $idt_child_helper->getProductsOptions( $post->ID );

?>
<div class="idt-tpl-products" id="idt-tpl-products">
    <div id="idt-main">
        <main class="idt-main-content idt-section" role="main">
            <?php get_template_part( 'sections/banners/banner', '1', $configs[ 'banner' ] );?>
        </main>
    </div>

    <div class="idt-after">
        <?php if (isset($configs['products']['active']) && $configs['products']['active'] != '') : ?>
            <?php get_template_part( 'sections/grids/grid', '5', $configs[ 'products' ] );?>
        <?php endif;?>

        <?php if (isset($configs['grid_1']['active']) && $configs['grid_1']['active'] != '') : ?>
            <?php get_template_part( 'sections/grids/grid', '1', $configs[ 'grid_1' ] );?>
        <?php endif;?>

     <!--   <?php /*if (isset($configs['featured']['active']) && $configs['featured']['active'] != '') : */?>
            <?php /*get_template_part( 'sections/carousels/carousel', '7', $configs[ 'featured' ] );*/?>
        --><?php /*endif;*/?>

        <?php if (isset($configs['blog']['active']) && $configs['blog']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part('sections/blog/recent', 'post', $configs[ 'blog' ] );?>
            </section>
        <?php endif;?>
    </div>
</div>
<?php get_footer()?>
