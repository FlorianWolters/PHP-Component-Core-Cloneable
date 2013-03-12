<?php
namespace FlorianWolters\Component\Core;

/**
 * A class uses the {@see DeepCloneTrait} to indicate to the `__clone`
 * method of a class that it is **legal** for that method to make a **deep*
 * field-for-field copy of instances of that class.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @since     Trait available since Release 0.2.0
 */
trait DeepCloneTrait
{
    use ShallowCloneTrait {
        __clone as shallowCloneTraitClone;
    }

    /**
     * Creates a copy of the object.
     *
     * "copy" means performing a deep copy of all of the properties of the
     * object.
     *
     * @return void
     * @throws CloneNotSupportedException If the object using this trait does
     *                                    not implement {@see
     *                                    CloneableInterface}.
     * @throws CloneNotSupportedException If an object property of the object
     *                                    using this trait does not implement
     *                                    {@see CloneableInterface}.
     */
    public function __clone()
    {
        $this->shallowCloneTraitClone();

        foreach ($this as $key => $value) {
            if (true === \is_object($value)) {
                $this->throwCloneNotSupportedExceptionIfNotImplementsCloneableInterface($value);
                $this->{$key} = clone $value;
            } elseif (true === \is_array($value)) {
                \array_walk_recursive(
                    $value,
                    function (&$element) {
                        $this->throwCloneNotSupportedExceptionIfNotImplementsCloneableInterface($element);
                        $element = clone $element;
                    }
                );
                $this->{$key} = $value;
            }
        }
    }
}
