<?php
declare(strict_types=1);

namespace Nakipelo\Orchid\CKEditor;

use Orchid\Screen\Field;
use Orchid\Support\Facades\Dashboard;

class CKEditor extends Field
{
    /** @var string */
    protected $view = 'ckeditor::field';

    /** @var array  */
    protected $attributes = [

    ];

    public static function make(?string $name = null): Field
    {
        Dashboard::registerResource('scripts', '//cdn.ckeditor.com/4.6.2/standard/ckeditor.js');
        Dashboard::registerResource('scripts', route('platform.resource', ['ckeditor','ckeditor.js']));

        return (new static())->name($name);
    }
}