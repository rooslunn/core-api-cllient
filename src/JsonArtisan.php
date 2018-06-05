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
        $commentPattern  = '/(\/\/[A-Za-z\s,]+)$/m';
        return preg_replace($commentPattern, '', $json);
    }

    /**
     * @param iterable $items
     * @param string $toClass
     * @return array
     * @throws \JsonMapper_Exception
     */
    public static function jsonMap(iterable $items, string $toClass): array
    {
        $result = [];
        $mapper = new \JsonMapper();

        foreach ($items as $item) {
            $result[] = $mapper->map($item, new $toClass);
        }

        return $result;
    }
}
