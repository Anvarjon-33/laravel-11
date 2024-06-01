<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attributes\GET;
use App\Attributes\POST;

class ControllerWithAttr extends Controller
{
    #[GET('/attr')]
    public function index(): string
    {
        return 'Index Method';
    }

    #[POST('/attr')]
    public function save(): string
    {
        return 'Data is saved';
    }

    #[GET('/attr/{id}')]
    public function create(): string
    {
        return 'Create Method';
    }
}
