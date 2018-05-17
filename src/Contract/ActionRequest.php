<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 16/05/18
 * Time: 14:35
 */

namespace Pilulka\CoreApi\Client\Contract;


interface ActionRequest
{
    public function getVerb(): string;

    public function getUri(): string;

    public function getHeaders(): array;
}