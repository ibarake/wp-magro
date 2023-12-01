<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part para grid con contenido
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Insomnio DEV Child
 * @since 1.0
 * @version 1.0
 */
$configs = [
    'items' => null,
    'template_card' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
if ( isset( $configs[ 'items' ] ) && !empty( $configs[ 'items' ] ) ): ?>
<div class="idt-grid-loop">
    <div class="container">
        <?php foreach ( $configs[ 'items' ] as $key => $item ):
            $args = [
                'title' => ( isset( $item['title'] ) && $item['title'] != '' ) ? $item['title'] : null,
                'content' => ( isset( $item['content'] ) && $item['content'] != '' ) ? $item['content'] : null,
                'cta' => ( isset( $item['cta'] ) && $item['cta'] != '' ) ? $item['cta'] : null,
                'image' => ( isset( $item['image'] ) && !empty( $item['image'] ) ) ? $item['image'] : null,
                'image_left' => ( ($key + 1) % 2 == 0 ) ? true : false,
            ]

            ?>
            <?php get_template_part('sections/cards/card', '3', $args ); ?>
        <?php endforeach;?>
    </div>
</div>
<?php endif;?>