<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template de con la estructura de la pagina de "Servicios"
 *
 * Template Name: Servicios
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
$configs = $idt_child_helper->getServicesOptions( $post->ID );

?>
<div class="idt-tpl-services" id="idt-tpl-services">
    <div id="idt-main">
        <main class="idt-main-content idt-section" role="main">
            <?php get_template_part( 'sections/banners/banner', '1', $configs[ 'banner' ] );?>
        </main>
    </div>
    <?php if (isset($configs['grid']['active']) && $configs['grid']['active'] != '') : ?>
        <div class="idt-after">
            <section class="idt-section idt-section-1">
                <?php get_template_part( 'sections/grids/grid', '1', $configs[ 'grid' ] );?>
            </section>
        </div>
    <?php endif;?>
    <?php if (isset($configs['grid_loop']['active']) && $configs['grid_loop']['active'] != '') : ?>
        <div class="idt-after">
            <section class="idt-section">
                <?php get_template_part( 'sections/grids/grid', 'loop', $configs[ 'grid_loop' ] );?>
            </section>
        </div>
    <?php endif;?>
    <?php if (isset($configs['grid_1']['active']) && $configs['grid_1']['active'] != '') : ?>
        <div class="idt-after">
            <section class="idt-section">
                <?php get_template_part( 'sections/grids/grid', '1', $configs[ 'grid_1' ] );?>
            </section>
        </div>
    <?php endif;?>
    <?php if (isset($configs['blog']['active']) && $configs['blog']['active'] != '') : ?>
        <div class="idt-after">
            <section class="idt-section">
                <?php get_template_part('sections/blog/recent', 'post', $configs[ 'blog' ] );?>
            </section>
        </div>
    <?php endif;?>
</div>
<?php get_footer()?>
