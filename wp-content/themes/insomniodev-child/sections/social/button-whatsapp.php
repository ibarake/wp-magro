<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template por defecto del butón de whatsapp flotante
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage latindev
 * @since 1.0
 * @version 1.0
 */
global $idt_helper;
$social = $idt_helper->getThemeOptions( 'social' )[ 'default' ];
?>

<div class="ld-button-whatsapp">
    <?php if ( isset( $social[ 'whatsapp' ] ) && $social[ 'whatsapp' ] != '' ) :?>
        <div class="ld-button-whatsapp__item">
            <a href="https://wa.me/<?php echo $social[ 'whatsapp' ];?>" target="_blank" class="item">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.007" height="34.007" viewBox="0 0 34.007 34.007">
                    <path id="icon-logo-whatsapp" d="M19.562,2.25A16.631,16.631,0,0,0,2.867,18.816a16.4,16.4,0,0,0,2.4,8.554L2.25,36.257l9.243-2.936A16.723,16.723,0,0,0,36.257,18.816,16.63,16.63,0,0,0,19.562,2.25Zm8.3,22.857a4.312,4.312,0,0,1-2.953,1.9c-.783.042-.805.607-5.074-1.247S13,19.4,12.8,19.108a8.187,8.187,0,0,1-1.575-4.437A4.73,4.73,0,0,1,12.848,11.2,1.635,1.635,0,0,1,14,10.713c.336-.005.554-.01.8,0s.622-.052.945.808,1.1,2.972,1.2,3.187a.773.773,0,0,1,.008.742,2.9,2.9,0,0,1-.452.689c-.223.239-.469.535-.667.717-.222.2-.453.423-.22.855a12.775,12.775,0,0,0,2.26,3.016,11.648,11.648,0,0,0,3.347,2.225c.419.228.668.2.928-.071s1.111-1.2,1.412-1.607.582-.332.967-.177,2.441,1.257,2.86,1.484.7.344.8.524A3.506,3.506,0,0,1,27.863,25.107Z" transform="translate(-2.25 -2.25)" fill="#00bb40"/>
                </svg>
            </a>
        </div>
    <?php endif;?>
</div>