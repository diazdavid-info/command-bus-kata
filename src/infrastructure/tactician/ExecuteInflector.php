<?php

namespace diaz\src\infrastructure\tactician;

use League\Tactician\Handler\MethodNameInflector\MethodNameInflector;

/**
 * Class ExecuteInflector
 * @package diaz\src\infrastructure\tactician
 */
class ExecuteInflector implements MethodNameInflector
{

    /**
     * Return the method name to call on the command handler and return it.
     *
     * @param object $command
     * @param object $commandHandler
     *
     * @return string
     */
    public function inflect($command, $commandHandler)
    {
        return 'execute';
    }
}