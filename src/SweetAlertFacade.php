<?php

namespace Lekeabiodun\SweetAlert;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lekeabiodun\SweetAlert\SweetAlert
 */
class SweetAlertFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-livewire-sweetalert';
    }
}
