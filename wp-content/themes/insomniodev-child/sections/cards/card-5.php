<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part para card 5
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
    'title_vacant' => null,
    'content' => null,
    'location' => null,
    'working_time' => null,
    'icon_location' => null,
    'icon_working_time' => null,
    'icon_experience' => null,
    'cta' => null,
    'experience' => null,
];

if (isset($args) && !empty($args)) {
    $configs = array_merge($configs, $args);
}

?>


<div class="idt-card-5">
    <div class="idt-card-5__box-shadow">
        <div class="row">
            <div class="col-lg-3 ">
                <div class="idt-card-5__wrapper">
                    <?php if ( isset( $configs[ 'title' ] ) && $configs[ 'title' ] != '' ):?>
                        <h2 class="idt-card-5__title idt-title-2 idt-title--white">
                            <?php echo $configs[ 'title' ];?>
                        </h2>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="idt-card-5__container">
                    <?php if ( isset( $configs[ 'title_vacant' ] ) && $configs[ 'title_vacant' ] != '' ):?>
                        <h3 class="idt-card-5__title-vacant">
                            <?php echo $configs[ 'title_vacant' ];?>
                        </h3>
                    <?php endif;?>
                    <?php if ( isset( $configs[ 'content' ] ) && $configs[ 'content' ] != '' ):?>
                        <div class="idt-card-5__content"><?php echo $configs[ 'content' ];?></div>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="idt-card-5__box">
                    <?php if ( isset(  $configs[ 'location' ] ) &&  $configs[ 'location' ] != '' ):?>
                        <p class="idt-card-5__location">
                            <?php if ( isset($configs['icon_location'] ) && !empty( $configs['icon_location'] )) : ?>
                                <img class="idt-card-5__icon"
                                     src="<?php echo $configs['icon_location']['url'] ?>"
                                     alt="<?php echo $configs['icon_location']['alt'] ?>"
                                     width="<?php echo $configs['icon_location']['sizes']['large-width']; ?>"
                                     height="<?php echo $configs['icon_location']['sizes']['large-height']; ?>"
                                     loading="lazy">
                            <?php endif;?>
                            <?php echo  $configs[ 'location' ];?>
                        </p>
                    <?php endif;?>
                    <?php if ( isset(  $configs[ 'experience' ] ) &&  $configs[ 'experience' ] != '' ):?>
                        <p class="idt-card-5__working-time">
                            <?php if ( isset($configs['icon_experience'] ) && !empty( $configs['icon_experience'] )) : ?>
                                <img class="idt-card-5__icon"
                                     src="<?php echo $configs['icon_experience']['url'] ?>"
                                     alt="<?php echo $configs['icon_experience']['alt'] ?>"
                                     width="<?php echo $configs['icon_experience']['sizes']['large-width']; ?>"
                                     height="<?php echo $configs['icon_experience']['sizes']['large-height']; ?>"
                                     loading="lazy">
                            <?php endif;?>
                            <?php echo  $configs[ 'experience' ];?>
                        </p>
                    <?php endif;?>
                    <?php if ( isset(  $configs[ 'working_time' ] ) &&  $configs[ 'working_time' ] != '' ):?>
                        <p class="idt-card-5__working-time">
                            <?php if ( isset($configs['icon_working_time'] ) && !empty( $configs['icon_working_time'] )) : ?>
                                <img class="idt-card-5__icon"
                                     src="<?php echo $configs['icon_working_time']['url'] ?>"
                                     alt="<?php echo $configs['icon_working_time']['alt'] ?>"
                                     width="<?php echo $configs['icon_working_time']['sizes']['large-width']; ?>"
                                     height="<?php echo $configs['icon_working_time']['sizes']['large-height']; ?>"
                                     loading="lazy">
                            <?php endif;?>
                            <?php echo  $configs[ 'working_time' ];?>
                        </p>
                    <?php endif;?>

                    <?php if ( isset($configs['cta'] ) && !empty( $configs['cta'] )) : ?>
                        <a class="idt-card-5__cta idt-button"
                           title="<?php echo $configs['cta']['title']; ?>"
                           href="<?php echo $configs['cta']['url']; ?>"
                           target="<?php echo $configs['cta']['target']; ?>">
                            <?php echo $configs['cta']['title']; ?>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>





