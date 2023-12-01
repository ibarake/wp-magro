<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
$helper = new ld_helper();
$options = $helper->getThemeOptions( 'menu' );
$active_dropdown = $options[ 'active_dropdown' ];
?>
<div class="idt-admin-title-container">
    <h1 class="idt-admin-title"><?php _e( 'Menu', 'insomniodev' );?></h1>
</div>
<div class="idt-admin-toolbar idt-container">
    <button class="button idt-save-settings" data-section="menu"><?php _e( 'Save', 'insomniodev' );?></button>
</div>
<div class="idt-admin-menus idt-container" id="idt-admin-menu">
    <div class="idt-image-manager">
        <h2 class="idt-admin-title-inter"><?php _e( 'Mobile Menu Options', 'insomniodev' );?></h2>
        <div class="idt-input-container">
            <input type="checkbox" class="form-check-input" id="idt-check-drop-down-mobile"<?php if( $active_dropdown == 'true' ) echo ' checked ' ?>>
            <label class="form-check-label" for="idt-check-drop-down-mobile"><?php _e( 'Activate drop-down menu in mobile menu', 'insomniodev' );?></label>
        </div>
    </div>
</div>
