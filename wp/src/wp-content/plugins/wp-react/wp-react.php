<?php

declare(strict_types=1);

/*
Plugin Name: WP React
Author: Serhii Cho
Author URI: https://serhii.io
Description: Test plugin for showing how to make a plugin with React JS and TypeScript
Version: 0.1
License: no
License URI: https://serhii.io
Text Domain: wpreact
Tags: react, typescript, tutorial, test-plugin, psr12
*/

defined('ABSPATH') || exit;
define('WPREACT_PATH', plugin_dir_path(__FILE__));
define('WPREACT_URL', plugin_dir_url(__FILE__));

require_once 'vendor/autoload.php';

try {
    (new WpReact\Hook())->init();
} catch (Throwable $e) {
    error_log($e->getMessage());
}
