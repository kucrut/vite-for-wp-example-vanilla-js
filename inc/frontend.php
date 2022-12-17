<?php

declare( strict_types = 1 );

namespace Kucrut\ViteForWPExample\VanillaJS\Frontend;

use Kucrut\Vite;

/**
 * Frontend bootstrapper
 *
 * @return void
 */
function bootstrap(): void {
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_script' );
	add_action( 'wp_footer', __NAMESPACE__ . '\\render_app' );
}

/**
 * Render application's markup
 */
function render_app(): void {
	?>
	<div id="my-app" class="my-app">
		<h2>Hello from Vite!</h2>
		<button type="button">Count is <span>0</span></button>
	</div>
	<?php
}

/**
 * Enqueue script
 */
function enqueue_script(): void {
	Vite\enqueue_asset(
		dirname( __DIR__ ) . '/app/dist',
		'app/src/main.js',
		[
			'handle' => 'vite-for-wp-vanilla',
			'in-footer' => true,
		]
	);
}
