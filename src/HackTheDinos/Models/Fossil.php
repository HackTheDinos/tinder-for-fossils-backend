<?php namespace HackTheDinos\Models;

class Fossil implements \JsonSerializable
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var \datetime
     */
    public $submissionDate;

    /**
     * @var bool
     */
    public $paleoDecision;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var array
     */
    public $pictures;

    public function jsonSerialize()
    {
        $clone = clone $this;

        if (!is_scalar($clone->submissionDate)) {
            $clone->submissionDate = $clone->submissionDate->format(\DateTime::ISO8601);
        }

        //Important!! Be sure to return an array and not the actual object
        //otherwise you'll get into an infinite loop as it will also have
        //this exact same jsonSerialize method
        return (array)$clone;
    }
}
