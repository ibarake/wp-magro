<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de iframe de mapa
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Insomnio DEV Child
 * @since 1.0
 * @version 1.0
 */
$configs = [
    'title' => null,
    'content' => null,
    'image' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>

<div class="idt-content-page" style="background-color: #FFFFFF; <?php if( $configs[ 'image' ] ) echo 'background-image: url('.$configs[ 'image' ][ 'src' ].');'; ?>">
    <div class="container">
        <main class="idt-section idt-content-page__section">
            <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                <h1 class="idt-content-page__title"><?php echo $configs[ 'title' ];?></h1>
            <?php endif;?>

            <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                <?php echo $configs[ 'content' ];?>
            <?php endif;?>
        </main>
    </div>
</div>