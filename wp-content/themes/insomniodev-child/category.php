<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template por defecto que muestra las entradas del sitio web
 * @package WordPress
 * @subpackage latindev
 * @since 1.0
 * @version 1.0
 */
get_header();
$id = get_option('page_for_posts');
?>
<div class="ld-page idt-tpl-category" id="idt-tpl-category">
    <section class="ld-section idt-banner-4">
    <div class="container"> 
        <h1 class="idt-banner-4__title2 idt-title">
                <?php _e('Category', 'insomniodev');?>:
                <strong><?php single_cat_title();?></strong> 
            </h1>
        </div>
    </section>
    <div id="idt-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <main role="main" class="idt-section idt-main idt-blog-posts">
                        <?php if( have_posts() ): the_post();?>
                            <?php get_template_part( 'sections/posts/post/post', 'card' );?>
                        <?php endif; ?>
                            <?php while( have_posts() ): the_post();?>
                                <div class="col-12">
                                    <?php get_template_part( 'sections/posts/post/post', 'card-small' );?>
                                </div>
                            <?php endwhile; wp_reset_query();?>
                        <?php get_template_part( 'sections/blog/pagination' );?>
                    </main>
                </div>
                <div class="col-lg-3">
                    <?php if ( is_active_sidebar( 'ld-sidebar-1' ) ) :?>
                        <aside class="idt-blog-aside">
                            <?php dynamic_sidebar( 'ld-sidebar-1' );?>
                        </aside>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>