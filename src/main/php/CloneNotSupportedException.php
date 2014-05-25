<?php
/**
 * FlorianWolters\Component\Core\CloneNotSupportedException
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 */

namespace FlorianWolters\Component\Core;

use \Exception;

/**
 * Thrown to indicate that the magic `__clone` method in a class has been called
 * to clone an object, but that the object's class does not implement the {@see
 * CloneableInterface}.
 *
 * Applications that override the `__clone` method can also throw this exception
 * to indicate that an object could not or should not be cloned.
 *
 * @see   CloneableInterface, CloneNotSupportedTrait
 * @since Class available since Release 0.1.0
 */
class CloneNotSupportedException extends Exception
{
}
