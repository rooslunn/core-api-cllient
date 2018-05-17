<?php

namespace Pilulka\CoreApi\Client\Helpers;

if (!\function_exists('config')) {
    function config(string $key, string $file = 'app', $default = null)
    {
        $configFile = __DIR__ . "/../config/{$file}.php";
        if (!file_exists($configFile)) {
            return $default;
        }

        $config = require $configFile;
        if (array_key_exists($key, $config)) {
            return $config[$key];
        }

        return $default;
    }
}

if (!\function_exists('action_url')) {
    function action_url(string $action)
    {
        return config('core-api-base-mock') . config($action, 'action');
    }
}

if (!\function_exists('propagate_params')) {
    function propagate_params(string $url, array $params)
    {
        foreach ($params as $name => $value) {
            $param_template = "{{$name}}";
            if (!strpos($url, $param_template) === false) {
                $url = str_ireplace($param_template, $value, $url);
            }
        }
        return $url;
    }
}

if (!\function_exists('action')) {
    function action(string $actionClass, array $params) {
        if (!\class_exists($actionClass)) {
            return false;
        }
        $action = new $actionClass;
        return $action($params);
    }
}
