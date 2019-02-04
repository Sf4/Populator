<?php

namespace Sf4\Populator;

use Doctrine\Common\Annotations\AnnotationReader;

class HydratorContextFactory implements HydratorContextFactoryInterface
{
    /**
     * @param $class
     * @return HydratorContext
     * @throws \ReflectionException
     * @throws \Doctrine\Common\Annotations\AnnotationException
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
        $annotationReader = new AnnotationReader();
        foreach ($reflection->getProperties() as $property) {
            $annotations = $annotationReader->getPropertyAnnotations($property);
            $metadata = new PropertyMetadata($property->getName());
            foreach($annotations as $annotation) {
                if ($annotation instanceof PopulatorAnnotation) {
                    $annotation->process($metadata, $this);
                }
            }
            $context->addProperty($metadata);
        }
        return $context;
    }
}
