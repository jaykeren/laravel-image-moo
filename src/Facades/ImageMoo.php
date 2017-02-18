<?php

namespace Jaykeren\ImageMoo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jaykeren\ImageMoo\ImageMooBuilder
 */
class ImageMoo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Jaykeren\ImageMoo\ImageMooBuilder';
    }
}
