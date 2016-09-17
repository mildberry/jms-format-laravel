# jms-format-laravel
JMS format service provider and facade for laravel 5.x framework

Require
-------

- php >= 5.4
- mildberry/jms-format >= 0.0.1
- illuminate/support  >= 5.2

Install
-------

Install via composer

``` bash
$ composer require mldberry/jms-format-laravel
```

Usage
-----

Find the `providers` array key in `config/app.php` and register the **JMSFormat Service Provider**.

``` php
'providers' => array(
    // ...

    Mildberry\JMSFormat\JMSFormatServiceProvider::class,
)
```

After register service provider use facade **JMSFormat**

``` php
<?php

$content = JMSFormat::convert('html', 'jms', '<p>Test content</p>');

```

License
-------
This library is under the MIT license. See the complete license in [here](https://github.com/mildberry/jms-format-laravel/blob/master/LICENSE)