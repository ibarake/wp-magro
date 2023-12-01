<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/*
 * Clase con funciones de ayuda del tema hijo
 * @version 0.0.1
*/
class idt_child_helper {

    /*
	 * Retorna un arreglo de opciones del tema
	 * @param $post_id int Identificador del post
	 * @return array arreglo con las configuraciones del template del home
	 */
    public function getHomeOptions( $post_id = 0 ) {
        $args = [
            'carousel' => [
                'items' => null,
            ],
            'carousel_2' => [
                'active' => null,
                'title' => null,
                'content' => null,
                'cta' => null,
                'items' => null,
            ],
            'content' => [
                'active' => null,
                'items' => null,
            ],
            'content_2' => [
                'active' => null,
                'title' => null,
                'cta' => null,
                'type' => null,
                'items' => null,
                'content' => null,
                'image' => null,
            ],
            'blog' => [
                'active' => null,
                'items' => null,
            ],
        ];
        if ( class_exists( 'ACF' ) ) {
            $args[ 'carousel' ][ 'items' ] = get_field( 'loop_banners', $post_id );

            $args[ 'carousel_2' ][ 'active' ] = get_field( 'act_products', $post_id );
            $args[ 'carousel_2' ][ 'title' ] = get_field( 'title_products', $post_id );
            $args[ 'carousel_2' ][ 'content' ] = get_field( 'content_products', $post_id );
            $args[ 'carousel_2' ][ 'cta' ] = get_field( 'cta_products', $post_id );
            $args[ 'carousel_2' ][ 'items' ] = get_field( 'loop_products', $post_id );

            $args[ 'content' ][ 'active' ] = get_field( 'act_content', $post_id );
            $args[ 'content' ][ 'items' ] = get_field( 'loop_content', $post_id );

            $args[ 'content_2' ][ 'active' ] = get_field( 'act_distributors', $post_id );
            $args[ 'content_2' ][ 'title' ] = get_field( 'title_distributors', $post_id );
            $args[ 'content_2' ][ 'cta' ] = get_field( 'cta_distributors', $post_id );
            $args[ 'content_2' ][ 'type' ] = get_field( 'type_content', $post_id );
            $args[ 'content_2' ][ 'items' ] = get_field( 'list_distributors', $post_id );
            $args[ 'content_2' ][ 'content' ] = get_field( 'content_distributor', $post_id );
            $args[ 'content_2' ][ 'image' ] = get_field( 'image_section_distributors', $post_id );
            $args[ 'content_2' ][ 'background' ] = get_field( 'image_distributors', $post_id );

            $args[ 'blog' ][ 'active' ] = get_field( 'act_blog', $post_id );
            $args[ 'blog' ][ 'items' ] = $this->getPostsBLog();

        }
        return $args;
    }


    /*
     * Retorna un arreglo de opciones del tema
     * @param $post_id int Identificador del post
     * @return array arreglo con las configuraciones del template de sobre nosotros - (tpl-about-us.php)
     */
    public function getAboutUsOptions( $post_id = 0 ) {
        $args = [
            'banner' => [
                'title' => null,
                'content' => null,
                'cta' => null,
                'images' => null,
            ],
            'carousel' => [
                'active' => null,
                'title' => null,
                'items' => null,
            ],
            'content' => [
                'active' => null,
                'items' => null,
            ],
            'grid' => [
                'active' => null,
                'title' => null,
                'content' => null,
                'items' => null,
            ],
            'grid_2' => [
                'active' => null,
                'title' => null,
                'content' => null,
                'items' => null,
                'class' => null,
            ],
            'blog' => [
                'active' => null,
                'items' => null,
            ],
        ];
        if ( class_exists( 'ACF' ) ) {
            $args[ 'banner' ][ 'title' ] = get_field( 'title_banner', $post_id );
            $args[ 'banner' ][ 'content' ] = get_field( 'content_banner', $post_id );
            $args[ 'banner' ][ 'cta' ] = get_field( 'cta_banner', $post_id );
            $args[ 'banner' ][ 'images' ] = get_field( 'images_banner', $post_id );

            $args[ 'carousel' ][ 'active' ] = get_field( 'act_our_history', $post_id );
            $args[ 'carousel' ][ 'title' ] = get_field( 'title_our_history', $post_id );
            $args[ 'carousel' ][ 'items' ] = get_field( 'loop_our_history', $post_id );

            $args[ 'content' ][ 'active' ] = get_field( 'act_content', $post_id );
            $args[ 'content' ][ 'items' ] = get_field( 'loop_content', $post_id );

            $args[ 'grid' ][ 'active' ] = get_field( 'act_sustainability', $post_id );
            $args[ 'grid' ][ 'title' ] = get_field( 'title_sustainability', $post_id );
            $args[ 'grid' ][ 'content' ] = get_field( 'content_sustainability', $post_id );
            $args[ 'grid' ][ 'items' ] = get_field( 'loop_sustainability', $post_id );

            $args[ 'grid_2' ][ 'active' ] = get_field( 'act_sustainability_2', $post_id );
            $args[ 'grid_2' ][ 'title' ] = get_field( 'title_sustainability_2', $post_id );
            $args[ 'grid_2' ][ 'content' ] = get_field( 'content_sustainability_2', $post_id );
            $args[ 'grid_2' ][ 'items' ] = get_field( 'loop_sustainability_2', $post_id );
            $args[ 'grid_2' ][ 'class' ] = 'idt-grid-2--style-2';

            $args[ 'blog' ][ 'active' ] = get_field( 'act_blog', $post_id );
            $args[ 'blog' ][ 'items' ] = $this->getPostsBLog();

        }
        return $args;
    }

