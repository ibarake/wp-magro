<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template del footer general del tema
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage insomniodev
 * @since 1.0
 * @version 1.0
 */
global $idt_helper;
$copyright = $idt_helper->getThemeOptions( 'copyright' );
?>
<footer id="idt-footer" class="idt-footer">
    <div id="idt-footer-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3">
                    <div class="idt-section idt-section-1">
                        <?php if ( is_active_sidebar( 'idt-sidebar-footer-1' ) ) :?>
                            <?php dynamic_sidebar( 'idt-sidebar-footer-1' );?>
                        <?php endif;?>
                    </div>
                    <div class="idt-social-media-footer d-lg-none">
                        <?php get_template_part( 'sections/menus/social/default' );?>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="idt-section idt-section-2">
                        <?php if ( is_active_sidebar( 'idt-sidebar-footer-2' ) ) :?>
                            <?php dynamic_sidebar( 'idt-sidebar-footer-2' );?>
                        <?php endif;?>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="idt-section idt-section-3">
                        <?php if ( is_active_sidebar( 'idt-sidebar-footer-3' ) ) :?>
                            <?php dynamic_sidebar( 'idt-sidebar-footer-3' );?>
                        <?php endif;?>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="idt-section idt-section-4">
                        <?php if ( is_active_sidebar( 'idt-sidebar-footer-4' ) ) :?>
                            <?php dynamic_sidebar( 'idt-sidebar-footer-4' );?>
                        <?php endif;?>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="idt-section idt-section-4">
                        <?php if ( is_active_sidebar( 'idt-sidebar-footer-5' ) ) :?>
                            <?php dynamic_sidebar( 'idt-sidebar-footer-5' );?>
                        <?php endif;?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="idt-footer-2">
        <div class="container">
            <div class="idt-copyright">
                <div class="idt-copyright__content text-center">
                    <p><?php echo $copyright[ 'default' ];?></p>
                    <div class="idt-tuatara">
                        <a href="https://tuatara.co/" target="_blank">By tuatara.co</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="idt-section idt-section-isotipo">
        <?php if ( is_active_sidebar( 'idt-sidebar-footer-7' ) ) :?>
            <?php dynamic_sidebar( 'idt-sidebar-footer-7' );?>
        <?php endif;?>
    </div>

    <div class="idt-section idt-section-background">
        <?php if ( is_active_sidebar( 'idt-sidebar-footer-8' ) ) :?>
            <?php dynamic_sidebar( 'idt-sidebar-footer-8' );?>
        <?php endif;?>
    </div>
</footer>

<?php get_template_part('sections/social/button-whatsapp') ?>
<?php wp_footer(); ?>
</body>
</html>
