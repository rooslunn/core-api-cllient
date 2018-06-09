<?php

namespace Pilulka\CoreApiClient\DataTransformer;

/**
 * Interface DataTransformer
 * @package Pilulka\CoreApiClient\DataTransformer
 */
interface DataTransformer
{
    /**
     * @return array
     */
    public function transform(): array;
}