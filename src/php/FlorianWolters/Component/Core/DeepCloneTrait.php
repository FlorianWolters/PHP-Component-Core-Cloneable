<?php
namespace FlorianWolters\Component\Core;

/**
 * A class uses the {@see DeepCloneTrait} to indicate to the magic `__clone`
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
    /**
     * Creates a copy of this object.
     *
     * "copy" means performing a **deep** copy of all of the properties of this
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
    final public function __clone()
    {
        CloneUtils::throwCloneNotSupportedExceptionIfNotInstanceOfCloneableInterface($this);

        foreach ($this as $key => $value) {
            if (true === \is_object($value)) {
                CloneUtils::throwCloneNotSupportedExceptionIfNotInstanceOfCloneableInterface($value);

                // Detect possible self-reference.
                if ($this == $value) {
                    $this->{$key} = &$this;
                } else {
                    $this->{$key} = CloneUtils::copy($value);
                }
            } elseif (true === \is_array($value)) {
                \array_walk_recursive(
                    $value,
                    function (&$element) {
                        CloneUtils::throwCloneNotSupportedExceptionIfNotInstanceOfCloneableInterface($element);

                        // Detect possible self-reference.
                        if ($this == $element) {
                            $element = &$this;
                        } else {
                            $element = CloneUtils::copy($element);
                        }
                    }
                );
                $this->{$key} = $value;
            }
        }
    }
}
