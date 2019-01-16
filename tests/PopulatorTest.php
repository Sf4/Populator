<?php

declare(strict_types=1);

namespace Sf4\Populator;

class PopulatorTest extends \PHPUnit\Framework\TestCase
{

    public function testPopulator()
    {
        $data = array(
            'bar' => 'Foobaz!',
            'public' => 'Public!',
            'publicWithSetter' => 'BySetter'
        );

        try {
            $foo = new Foo();
            $populator = new Populator();
            /** @var Foo $newFoo */
            $newFoo = $populator->populate($data, $foo);

            $this->assertTrue($newFoo->getBar() == $data['bar']);
            $this->assertTrue($newFoo->public == $data['public']);
            $this->assertTrue($newFoo->publicWithSetter == $data['publicWithSetter']);
        } catch (\ReflectionException $e) {
            $this->assertTrue(false);
        }
    }
}
