<?php
namespace FlorianWolters\Component\Core;

use FlorianWolters\Mock\Address;
use FlorianWolters\Mock\Book;
use FlorianWolters\Mock\Publisher;

/**
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @since     Class available since Release 0.2.0
 */
abstract class CloneTraitTestAbstract extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected static $cloneTrait;

    /**
     * @var string
     */
    protected static $authorClass;

    /**
     * @var string
     */
    protected static $bookClass;

    /**
     * The object under test.
     *
     * @var Book
     */
    protected $book;

    /**
     * Sets up the fixture.
     *
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        // Arrays are passed "by copy", but can contain objects which are passed
        // "by reference".
        $authors = [
            new self::$authorClass('Doe', 'John', new Address(12345))
        ];
        // Objects are passed "by reference".
        $publisher = new Publisher('Name of the publisher');

        // Scalars are passed "by copy".
        $this->book = new self::$bookClass(
            'Name of the book',
            9.99,
            $authors,
            $publisher
        );
    }

    /**
     * @return void
     *
     * @coversDefaultClass __clone
     * @test
     */
    public function testMagicMethodClone()
    {
        $clonedBook = clone $this->book;
        $this->modifyBook($this->book);
        $this->doAssertMagicMethodClone($clonedBook);
    }

    /**
     * @param Book $clone
     * 
     * @return void
     */
    abstract protected function doAssertMagicMethodClone(Book $clone);

    /**
     * @param Book $book
     *
     * @return void
     */
    private function modifyBook(Book $book)
    {
        $book->name = 'foo';
        $book->price = .99;
        $book->authors[0]->lastname = 'foo';
        $book->authors[0]->firstname = 'bar';
        $book->authors[0]->address->postalCode = 98765;
        $book->publisher->name = 'foo';
    }

    /**
     * @return void
     *
     * @expectedException FlorianWolters\Component\Core\CloneNotSupportedException
     * @coversDefaultClass __clone
     * @test
     */
    public function testThrowsCloneNotSupportedExceptionIfNotImplementingCloneableInterface()
    {
        $obj = $this->getObjectForTrait(self::$cloneTrait);
        clone $obj;
    }
}
