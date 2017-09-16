<?php

namespace diaz\src\domain\model\light;

/**
 * Class LightQuery
 * @package diaz\src\domain\model\light
 */
class LightQuery
{
    /** @var string */
    private $_lightId;

    /**
     * LightQuery constructor.
     *
     * @param string $lightId
     */
    private function __construct(string $lightId)
    {
        $this->_lightId = $lightId;
    }

    /**
     * @param string $lightId
     *
     * @return LightQuery
     */
    public static function byId(string $lightId): self
    {
        return new static($lightId);
    }

    /**
     * @return string
     */
    public function lightId(): string
    {
        return $this->_lightId;
    }
}