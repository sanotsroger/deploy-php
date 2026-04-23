<?php

use App\Core\Foo;

require __DIR__ . '/../vendor/autoload.php';

$foo = new Foo();

echo $foo->bar();
