<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax;

use JsonException;
use Throwable;
use WpReact\Http\Ajax\Handlers\GetBirdsHandler;
use WpReact\Http\Ajax\Handlers\Handler;
use WpReact\Http\Ajax\Requests\GetBirdsRequest;

final class AjaxEntry
{
    /**
     * Determine what method need to call when AJAX request comes.
     * Each action name points to a handler, which will be executed
     * when the request will be received.
     *
     * @return array<string, callable(): Handler>
     */
    public function mapActionsToHandlers(): array
    {
        return [
            'get_birds' => function (): Handler {
                return new GetBirdsHandler(new GetBirdsRequest());
            },
        ];
    }

    /**
     * @throws JsonException
     */
    public function openEntry(): void
    {
        foreach ($this->mapActionsToHandlers() as $action_name => $callback) {
            $action = function () use ($callback): void {
                check_ajax_referer('wpreact-birds');

                try {
                    echo $callback()->handle();
                } catch (Throwable $e) {
                    echo Response::jsonError($e->getMessage());
                }

                wp_die();
            };

            add_action("wp_ajax_$action_name", $action);
            add_action("wp_ajax_nopriv_$action_name", $action);
        }
    }
}
