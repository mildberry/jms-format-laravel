<?php

namespace Mildberry\JMSFormat\Facade;

use Illuminate\Support\Facades\Facade;
use Mildberry\JMSFormat\JMSFormatter;

/**
 * @author Egor Zyuskin <e.zyuskin@mildberry.com>
 */
class JMSFormat extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return JMSFormatter::class;
    }
}
