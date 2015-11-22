<?php namespace HackTheDinos\Models;

class User implements \JsonSerializable
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string (hashed)
     */
    public $password;

    /**
     * @var string
     */
    public $email;

    public function jsonSerialize()
    {
        $clone = clone $this;

        unset($clone->password);

        //Important!! Be sure to return an array and not the actual object
        //otherwise you'll get into an infinite loop as it will also have
        //this exact same jsonSerialize method
        return (array)$clone;
    }
}
