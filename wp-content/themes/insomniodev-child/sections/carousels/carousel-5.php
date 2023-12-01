<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de carousel-6
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
         class="carousel slide idt-carousel-5<?php if ( isset( $configs['class'] ) && $configs['class'] != '' ) echo ' ' . $configs['class']; ?>"
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
                            'experience' => ( isset( $item[ 'experience' ] ) && $item[ 'experience' ] != '' ) ? $item['experience'] : null,
                            'working_time' => ( isset( $item[ 'working_time' ] ) && $item[ 'working_time' ] != '' ) ? $item['working_time'] : null,
                            'cta' => ( isset( $item[ 'cta' ] ) && !empty( $item[ 'cta' ] ) ) ? $item['cta'] : null,
                            'icon_working_time' => ( isset( $item[ 'icon_working_time' ] ) && !empty( $item[ 'icon_working_time' ] ) ) ? $item['icon_working_time'] : null,
                            'icon_location' => ( isset( $item[ 'icon_location' ] ) && !empty( $item[ 'icon_location' ] ) ) ? $item['icon_location'] : null,
                            'icon_experience' => ( isset( $item[ 'icon_experience' ] ) && !empty( $item[ 'icon_experience' ] ) ) ? $item['icon_experience'] : null,
                        ];
                        get_template_part('sections/cards/card', '5', $args );
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php if( count( $configs['items'] ) > 1 ) : ?>
                <div class="idt-carousel-5__controller">
                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $configs['id'] ?>" data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                <?php if( count( $configs['items'] ) <= 4 ) : ?>
                    <div class="carousel-indicators">
                        <?php
                        foreach ( $configs['items'] as $key => $items ): ?>
                            <button class="carousel-indicators__item <?php if( $key == 0 ) echo 'active'; ?>"
                                    type="button"
                                    data-bs-target="#<?php echo $configs['id']; ?>"
                                    data-bs-slide-to="<?php echo $key; ?>"
                                <?php if( $key == 0 ) echo 'aria-current="true"'; ?>
                                    aria-label="Slide <?php echo $key; ?>">
                            </button>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $configs['id'] ?>" data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        <?php endif; ?>
        </div>
    </div>
<?php endif; ?>