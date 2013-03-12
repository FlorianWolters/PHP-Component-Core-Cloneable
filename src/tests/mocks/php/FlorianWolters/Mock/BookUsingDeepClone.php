<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\DeepCloneTrait;

class BookUsingDeepClone extends Book
{
    use DeepCloneTrait;
}
