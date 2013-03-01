<?php
namespace FlorianWolters\Component\Core;

/**
 * A class uses the {@see CloneNotSupportedTrait} to indicate to the `__clone`
 * method of a class that it is **illegal** for that method to make a
 * field-for-field copy of instances of that class.
 *
 * Invoking the `__clone` method on an instance that uses the {@see
 * CloneNotSupportedTrait} results in the exception {@see
 * CloneNotSupportedException} being thrown.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @see       CloneNotSupportedException
 * @since     Trait available since Release 0.1.0
 */
trait CloneNotSupportedTrait
{
    /**
     * Throws a {@see CloneNotSupportedException}.
     *
     * @return void
     * @throws CloneNotSupportedException Always.
     */
    public function __clone()
    {
        throw new CloneNotSupportedException;
    }
}
