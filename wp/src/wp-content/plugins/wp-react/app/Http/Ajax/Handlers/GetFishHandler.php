<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax\Handlers;

use WpReact\Http\Ajax\Requests\GetFishRequest;

class GetFishHandler implements Handler
{
    public function __construct(private GetFishRequest $request)
    {
    }

    public function handle(): string
    {
        return '';
    }
}
