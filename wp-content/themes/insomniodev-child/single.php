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
$placeholder = IDT_THEME_CHILD_DIR . '/assets/images/placeholder-16-9.webp';
$id = get_option('page_for_posts');
?>
<div class="ld-page" id="ld-tpl-single-post">
    <section class="ld-section idt-banner-4">
            <div class="container">
                <h1 class="idt-banner-4__title3 idt-title">
                    <?php echo $post->post_title ?>
                </h1>
            </div>
            
    </section>
    <div id="idt-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xxl-9">
                    <main role="main" class="ld-section ld-main ld-single-post">
                        <div class="ld-single-post__container">
                            <?php if( have_posts() ): the_post();?>
                                <?php
                                $post = get_post();
                                $categories = wp_get_post_categories( $post->ID );
                                ?>
                                <?php if( has_post_thumbnail() ):
                                    $image_id = get_post_thumbnail_id( get_the_ID() );
                                    $image = wp_get_attachment_image_src( $image_id, 'full' )[0];
                                    $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true ); ?>
                                    <img itemprop="image"
                                         class="ld-single-post__image idt-holder idt-lazy"
                                         src="<?php echo $placeholder ?>"
                                         data-src="<?php echo $image ?>"
                                         alt="<?php echo $image_alt ?>">
                                <?php endif; ?>
                                <div class="ld-single-post__content">
                                    <?php the_content();?>
                                </div>
                                <div class="ld-post-footer d-flex justify-content-between">
                                    <span class="ld-post-author"><?php echo __( 'Autor', 'latindev' ) . ': ';?><span class="ld-author"><?php the_author();?></span></span>
                                    <?php if ( $categories ) :?>
                                        <ul class="ld-post-categories">
                                            <li><?php _e( 'Categories', 'latindev' );?>:</li>
                                            <?php foreach ( $categories as $category ) :?>
                                                <?php $category = get_category( $category );?>
                                                <li itemprop="category"><a href="<?php echo get_category_link( $category );?>"><?php echo $category->name;?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif;?>
                                    <span class="ld-post-card__date"><?php echo get_the_date( 'd M, Y' );?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </main>
                </div>
                <div class="col-lg-3 col-xxl-3">
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
