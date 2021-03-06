<?php

namespace Sf4\Populator;

class Populator implements PopulatorInterface
{
    /**
     * Context Factory
     * @var HydratorContextFactoryInterface
     */
    protected $factory;

    /**
     * Hydrator
     * @var HydratorInterface
     */
    protected $hydrator;

    /**
     * Constructor
     *
     * @param HydratorInterface $hydrator An Hydrator
     * @param HydratorContextFactoryInterface $factory An Hydrator Context Factory
     */
    public function __construct(HydratorInterface $hydrator = null, HydratorContextFactoryInterface $factory = null)
    {
        $this->hydrator = $hydrator ?: new Hydrator;
        $this->factory = $factory ?: new HydratorContextFactory();
    }

    /**
     * Populates the given data to the given object
     *
     * @param $data
     * @param mixed $object Object or class name to hydrate
     *
     * @return object Hydrated object
     * @throws \ReflectionException
     */
    public function populate($data, $object)
    {
        if (!is_object($object)) {
            if (!class_exists($object)) {
                throw new \InvalidArgumentException(sprintf("Class %s does not exist", $object));
            }
            $object = new $object;
        }
        $context = $this->factory->build($object);
        return $this->hydrator->hydrate($data, $object, $context);
    }

    /**
     * @param mixed $object Object
     * @return array
     */
    public function unpopulate($object)
    {
        if (!is_object($object)) {
            throw new \InvalidArgumentException(sprintf("Class %s does not exist", $object));
        }

        if($object instanceof \stdClass) {
            return get_object_vars($object);
        }

        $data = [];
        try {
            $reflection = new \ReflectionClass($object);
        } catch (\ReflectionException $e) {
            return $data;
        }

        $properties = $reflection->getProperties();
        /** @var \ReflectionProperty $property */
        foreach($properties as $property) {
            $property->setAccessible(true);
            $data[$property->getName()] = $property->getValue($object);
        }

        return $data;
    }
}
