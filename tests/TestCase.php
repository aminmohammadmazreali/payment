<?php

namespace Aminmohammadmazreali\Payment\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Aminmohammadmazreali\Payment\Tests\Mocks\Drivers\BarDriver;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return ['Aminmohammadmazreali\Payment\Provider\PaymentServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Payment' => 'Aminmohammadmazreali\Payment\Facade\Payment',
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $settings = require __DIR__.'/../src/Config/payment.php';
        $settings['drivers']['bar'] = ['key' => 'foo'];
        $settings['map']['bar'] = BarDriver::class;

        $app['config']->set('payment', $settings);
    }
}
