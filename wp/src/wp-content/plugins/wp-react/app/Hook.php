<?php

declare(strict_types=1);

namespace WpReact;

final class Hook
{
    public function init(): void
    {
        foreach (get_class_methods($this) as $method) {
            if ($method !== 'init') {
                $this->{$method}();
            }
        }
    }

    private function registerBirdsShortcode(): void
    {
        add_shortcode('wpreact_birds', static function (): string {
            add_action('wp_enqueue_scripts', function () {
                $path = WPREACT_PATH . 'assets/birds.js';
                $url = WPREACT_URL . 'assets/birds.js';

                wp_register_script('wpreact-birds-js', $url, [], $path);

                wp_localize_script('wpreact-birds-js', 'wpReactBirdsGlobals', [
                    'ajaxUrl' => admin_url('admin-ajax.php'),
                    'nonce' => wp_create_nonce('wpreact-birds'),
                ]);

                wp_enqueue_script('wpreact-birds-js');
            });

            return '<div id="wpreact-birds"></div>';
        });
    }
}
