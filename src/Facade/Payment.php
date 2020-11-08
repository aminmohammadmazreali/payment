<?php

namespace Aminmohammadmazreali\Payment\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Payment
 *
 * @package Aminmohammadmazreali\Payment\Facade
 */
class Payment extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'shetabit-payment';
    }
}
