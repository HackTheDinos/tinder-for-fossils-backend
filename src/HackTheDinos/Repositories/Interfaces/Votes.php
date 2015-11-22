<?php namespace HackTheDinos\Repositories\Interfaces;

use HackTheDinos\Models;

interface Votes
{
    /**
     * @param array $filters
     * @param int $count
     * @param int $start
     * @return Models\Vote[]
     */
    public function getAll(array $filters = [], $count = 10, $start = 0);

    /**
     * @param Models\Fossil $fossil
     * @param int $count
     * @param int $start
     * @return Models\Vote[]
     */
    public function getAllForFossil(Models\Fossil $fossil, $count = 10, $start = 0);

    /**
     * Creates or updates a vote.
     *
     * @param Models\Vote $vote
     * @return bool
     */
    public function save(Models\Vote &$vote);
}
