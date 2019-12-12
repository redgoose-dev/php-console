<?php
namespace redgoose;
use Exception;

/**
 * Console
 * @package redgoose
 *
 * 텍스트나 숫자, 배열, 객체의 값들을 테스트하기 위하여 출력하는 함수 모음입니다.
 */

class Console {

  /**
   * parse
   *
   * @param string|int|array|object $src
   * @return string
   */
  private static function parse($src)
  {
    try
    {
      if (!$src) throw new Exception('');
      $source = json_encode($src);
    }
    catch(Exception $e)
    {
      $source = '';
    }
    return $source;
  }

  /**
   * javascript console
   * print `console.log` on javascript
   *
   * @param string $str
   * @param string $type (log,warn,error)
   */
  private static function javascriptConsole($str='', $type='log')
  {
    echo '<script>console.'. $type .'('. $str .')</script>';
  }

  /**
   * get args
   *
   * @param array $args
   * @return string
   */
  private static function getArgs($args)
  {
    $parse = '';
    if (count($args))
    {
      $arr = [];
      foreach ($args as $key=>$arg)
      {
        $parse = (string)self::parse($arg);
        $arr[] = $parse;
      }
      $parse = implode(', ', $arr);
    }
    return $parse;
  }

  /**
   * log
   * javascript `console.log()`
   */
  public static function log()
  {
    $parse = self::getArgs(func_get_args());
    self::javascriptConsole($parse, 'log');
  }

  /**
   * warn
   * javascript `console.warn()`
   */
  public static function warn()
  {
    $parse = self::getArgs(func_get_args());
    self::javascriptConsole($parse, 'warn');
  }

  /**
   * error
   * javascript `console.error()`
   */
  public static function error()
  {
    $parse = self::getArgs(func_get_args());
    self::javascriptConsole($parse, 'error');
  }

  /**
   * group
   *
   * @param string $type (start|end)
   * @param string $name group name
   */
  public static function group($type='start', $name='')
  {
    if ($type === 'start')
    {
      self::javascriptConsole('\''.$name.'\'', 'group');
    }
    else if ($type === 'end')
    {
      self::javascriptConsole('', 'groupEnd');
    }
  }

}
