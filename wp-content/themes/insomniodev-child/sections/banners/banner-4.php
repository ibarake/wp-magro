<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
/**
 * Banner page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage InsomnioDEV
 * @since 1.0
 * @version 1.0
 */
$configs = [
    'title' => null,
];
if ( isset( $args ) && !empty( $args ) ) {
    $configs = array_merge( $configs, $args );
}
?>
<div class="idt-banner-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="idt-banner-4__title idt-title"><?php echo $configs['title']; ?></h1>
            </div>
        </div>
    </div>
</div>