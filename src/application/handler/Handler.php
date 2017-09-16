<?php

namespace diaz\src\application\handler;

use diaz\src\application\command\Command;

/**
 * Interface Handler
 * @package diaz\src\application\handler
 */
interface Handler
{
    /**
     * @param Command $command
     */
    public function execute(Command $command);
}