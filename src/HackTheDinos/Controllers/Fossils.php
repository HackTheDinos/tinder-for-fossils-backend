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
    private $repo;

    /**
     * @var Services\Converter
     */
    private $converter;

    /**
     * @var \Monolog\Logger
     */
    private $log;

    /**
     * Users constructor.
     * @param Interfaces\Fossils $repo
     * @param Services\Converter $converter
     * @param \Monolog\Logger $log
     */
    public function __construct(Interfaces\Fossils $repo, Services\Converter $converter, \Monolog\Logger $log)
    {
        $this->repo = $repo;
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

        $users = is_null($id) ? $this->repo->getAll([], $count, $start) : $this->repo->getById($id);

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
        if ($this->repo->save($fossil)) {
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
}
