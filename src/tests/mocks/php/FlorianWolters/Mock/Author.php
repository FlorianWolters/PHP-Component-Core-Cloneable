<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\CloneableInterface;

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
