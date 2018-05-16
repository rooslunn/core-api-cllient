<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 16/05/18
 * Time: 14:20
 */

namespace Pilulka\CoreApi\Client\Contracts;


interface ApiAction
{
    public function execute(ActionRequest $request): ApiResponse;
}