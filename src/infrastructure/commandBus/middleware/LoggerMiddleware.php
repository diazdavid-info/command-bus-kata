<?php

namespace diaz\src\infrastructure\commandBus\middleware;

use League\Tactician\Middleware;

/**
 * Class LogerMiddleware
 * @package diaz\src\infrastructure\commandBus\middleware
 */
class LoggerMiddleware implements Middleware
{
    /**
     * @param object $command
     * @param callable $next
     *
     * @return mixed
     */
    public function execute($command, callable $next)
    {
        $commandClass = get_class($command);
        echo "Start Logger " . $commandClass . "\n";
        $returnValue = $next($command);
        echo "End Logger " . $commandClass . "\n";
        return $returnValue;
    }
}