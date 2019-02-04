<?php
/**
 * Created by PhpStorm.
 * User: siim
 * Date: 4.02.19
 * Time: 15:55
 */

namespace Sf4\Populator;

interface PopulatorAnnotation
{
    /**
     * Proccesses the metadata
     *
     * @param  PropertyMetadata                $metadata Metadata
     * @param  HydratorContextFactoryInterface $factory  Factory fallback if needed
     */
    public function process(PropertyMetadata $metadata, HydratorContextFactoryInterface $factory);

}
