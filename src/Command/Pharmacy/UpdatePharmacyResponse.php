<?php

namespace Pilulka\CoreApiClient\Command\Pharmacy;

use Pilulka\CoreApiClient\Model\JsonModel;
use Pilulka\CoreApiClient\Response\Response;

class UpdatePharmacyResponse implements Response
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
        return $this->arrayResult['result'] ?? false;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->arrayResult;
    }

    /**
     * @return JsonModel
     */
    public function toModel(): JsonModel
    {
        return new JsonModel($this->arrayResult);
    }
}