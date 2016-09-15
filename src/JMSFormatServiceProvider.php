<?php

namespace Mildberry\JMSFormat;

use Illuminate\Support\ServiceProvider;

/**
 * @author Egor Zyuskin <e.zyuskin@mildberry.com>
 */
class JMSFormatServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('jmsformat', function () {
            return new JMSFormat();
        });
    }
}
