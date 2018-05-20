<?php


namespace Pilulka\CoreApiClient\Response;


interface Response
{
    /**
     * @return bool
     */
    public function result(): bool;

    /**
     * @return array
     */
    public function toArray(): array;
}