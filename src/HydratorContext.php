<?php

namespace Sf4\Populator;

class HydratorContext implements HydratorContextInterface
{
    /**
     * Class to hydrate
     * @var string
     */
    protected $class;
    /**
     * Properties
     * @var array
     */
    protected $properties = array();

    /**
     * {@inheritDoc}
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set Class
     *
     * @param string $class Class to hydrate
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Get Properties
     *
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * {@inheritDoc}
     */
    public function getProperty($name): ?PropertyMetadata
    {
        foreach ($this->properties as $property) {
            if ($name === $property->getName() || $property->hasAlias($name)) {
                return $property;
            }
        }
        return null;
    }

    /**
     * Adds a property
     *
     * @param PropertyMetadata $property Property Metadata
     */
    public function addProperty(PropertyMetadata $property)
    {
        $this->properties[] = $property;
    }
}
