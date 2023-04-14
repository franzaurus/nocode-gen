<?php
/**
 * Title: Quote with a circular image
 * Slug: quote-with-a-circular-image
 * Description: Add a quote with a circular image in your post. Also suitable for testimonial section.
 * Categories: featured, text, testimonials
 * Keywords: 
 * Viewport Width: 1120
 * Block Types: core/image, core/quote
 * Post Types: 
 * Inserter: true
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"className":"is-style-dots"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
<!-- /wp:separator -->

<!-- wp:image {"align":"center","id":394,"width":150,"height":150,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/pexels-photo-415829-1024x903.jpeg" alt="" class="wp-image-394" width="150" height="150"/></figure>
<!-- /wp:image -->

<!-- wp:quote {"align":"center"} -->
<blockquote class="wp-block-quote has-text-align-center"><!-- wp:paragraph -->
<p>"Not all who wander are lost."</p>
<!-- /wp:paragraph --><cite>JRR Tolkien</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:separator {"className":"is-style-dots"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
