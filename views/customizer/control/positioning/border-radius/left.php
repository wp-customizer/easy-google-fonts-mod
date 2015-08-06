<?php 
/**
 * Bottom Left Border Radius Control
 *
 * Outputs a jquery ui slider to allow the
 * user to control the bottom left border-radius
 * of an element.
 * 
 * @package   Easy_Google_Fonts
 * @author    Sunny Johal - Titanium Themes <support@titaniumthemes.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins/easy-google-fonts/
 * @copyright Copyright (c) 2015, Titanium Themes
 * @version   1.3.8
 * 
 */
?>
<#
	// Get settings and defaults.
	var egfBorderRadiusBottomLeft = typeof egfSettings.border_radius_bottom_left !== "undefined" ? egfSettings.border_radius_bottom_left : data.egf_defaults.border_radius_bottom_left;
#>
<div class="egf-font-slider-control egf-border-radius-bottom-left-slider">
	<span class="egf-slider-title"><?php _e( 'Bottom Left', 'easy-google-fonts' ); ?></span>
	<div class="egf-font-slider-display">
		<span>{{ egfBorderRadiusBottomLeft.amount }}{{ data.egf_defaults.border_radius_bottom_left.unit }}</span> | <a class="egf-font-slider-reset" href="#"><?php _e( 'Reset', 'easy-google-fonts' ); ?></a>
	</div>
	<div class="egf-clear" ></div>
	
	<!-- Slider -->
	<div class="egf-slider" value="{{ egfBorderRadiusBottomLeft.amount }}"></div>
	<div class="egf-clear"></div>
</div>
