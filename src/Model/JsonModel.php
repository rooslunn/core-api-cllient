<?php


namespace Pilulka\CoreApiClient\Model;


class JsonModel
{
    /** @var array */
    protected $attributes;

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function __get(string $attribute)
    {
        if (array_key_exists($attribute, $this->attributes)) {
            return $this->attributes[$attribute];
        }
        return null;
    }

    public function __set(string $attribute, $value): void
    {
        if (array_key_exists($attribute, $this->attributes)) {
            $this->attributes[$attribute] = $value;
        }
    }

    public function __isset(string $attribute): bool
    {
        return array_key_exists($attribute, $this->attributes);
    }
}