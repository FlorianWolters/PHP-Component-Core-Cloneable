<?php
namespace FlorianWolters\Component\Core;

use FlorianWolters\Mock\Book;

/**
 * Test class for {@see ShallowCloneTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @since     Class available since Release 0.2.0
 *
 * @covers    FlorianWolters\Component\Core\ShallowCloneTrait
 */
class ShallowCloneTraitTest extends CloneTraitTestAbstract
{
    /**
     * @return void
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$cloneTrait = __NAMESPACE__ . '\ShallowCloneTrait';
        self::$authorClass = 'FlorianWolters\Mock\AuthorUsingShallowClone';
        self::$bookClass = 'FlorianWolters\Mock\BookUsingShallowClone';
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
            $clone->authors[0]->lastname
        );
        $this->assertEquals(
            'bar',
            $clone->authors[0]->firstname
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
