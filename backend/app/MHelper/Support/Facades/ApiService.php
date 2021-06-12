<?php
namespace App\MHelper\Support\Facades;

use Illuminate\Support\Facades\Facade;

class ApiService  extends  Facade
{
    protected static function  getFacadeAccessor()
    {
        return "App\MHelper\ApiService";
    }
}
