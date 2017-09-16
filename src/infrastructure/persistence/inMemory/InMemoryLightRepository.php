<?php

namespace diaz\src\infrastructure\persistence\inMemory;

use diaz\src\domain\model\light\Light;
use diaz\src\domain\model\light\LightQuery;
use diaz\src\domain\model\light\LightRepository;

/**
 * Class InMemoryLightRepository
 * @package diaz\src\infrastructure\persistence\inMemory
 */
class InMemoryLightRepository implements LightRepository
{
    /**
     * @param LightQuery $lightQuery
     *
     * @return Light
     */
    public function searchById(LightQuery $lightQuery): Light
    {
        return new Light($lightQuery->lightId(), 'Turn Off');
    }

    /**
     * @param Light $light
     *
     * @return Light
     */
    public function persist(Light $light): Light
    {
        return $light;
    }
}