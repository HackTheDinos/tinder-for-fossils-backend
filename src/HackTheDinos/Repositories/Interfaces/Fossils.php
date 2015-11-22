<?php namespace HackTheDinos\Repositories\Interfaces;

use HackTheDinos\Models;

interface Fossils
{
    /**
     * Get a fossil based on Id.
     *
     * @param integer $fossilId
     * @return Models\Fossil or null
     */
    public function getById($fossilId);

    /**
     * Get all fossils that match the specified filter.
     *
     * @param array $filters
     * @param int $count
     * @param int $start
     * @return Models\Fossil[]
     */
    public function getAll(array $filters = [], $count = 10, $start = 0);

    /**
     * Creates or updates a fossil.
     *
     * @param Models\Fossil $fossil
     * @return bool
     */
    public function save(Models\Fossil &$fossil);
}
