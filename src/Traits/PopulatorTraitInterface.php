<?php
/**
 * Created by PhpStorm.
 * User: siim
 * Date: 17.01.19
 * Time: 8:36
 */

namespace Sf4\Populator\Traits;

use Sf4\Populator\PopulatorInterface;

interface PopulatorTraitInterface
{
    /**
     * @return PopulatorInterface|null
     */
    public function getPopulator(): ?PopulatorInterface;

    /**
     * @param PopulatorInterface|null $populator
     */
    public function setPopulator(?PopulatorInterface $populator): void;
}
