<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template de con la estructura de la página de "Agradecimiento"
 *
 * Template Name: THP
 *
 * @package WordPress
 * @subpackage InsomnioDEV
 * @since 1.0
 * @version 1.0
 */

get_header('', [
    "class" => "idt-menu-mobile-layout--light"
]);
$post = get_post();
global $idt_child_helper;
$idt_child_helper = new idt_child_helper();
$configs = $idt_child_helper->getTplThanksOptions( $post->ID );
?>
    <div class="idt-tpl-thp idt-separator" id="idt-tpl-thp">
        <main id="idt-main">
            <?php get_template_part( 'sections/others/content', 'page', $configs[ 'thp' ] );?>
        </main>
    </div>
<?php get_footer()?>
