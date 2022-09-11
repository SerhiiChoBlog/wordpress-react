<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax\Requests;

class GetFishRequest extends Request
{
    private const DEFAULT_FISH_LIMIT = 2;

    public function getFishLimit(): int
    {
        $limit = $this->data['fish_limit'] ?? self::DEFAULT_FISH_LIMIT;
        return (int) $limit;
    }
}