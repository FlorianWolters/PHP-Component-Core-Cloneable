<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\CloneableInterface;

class Publisher implements CloneableInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
