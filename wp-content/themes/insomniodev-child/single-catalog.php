<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template por defecto que muestra el detalle de un producto
 * @package WordPress
 * @subpackage insomniodev
 * @since 1.0
 * @version 1.0
 */
get_header();
$post = get_post();
global $idt_child_helper;
$configs = $idt_child_helper->getTplSingleProductOptions( $post->ID );
?>
    <div class="idt-tpl-single-products" id="idt-tpl-single-products">
        <div id="idt-main">
            <main class="idt-section idt-main-content">
                <?php get_template_part( 'sections/single-product/product', 'detail', $configs['main'] );?>
            </main>
        </div>

        <div class="idt-after">
            <section class="idt-section">
                <?php get_template_part('sections/blog/recent', 'post', $configs[ 'blog' ] );?>
            </section>
        </div>
    </div>
<?php get_footer(); ?>