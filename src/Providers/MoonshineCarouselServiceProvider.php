<?php

declare(strict_types=1);

namespace Webmatherfacker\MoonshineCarousel\Providers;

use Webmatherfacker\MoonshineCarousel\Components\Slider;

use Illuminate\Support\ServiceProvider;
final class MoonshineCarouselServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'slider');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-carousel'),
        ], ['moonshine-carousel', 'laravel-assets']);


        moonshineAssets()->add([
            '/vendor/moonshine-carousel/css/main.css',
            '/vendor/moonshine-carousel/js/app.js',
        ]);

        moonshine()
            ->resources([
                new Slider(),
            ]);

    }
}