<?php

namespace Sf4\Populator\Traits;

use Sf4\Populator\PopulatorInterface;

trait PopulatorTrait
{

    /** @var PopulatorInterface|null $populator */
    protected $populator;

    /**
     * @return PopulatorInterface|null
     */
    public function getPopulator(): ?PopulatorInterface
    {
        return $this->populator;
    }

    /**
     * @param PopulatorInterface|null $populator
     */
    public function setPopulator(?PopulatorInterface $populator): void
    {
        $this->populator = $populator;
    }
}
