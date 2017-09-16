<?php

namespace diaz\src\domain\model\light;

/**
 * Interface LightRepository
 * @package diaz\src\domain\model\light
 */
interface LightRepository
{
    /**
     * @param LightQuery $lightQuery
     *
     * @return Light
     */
    public function searchById(LightQuery $lightQuery): Light;

    /**
     * @param Light $light
     *
     * @return Light
     */
    public function persist(Light $light): Light;
}