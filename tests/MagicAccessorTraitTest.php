<?php
namespace SubjectivePHPTest\Spl\Traits;

/**
 * @coversDefaultClass SubjectivePHP\Spl\Traits\MagicAccessorTrait
 */
class MagicAccessorTraitTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Verify basic behavior of __get().
     *
     * @test
     * @covers ::__get
     *
     * @return void
     */
    public function magicGet()
    {
        $object = new SimpleObject(['foo' => 'bar']);
        $this->assertSame('bar', $object->foo);
    }

    /**
     * Verify basic behavior of getDirectory().
     *
     * @test
     * @covers ::__set
     *
     * @return void
     */
    public function magicSet()
    {
        $object = new SimpleObject();
        $object->foo = 'bar';
        $this->assertSame(['foo' => 'bar'], $object->getContainer());
    }
}
