<?php namespace HackTheDinos\Models;

class Picture implements \JsonSerializable
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $filepath;

    /**
     * @var boolean
     */
    public $primaryPicture;

    /**
     * @var int
     */
    public $fossilId;

    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }

    public function jsonSerialize()
    {
        $clone = clone $this;

        //Important!! Be sure to return an array and not the actual object
        //otherwise you'll get into an infinite loop as it will also have
        //this exact same jsonSerialize method
        return (array)$clone;
    }
}
