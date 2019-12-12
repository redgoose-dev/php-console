<?php
use redgoose\Console;

require '../src/Console.php';

error_reporting(E_ALL & ~E_NOTICE);
//header('Content-Type: text/plain');


// example body

Console::log(['sdf' => 'qweqw'], 'warn', 'foo', 'bar', [1,2,3]);

// group fooo
Console::group('start', 'fooo');
Console::log('qweqwe', 'sdgsg');
Console::warn('qweqwe', 'sdgsg');
Console::error('qweqwe', 'sdgsg');
Console::group('end');

// group Fruits
Console::group('start', 'Fruits');
Console::warn((object)[ 'apple' => 'red' ]);
Console::warn((object)[ 'banana' => 'yellow' ]);
Console::warn((object)[ 'mango' => 'green' ]);
Console::group('end');
