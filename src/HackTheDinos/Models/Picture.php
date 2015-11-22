<?php namespace HackTheDinos\Models;

class User implements \JsonSerializable
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
     * @var datetime
     */
    public $timeCreated;

    public function jsonSerialize()
    {
        $clone = clone $this;

        //Important!! Be sure to return an array and not the actual object
        //otherwise you'll get into an infinite loop as it will also have
        //this exact same jsonSerialize method
        return (array)$clone;
    }
}
