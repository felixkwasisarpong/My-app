<?php

namespace App\Utils;

use Illuminate\Pipeline\Pipeline;

class AppUtils
{

    public static function uploadImage($data, $pipe)
    {
        return app(Pipeline::class)
            ->send($data)
            ->through($pipe)
            ->thenReturn();
    }

}
