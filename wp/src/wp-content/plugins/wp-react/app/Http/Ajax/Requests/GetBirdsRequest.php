<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax\Requests;

class GetBirdsRequest extends Request
{
    private const DEFAULT_BIRDS_LIMIT = 2;

    public function getBirdsLimit(): int
    {
        $limit = $this->data['birds_limit'] ?? self::DEFAULT_BIRDS_LIMIT;
        return (int) $limit;
    }
}