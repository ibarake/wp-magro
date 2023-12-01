<?php
if ( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly.
$helper = new ld_helper();
$options = $helper->getThemeOptions( 'logos' );
$logo = $options[ 'default' ];
$placeholder = IDT_THEME_DIR . '/admin/assets/images/placeholder-4-4.png';

if ( !isset( $logo ) || $logo[ 'id' ] == 0 ) {
	$logo[ 'id' ] = 1;
}

if ( !isset( $logo ) || $logo[ 'url' ] == '' ) {
	$logo[ 'url' ] = IDT_THEME_DIR . '/admin/assets/images/no-image.jpg';
}
?>
<div class="idt-admin-title-container">
	<h1 class="idt-admin-title"><?php _e( 'Logo', 'insomniodev' );?></h1>
</div>
<div class="idt-admin-toolbar idt-container">
    <button class="button idt-save-settings" data-section="logos"><?php _e( 'Save', 'insomniodev' );?></button>
</div>
<div class="idt-admin-logos idt-container" id="idt-admin-logos">
	<div class="idt-image-manager">
		<div class="idt-image-preview-wrapper">
			<img class="idt-image-preview" src="<?php echo $placeholder;?>" style="background-image: url(<?php echo $logo[ 'url' ];?>)">
		</div>
		<button type="button" class="button idt-btn-upload-image"><?php _e( 'Select image', 'insomniodev' );?></button>
		<input type="hidden" class="idt-image-url" name="ld_logo_url" id="idt-logo-url" value="<?php echo $logo[ 'url' ];?>">
		<input type="hidden" class="idt-image-id" name="ld_logo_id" id="idt-logo-id" value="<?php echo $logo[ 'id' ];?>">
	</div>
</div>
