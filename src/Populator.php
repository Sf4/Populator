<?php

namespace Sf4\Populator;

class Populator
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
}
