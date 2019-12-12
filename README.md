# php-console

Javascript console.log on PHP

![console.log screenshot](https://github.com/redgoose-dev/php-console/blob/master/assets/screen-console.png?raw=true)

`PHP`의 값들을 자바스크립트의 `console`객체를 사용하여 그림과 같이 콘솔을 출력할 수 있습니다.  
프론트엔드 개발자에겐 익숙한 화면이고, 브라우저나 php 로그에서 나오는 화면보다는 내용을 확인하기 편하기 때문에 만들게 되었습니다.


## Install

다음과 같이 `composer`를 통하여 패키지를 설치합니다.

```shell script
composer require redgoose/console
```

`composer`를 사용하지 않는다면 `github`에서 소스를 다운로드 후에 `/src/Console.php`로 사용합니다.


## Usage

### with composer

```php
require 'vendor/autoload.php';
use redgoose\Console;

Console::log('hello world');
```

### without composer

```php
require 'src/Console.php';
use redgoose\Console;

Console::log('hello world');
```


## Methods

### log

기본적으로 사용되는 `console.log()`메서드로 사용합니다.

```php
// basic
Console::log('hello world');

// multiple value
Console::log('apple', 'banana', 'mango');

// another types
Console::log('text', 123, ['foo' => 'bar'], (object)['foo' => 'bar']);
```

### warn

경고로 사용되는 `console.warn()`메서드로 사용합니다.

```php
Console::warn('message');
```

### error

오류로 사용되는 `console.error()`메서드로 사용합니다.

```php
Console::error('message');
```

### group

콘솔의 그룹으로 사용하는 `console.group()`메서드로 사용합니다.

```php
Console::group('start', 'group-name'); // group start
Console::log((object)[ 'apple' => 'red' ]);
Console::log((object)[ 'banana' => 'yellow' ]);
Console::log((object)[ 'mango' => 'green' ]);
Console::group('end'); // group end
```
