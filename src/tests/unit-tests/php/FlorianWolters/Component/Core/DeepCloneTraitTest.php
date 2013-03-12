<?php
namespace FlorianWolters\Component\Core;

use FlorianWolters\Mock\Book;

/**
 * Test class for {@see DeepCloneTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @since     Class available since Release 0.2.0
 *
 * @covers    FlorianWolters\Component\Core\DeepCloneTrait
 */
class DeepCloneTraitTest extends CloneTraitTestAbstract
{
    /**
     * @return void
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$cloneTrait = __NAMESPACE__ . '\DeepCloneTrait';
        self::$authorClass = 'FlorianWolters\Mock\AuthorUsingDeepClone';
        self::$bookClass = 'FlorianWolters\Mock\BookUsingDeepClone';
        
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
            $clone->authors[0]->lastname
        );
        $this->assertEquals(
            'John',
            $clone->authors[0]->firstname
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
}
