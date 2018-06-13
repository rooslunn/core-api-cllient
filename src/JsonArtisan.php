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
     * @param callable|null $customMapper
     * @return array
     * @throws \JsonMapper_Exception
     */
    public static function jsonMap(iterable $items, string $toClass, callable $customMapper = null): array
    {
        $result = [];
        $mapper = new \JsonMapper();

        foreach ($items ?? [] as $item) {
            if ($customMapper) {
                $item = $customMapper($item);
            }
            $result[] = $mapper->map($item, new $toClass);
        }

        return $result;
    }

    /**
     * @param iterable $items
     * @param string $toClass
     * @param array $dateFields
     * @return array|Model
     * @throws \JsonMapper_Exception
     */
    public static function jsonMapAndTimestamps($items, string $toClass, array $dateFields = [])
    {
        $mapped = self::jsonMap($items, $toClass, function ($item) use ($dateFields) {
            foreach ($dateFields as $field) {
                if (isset($item->{$field}) && (! $item->{$field} instanceof \DateTime)) {
                    $item->{$field} = (new \DateTime)->setTimestamp($item->{$field});
                }
            }
            return $item;
        });

        return $mapped;
    }
}
