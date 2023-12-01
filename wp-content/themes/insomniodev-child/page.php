<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template para las paginas del tema
 * @package WordPress
 * @subpackage Insomnio DEV Child
 * @since 1.0
 * @version 1.0
 */

get_header('', [
    "class" => "idt-menu-mobile-layout--light"
]);
$id = get_queried_object_id();
global $idt_helper;
global $idt_child_helper;
$idt_child_helper = new idt_child_helper();
$configs = $idt_child_helper->getPageDefaultOptions( $id );
?>
<div class="idt-page idt-separator" id="idt-tpl-page">
    <div id="idt-main">
        <main class="idt-main-content" role="main">
            <?php get_template_part( 'sections/contents/content', 'page', $configs[ 'info' ] );?>
        </main>
    </div>
</div>
<?php get_footer()?>