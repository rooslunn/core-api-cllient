<?php

namespace Pilulka\CoreApi\Client\Contract;

interface ApiAction
{
    public function execute(array $params): ApiResponse;
}