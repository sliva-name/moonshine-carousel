<?php

declare(strict_types=1);

namespace Moonshine\MoonshineCarousel\Components;

use Closure;
use MoonShine\Components\MoonShineComponent;

/**
 * @method static static make()
 */
final class Slider extends MoonShineComponent
{
    protected string $view = 'components.slider';
    protected array $items = [];
    protected int $itemPerRow = 3;
    protected int $itemWidth = 20;
    protected bool $loop = false;
    protected int $autoplay = 1;

    protected bool $navigation = false;
    protected array $assets = [
        '/css/own-carousel.min.css',
        '/js/own-carousel.min.js',
    ];

    public function __construct(

    ) {}

    public function addItems($items): self
    {
        $this->items = is_callable($items)
            ? $items()
            : $items;

        return $this;
    }

    public function itemPerRow(int $count): Slider
    {
        $this->itemPerRow = $count;

        return $this;
    }
    public function editItemWidth($itemWidthPercent): Slider
    {
        $this->itemWidth = $itemWidthPercent;

        return $this;
    }
    public function loop(): Slider
    {
        $this->loop = true;

        return $this;
    }
    public function nav(): Slider
    {
        $this->navigation = true;

        return $this;
    }

    protected function viewData(): array
    {
        return [
            'items' => $this->items,
            'itemPerRow' => $this->itemPerRow,
            'itemWidth' => $this->itemWidth,
            'loop' => $this->loop,
            'nav' => $this->navigation
        ];
    }
}
