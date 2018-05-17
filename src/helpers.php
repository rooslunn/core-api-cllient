<?php

if (! function_exists('config')) {
    function config(string $key, string $file = 'app', $default = null)
    {
        $configFile = __DIR__ . "/../config/{$file}.php";
        if (! file_exists($configFile)) {
            return $default;
        }

        $config = require $configFile;
        if (array_key_exists($key, $config)) {
            return $config[$key];
        }

        return $default;
    }
}