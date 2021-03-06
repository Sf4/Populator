<?php

namespace Sf4\Populator;

interface HydratorContextInterface
{
    public function getClass();

    public function getProperty($name): ?PropertyMetadata;

    /**
     * Get Properties
     *
     * @return array
     */
    public function getProperties();
}
