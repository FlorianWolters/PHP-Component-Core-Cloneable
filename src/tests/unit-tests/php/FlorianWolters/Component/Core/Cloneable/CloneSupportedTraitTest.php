<?php
namespace FlorianWolters\Component\Core\Cloneable;

/**
 * Test class for {@link CloneSupportedTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @since     Class available since Release 0.1.0
 *
 * @covers FlorianWolters\Component\Core\Cloneable\CloneSupportedTraitTest
 */
class CloneSupportedTraitTest extends \PHPUnit_Framework_TestCase
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
        $traitName = __NAMESPACE__ . '\CloneSupportedTrait';
        $this->object = $this->getObjectForTrait($traitName);
    }

    /**
     * @return void
     *
     * @coversDefaultClass __clone
     * @test
     */
    public function testMagicMethodClone()
    {
        $copy = clone $this->object;

        $this->assertEquals($this->object, $copy);
    }
}
