<?php
/**
 * FlorianWolters\Example\SelfReferenceUsingDeepClone
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
use FlorianWolters\Component\Core\DeepCloneTrait;

/**
 * @since Class available since Release 0.2.0
 */
class SelfReferenceUsingDeepClone implements CloneableInterface
{
    use DeepCloneTrait;

    /**
     * @var SelfReferenceUsingDeepClone
     */
    public $selfReference;
}
