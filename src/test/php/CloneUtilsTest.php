<?php
/**
 * FlorianWolters\Component\Core\CloneUtilsTest
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 */

namespace FlorianWolters\Component\Core;

use \stdClass;

/**
 * Test class for {@see CloneUtils}.
 *
 * @since  Class available since Release 0.2.0
 * @covers FlorianWolters\Component\Core\CloneUtils
 */
class CloneUtilsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * The object under test.
     *
     * @var stdClass
     */
    private $original;

    /**
     * Sets up the fixture.
     *
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        $secondReference = new stdClass;
        $secondReference->scalar = 'second reference';

        $firstReference = new stdClass;
        $firstReference->scalar = 'first reference';
        $firstReference->object = $secondReference;

        $this->original = new stdClass;
        $this->original->scalar = 'object';
        $this->original->scalarArray = ['foo', 'bar'];
        $this->original->object = $firstReference;
        $this->original->objectArray = [new stdClass, &$this->original];
        $this->original->selfReference = &$this->original;
    }

    /**
     * @return void
     *
     * @coversDefaultClass copyDeep
     * @test
     */
    public function testCopyDeepCanHandleScalars()
    {
        $actual = CloneUtils::copyDeep($this->original);

        $this->original->scalar = '';
        $this->original->scalarArray = [];

        $this->assertEquals('object', $actual->scalar);
        $this->assertEquals(['foo', 'bar'], $actual->scalarArray);
    }

    /**
     * @return void
     *
     * @coversDefaultClass copyDeep
     * @test
     */
    public function testCopyDeepCanHandleReferences()
    {
        $actual = CloneUtils::copyDeep($this->original);

        $this->original->object->scalar = '';
        $this->original->objectArray = [];

        $this->assertEquals('first reference', $actual->object->scalar);
        $this->assertNotEquals(
            $this->original->objectArray,
            $actual->objectArray
        );
    }

    /**
     * @return void
     *
     * @coversDefaultClass copyDeep
     * @test
     */
    public function testCopyDeepCanHandleRecursiveReferences()
    {
        $actual = CloneUtils::copyDeep($this->original);

        $this->original->object->object->scalar = '';

        $this->assertEquals(
            'second reference',
            $actual->object->object->scalar
        );
    }

    /**
     * @return void
     *
     * @coversDefaultClass copyDeep
     * @test
     */
    public function testCopyDeepCanHandleSelfReferences()
    {
        $actual = CloneUtils::copyDeep($this->original);

        $this->assertTrue($actual === $actual->selfReference);
        $this->assertFalse($this->original === $actual->selfReference);

        $this->assertTrue($actual === $actual->objectArray[1]);
        $this->assertFalse(
            $this->original->objectArray[1] === $actual->objectArray[1]
        );
    }

    /**
     * @return void
     *
     * @coversDefaultClass copyDeep
     * @expectedException \InvalidArgumentException
     * @test
     */
    public function testCopyDeepThrowsExceptionIfNoObject()
    {
        CloneUtils::copyDeep(null);
    }
}
