<?php
namespace FlorianWolters\Component\Core\Cloneable;

/**
 * A class uses the {@link CloneNotSupportedTrait} to indicate to the `__clone`
 * method of a class that it is illegal for that method to make a
 * field-for-field copy of instances of that class.
 *
 * Invoking the `__clone` method on an instance that uses the {@link
 * CloneNotSupportedTrait} results in the exception {@link
 * CloneNotSupportedException} being thrown.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @see       CloneNotSupportedException
 * @since     Trait available since Release 0.1.0
 */
trait CloneNotSupportedTrait
{
    /**
     * Throws a {@link CloneNotSupportedException}.
     *
     * @return void
     * @throws CloneNotSupportedException Always.
     */
    public function __clone()
    {
        throw new CloneNotSupportedException;
    }
}
