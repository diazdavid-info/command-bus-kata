<?php

namespace diaz\src\application\command;

/**
 * Class SwitchLightCommand
 * @package diaz\src\application\command
 */
class SwitchLightCommand implements Command
{
    /** @var string */
    private $_state;
    /** @var string */
    private $_lightId;

    /**
     * SwitchLightCommand constructor.
     *
     * @param string $lightId
     * @param string $state
     */
    private function __construct(string $lightId, string $state)
    {
        $this->_state = $state;
        $this->_lightId = $lightId;
    }

    /**
     * @param string $lightId
     *
     * @return SwitchLightCommand
     */
    public static function turnOn(string $lightId): self
    {
        return new static($lightId, 'Turn On');
    }

    /**
     * @return string
     */
    public function lightId(): string
    {
        return $this->_lightId;
    }
}