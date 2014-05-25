<?php
/**
 * FlorianWolters\Component\Core\CloneNotSupportedTraitTest
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 */

namespace FlorianWolters\Component\Core;

/**
 * Test class for {@see CloneNotSupportedTrait}.
 *
 * @since  Class available since Release 0.1.0
 * @covers FlorianWolters\Component\Core\CloneNotSupportedTrait
 */
class CloneNotSupportedTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * The object under test.
     *
     * @var object
     */
    private $object;

    /**
     * Sets up the fixture.
     *
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        $traitName = __NAMESPACE__ . '\CloneNotSupportedTrait';
        $this->object = $this->getObjectForTrait($traitName);
    }

    /**
     * @return void
     *
     * @coversDefaultClass __clone
     * @expectedException FlorianWolters\Component\Core\CloneNotSupportedException
     * @test
     */
    public function testMagicMethodClone()
    {
        clone $this->object;
    }
}
