<?php
/**
 * Created by PhpStorm.
 * User: siim
 * Date: 17.01.19
 * Time: 8:26
 */

namespace Sf4\Populator;

interface PopulatorInterface
{
    /**
     * Populates the given data to the given object
     *
     * @param $data
     * @param mixed $object Object or class name to hydrate
     *
     * @return object Hydrated object
     * @throws \ReflectionException
     */
    public function populate($data, $object);
}
