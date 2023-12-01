<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template de con la estructura de la pagina de "Sobre nosotros"
 *
 * Template Name: Sobre nosotros
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
$configs = $idt_child_helper->getAboutUsOptions( $post->ID );

?>
<div class="idt-tpl-about-us" id="idt-tpl-about-us">
    <div id="idt-main">
        <main class="idt-main-content idt-section" role="main">
            <?php get_template_part( 'sections/banners/banner', '1', $configs[ 'banner' ] );?>
        </main>
    </div>

    <div class="idt-after">
        <?php if (isset($configs['carousel']['active']) && $configs['carousel']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/carousels/carousel', '3', $configs[ 'carousel' ] );?>
            </section>
        <?php endif;?>

        <?php if (isset($configs['content']['active']) && $configs['content']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/contents/content', '1', $configs[ 'content' ] );?>
            </section>
        <?php endif;?>

        <?php if (isset($configs['grid']['active']) && $configs['grid']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/grids/grid', '2', $configs[ 'grid' ] );?>
            </section>
        <?php endif;?>

        <?php if (isset($configs['grid_2']['active']) && $configs['grid_2']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/grids/grid', '2', $configs[ 'grid_2' ] );?>
            </section>
        <?php endif;?>

        <?php if (isset($configs['blog']['active']) && $configs['blog']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part('sections/blog/recent', 'post', $configs[ 'blog' ] );?>
            </section>
        <?php endif;?>
    </div>

</div>
<?php get_footer()?>
