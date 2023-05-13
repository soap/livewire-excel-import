<?php

namespace Soap\LivewireExcelImport\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\LivewireExcelImport\LivewireExcelImport
 */
class LivewireExcelImport extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\LivewireExcelImport\LivewireExcelImport::class;
    }
}
