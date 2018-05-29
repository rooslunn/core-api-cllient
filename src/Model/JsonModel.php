<?php


namespace Pilulka\CoreApiClient\Model;


use JsonMapper;

class JsonModel
{
    /** @var array */
    protected $attributes;
    /**
     * @var string
     */
    private $modelClass;

    private $mapper;

    /**
     * JsonModel constructor.
     * @param string $modelClass
     * @param array $attributes
     * @throws \JsonMapper_Exception
     */
    public function __construct(string $modelClass, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->modelClass = $modelClass;

        $this->mapper = new JsonMapper();

        return $this->mapper->map($this->attributes, new $this->modelClass());
    }

}