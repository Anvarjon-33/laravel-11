<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attributes\GET;
use App\Attributes\POST;

class ControllerWithAttr extends Controller
{
    #[GET(path: '/attr')]
    public function index(): string
    {
        return 'Index Method';
    }

    #[POST(path: '/attr')]
    public function save(): string
    {
        return 'Data is saved';
    }

    #[GET(path: '/attr/{id}')]
    public function create($id): string
    {
        return 'Create Method'.'<hr>'."<span class='text-3xl text-red-500 bg-amber-500'>$id</span>";
    }
}
