<?php

namespace Sf4\Populator\Traits;

use Sf4\Populator\Populator;

trait PopulatorTrait
{

    /** @var Populator|null $populator */
    protected $populator;

    /**
     * @return Populator|null
     */
    public function getPopulator(): ?Populator
    {
        return $this->populator;
    }

    /**
     * @param Populator|null $populator
     */
    public function setPopulator(?Populator $populator): void
    {
        $this->populator = $populator;
    }
}
