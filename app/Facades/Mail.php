<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Mail
 * @package App\Facades
 */
class Mail extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'chocomail';
    }
}
