<?php

namespace Sf4\Populator;

class HydratorContextFactory implements HydratorContextFactoryInterface
{
     /**
     * @param $class
     * @return HydratorContext
     * @throws \ReflectionException
     */
    public function build($class)
    {
        if (is_object($class)) {
            $class = get_class($class);
        }
        if (!class_exists($class)) {
            throw new \InvalidArgumentException(sprintf("Class %s does not exist", $class));
        }
        $context = new HydratorContext;
        $context->setClass($class);
        $reflection = new \ReflectionClass($class);
        foreach ($reflection->getProperties() as $property) {
            $metadata = new PropertyMetadata($property->getName());
            $context->addProperty($metadata);
        }
        return $context;
    }
}
