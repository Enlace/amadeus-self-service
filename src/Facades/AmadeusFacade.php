<?php

namespace Aldogtz\AmdeusSelfservice\Facades;

use Illuminate\Support\Facades\Facade;

class AmadeusFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'amadeus';
    }
}