    /*
     * Retorna un arreglo de opciones del tema
     * @param $post_id int Identificador del post
     * @return array arreglo con las configuraciones del template de sobre nosotros - (tpl-about-us.php)
     */
    public function getServicesOptions( $post_id = 0 ) {
        $args = [
            'banner' => [
                'title' => null,
                'content' => null,
                'cta' => null,
                'images' => null,
            ],
            'grid' => [
                'active' => null,
                'content' => null,
                'image' => null,
                'image_left' => true,
            ],
            'grid_loop' => [
                'active' => null,
                'items' => null,
            ],
            'grid_1' => [
                'active' => null,
                'title' => null,
                'content' => null,
                'image' => null,
                'image_left' => true,
                'align_center' => true,
                'justify_between' => true,
                'style' => 1
            ],
            'blog' => [
                'active' => null,
                'items' => null,
            ],
        ];
        if ( class_exists( 'ACF' ) ) {
            $args[ 'banner' ][ 'title' ] = get_field( 'title_banner', $post_id );
            $args[ 'banner' ][ 'content' ] = get_field( 'content_banner', $post_id );
            $args[ 'banner' ][ 'cta' ] = get_field( 'cta_banner', $post_id );
            $args[ 'banner' ][ 'images' ] = get_field( 'images_banner', $post_id );

            $args[ 'grid' ][ 'active' ] = get_field( 'active_grid', $post_id );
            $args[ 'grid' ][ 'title' ] = get_field( 'title_grid', $post_id );
            $args[ 'grid' ][ 'content' ] = get_field( 'content_grid', $post_id );
            $args[ 'grid' ][ 'image' ] = get_field( 'image_grid', $post_id );

            $args[ 'grid_loop' ][ 'active' ] = get_field( 'active_grid_loop', $post_id );
            $args[ 'grid_loop' ][ 'items' ] = get_field( 'items_grid_loop', $post_id );

            $args[ 'grid_1' ][ 'active' ] = get_field( 'active_grid_1', $post_id );
            $args[ 'grid_1' ][ 'title' ] = get_field( 'title_grid_1', $post_id );
            $args[ 'grid_1' ][ 'content' ] = get_field( 'content_grid_1', $post_id );
            $args[ 'grid_1' ][ 'image' ] = get_field( 'image_grid_1', $post_id );

            $args[ 'blog' ][ 'active' ] = get_field( 'act_blog', $post_id );
            $args[ 'blog' ][ 'items' ] = $this->getPostsBLog();

        }
        return $args;
    }


