<?php
/**
 * Created by PhpStorm.
 * User: tright
 * Date: 16-6-30
 * Time: 上午10:17
 */

namespace Yuansir\Toastr\Facades;


use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{
    protected static function getFacadeAccessor(){
        return 'toastr';
    }

}