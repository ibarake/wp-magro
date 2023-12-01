<?php
if (!defined('ABSPATH')) exit; //Exit if accessed directly.
/**
 * Post estilo card
 * @package WordPress
 * @subpackage latindev
 * @since 1.0
 * @version 1.0
 */
global $idt_helper;
$placeholder = IDT_THEME_DIR . '/assets/images/placeholder-16-9.png';

$configs = [
    'title' => null,
    'content' => null,
    'cta' => null,
    'items' => null,
    'style' => null,
];

if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}

$post = get_post();
$image = $idt_helper->getPostThumbnail($post->ID);
$categories = wp_get_post_categories($post->ID);
$excerpt = $idt_helper->getTruncateString(get_the_content(), 130);

$icon_arrow = [
    'arrowRight' => IDT_THEME_CHILD_DIR . '/assets/images/icon-arrow-circle-blog.svg',
];
?>
<div itemscope itemtype="http://schema.org/Article" class="idt-post-card">
    <a href="<?php echo get_post_permalink($post->ID); ?>">
        <img class="idt-post__image idt-holder idt-lazy" src="<?php echo $placeholder; ?>"
            alt="<?php echo $image['alt']; ?>" data-src="<?php echo $image['src']; ?>">
    </a>
    <div class="idt-post-card__content">
        <div class="row idt-post-card__wrapper">
            <div class="col-8 col-md-9">
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
                <h2 class="idt-post-card__title"><a
                        href="<?php echo get_post_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h2>

            </div>
            <div class="col-4 col-md-3">
                <div class="idt-post-card__info">
                    <span class="idt-post-card__date"><?php echo get_the_date( 'd M, Y' );?></span>
                </div>
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col-lg-10">
                <p class="idt-post-card__excerpt"><?php echo $excerpt; ?></p>
            </div>
            <div class="col-lg-2 text-end">
                <a class="idt-post-card-small__cta" href="<?php echo $configs[ 'link' ];?>">
                    <?php if ( isset( $icon_arrow[ 'arrowRight' ] ) && !empty( $icon_arrow[ 'arrowRight' ] ) ):?>
                    <img class="idt-post-card-small__arrow" src="<?php echo $icon_arrow[ 'arrowRight' ];?>"
                        alt="flecha right" width="30" height="30" loading="lazy">
                    <?php endif;?>
                </a>
            </div>
        </div>
    </div>
</div>