    /*
     * Retorna un arreglo de opciones del tema
     * @param $post_id int Identificador del post
     * @return array arreglo con las configuraciones del template de sobre nosotros - (tpl-about-us.php)
     */
    public function getContactUsOptions( $post_id = 0 ) {
        $args = [
            'banner' => [
                'title' => null,
                'content' => null,
                'shortcode' => null,
            ],
            'banner_2' => [
                'active' => null,
                'title' => null,
                'cta' => null,
                'image' => null,
            ],
            'carousel' => [
                'active' => null,
                'title' => null,
                'content' => null,
                'items_carousel' => null,
                'items_locations' => null,
                'image' => null,
                'id'=> null,
            ],
            'tab' => [
                'active' => null,
                'items' => null,
                'class' => null,
                'id' => null,
            ],
            'blog' => [
                'active' => null,
                'items' => null,
            ],
        ];
        if ( class_exists( 'ACF' ) ) {
            $args[ 'banner' ][ 'title' ] = get_field( 'contact_title', $post_id );
            $args[ 'banner' ][ 'content' ] = get_field( 'contact_content', $post_id );
            $args[ 'banner' ][ 'shortcode' ] = get_field( 'shortcode_form', $post_id );

            $args[ 'banner_2' ][ 'active' ] = get_field( 'act_banner', $post_id );
            $args[ 'banner_2' ][ 'title' ] = get_field( 'title_banner', $post_id );
            $args[ 'banner_2' ][ 'cta' ] = get_field( 'cta_banner', $post_id );
            $args[ 'banner_2' ][ 'image' ] = get_field( 'image_banner', $post_id );

            $args[ 'carousel' ][ 'active' ] = get_field( 'act_carousel', $post_id );
            $args[ 'carousel' ][ 'title' ] = get_field( 'office_title', $post_id );
            $args[ 'carousel' ][ 'content' ] = get_field( 'office_content', $post_id );
            $args[ 'carousel' ][ 'items_carousel' ] = get_field( 'loop_consultants', $post_id );
            $args[ 'carousel' ][ 'items_locations' ] = get_field( 'loop_locations', $post_id );
            $args[ 'carousel' ][ 'image' ] = get_field( 'office_image', $post_id );
            $args[ 'carousel' ][ 'id' ] = 'idt-carousel-4';

            $args[ 'tab' ][ 'active' ] = get_field( 'act_distributor', $post_id );
            $args[ 'tab' ][ 'items' ] = get_field( 'loop_distributor', $post_id );
            $args[ 'tab' ][ 'class' ] = ' idt-tab-1--style-2';
            $args[ 'tab' ][ 'id' ] = 'idt-tab-1-';

            $args[ 'blog' ][ 'active' ] = get_field( 'act_blog', $post_id );
            $args[ 'blog' ][ 'items' ] = $this->getPostsBLog();

        }
        return $args;
    }


    /*
     * Retorna un arreglo de opciones del tema
     * @param $post_id int Identificador del post
     * @return array arreglo con las configuraciones del template de Distribuidores - (tpl-distributor.php)
     */
    public function getDistributorOptions( $post_id = 0 ) {
        $args = [
            'tab' => [
                'title' => null,
                'items' => null,
                'id' => null,
            ],
            'main' => [
                'active' => null,
                'title' => null,
                'cta' => null,
                'type' => null,
                'content' => null,
                'items' => null,
                'image' => null,
                'background' => null,
                'class' => null,
            ],
            'info' => [
                'active' => null,
                'title' => null,
                'content' => null,
            ],
            'form' => [
                'active' => null,
                'title' => null,
                'shortcode' => null,
            ],
        ];
        if ( class_exists( 'ACF' ) ) {
            $args[ 'tab' ][ 'title' ] = get_field( 'title_distributor', $post_id );
            $args[ 'tab' ][ 'items' ] = get_field( 'loop_distributor', $post_id );
            $args[ 'tab' ][ 'id' ] = 'idt-tab-1-';

            $args[ 'main' ][ 'active' ] = get_field( 'act_main', $post_id );
            $args[ 'main' ][ 'title' ] = get_field( 'title_main', $post_id );
            $args[ 'main' ][ 'cta' ] = get_field( 'cta_main', $post_id );
            $args[ 'main' ][ 'type' ] = get_field( 'type_content', $post_id );
            $args[ 'main' ][ 'items' ] = get_field( 'list_distributors', $post_id );
            $args[ 'main' ][ 'content' ] = get_field( 'content_main', $post_id );
            $args[ 'main' ][ 'image' ] = get_field( 'image_main', $post_id );
            $args[ 'main' ][ 'background' ] = get_field( 'background_main', $post_id );
            $args[ 'main' ][ 'class' ] = 'idt-content-2--style-2';

            $args[ 'info' ][ 'active' ] = get_field( 'act_info', $post_id );
            $args[ 'info' ][ 'title' ] = get_field( 'title_info', $post_id );
            $args[ 'info' ][ 'content' ] = get_field( 'content_info', $post_id );

            $args[ 'form' ][ 'active' ] = get_field( 'act_form', $post_id );
            $args[ 'form' ][ 'title' ] = get_field( 'title_form', $post_id );
            $args[ 'form' ][ 'shortcode' ] = get_field( 'shortcode_form', $post_id );

        }
        return $args;
    }


