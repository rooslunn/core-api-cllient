<?php
declare(strict_types=1);

namespace Pilulka\CoreApiClient\Model\StaticContent;

class StaticContent
{

    /** @var int */
    private $id;

    /** @var array */
    private $widgets;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getWidgets(): array
    {
        return $this->widgets;
    }

    /**
     * @param array $widgets
     */
    public function setWidgets(array $widgets)
    {
        $this->widgets = $widgets;
    }

}
