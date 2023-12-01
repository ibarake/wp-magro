<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template por defecto del logo
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage latindev
 * @since 1.0
 * @version 1.0
 */
global $idt_helper;
$logo = $idt_helper->getThemeOptions( 'logos' )[ 'default' ];
?>
<a href="<?php echo $idt_helper->getHomeUrl();?>" class="idt-logo-url"><img class="idt-logo" src="<?php echo $logo[ 'url' ];?>" alt="<?php echo $logo[ 'alt' ];?>"></a>
