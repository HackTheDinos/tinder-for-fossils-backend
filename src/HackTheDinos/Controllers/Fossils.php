<?php namespace HackTheDinos\Controllers;

use HackTheDinos\Repositories\Interfaces;
use HackTheDinos\Services;
use HackTheDinos\Models;
use Symfony\Component\HttpFoundation;

class Fossils
{
    /**
     * @var Interfaces\Fossils
     */
    private $fossilRepo;

    /**
     * @var Interfaces\Votes
     */
    private $voteRepo;

    /**
     * @var Services\Converter
     */
    private $converter;

    /**
     * @var \Monolog\Logger
     */
    private $log;

    /**
     * Fossils constructor.
     * @param Interfaces\Fossils $fossilRepo
     * @param Interfaces\Votes $voteRepo
     * @param Services\Converter $converter
     * @param \Monolog\Logger $log
     */
    public function __construct(Interfaces\Fossils $fossilRepo, Interfaces\Votes $voteRepo, Services\Converter $converter, \Monolog\Logger $log)
    {
        $this->fossilRepo = $fossilRepo;
        $this->voteRepo = $voteRepo;
        $this->converter = $converter;
        $this->log = $log;
    }

    /**
     * Create a new picture
     *
     * @param HttpFoundation\Request $request
     * @return HttpFoundation\JsonResponse|HttpFoundation\Response
     */
    public function getIndex($id, HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\Fossils',
            'method' => 'getIndex',
            'type' => 'request',
        ]);

        $count = $request->get('count', 10);
        $count = $count > 100 ? 100 : $count; //Cap the max number of returned results
        $start = $request->get('start', 0);
        $start = $start < 0 ? 0 : $start; //Prevent negatives on the start value

        $users = is_null($id) ? $this->fossilRepo->getAll([], $count, $start) : $this->fossilRepo->getById($id);

        $this->log->addInfo('Found Users', [
            'namespace' => 'HackTheDinos\\Controllers\\Fossils',
            'method' => 'getIndex',
            'users' => $users
        ]);

        return new HttpFoundation\JsonResponse($users, 200);
    }

    public function postIndex(HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\Fossils',
            'method' => 'postIndex',
            'type' => 'request',
        ]);

        $fossil = $this->converter->entityArrayToModel(json_decode($request->getContent(), true), new Models\Fossil());
        if ($this->fossilRepo->save($fossil)) {
            $this->log->addInfo('Created new user', [
                'namespace' => 'HackTheDinos\\Controllers\\Fossils',
                'method' => 'postIndex',
                'user' => (array)$fossil
            ]);
            return new HttpFoundation\JsonResponse($fossil, 201);
        }

        $this->log->addWarning('Unable to create user', [
            'namespace' => 'HackTheDinos\\Controllers\\Fossils',
            'method' => 'postIndex',
            'request' => $request->getContent(),
            'user' => (array)$fossil
        ]);
        return new HttpFoundation\Response('Bad Request', 400);
    }

    /**
     * Options request for OAuth.
     *
     * @param int $id
     * @param HttpFoundation\Request $request
     * @return HttpFoundation\Response
     */
    public function optionsIndex($id, HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\Fossils',
            'method' => 'optionsIndex',
            'type' => 'request'
        ]);

        $response = new HttpFoundation\Response('OK');
        $response->headers->add([
            'Access-Control-Allow-Methods' => is_null($id) ? 'POST, OPTIONS' : 'POST, PUT, OPTIONS',
        ]);

        return $response;
    }

    /**
     * @param $fossilId
     * @param HttpFoundation\Request $request
     * @return HttpFoundation\JsonResponse|HttpFoundation\Response
     */
    public function getVotes($fossilId, HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\Fossil',
            'method' => 'getVotes',
            'type' => 'request',
        ]);

        $fossil = $this->fossilRepo->getById($fossilId);

        if (is_null($fossil)) {
            $this->log->addWarning('Could not find fossil', [
                'namespace' => 'HackTheDinos\\Controllers\\Fossil',
                'method' => 'getVotes',
                'fossilId' => $fossilId
            ]);

            return new HttpFoundation\Response('Not Found', 404);
        }

        $count = $request->get('count', 10);
        $count = $count > 100 ? 100 : $count; //Cap the max number of returned results
        $start = $request->get('start', 0);
        $start = $start < 0 ? 0 : $start; //Prevent negatives on the start value

        $votes = $this->voteRepo->getAllForFossil($fossil, $count, $start);

        $this->log->addInfo('Found votes', [
            'namespace' => 'HackTheDinos\\Controllers\\Fossils',
            'method' => 'getIndex',
            'fossil' => $fossil,
            'votes' => json_encode($votes)
        ]);

        return new HttpFoundation\JsonResponse($votes, 200);
    }

    /**
     * @param int $fossilId
     * @param HttpFoundation\Request $request
     * @return HttpFoundation\JsonResponse|HttpFoundation\Response
     */
    public function postVotes($fossilId, HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\Fossils',
            'method' => 'postVotes',
            'type' => 'request',
        ]);

        $fossil = $this->fossilRepo->getById($fossilId);

        if (is_null($fossil)) {
            $this->log->addWarning('Could not find fossil', [
                'namespace' => 'HackTheDinos\\Controllers\\Fossils',
                'method' => 'postVotes',
                'fossilId' => $fossilId
            ]);

            return new HttpFoundation\Response('Dog Not Found', 400);
        }

        $vote = $this->converter->entityArrayToModel(json_decode($request->getContent(), true), new Models\Vote());
        $vote->fossilId = $fossil->id;
        if ($this->voteRepo->save($vote)) {
            $this->log->addInfo('Created new vote', [
                'namespace' => 'HackTheDinos\\Controllers\\Fossils',
                'method' => 'postVote',
                'fossil' => $fossil,
                'vote' => $vote
            ]);
            return new HttpFoundation\JsonResponse($vote, 201);
        }

        $this->log->addWarning('Unable to create vote', [
            'namespace' => 'HackTheDinos\\Controllers\\Fossils',
            'method' => 'postVotes',
            'request' => $request->getContent(),
            'fossil' => $fossil,
            'vote' => $vote
        ]);
        return new HttpFoundation\Response('Bad Request', 400);
    }

}
