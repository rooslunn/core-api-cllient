<?php

namespace Pilulka\CoreApi\Client\Contract;

interface ApiAction
{
    public function execute(ActionRequest $request): ApiResponse;
}