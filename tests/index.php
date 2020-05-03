<?php
use redgoose\Console;

require '../src/Console.php';

error_reporting(E_ALL & ~E_NOTICE);
//header('Content-Type: text/plain');


/**
 * example body
 */

Console::log(['foo' => 'bar'], 'warn', 'foo', 'bar', [1,2,3]);

// group basic
Console::group('start', 'basic');
Console::log('log', 'normal message');
Console::warn('warn', 'warning message');
Console::error('error', 'error message');
Console::group('end');

// group Fruits
Console::group('start', 'Fruits');
Console::warn((object)[ 'apple' => 'red' ]);
Console::warn((object)[ 'banana' => 'yellow' ]);
Console::warn((object)[ 'mango' => 'green' ]);
Console::group('end');

// test zero
Console::group('start', 'zero test');
Console::log(0);
Console::log(null);
Console::log();
Console::group('end');
