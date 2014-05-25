<?php
/**
 * FlorianWolters\Component\Core\ShallowCloneTraitTest
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

/**
 * Test class for {@see ShallowCloneTrait}.
 *
 * @since Class available since Release 0.2.0
 */
class ShallowCloneTraitTest extends CloneTraitTestAbstract
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
        self::$cloneTrait = __NAMESPACE__ . '\ShallowCloneTrait';
        self::$authorClass = 'FlorianWolters\Example\AuthorUsingShallowClone';
        self::$bookClass = 'FlorianWolters\Example\BookUsingShallowClone';
    }

    /**
     * @return void
     */
    protected function doAssertMagicMethodClone(Book $clone)
    {
        $this->assertEquals('Name of the book', $clone->name);
        $this->assertEquals(9.99, $clone->price);
        $this->assertEquals(
            'foo',
            $clone->authors[0]->lastName
        );
        $this->assertEquals(
            'bar',
            $clone->authors[0]->firstName
        );
        $this->assertEquals(
            98765,
            $clone->authors[0]->address->postalCode
        );
        $this->assertEquals(
            'foo',
            $clone->publisher->name
        );
    }
}
