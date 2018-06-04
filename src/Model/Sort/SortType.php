<?php


namespace Pilulka\CoreApiClient\Model\Sort;


class SortType
{
    public const __default = self::SORT_METHOD_POPULAR;

    public const SORT_METHOD_POPULAR = 1;
    public const SORT_METHOD_LOW_COST = 2;
    public const SORT_METHOD_HIGH_COST = 3;
}