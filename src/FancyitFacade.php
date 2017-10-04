<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 04/10/17
 * Time: 4:54 PM
 */

namespace V1shky\Fancyit;


use Illuminate\Support\Facades\Facade;

class FancyitFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'fancyit';
    }
}