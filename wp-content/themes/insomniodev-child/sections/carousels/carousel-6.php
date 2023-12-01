<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de carousel-5
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
    'id' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}

?>
<?php if ( isset( $configs['items'] ) && !empty( $configs['items'] ) ): ?>
    <div id="<?php echo $configs['id']; ?>"
         class="carousel slide idt-carousel-6<?php if ( isset( $configs['class'] ) && $configs['class'] != '' ) echo ' ' . $configs['class']; ?>"
         data-bs-ride="carousel"
         data-bs-interval="true">
        <div class="container">
            <div class="carousel-inner">
                <?php foreach ( $configs['items'] as $key => $item ) : ?>
                    <div class="carousel-item<?php if( $key == 0 ) echo ' active'; ?>"
                         data-bs-interval="3000">
                        <?php
                        $args = [
                            'title' => ( isset( $item[ 'title' ] ) && $item[ 'title' ] != '' ) ? $item['title'] : null,
                            'title_vacant' => ( isset( $item[ 'title_vacant' ] ) && $item[ 'title_vacant' ] != '' ) ? $item['title_vacant'] : null,
                            'content' => ( isset( $item[ 'content' ] ) && $item[ 'content' ] != '' ) ? $item['content'] : null,
                            'location' => ( isset( $item[ 'location' ] ) && $item[ 'location' ] != '' ) ? $item['location'] : null,
                            'days' => ( isset( $item[ 'days' ] ) && $item[ 'days' ] != '' ) ? $item['days'] : null,
                            'time' => ( isset( $item[ 'time' ] ) && $item[ 'time' ] != '' ) ? $item['time'] : null,
                            'working_time' => ( isset( $item[ 'working_time' ] ) && $item[ 'working_time' ] != '' ) ? $item['working_time'] : null,
                            'cta' => ( isset( $item[ 'cta' ] ) && !empty( $item[ 'cta' ] ) ) ? $item['cta'] : null,
                            'icon_working_time' => ( isset( $item[ 'icon_working_time' ] ) && !empty( $item[ 'icon_working_time' ] ) ) ? $item['icon_working_time'] : null,
                            'icon_time' => ( isset( $item[ 'icon_time' ] ) && !empty( $item[ 'icon_time' ] ) ) ? $item['icon_time'] : null,
                            'icon_location' => ( isset( $item[ 'icon_location' ] ) && !empty( $item[ 'icon_location' ] ) ) ? $item['icon_location'] : null,
                        ];
                        get_template_part('sections/cards/card', '10', $args );
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="idt-carousel-6__controller">
                <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $configs['id']; ?>" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $configs['id']; ?>" data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>