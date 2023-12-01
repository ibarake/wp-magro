<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Template part con la estructura de una card de post recientes del blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Insomnio DEV Child
 * @since 1.0
 * @version 1.0
 */
global $idt_helper;
$placeholder = IDT_THEME_CHILD_DIR . '/assets/images/placeholder-4-3.png';

$post = get_post();
$image = $idt_helper->getPostThumbnail( $post->ID );
$categories = wp_get_post_categories( $post->ID );
$excerpt = $idt_helper->getTruncateString( get_the_content(), 130 );


$figures = [
    "arrow" => IDT_THEME_CHILD_DIR . '/assets/images/icon-arrow-circle-blog.svg',
];
?>
<div itemscope itemtype="http://schema.org/Article" class="idt-post-card idt-post-card-small">
    <div class="idt-post-card-small__box">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="idt-post-card-small__img-container">
                    <a href="<?php echo get_post_permalink( $post->ID );?>">
                        <img class="idt-post-card-small__image idt-holder idt-lazy"
                            src="<?php echo $placeholder;?>" alt="<?php echo $image[ 'alt' ];?>"
                            data-src="<?php echo $image[ 'src' ];?>">
                    </a>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="idt-post-card-small__wrapper">
                    <div class="row">
                        <div class="col-7">
                            <?php if ( $categories ) :?>
                            <ul class="idt-post-card-small__category">
                                <?php foreach ( $categories as $category ) :?>
                                <?php $category = get_category( $category );?>
                                <li itemprop="category"><a
                                        href="<?php echo get_category_link( $category );?>"><?php echo $category->name;?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif;?>
                        </div>

                        <div class="col-5">
                            <span class="idt-post-card-small__date"><?php echo get_the_date('d M, Y'); ?></span>
                        </div>
                    </div>

                    <div class="row align-items-end">
                        <div class="col-lg-10">
                            <div class="idt-post-card-small__content">
                                <a href="<?php echo get_post_permalink( $post->ID );?>">
                                    <h3 class="idt-post-card-small__title"><?php echo $post->post_title;?></h3>
                                </a>

                                <div class="idt-post-card-small__excerpt">
                                    <p><?php echo $excerpt;?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 text-end">
                            <a class="idt-post-card-small__cta" href="<?php echo $configs[ 'link' ];?>">
                                <?php if ( isset( $figures[ 'arrow' ] ) && !empty( $figures[ 'arrow' ] ) ):?>
                                <img class="idt-post-card-small__arrow" src="<?php echo $figures[ 'arrow' ];?>"
                                    alt="flecha right" width="30" height="30" loading="lazy">
                                <?php endif;?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>