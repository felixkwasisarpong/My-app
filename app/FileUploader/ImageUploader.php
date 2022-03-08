<?php

namespace App\FileUploader;

class ImageUploader
{

    public function handle($request, \Closure $next)
    {
        $data = $next($request);

        if (request()->hasFile('image'))
        {
            $name = uniqid() . "." . request()->file("image")->extension();

            request()->file('image')->move('images/', $name);

            $data['image'] = $name;

        }

        return $data;
    }
}
