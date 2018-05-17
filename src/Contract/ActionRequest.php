<?php

namespace Pilulka\CoreApi\Client\Contract;


interface ActionRequest
{
    public function getVerb(): string;

    public function getUri(): string;

    public function getHeaders(): array;
}