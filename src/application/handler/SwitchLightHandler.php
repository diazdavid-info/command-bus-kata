<?php

namespace diaz\src\application\handler;

use diaz\src\application\command\Command;
use diaz\src\domain\model\light\Light;
use diaz\src\domain\model\light\LightQuery;
use diaz\src\domain\model\light\LightRepository;

/**
 * Class SwitchLightHandler
 * @package diaz\src\application\handler
 */
class SwitchLightHandler implements Handler, SwitchLight
{
    /** @var LightRepository */
    private $_repository;

    /**
     * SwitchLightHandler constructor.
     *
     * @param LightRepository $repository
     */
    public function __construct(LightRepository $repository)
    {
        $this->_repository = $repository;
    }

    /**
     * @param Command $command
     *
     * @return Light
     */
    public function execute(Command $command): Light
    {
        $light = $this->_repository->searchById(LightQuery::byId($command->lightId()));
        $light->switchState();
        $this->_repository->persist($light);
        return $light;
    }
}