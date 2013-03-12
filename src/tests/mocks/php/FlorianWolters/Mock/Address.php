<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\CloneableInterface;

class Address implements CloneableInterface
{
    public $postalCode;
    
    public function __construct($postalCode)
    {
        $this->postalCode = $postalCode;
    }
}
