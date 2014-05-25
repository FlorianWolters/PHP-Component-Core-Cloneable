<?php
/**
 * FlorianWolters\Example\Book
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 */

namespace FlorianWolters\Example;

use FlorianWolters\Component\Core\CloneableInterface;

/**
 * @since Class available since Release 0.2.0
 */
class Book implements CloneableInterface
{
    /**
     * The name of this {@see Book}.
     *
     * @var string
     */
    public $name;

    /**
     * The prince of this {@see Book}.
     *
     * @var float
     */
    public $price;

    /**
     * The {@see Author}s of this {@see Book}.
     *
     * @var array
     */
    public $authors;

    /**
     * The {@see Publisher} of this {@see Book}.
     *
     * @var Publisher
     */
    public $publisher;

    /**
     * Initializes a new instance of the {@see Book} class.
     *
     * @param string    $name      The name of the {@see Book}.
     * @param float     $price     The prince of the {@see Book}.
     * @param array     $authors   The {@see Author}s of the {@see Book}.
     * @param Publisher $publisher The {@see Publisher} of the {@see Book}.
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
