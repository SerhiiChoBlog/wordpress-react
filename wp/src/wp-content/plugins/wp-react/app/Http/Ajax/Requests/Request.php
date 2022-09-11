<?php

declare(strict_types=1);

namespace WpReact\Http\Ajax\Requests;

abstract class Request
{
    /**
     * @var array<string>
     */
    protected array $data;

    public function __construct()
    {
        $this->data = $_POST;
    }
}