    /*
    * Retorna un arreglo de opciones del tema
    * @param $post_id int Identificador del post
    * @return array arreglo con las configuraciones del template de Talent
    */
    public function getTalentOptions( $post_id = 0 ) {
        global $idt_helper;
        $args = [
            'grid_1' => [
                'activate' => null,
                'title' => null,
                'sub_title' => null,
                'content' => null,
                'image' => null,
            ],
            'main' => [
                'activate' => null,
                'items' => null,
                'id' => null,
            ],
            'form' => [
                'activate' => null,
                'title' => null,
                'content' => null,
                'shortcode' => null,
                'image' => null,
            ],
        ];
        if ( class_exists( 'ACF' ) ) {
            $args['grid_1']['activate'] = get_field('activate_grid_1', $post_id);
            $args[ 'grid_1' ][ 'title' ] = get_field( 'title_grid_1', $post_id );
            $args[ 'grid_1' ][ 'sub_title' ] = get_field( 'sub_title_grid_1', $post_id );
            $args[ 'grid_1' ][ 'content' ] = get_field( 'content_grid_1', $post_id );
            $args[ 'grid_1' ][ 'image' ] = get_field( 'image_grid_1', $post_id );

            $args['main']['activate'] = get_field('activate_main', $post_id);
            $args[ 'main' ][ 'items' ] = [];
            $args[ 'main' ][ 'id' ] = 'idt-carousel-5';

            $args[ 'form' ][ 'activate' ] = get_field( 'activate_form', $post_id );
            $args[ 'form' ][ 'title' ] = get_field( 'title_form', $post_id );
            $args[ 'form' ][ 'content' ] = get_field( 'content_form', $post_id );
            $args[ 'form' ][ 'shortcode' ] = get_field( 'shortcode_form', $post_id );
            $args[ 'form' ][ 'image' ] = get_field( 'image_form', $post_id );


            if (!empty(get_field('items_main', $post_id))) {
                foreach (get_field('items_main', $post_id) as $item) :
                    $args['main']['items'][] = [
                        'title' => $item['title'],
                        'title_vacant' => $item['title_vacant'],
                        'content' => $item['content'],
                        'location' => $item['location'],
                        'experience' => $item['experience'],
                        'working_time' => $item['working_time'],
                        'cta' => $item['cta'],
                        'icon_location' => $item['icon_location'],
                        'icon_working_time' => $item['icon_working_time'],
                        'icon_experience' => $item['icon_experience'],
                    ];
                endforeach;
            }

        }
        return $args;
    }


