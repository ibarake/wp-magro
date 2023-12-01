<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.


class ld_most_popular_posts extends WP_Widget {

    public $args = [];

    function __construct() {
	    parent::__construct(
		    'idt-most-popular-posts',  // Base ID
		    'Las entradas más vistas de tu sitio'   // Name
	    );

    }

    public function widget( $args, $instance ) {
        $loop = new WP_Query([
            'post_type' => 'post',
            'meta_key' => 'post_views',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'posts_per_page'  => 5,
            'post_status' => 'publish',
        ]);
        ?>

<section class="idt-widget idt-widget-most-popular-posts">
    <?php if( $instance["ld_widget_title"] != '' ): ?>
    <h2 class="idt-widget-title"><?= $instance["ld_widget_title"] ?></h2>
    <?php endif; ?>
    <ul>
        <?php $i = 0;
                while ( $loop->have_posts() ): $loop->the_post(); $i++;
                $post = get_post();
                ?>
        <li class="post-item cat-item-<?= $post->ID ?>">
            <div itemscope itemtype="http://schema.org/ScholarlyArticle"
                class="post-item__container d-flex ustify-content-between">
                <div class="post-item__number"><?= $i ?></div>
                <div class="post-item__content">
                    <a href="<?= get_post_permalink( $post->ID ) ?>">
                        <h3 class="post-item__title"><?= $post->post_title ?></h3>
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <span class="idt-post-card__date"><?= get_the_date( 'd M, Y' ) ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
</section>
<?php
    }

    function update($new_instance, $old_instance){
        $instance = $old_instance;
        $instance["ld_widget_title"] = strip_tags($new_instance["ld_widget_title"]);
        // Repetimos esto para tantos campos como tengamos en el formulario.
        return $instance;
    }

    function form($instance){
        ?>
<p>
    <label for="<?php echo $this->get_field_id('ld_widget_title'); ?>">Título:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('ld_widget_title'); ?>"
        name="<?php echo $this->get_field_name('ld_widget_title'); ?>" type="text"
        value="<?php echo esc_attr($instance["ld_widget_title"]); ?>" />
</p>
<?php
    }
}

?>