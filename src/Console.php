<?php
namespace redgoose;

/**
 * Console
 * @package redgoose
 *
 * text
 */

class Console {

  public static function log($src=null)
  {
    try
    {
      $source = json_encode($src);
    }
    catch(Exception $e)
    {
      $source = 'Parsing error';
    }
    echo '<script>console.log('.$source.');</script>';
  }

}