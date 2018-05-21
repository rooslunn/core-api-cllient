<?php

namespace Pilulka\CoreApiClient\Request;

interface Request
{
    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return string
     */
    public function getUrl(): string;

    /**
     * @return array
     */
    public function getParameters(): array;

    /**
     * @return string
     */
    public function getBody(): string;
}