    /*
     * Retorna un arreglo de opciones del tema
     * @param $post_id int Identificador del post
     * @return array arreglo con las configuraciones del template de productos - (tpl-products.php)
     */
    public function getProductsOptions( $post_id = 0 ) {
        $args = [
            'banner' => [
                'title' => null,
                'content' => null,
                'cta' => null,
                'images' => null,
            ],
            'products' => [
                'active' => null,
                'title' => null,
                'content' => null,
                'cta' => null,
                'items' => null,
            ],
            'grid_1' => [
                'active' => null,
                'title' => null,
                'content' => null,
                'image' => null,
                'image_left' => false,
                'align_center' => true,
                'justify_between' => true,
                'style' => 1,
                'class' => null,

            ],
            'blog' => [
                'active' => null,
                'items' => null,
            ],
        ];
        if ( class_exists( 'ACF' ) ) {
            $args[ 'banner' ][ 'title' ] = get_field( 'title_banner', $post_id );
            $args[ 'banner' ][ 'content' ] = get_field( 'content_banner', $post_id );
            $args[ 'banner' ][ 'cta' ] = get_field( 'cta_banner', $post_id );
            $args[ 'banner' ][ 'images' ] = get_field( 'images_banner', $post_id );

            $args['products']['active'] = get_field('act_products', $post_id);
            $args['products']['title'] = get_field('title_product', $post_id);
            $args['products']['content'] = get_field('content_product', $post_id);
            $args['products']['cta'] = get_field('cta_product', $post_id);
            $args['products']['items'] = [];

            $items = [];
            $catalog_categories = get_terms( 'catalog_category', array(
                'hide_empty' => false,
            ) );

            foreach ($catalog_categories as $category) {
                $image_id = get_term_meta($category->term_id, 'image_category_product', true);
                $img = wp_get_attachment_image_src( $image_id, 'full' );

                $items[] = [
                    'title' => $category->name,
                    'cta' => get_term_link($category->term_id),
                    'image' => [
                        'url' => $img[0],
                        'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', true),
                        'width' => $img[1],
                        'height' => $img[2],
                    ],
                    'link' => get_term_link($category->term_id),
                    'id' => $category->term_id,
                ];
            }
            $args['products']['items'] = $items;


            $args['featured']['active'] = get_field('act_featured_products', $post_id);
            $args['featured']['title'] = get_field('title_featured_products', $post_id);
            $args['featured']['items'] = [];

             $posts = new WP_Query([
                 'post_type' => 'catalog',
                 'order' => 'DESC',
                 'post_status' => 'publish',
                 'posts_per_page' => -1,
             ]);

             while ($posts->have_posts()) : $posts->the_post();
                 $post = get_post();
                 $image_id = get_post_thumbnail_id();

                 $image = [
                     'url' => wp_get_attachment_image_src($image_id, 'full')[0],
                     'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', true),
                 ];

                 $items[] = [
                     'title' => get_the_title(),
                     'content' => get_the_content(),
                     'cta' => get_post_permalink(),
                     'image' => $image,
                     'id' => get_the_ID(),
                 ];
             endwhile;
            $args['featured']['items'] = $items;

            $args[ 'grid_1' ][ 'active' ] = get_field( 'active_grid_1', $post_id );
            $args[ 'grid_1' ][ 'title' ] = get_field( 'title_grid_1', $post_id );
            $args[ 'grid_1' ][ 'content' ] = get_field( 'content_grid_1', $post_id );
            $args[ 'grid_1' ][ 'image' ] = get_field( 'image_grid_1', $post_id );
            $args[ 'grid_1' ][ 'class' ] = 'idt-grid-1--style-2';

