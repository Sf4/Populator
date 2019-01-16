<?php

namespace Sf4\Populator\Traits;

use Sf4\Populator\Populator;

trait PopulatorTrait
{

    /** @var Populator $populator */
    protected $populator;

    /**
     * @return Populator
     */
    public function getPopulator(): Populator
    {
        return $this->populator;
    }

    /**
     * @param Populator $populator
     */
    public function setPopulator(Populator $populator): void
    {
        $this->populator = $populator;
    }
}
