<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 16/05/18
 * Time: 13:51
 */

if (! function_exists('config')) {
    function config(string $key, $default = null)
    {
         $config = require __DIR__ . '/../config/app.php';
         if (array_key_exists($key, $config)) {
             return $config[$key];
         }

         return $default;
    }
}