            $args[ 'blog' ][ 'active' ] = get_field( 'act_blog', $post_id );
            $args[ 'blog' ][ 'items' ] = $this->getPostsBLog();

        }
        return $args;
    }


    /*
     * Retorna un arreglo de opciones del tema
     * @param $post_id int Identificador del post
     * @return array arreglo con las configuraciones del template de categoría de productos - (taxonomy-catalog_category.php)
     */
    public function getTplCategoryProductOptions( $post_id = 0 ) {
        $post_id = get_the_ID();

        $args = [
            'products' => [
                'items' => null,
            ],
            'blog' => [
                'active' => null,
                'items' => null,
            ],
        ];
        if ( class_exists( 'ACF' ) ) {
            $args['products']['items'] = [];
            $posts = new WP_Query([
                'post_type' => 'catalog',
                'order' => 'ASC',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'catalog_category',
                        'terms'    => get_queried_object_id(),
                    ]
                ],
            ]);

            while ($posts->have_posts()) : $posts->the_post();
                $id = get_the_ID();
                $image = [];
                $image_id = get_post_thumbnail_id($id);
                if( $image_id != 0) {
                    $image = [
                        'src' => wp_get_attachment_image_src( $image_id, 'full' )[0],
                        'alt' => get_post_meta( $image_id, '_wp_attachment_image_alt', true )
                    ];
                }
                $items[] = [
                    'title' => get_the_title(),
                    'content' => get_the_content(),
                    'image' => ( isset($image) && !empty($image)) ? $image : null,
                    'id' => get_the_ID(),
                    'price' => get_field( 'price_product', $id ),
                    'cta' => get_field( 'cta_product', $id ),
                    'title_tab' => get_field( 'title_tab', $id ),
                    'loop_tabs' => get_field( 'tabs', $id ),
                    'title_documents' => get_field( 'title_documents', $id ),
                    'loop_documents' => get_field( 'loop_documents', $id ),
                    'loop_specifications' => get_field( 'loop_specifications', $id ),
                ];
            endwhile;
            $args['products']['items'] = $items;

            // $args[ 'blog' ][ 'active' ] = get_field( 'act_blog', $post_id );
            $args[ 'blog' ][ 'items' ] = $this->getPostsBLog();

        }
        return $args;
    }



    /**
     * Función que obtiene todas las entradas del blog
     * @return void
     */
    public function getPostsBLog() {
        global $idt_helper;
        $items = [];
        $loop = new WP_Query( [
            'post_type' => 'post',
            'order' => 'ASC',
            'post_status' => 'publish',
            'posts_per_page' => 4,
        ] );

        while( $loop->have_posts() ) {
            $loop->the_post();
            $id = get_the_ID();
            $image = [];
            $image_id = get_post_thumbnail_id($id);
            if( $image_id != 0) {
                $image = [
                    'src' => wp_get_attachment_image_src( $image_id, 'full' )[0],
                    'alt' => get_post_meta( $image_id, '_wp_attachment_image_alt', true )
                ];
            }
            $items[] = [
                'title' => get_the_title(),
                'content' => $idt_helper->getTruncateString( get_the_content(), '85' ),
                'image' => ( isset($image) && !empty($image)) ? $image : null,
                'link' => get_post_permalink(),
                'category' => get_the_category($id),
                'date' => get_the_date( 'd M, Y' ),
            ];
        }
        wp_reset_query();
        return ( isset($items) && !empty($items)) ? $items : null;
    }

/*
     * Retorna un arreglo de opciones del tema
     * @param $post_id int Identificador del post
     * @return array arreglo con las configuraciones del template por defecto de "blog" default.php
     */
    public function getBlogOptions($post_id = 0)
    {
        $args = [
            'banner' => [
                'title' => null,
            ],
            
            'blog' => [
                'active' => null,
                'items' => null,
            ],
        ];
        if (class_exists('ACF')) {
            $id = get_queried_object_id();
            $args['banner']['title'] = get_field('banner_title', $id);

            $args[ 'blog' ][ 'active' ] = get_field( 'act_blog', $post_id );
            $args[ 'blog' ][ 'items' ] = $this->getPostsBLog();

        }
        return $args;
    }

    /*
     * Retorna un arreglo de opciones del tema
     * @param $post_id int Identificador del post
     * @return array arreglo con las configuraciones del template por defecto de "página" page.php
     */
    public function getPageDefaultOptions($post_id = 0)
    {
        $args = [
            'info' => [
                'title' => null,
                'content' => null,
            ],
        ];
        if (class_exists('ACF')) {
            $args['info']['title'] = get_the_title($post_id);
            $args['info']['content'] = get_the_content($post_id);
        }
        return $args;
    }

    /*
   * Retorna un arreglo de opciones del tema
   * @param $post_id int Identificador del post
   * @return array arreglo con las configuraciones del template de "Agradecimiento de los formularios". tpl-thp.php
   */

    public function getTplThanksOptions($post_id = 0)
    {
        $post_id = get_the_ID();

        $args = [
            'thp' => [
                'title' => null,
                'content' => null,
                'image' => null,
            ],

        ];

        $image_id = get_post_thumbnail_id($post_id);
        $image = [];
        if (get_post_thumbnail_id($post_id)) {
            $image = [
                'src' => wp_get_attachment_image_src($image_id, 'full')[0],
                'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', true)
            ];
        }


        if (class_exists('ACF')) {

            $args['thp']['title'] = get_the_title($post_id);
            $args['thp']['content'] = get_the_content($post_id);
            $args['thp']['image'] = (isset($image) && !empty($image)) ? $image : null;
        }
        return $args;
    }

}
