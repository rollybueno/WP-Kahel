<?php
/**
 * Title: Footer
 * Slug: kahel/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with brand, navigation columns, and legal links.
 *
 * @package Kahel
 * @since   1.0.0
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","className":"footer section-bordered","backgroundColor":"background-inverse","textColor":"text-inverse","style":{"spacing":{"padding":{"top":"72px","bottom":"38px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull footer section-bordered has-background-inverse-background-color has-text-inverse-color has-background has-text-color"><!-- wp:group {"metadata":{"name":"Footer shell"},"className":"footer-shell","layout":{"type":"constrained","contentSize":"1440px"},"style":{"spacing":{"padding":{"left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-group footer-shell"><!-- wp:columns {"className":"footer-grid","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns footer-grid"><!-- wp:column {"width":"40%","className":"footer-brand"} -->
<div class="wp-block-column footer-brand" style="flex-basis:40%"><!-- wp:site-title {"level":0,"className":"footer-logo","style":{"typography":{"fontStyle":"italic","fontSize":"31px","fontWeight":"700"}}} /-->

<!-- wp:paragraph {"className":"footer-copy","fontSize":"small"} -->
<p class="footer-copy has-small-font-size">Get the latest news and updates delivered weekly.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-note","fontSize":"xs"} -->
<p class="footer-note has-xs-font-size">We respect your privacy and only send what matters.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-nav"} -->
<div class="wp-block-column footer-nav"><!-- wp:heading {"level":3,"fontSize":"small"} -->
<h3 class="wp-block-heading has-small-font-size">Company</h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-nav"} -->
<div class="wp-block-column footer-nav"><!-- wp:heading {"level":3,"fontSize":"small"} -->
<h3 class="wp-block-heading has-small-font-size">Resources</h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"className":"footer-nav footer-social"} -->
<div class="wp-block-column footer-nav footer-social"><!-- wp:heading {"level":3,"fontSize":"small"} -->
<h3 class="wp-block-heading has-small-font-size">Follow us</h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"text-inverse","iconColorValue":"#FFFFFF","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"footer-bottom","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group footer-bottom"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">© Chronicle Press. All rights reserved.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"footer-legal","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"32px"}}} -->
<div class="wp-block-group footer-legal"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#">Privacy policy</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#">Terms of service</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#">Cookies settings</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
