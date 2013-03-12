<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\CloneableInterface;

class Book implements CloneableInterface
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $price;

    /**
     * @var Author[]
     */
    public $authors;

    /**
     * @var Publisher
     */
    public $publisher;

    /**
     * @param string    $name
     * @param float     $price
     * @param string[]  $authors
     * @param Publisher $publisher
     */
    public function __construct(
        $name,
        $price,
        array $authors,
        Publisher $publisher
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->authors = $authors;
        $this->publisher = $publisher;
    }
}
