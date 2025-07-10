<?php

declare(strict_types=1);

namespace Webmatherfacker\MoonshineCarousel\Providers;

use MoonShine\AssetManager\Css;
use MoonShine\AssetManager\Js;
use MoonShine\Contracts\AssetManager\AssetManagerContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use Illuminate\Support\ServiceProvider;

final class MoonshineCarouselServiceProvider extends ServiceProvider
{

    public function boot(
        CoreContract $core,
        AssetManagerContract $assets
    ): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'slider');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/webmatherfacker/moonshine-carousel'),
        ], ['moonshine-carousel', 'laravel-assets']);


        $assets->add([
            Css::make('/vendor/webmatherfacker/moonshine-carousel/css/own-carousel.min.css'),
            Js::make('/vendor/webmatherfacker/moonshine-carousel/js/own-carousel.min.js'),
        ]);

    }
}