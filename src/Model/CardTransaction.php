<?php

namespace Pilulka\CoreApiClient\Model;

class CardTransaction extends JsonModel
{
    /** @var int */
    private $id;

    /** @var int */
    private $userId;

    /** @var \DateTime */
    private $time;

    /** @var float */
    private $credits;

    /** @var ?string */
    private $orderNumber;

}
