<?php
/**
 * Created by PhpStorm.
 * User: siim
 * Date: 4.02.19
 * Time: 15:54
 */

namespace Sf4\Populator\Annotation;


use Sf4\Populator\HydratorContextFactoryInterface;
use Sf4\Populator\PopulatorAnnotation;
use Sf4\Populator\PropertyMetadata;

/**
 * Class IgnorePopulator
 * @package Sf4\Populator\Annotation
 *
 * @Annotation
 */
class Ignore implements PopulatorAnnotation
{

    /**
     * Proccesses the metadata
     *
     * @param  PropertyMetadata $metadata Metadata
     * @param  HydratorContextFactoryInterface $factory Factory fallback if needed
     */
    public function process(PropertyMetadata $metadata, HydratorContextFactoryInterface $factory)
    {
        $metadata->setIgnored(true);
    }
}
