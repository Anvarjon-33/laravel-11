<?php

namespace App\Http\Controllers;

use App\Attributes\Routes;

class AttrController extends Controller
{
    #[Routes('/attr', 'get')]
    public function index(): string
    {
        return 'Index methods';
    }

    #[Routes('/attr', 'post')]
    public function show(): string
    {
        return 'Show methods';
    }
}
