<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.

$configs = [
    'active' => null,
    'items' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}

?>

<div class="idt-recent-posts">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-lg-4">
                <div class="idt-recent-posts__wrapper">
                    <?php if ( is_active_sidebar( 'idt-sidebar-footer-6' ) ) :?>
                        <?php dynamic_sidebar( 'idt-sidebar-footer-6' );?>
                    <?php endif;?>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="idt-recent-posts__section">
                    <?php if ( isset( $configs[ 'items' ] ) && !empty( $configs[ 'items' ] ) ):?>
                        <?php foreach ( $configs[ 'items' ] as $item ) :?>
                            <?php $args = [
                                'title' => ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ) ? $item[ 'title' ] : null,
                                'content' => ( isset( $item[ 'content' ] ) && !empty( $item[ 'content' ] ) ) ? $item[ 'content' ] : null,
                                'image' => ( isset( $item[ 'image' ] ) && !empty( $item[ 'image' ] ) ) ? $item[ 'image' ] : null,
                                'link' => ( isset( $item[ 'link' ] ) && !empty( $item[ 'link' ] ) ) ? $item[ 'link' ] : null,
                                'category' => ( isset( $item[ 'category' ] ) && !empty( $item[ 'category' ] ) ) ? $item[ 'category' ] : null,
                                'date' => ( isset( $item[ 'date' ] ) && !empty( $item[ 'date' ] ) ) ? $item[ 'date' ] : null,
                            ];?>
                            <?php get_template_part('sections/posts/post/recent-post', 'card', $args ); ?>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>

        </div>
    </div>
</div>
