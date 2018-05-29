<?php


namespace Pilulka\CoreApiClient\Response;


interface Response
{
    /**
     * @return bool
     */
    public function result(): bool;

    /**
     * @return object
     */
    public function toModel();
}