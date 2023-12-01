<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template de con la estructura de la pagina de "Sobre nosotros"
 *
 * Template Name: Distribuidores
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
$configs = $idt_child_helper->getDistributorOptions( $post->ID );

?>
<div class="idt-tpl-distributor" id="idt-tpl-distributor">
    <div id="idt-main">
        <main class="idt-main-content idt-section" role="main">
            <?php get_template_part( 'sections/tabs/tab', '1', $configs[ 'tab' ] );?>
        </main>
    </div>
    <div class="idt-after">
        <?php if (isset($configs['main']['active']) && $configs['main']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/contents/content', '2', $configs[ 'main' ] );?>
            </section>
        <?php endif;?>

        <?php if (isset($configs['info']['active']) && $configs['info']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/contents/content', '3', $configs[ 'info' ] );?>
            </section>
        <?php endif;?>

        <?php if (isset($configs['form']['active']) && $configs['form']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/forms/form', '1', $configs[ 'form' ] );?>
            </section>
        <?php endif;?>
    </div>
</div>
<?php get_footer()?>
