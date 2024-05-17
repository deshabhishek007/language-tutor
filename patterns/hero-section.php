<?php
/**
 * Title: Hero Section
 * Slug: language-tutor/hero-section
 * Categories: language-tutor, hero-section
 *
 * PHP version 7.4
 *
 * @category Language_Tutor
 * @package  Language_Tutor
 * @author   Abhishek Deshpande <abhishek@whoisabhi.com>
 * @license  GNU General Public License v3
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<main id="hero" class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/language-hero.jpg')); ?>","dimRatio":70,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","gradient":"custom-color-1","contentPosition":"center center","align":"full","style":{"color":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient has-custom-color-1-gradient-background"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('assets/images/language-hero.jpg')); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"72px","letterSpacing":"1px","lineHeight":"1.17","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"open-sans"} -->
<h2 class="wp-block-heading has-text-align-center has-open-sans-font-family" style="font-size:72px;font-style:normal;font-weight:600;letter-spacing:1px;line-height:1.17">Study English Online</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px","lineHeight":"1.55","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"open-sans"} -->
<p class="has-text-align-center has-open-sans-font-family" style="font-size:22px;font-style:normal;font-weight:400;line-height:1.55">With private sessions, you may easily and affordably learn English online. Learn from the top instructors and native speakers.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-accent","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"15px","bottom":"15px"}},"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-accent"}}}},"fontFamily":"open-sans"} -->
<div class="wp-block-button has-custom-font-size has-open-sans-font-family" style="font-size:16px"><a class="wp-block-button__link has-custom-accent-color has-text-color has-link-color wp-element-button" style="padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px">Reserve a complimentary trial lesson</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->
