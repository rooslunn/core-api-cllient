<?php


namespace Pilulka\CoreApiClient;


class JsonArtisan
{
    /**
     * @param string $json
     * @return bool
     */
    public static function isValidJson(string $json): bool
    {
        json_decode($json);
        return json_last_error() === JSON_ERROR_NONE;
    }

    public static function uncomment(string $json): string
    {
        $commentPattern  = '/(\/\/[A-Za-z\s]+)$/m';
        return preg_replace($commentPattern, '', $json);
    }
}