<?php

namespace Sf4\Populator;

interface HydratorInterface
{
    /**
     * @param $data
     * @param $object
     * @param HydratorContextInterface $context
     * @return mixed
     */
    public function hydrate($data, $object, HydratorContextInterface $context);
}
