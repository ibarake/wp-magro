<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template por defecto que muestra la pagina principal del sitio web
 * @package WordPress
 * @subpackage InsomnioDEV
 * @since 1.0
 * @version 1.0
 */
$post = get_post();
global $idt_child_helper;
$idt_child_helper = new idt_child_helper();
$configs = $idt_child_helper->getHomeOptions( $post->ID );
?>
<div class="idt-front-page" id="idt-tpl-front-page">
    <div class="idt-before">
        <section class="idt-section">
            <?php get_template_part( 'sections/carousels/carousel', '1', $configs[ 'carousel' ] );?>
        </section>
    </div>
    <?php if (isset($configs['carousel_2']['active']) && $configs['carousel_2']['active'] != '') : ?>
        <div class="idt-before">
            <section class="idt-section">
                <?php get_template_part( 'sections/carousels/carousel', '2', $configs[ 'carousel_2' ] );?>
            </section>
        </div>
    <?php endif;?>
    <?php if (isset($configs['content']['active']) && $configs['content']['active'] != '') : ?>
    <div class="idt-main">
        <main class="idt-main-content idt-section" role="main">
            <?php get_template_part( 'sections/contents/content', '1', $configs[ 'content' ] );?>
        </main>
    </div>
    <?php endif;?>
    <?php if (isset($configs['content_2']['active']) && $configs['content_2']['active'] != '') : ?>
    <div class="idt-after">
        <section class="idt-section">
            <?php get_template_part( 'sections/contents/content', '2', $configs[ 'content_2' ] );?>
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
