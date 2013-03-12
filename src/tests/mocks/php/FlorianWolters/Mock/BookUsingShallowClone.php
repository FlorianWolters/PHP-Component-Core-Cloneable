<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\ShallowCloneTrait;

class BookUsingShallowClone extends Book
{
    use ShallowCloneTrait;
}
