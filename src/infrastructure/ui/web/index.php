<?php

use diaz\src\application\command\SwitchLightCommand;
use diaz\src\application\handler\SwitchLightHandler;
use diaz\src\infrastructure\commandBus\middleware\LoggerMiddleware;
use diaz\src\infrastructure\persistence\inMemory\InMemoryLightRepository;
use diaz\src\infrastructure\tactician\ExecuteInflector;
use League\Tactician\CommandBus;
use League\Tactician\Handler\CommandHandlerMiddleware;
use League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor;
use League\Tactician\Handler\Locator\InMemoryLocator;

require __DIR__ . '/../../../../vendor/autoload.php';

// EJEMPLO 1
//$handler = new SwitchLightHandler(new InMemoryLightRepository());
//$light = $handler->execute(SwitchLightCommand::turnOn('1'));
//echo serialize($light);

// EJEMPLO 2
//$handler = new SwitchLightHandler(new InMemoryLightRepository());
//$locator = new InMemoryLocator(
//    [SwitchLightCommand::class => $handler]
//);
//$middleware = new CommandHandlerMiddleware(
//    new ClassNameExtractor(),
//    $locator,
//    new ExecuteInflector()
//);
//$commandBus = new CommandBus([$middleware]);
//$light = $commandBus->handle(SwitchLightCommand::turnOn('1'));
//
//echo serialize($light);


// EJEMPLO 3
$handler = new SwitchLightHandler(new InMemoryLightRepository());
$locator = new InMemoryLocator(
    [SwitchLightCommand::class => $handler]
);
$middleware = new CommandHandlerMiddleware(
    new ClassNameExtractor(),
    $locator,
    new ExecuteInflector()
);
$commandBus = new CommandBus([new LoggerMiddleware(), $middleware]);
$light = $commandBus->handle(SwitchLightCommand::turnOn('1'));

echo serialize($light);