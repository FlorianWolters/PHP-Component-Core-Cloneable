<?php
/**
 * FlorianWolters\Example\Address
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
class Address implements CloneableInterface
{
    /**
     * The postal code of the {@see Address}.
     *
     * @var integer
     */
    public $postalCode;

    /**
     * Initializes a new instance of the {@see Address} class.
     *
     * @param integer $postalCode The postal code of the {@see Address}.
     */
    public function __construct($postalCode)
    {
        $this->postalCode = $postalCode;
    }
}
