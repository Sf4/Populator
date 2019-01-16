<?php

namespace Sf4\Populator;

class PropertyMetadata
{
    /**
     * Setter
     * @var string
     */
    protected $setter;

    /**
     * Aliases
     * @var array
     */
    protected $aliases = array();

    /**
     * Context
     * @var HydratorContext
     */
    protected $context;

    /**
     * Ignored
     * @var boolean
     */
    protected $ignored = false;

    /**
     * Property name
     * @var string
     */
    protected $name;

    /**
     * Constructor
     *
     * @param string $name Property name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->setter = sprintf("set%s", $name);
    }

    /**
     * Get Name
     *
     * @return string Property name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     *
     * @param string $name Property name
     * @return PropertyMetadata
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Setter
     *
     * @return string Setter name
     */
    public function getSetter()
    {
        return $this->setter;
    }

    /**
     * Set Setter
     *
     * @param string $setter Setter name
     * @return PropertyMetadata
     */
    public function setSetter($setter)
    {
        $this->setter = $setter;

        return $this;
    }

    /**
     * Get Aliases
     *
     * @return array
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * Set Aliases
     *
     * @param array $aliases An array of alias
     */
    public function setAliases(array $aliases)
    {
        $this->aliases = $aliases;
    }

    /**
     * Add Alias
     *
     * @param string $alias Alias
     */
    public function addAlias($alias)
    {
        $this->aliases[] = $alias;
    }

    /**
     * Has Alias
     *
     * @param string $alias Alias name
     *
     * @return boolean
     */
    public function hasAlias($alias)
    {
        return in_array($alias, $this->aliases);
    }

    /**
     * Get Context
     *
     * @return HydratorContextInterface Context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set Context
     *
     * @param HydratorContextInterface $context Context
     */
    public function setContext(HydratorContextInterface $context)
    {
        $this->context = $context;
    }

    /**
     * Is Ignored
     *
     * @return boolean
     */
    public function isIgnored()
    {
        return $this->ignored;
    }

    /**
     * Set Ignored
     *
     * @param boolean $ignored Whether to ignore the property
     */
    public function setIgnored($ignored)
    {
        $this->ignored = !!$ignored;
    }
}
