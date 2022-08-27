<?php

declare(strict_types=1);

use Exception;

final class Hook
{
    public function init(): void
    {
        foreach (get_class_methods($this) as $method) {
            if ($method !== __FUNCTION__) {
                $this->{$method}();
            }
        }
    }

    private function exploseApi(): void
    {
        //
    }
}