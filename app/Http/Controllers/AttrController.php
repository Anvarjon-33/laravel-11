<?php

namespace App\Http\Controllers;

use App\Attributes\Routes;

#[Routes('post', 'get')]
class AttrController extends Controller
{
    public function __construct()
    {
    }

//    #[Routes('/attr', 'get')]
    public function index(): string
    {
        return 'Index methods';
    }

//    #[Routes('/attr', 'post')]
    public function show(): string
    {
        return 'Show methods';
    }
}
