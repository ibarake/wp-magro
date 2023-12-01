<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template de con la estructura de la pagina de "Sobre nosotros"
 *
 * Template Name: Contactenos
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
$configs = $idt_child_helper->getContactUsOptions( $post->ID );

?>
<div class="idt-tpl-contact-us" id="idt-tpl-contact-us">
    <div id="idt-main">
        <main class="idt-main-content idt-section" role="main">
            <?php get_template_part( 'sections/banners/banner', '2', $configs[ 'banner' ] );?>
        </main>
    </div>
    <div class="idt-after">
        <?php if (isset($configs['banner_2']['active']) && $configs['banner_2']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/banners/banner', '3', $configs[ 'banner_2' ] );?>
            </section>
        <?php endif;?>

        <?php if (isset($configs['tab']['active']) && $configs['tab']['active'] != '') : ?>
            <section class="idt-section">
                <?php get_template_part( 'sections/tabs/tab', '1', $configs[ 'tab' ] );?>
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
