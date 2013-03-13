<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\CloneableInterface;

/**
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @since     Class available since Release 0.2.0
 */
class Book implements CloneableInterface
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $price;

    /**
     * @var Author[]
     */
    public $authors;

    /**
     * @var Publisher
     */
    public $publisher;

    /**
     * @param string    $name
     * @param float     $price
     * @param string[]  $authors
     * @param Publisher $publisher
     */
    public function __construct(
        $name,
        $price,
        array $authors,
        Publisher $publisher
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->authors = $authors;
        $this->publisher = $publisher;
    }
}
