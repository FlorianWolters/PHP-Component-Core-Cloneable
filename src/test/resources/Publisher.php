<?php
/**
 * FlorianWolters\Example\Publisher
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
class Publisher implements CloneableInterface
{
    /**
     * The name of this {@see Publisher}.
     *
     * @var string
     */
    public $name;

    /**
     * Initializes a new instance of the {@see Publisher} class.
     *
     * @param string $name The name of the {@see Publisher}.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
