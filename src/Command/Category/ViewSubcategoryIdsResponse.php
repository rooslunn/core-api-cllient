<?php
namespace Pilulka\CoreApiClient\Command\Category;

use Pilulka\CoreApiClient\Response\Response;

class ViewSubcategoryIdsResponse implements Response
{
    /**
     * @var array
     */
    private $arrayResult;

    public function __construct(array $arrayResult)
    {
        $this->arrayResult = $arrayResult;
    }

    public function result(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return array
     */
    public function toModel(): array
    {
        return $this->toArray();
    }
}