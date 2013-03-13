<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\CloneableInterface;

/**
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Cloneable
 * @since     Class available since Release 0.2.0
 */
class Author implements CloneableInterface
{
    /**
     * @var string
     */
    public $lastname;

    /**
     * @var string
     */
    public $firstname;
    
    /**
     * @var Address
     */
    public $address;

    public function __construct($lastname, $firstname, Address $address = null)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->address = $address;
    }
}
