<?php
/**
 * FlorianWolters\Example\Author
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
class Author implements CloneableInterface
{
    /**
     * The first name of this {@see Author}.
     *
     * @var string
     */
    public $lastName;

    /**
     * The last name of this {@see Author}.
     *
     * @var string
     */
    public $firstName;

    /**
     * The address of this {@see Author}.
     *
     * @var Address
     */
    public $address;

    /**
     * Initializes a new instance of the {@see Author} class.
     *
     * @param string  $lastName  The first name of the {@see Author}.
     * @param string  $firstName The last name of the {@see Author}.
     * @param Address $address   The address of the {@see Author}.
     */
    public function __construct($lastName, $firstName, Address $address = null)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->address = $address;
    }
}
