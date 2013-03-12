<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\ShallowCloneTrait;

class AuthorUsingShallowClone extends Author
{
    use ShallowCloneTrait;
}
