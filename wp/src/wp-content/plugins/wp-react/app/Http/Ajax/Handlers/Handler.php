<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax\Handlers;

interface Handler
{
    public function handle(): string;
}