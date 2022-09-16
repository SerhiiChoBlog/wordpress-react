<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax\Handlers;

use WpReact\Http\Ajax\Requests\GetFishRequest;
use WpReact\Http\Ajax\Response;

class GetFishHandler implements Handler
{
    public function __construct(private GetFishRequest $request)
    {
    }

    public function handle(): string
    {
        $birds = [
            [
                'url' => 'https://i.imgur.com/GJKdVfL.jpeg',
                'title' => 'Bird looking right',
            ],
            [
                'url' => 'https://i.imgur.com/1lC07Hh.jpeg',
                'title' => 'Cute sparrow bird',
            ],
        ];

        $birds = array_splice($birds, 0, $this->request->getFishLimit());

        return Response::json($birds);
    }
}
