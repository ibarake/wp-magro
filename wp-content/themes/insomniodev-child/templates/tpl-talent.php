<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template de con la estructura de la pagina de "Talento"
 *
 * Template Name: Talent
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
$configs = $idt_child_helper->getTalentOptions( $post->ID );
?>
<div class="idt-tpl-talent" id="idt-tpl-talent">
    <?php if (isset($configs['grid_1']['activate']) && $configs['grid_1']['activate'] != '') : ?>
        <div class="idt-before">
            <section class="idt-section">
                <?php get_template_part( 'sections/grids/grid', '3', $configs[ 'grid_1' ] );?>
            </section>
        </div>
    <?php endif;?>
    <?php if (isset($configs['main']['activate']) && $configs['main']['activate'] != '') : ?>
        <div id="idt-main">
            <main class="idt-main-content idt-section" role="main">
                <?php get_template_part( 'sections/carousels/carousel', '5', $configs[ 'main' ] );?>
            </main>
        </div>
    <?php endif;?>
    <?php if (isset($configs['form']['activate']) && $configs['form']['activate'] != '') : ?>
        <div class="idt-after">
            <section class="idt-section">
                <?php get_template_part( 'sections/grids/grid', '4', $configs[ 'form' ] );?>
            </section>
        </div>
    <?php endif;?>
</div>
<?php get_footer()?>
