<?php

namespace Pilulka\CoreApiClient\Model;

class Card extends JsonModel
{
    /** @var  int */
    private $userId;

    /** @var  bool */
    private $isVip;

    /** @var float */
    private $credits;

    /** @var array  */
    private $cards = [];

}