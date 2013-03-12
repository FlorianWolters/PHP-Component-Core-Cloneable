<?php
namespace FlorianWolters\Component\Core;

/**
 * A class implements the {@see CloneableInterface} to indicate to the magic
 * `__clone` method of a class that it is legal for that method to make a
 * field-for-field copy of instances of that class.
 *
 * By convention, classes that implement this interface should use either the
 * {@see ShallowCloneTrait} or the {@see DeepCloneTrait}.
 *
 * Invoking the magic `__clone` method on an instance that does not implement
 * the {@see CloneableInterface} results in the exception {@see
 * CloneNotSupportedException} being thrown when using the {@see
 * ShallowCloneTrait} or the {@see DeepCloneTrait}.
 *
 * Note that this interface does not contain the magic `__clone` method.
 * Therefore, it is not possible to clone an object merely by virtue of the fact
 * that it implements this interface.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @see       CloneNotSupportedException
 * @since     Interface available since Release 0.1.0
 */
interface CloneableInterface
{
}
