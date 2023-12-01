<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template por defecto del menu movil
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage latindev
 * @since 1.0
 * @version 1.0
 */
$idt_helper = new ld_helper();
$options = $idt_helper->getThemeOptions( 'menu' );
$active_dropdown = $options[ 'active_dropdown' ];
?>
<nav class="idt-mobile-menu-container d-lg-none d-xl-none">
    <div class="container">
        <?php if($active_dropdown == 'true'):
            wp_nav_menu( [
                'theme_location' => 'mobile-menu',
                'menu_class'=> 'idt-menu-mobile__dropdown'
            ]);
        else:
            wp_nav_menu( [
                'theme_location' => 'mobile-menu',
            ]);
        endif; ?>
    </div>
</nav>
