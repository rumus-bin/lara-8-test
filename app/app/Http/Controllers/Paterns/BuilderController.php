<?php

namespace App\Http\Controllers\Paterns;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class BuilderController extends BaseController
{
    public function index(Request $request): Response
    {
        return response($this->namedParams(second: 2));
    }

    private function namedParams($first = null, $second = null, $third = null, $fourth = null)
    {
        return [
            'first' => $first,
            'second' => $second,
            'third' => $third,
            'fourth' => $fourth
        ];
    }
}
