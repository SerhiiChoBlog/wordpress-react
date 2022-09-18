<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax;

use JsonException;

class Response
{
    /**
     * @throws JsonException
     */
    public static function json(array|object $data): string
    {
        header('Content-Type: application/json');

        return json_encode($data, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
    }

    /**
     * @throws JsonException
     */
    public static function jsonError(string $message): string
    {
        return self::json(['error' => WP_DEBUG ? $message : 'Server error']);
    }
}