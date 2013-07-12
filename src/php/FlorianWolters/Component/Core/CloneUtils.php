<?php
namespace FlorianWolters\Component\Core;

use \InvalidArgumentException;

/**
 * The static class {@see CloneUtils} offers operations to clone objects.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @see       CloneNotSupportedException
 * @since     Class available since Release 0.2.0
 */
final class CloneUtils
{
    // @codeCoverageIgnoreStart

    /**
     * {@see CloneUtils} instances can **NOT** be constructed in standard
     * programming.
     *
     * Instead, the class should be used as:
     * /---code php
     * $clone = CloneUtils::copyDeep($original);
     * \---
     */
    protected function __construct()
    {
    }

    // @codeCoverageIgnoreEnd

    /**
     * Creates and returns a deep copy of the specified object.
     *
     * The deep copy is **recursive**, so it cannot be used if the specified
     * object has one or more circular or parental references.
     *
     * @param object $source The object to copy.
     *
     * @return object The deep copy of the object.
     * @throws InvalidArgumentException If `$source` is not an object.
     */
    public static function copyDeep($source)
    {
        if (false === \is_object($source)) {
            throw new InvalidArgumentException('$source is not an object.');
        }

        return \unserialize(\serialize($source));
    }

    /**
     * Creates and returns a copy of the specified object.
     *
     * The precise meaning of "copy" may depend on the class of the object.
     *
     * @param CloneableInterface $source The object to copy.
     *
     * @return CloneableInterface The copy of the object.
     */
    public static function copy(CloneableInterface $source)
    {
        return clone $source;
    }

    /**
     * Throws a {@see CloneNotSupportedException} if the specified object does
     * not implement {@see CloneableInterface}.
     *
     * @param CloneableInterface $obj The object to check.
     *
     * @return void
     * @throws CloneNotSupportedException If the object `$obj` does not
     *                                    implement {@see CloneableInterface}.
     */
    public static function throwCloneNotSupportedExceptionIfNotInstanceOfCloneableInterface($obj)
    {
        if (false === self::isInstanceOfCloneableInterface($obj)) {
            self::throwCloneNotSupportedException();
        }
    }

    /**
     * Checks whether the specified object is an instance of {@see
     * CloneableInterface}.
     *
     * @param CloneableInterface $obj The object to check.
     *
     * @return boolean `true` if the object `$obj` is an instance of {@see
     *                 CloneableInterface}; `false` otherwise.
     */
    private static function isInstanceOfCloneableInterface($obj)
    {
        return (true === ($obj instanceof CloneableInterface));
    }

    /**
     * Throws a {@see CloneNotSupportedException}.
     *
     * @return void
     * @throws CloneNotSupportedException Always.
     */
    private static function throwCloneNotSupportedException()
    {
        throw new CloneNotSupportedException(
            'The object does not implement ' . __NAMESPACE__
            . '\CloneableInterface.'
        );
    }
}
