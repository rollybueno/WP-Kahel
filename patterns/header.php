<?php
/**
 * Title: Header
 * Slug: kahel/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with logo, navigation, and action buttons.
 *
 * @package Kahel
 * @since   1.0.0
 */
?>
<!-- wp:group {"metadata":{"name":"Header shell"},"className":"header-shell","align":"full","backgroundColor":"orange","layout":{"type":"constrained","contentSize":"1440px"}} -->
<div class="wp-block-group alignfull header-shell has-orange-background-color has-background"><!-- wp:group {"metadata":{"name":"Header bar"},"className":"header-bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group header-bar"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false} /-->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:group {"metadata":{"name":"Header actions"},"className":"header-actions nav-actions","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group header-actions nav-actions"><!-- wp:paragraph {"className":"header-login"} -->
<p class="header-login"><a href="#">Log in</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-header-primary"} -->
<div class="wp-block-button is-style-header-primary"><a class="wp-block-button__link wp-element-button">Start now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
