<?php
/**
 * FlorianWolters\Component\Core\DeepCloneTraitTest
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 */

namespace FlorianWolters\Component\Core;

use FlorianWolters\Example\Book;
use FlorianWolters\Example\SelfReferenceUsingDeepClone;

/**
 * Test class for {@see DeepCloneTrait}.
 *
 * @since Class available since Release 0.2.0
 */
class DeepCloneTraitTest extends CloneTraitTestAbstract
{
    /**
     * Sets up the fixture.
     *
     * This method is called before the first test of the test case class is
     * run.
     *
     * @return void
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$cloneTrait = __NAMESPACE__ . '\DeepCloneTrait';
        self::$authorClass = 'FlorianWolters\Example\AuthorUsingDeepClone';
        self::$bookClass = 'FlorianWolters\Example\BookUsingDeepClone';
    }

    /**
     * @return void
     */
    protected function doAssertMagicMethodClone(Book $clone)
    {
        $this->assertEquals('Name of the book', $clone->name);
        $this->assertEquals(9.99, $clone->price);
        $this->assertEquals(
            'Doe',
            $clone->authors[0]->lastName
        );
        $this->assertEquals(
            'John',
            $clone->authors[0]->firstName
        );
        $this->assertEquals(
            12345,
            $clone->authors[0]->address->postalCode
        );
        $this->assertEquals(
            'Name of the publisher',
            $clone->publisher->name
        );
    }

    /**
     * @return void
     *
     * @test
     */
    public function testMagicMethodCloneCopiesSelfReference()
    {
        $original = new SelfReferenceUsingDeepClone;
        $original->selfReference = &$original;

        $clone = clone $original;

        $this->assertInstanceOf(__NAMESPACE__ . '\CloneableInterface', $clone);

        $this->assertTrue($clone === $clone->selfReference);
        $this->assertFalse($clone === $original);
        $this->assertFalse($clone === $original->selfReference);
    }
}
