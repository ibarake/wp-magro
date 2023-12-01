<?php
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

$id = get_option('page_for_posts');
$flag = true;
get_header();
?>
<div class="idt-search-page ld-page" id="idt-tpl-search">
    <section class="idt-section idt-banner-4">
        <div class="container">
            <div class="title-result">
                <?php if ( have_posts() ) :?>
                <h1 class="idt-banner-4__title4 idt-title">
                    <strong><?php _e('Resultados para', 'insomniodev');?>:
                    </strong> <?php echo esc_html( get_search_query() ); ?>
                </h1>
                <?php else :?>
                <h1 class="idt-banner-4__title5 idt-title">
                    <strong><?php _e( 'No result found', 'insomniodev' ); ?></strong>
                </h1>
                <?php endif;?>
            </div>
        </div>
    </section>
    <div id="idt-main">
        <main class="idt-section idt-main-content">
            <div class="container">
                <div class="idt-section-wrap">
                    <div class="row">
                        <div class="col-lg-9 col-xxl-9">
                            <div class="idt-search-results idt-blog-posts">
                                <div class="content-result">
                                    <?php while( have_posts() ): the_post();?>
                                    <div class="col-12">
                                        <?php
                                        $post = get_post();
                                        $title = $idt_helper->getTruncateString( $post->post_title, 54 );
                                        $content = $idt_helper->getTruncateString( get_the_content(), 130 );
                                        $date = get_the_date('d M, Y', $post->ID );
                                        $imageID = get_post_thumbnail_id( $post->ID );
                                        $image = [];
                                        if( $imageID != 0 ){
                                            $image = [
                                                'url' => wp_get_attachment_image_src( $imageID, 'full' )[0],
                                                'alt' => get_post_meta( $imageID, '_wp_attachment_image_alt', true ),
                                            ];
                                        }
                                        $categories = wp_get_post_categories( $post->ID );
                                        $url = get_post_permalink( $post->ID );
                                        $cta = [];
                                        if( isset( $url ) && $url != '' )
                                            $cta = [
                                                'title' => __('Read more', 'insomniodev-child'),
                                                'url' => $url
                                            ];

                                        $args = [
                                            'title' => ( isset( $title ) && $title != '' ) ? $title : null,
                                            'content' => ( isset( $content ) && $content != '' ) ? $content : null,
                                            'date' => ( isset( $date ) && $date != '' ) ? $date : null,
                                            'cta' => ( isset( $cta ) && !empty( $cta ) ) ? $cta : null,
                                            'categories' => ( isset( $categories ) && !empty( $categories ) ) ? $categories : null,
                                            'image' => ( isset( $image ) && !empty( $image ) ) ? $image : null,
                                        ];
                                        ?>
                                        <?php get_template_part( 'sections/posts/post/post', 'card-small', $args );?>
                                    </div>
                                    <?php endwhile; wp_reset_query();?>
                                    <?php get_template_part( 'sections/blog/pagination' );?>
                                </div>
                            </div>
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
        </main>
    </div>
    <?php get_template_part('sections/posts/share/share-modal', 'master' ); ?>
</div>
<?php get_footer(); ?>