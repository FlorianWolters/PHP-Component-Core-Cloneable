<?php
namespace FlorianWolters\Component\Core;

/**
 * A class uses the {@see ShallowCloneTrait} to indicate to the magic `__clone`
 * method of a class that it is **legal** for that method to make a **shallow*
 * field-for-field copy of instances of that class.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @since     Trait available since Release 0.2.0
 */
trait ShallowCloneTrait
{
    /**
     * Creates a copy of this object.
     *
     * "copy" means performing a **shallow** copy of all of the properties of
     * this object.
     *
     * @return void
     * @throws CloneNotSupportedException If the object using this trait does
     *                                    not implement {@see
     *                                    CloneableInterface}.
     */
    final public function __clone()
    {
        CloneUtils::throwCloneNotSupportedExceptionIfNotInstanceOfCloneableInterface($this);
    }
}
