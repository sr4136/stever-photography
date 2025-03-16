<?php

function stever_photography_default_post_content($content, $post) {
	// Initialize an empty string for default blocks
	$default_blocks = '';

	// Check if the post type is 'post'
	if ($post->post_type === 'post') {
		// Define your default blocks
		$default_blocks = [
			'<!-- wp:quote -->
            <blockquote class="wp-block-quote">
                <!-- wp:paragraph -->
                <p>Lorem ipsum text.</p>
                <!-- /wp:paragraph -->
            </blockquote>
            <!-- /wp:quote -->',

			'<!-- wp:group {"className":"has-10-items","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-10-items">
                <!-- wp:image {"id":11367,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large">
                    <img src="https://steverudolfi.com/photography/wp-content/uploads/2023/05/houses-7477950_1280_0-1024x1024.jpg" alt="" class="wp-image-11367"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":11365,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large">
                    <img src="https://steverudolfi.com/photography/wp-content/uploads/2023/05/houses-7477950_1280_2-1024x1024.jpg" alt="" class="wp-image-11365"/>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->'
		];

		// Combine the default blocks into a single string
		$content = implode("\n", $default_blocks);
	}

	return $content;
}
add_filter('default_content', 'stever_photography_default_post_content', 10, 2);