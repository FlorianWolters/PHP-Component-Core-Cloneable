<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\DeepCloneTrait;

class AuthorUsingDeepClone extends Author
{
    use DeepCloneTrait;
}
