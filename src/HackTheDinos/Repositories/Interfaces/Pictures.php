<?php namespace HackTheDinos\Repositories\Interfaces;

use HackTheDinos\Models;

interface Pictures
{
    /**
     * Get a picture based on Id.
     *
     * @param integer $id
     * @return Models\Pictures or null
     */
    public function getById($id);

    /**
     * Get all pictures that match the specified filter.
     *
     * @param array $filters
     * @param int $count
     * @param int $start
     * @return Models\Picture[]
     */
    public function getAll(array $filters = [], $count = 10, $start = 0);

    /**
     * Creates or updates a picture.
     *
     * @param Models\Picture $picture
     * @return bool
     */
    public function save(Models\Picture &$picture);
}
