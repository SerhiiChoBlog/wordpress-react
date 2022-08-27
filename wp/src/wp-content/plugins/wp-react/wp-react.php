<?php

declare(strict_types=1);

/*
Plugin Name: WP React
Author: Serhii Cho
Author URI: https://serhii.io
Description: Test plugin for showing how to make an admin panel with React JS and TypeScript
Version: 1.0.0
License: no
License URI: https://serhii.io
Text Domain: wpreact
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready
*/

defined('ABSPATH') || exit('ABSPATH is not defined');
define('WPREACT_PATH', plugin_dir_path(__FILE__));
define('WPREACT_URL', plugin_dir_url(__FILE__));

try {
    (new Hook())->init();
} catch (Throwable $e) {
    error_log($e->getMessage());
}
