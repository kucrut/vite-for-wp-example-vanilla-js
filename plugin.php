<?php
/**
 * Plugin Name: Vite for WP example: Vanilla JS
 * Description: A plugin to demonstrate Vite for WP integration.
 * Author: Dzikri Aziz
 * Author URI: https://dz.aziz.im
 * License: GPLv2
 * Version: 0.0.1
 */

namespace Kucrut\ViteForWPExample\VanillaJS;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/inc/frontend.php';

Frontend\bootstrap();
