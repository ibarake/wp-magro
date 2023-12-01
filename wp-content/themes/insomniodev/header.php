<?php /**
 * The header for our theme
 * @package WordPress
 * @subpackage latindev
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js no-svg">
<head>
	<title><?php wp_title('');?></title>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <?php
    wp_head();
    global $idt_helper;
    $idt_helper = new ld_helper();
    global $ld_bootstrap;
    $ld_bootstrap = new ld_bootstrap();
    ?>
</head>

<body <?php body_class();?> id="idt-page-body">
    <header id="idt-header">
        <div class="idt-menu-mobile-layout idt-header-sticky" id="idt-header-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4">
                        <section class="idt-section idt-header-logo">
                            <div class="idt-section-wrap">
					            <?php get_template_part( 'sections/logos/default' );?>
                            </div>
                        </section>
                    </div>
                    <div class="col-8 idt-display-flex">
                        <section class="idt-section idt-mobile-menu">
                            <div class="idt-section-wrap">
	                            <?php get_template_part( 'sections/menus/mobile/button' );?>
                            </div>
                        </section>
                    </div>
                </div>
	            <?php get_template_part( 'sections/menus/mobile/default' );?>
            </div>
        </div>
    </header>
