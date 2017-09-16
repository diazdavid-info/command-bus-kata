<?php

namespace diaz\src\domain\model\light;

/**
 * Class Light
 * @package diaz\src\domain\model\light
 */
class Light
{
    /** @var string */
    private $_id;
    /** @var string */
    private $_state;

    /**
     * Light constructor.
     *
     * @param string $id
     * @param string $state
     */
    public function __construct(string $id, string $state)
    {
        $this->_id = $id;
        $this->_state = $state;
    }

    /**
     *
     */
    public function switchState()
    {
        $this->_state = ($this->_state === 'Turn On') ? 'Turn Off' : 'Turn On';
    }
}