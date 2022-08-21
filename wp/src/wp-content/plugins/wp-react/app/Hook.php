<?php

declare(strict_types=1);

use Exception;

final class Hook
{
    /**
     * @throws Exception
     */
    public function init(): void
    {
        foreach (get_class_methods($this) as $method) {
            if ($method === __FUNCTION__) {
                continue;
            }

            $this->{$method}();
        }
    }

    private function exploseApi()
    {
        //
    }
}