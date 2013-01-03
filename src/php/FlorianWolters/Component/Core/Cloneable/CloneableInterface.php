<?php
namespace FlorianWolters\Component\Core\Cloneable;

/**
 * A class implements the {@link CloneableInterface} to indicate to the
 * `__clone` method of a class that it is legal for that method to make a
 * field-for-field copy of instances of that class.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @see       CloneNotSupportedException, CloneNotSupportedTrait
 * @since     Interface available since Release 0.1.0
 */
interface CloneableInterface
{
    /**
     * Creates and returns a copy of the object.
     *
     * The precise meaning of "copy" may depend on the class of the object.
     *
     * @return object The copy of the object.
     */
    public function __clone();
}
