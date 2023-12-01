<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage latindev
 * @since 1.0
 * @version 1.0
 */
get_header();

global $idt_helper;
$banner = $idt_helper->getThemeOptions( '404' )[ 'banner' ];
$placeholder = IDT_THEME_DIR . '/assets/images/placeholder-banner.png';
?>
<div class="idt-tpl-404 idt-separator" id="idt-tpl-404">
    <?php if( $banner['id'] != 0 ): ?>
    <div id="idt-before">
        <div id="idt-before">
            <div id="idt-before-1">
                <section class="idt-section idt-404-banner">
                    <div class="idt-section-wrap">
                        <?php get_template_part( 'sections/banners/404' );?>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div id="idt-main">
        <div class="container">
            <main class="idt-section idt-main-content idt-tpl-404__wrapper">
                <div class="idt-section-wrap">
                    <h1 class="idt-tpl-404__title idt-title"><?php _e( '404', 'insomniodev' );?></h1>
                    <p class="idt-tpl-404__description"><?php _e( 'Oops ... The page was not found', 'insomniodev' );?>
                    </p>
                    <div class="idt-tpl-404__form form-search">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>