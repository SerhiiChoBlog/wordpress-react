<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax\Handlers;

use WpReact\Http\Ajax\Requests\GetBirdsRequest;
use WpReact\Http\Ajax\Response;

class GetBirdsHandler implements Handler
{
    public function __construct(private GetBirdsRequest $request)
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

        $birds = array_splice($birds, 0, $this->request->getBirdsLimit());

        return Response::json($birds);
    }
}
