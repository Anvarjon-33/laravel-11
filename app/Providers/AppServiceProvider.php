<?php

namespace App\Providers;

use App\Http\Controllers\ControllerWithAttr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Register Attribute Methods for Routing
         */
        $attr_reflection = new \ReflectionClass(ControllerWithAttr::class);
        foreach ($attr_reflection->getMethods() as $method) {
            foreach ($method->getAttributes() as $attr) {
                $method_type = explode('\\', $attr->getName())[count(explode('\\', $attr->getName())) - 1];
                $attr = $attr->newInstance();
                call_user_func_array(
                    [
                        Route::class,
                        strtolower($method_type),
                    ],
                    [
                        $attr->path,
                        [$method->class, $method->name],
                    ]
                );
            }
        }
    }
}
