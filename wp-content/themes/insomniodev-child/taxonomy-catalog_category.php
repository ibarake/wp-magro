<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template por defecto que muestra las categorías de prodcutos
 * @package WordPress
 * @subpackage insomniodev
 * @since 1.0
 * @version 1.0
 */
get_header();

$id = get_queried_object_id();
global $idt_child_helper;
$configs = $idt_child_helper->getTplCategoryProductOptions( $id );
?>
    <div class="idt-tpl-taxonomy-catalog_category" id="idt-tpl-taxonomy-catalog_category">
        <div id="idt-main">
            <main class="idt-section idt-main-content">
                <?php get_template_part( 'sections/category-products/category', 'products', $configs['products'] );?>
            </main>
        </div>

        <div class="idt-after">
            <section class="idt-section">
                <?php get_template_part('sections/blog/recent', 'post', $configs[ 'blog' ] );?>
            </section>
        </div>
    </div>
<?php get_footer()?>