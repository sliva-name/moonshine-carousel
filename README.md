# Moonshine Slider - слайдер
[![Software License][ico-license]](LICENSE)

[![Laravel][ico-laravel]](Laravel) [![PHP][ico-php]](PHP)

Moonshine Slider компонент для отображения слайдером элементов административной панели [MoonShine](https://moonshine-laravel.com/).

## Содержание
* [Установка](#установка)
* [Использование](#использование)
* [Лицензия](#лицензия)

## Установка
Команда для установки:
```bash
composer require webmatherfacker/moonshine-carousel
```
## Использование
```php
<?php
//...
use Webmatherfacker\MoonshineCarousel\Components\Slider;
//...
 Slider::make()->addItems([
                    ValueMetric::make('Articles')
                        ->value(100),
                    ValueMetric::make('Orders')
                        ->value(150),
                    ValueMetric::make('Products')
                        ->value(250),
                    ValueMetric::make('Users')
                        ->value(350),
                    ValueMetric::make('Sales')
                        ->value(500),
                    ValueMetric::make('Countries')
                        ->value(195)
                ]),
```

Перечень методов:

`itemPerRow($count)` количество отображаемых элементов на странице. По умолчанию `3`

Использование:
```php
Slider::make()->addItems(...)->itemPerRow(3),
```

`editItemWidth($percent)` ширина каждого элемента карусели. По умолчанию `20`
> ⚠️ **Предупреждение**<br>
> Разрыв между каждым элементом будет рассчитан автоматически.
Например: если ваш itemPerRow равен 4, а ItemWidth равен 24, то разрыв между каждым элементом будет (100-24 * 4) / 3. Не допускайте, чтобы ваш разрыв был отрицательным!

Использование:
```php
Slider::make()->addItems(...)->editItemWidth(20),
```

`loop` позволяет включить зацикливание слайдера, чтобы прокрутка повторялась сначала. По умолчанию `false`

Использование:
```php
Slider::make()->addItems(...)->loop(),
```


`nav` позволяет включить кнопки управления. По умолчанию `false`

Использование:
```php
Slider::make()->addItems(...)->nav(),
```

## Лицензия
[Лицензия MIT](LICENSE).


[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[ico-laravel]: https://img.shields.io/badge/Laravel-10+-FF2D20?style=for-the-badge&logo=laravel
[ico-php]: https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php