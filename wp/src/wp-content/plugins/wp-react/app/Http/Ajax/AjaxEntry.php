<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax;

use Throwable;

final class AjaxEntry
{
    /**
     * Determine what method need to call when ajax request comes.
     * Action parameter value from request points to a callback
     * that needs to be called.
     *
     * @return array
     */
    public function getMethods(): array
    {
        return [];
    }

    /**
     * Register all actions for all ajax calls.
     *
     * @throws Throwable
     */
    public function openEntry(): void
    {
        foreach ($this->getMethods() as $method_name => $method_call) {
            $action = function () use ($method_call): void {
                check_ajax_referer('nalognl_csv_modifier');

                try {
                    $output = $method_call();

                    if (is_array($output)) {
                        foreach ($output as $out) {
                            $out();
                        }
                        echo Response::OK;
                    } else {
                        echo $output();
                    }
                } catch (Throwable $e) {
                    echo Response::error($e->getMessage());
                }

                wp_die();
            };

            add_action("wp_ajax_$method_name", $action);
            add_action("wp_ajax_nopriv_$method_name", $action);
        }
    }
}
