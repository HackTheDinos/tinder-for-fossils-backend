<?php namespace HackTheDinos\Controllers;

use HackTheDinos\Repositories\Interfaces;
use HackTheDinos\Services;
use HackTheDinos\Models;
use Symfony\Component\HttpFoundation;

class Users
{
    /**
     * @var Interfaces\Users
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
     * @param Interfaces\Users $repo
     * @param Services\Converter $converter
     * @param \Monolog\Logger $log
     */
    public function __construct(Interfaces\Users $repo, Services\Converter $converter, \Monolog\Logger $log)
    {
        $this->repo = $repo;
        $this->converter = $converter;
        $this->log = $log;
    }

    /**
     * @param $id
     * @param HttpFoundation\Request $request
     * @return HttpFoundation\JsonResponse|HttpFoundation\Response
     */
    public function getIndex($id, HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\Dog',
            'method' => 'getIndex',
            'type' => 'request',
        ]);

        $count = $request->get('count', 10);
        $count = $count > 100 ? 100 : $count; //Cap the max number of returned results
        $start = $request->get('start', 0);
        $start = $start < 0 ? 0 : $start; //Prevent negatives on the start value

        $users = is_null($id) ? $this->repo->getAll([], $count, $start) : $this->repo->getById($id);

        $this->log->addInfo('Found Users', [
            'namespace' => 'HackTheDinos\\Controllers\\User',
            'method' => 'getIndex',
            'users' => $users,
        ]);

        return new HttpFoundation\JsonResponse($users, 200);
    }

    /**
     * Create a new user
     *
     * @param HttpFoundation\Request $request
     * @return HttpFoundation\JsonResponse|HttpFoundation\Response
     */
    public function postIndex(HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\User',
            'method' => 'postIndex',
            'type' => 'request',
        ]);

        $user = $this->converter->entityArrayToModel(json_decode($request->getContent(), true), new Models\User());
        $user->password = password_hash($user->password, PASSWORD_DEFAULT);
        if ($this->repo->save($user)) {
            $this->log->addInfo('Created new user', [
                'namespace' => 'HackTheDinos\\Controllers\\User',
                'method' => 'postIndex',
                'user' => (array)$user
            ]);
            return new HttpFoundation\JsonResponse($user, 201);
        }

        $this->log->addWarning('Unable to create user', [
            'namespace' => 'HackTheDinos\\Controllers\\User',
            'method' => 'postIndex',
            'request' => $request->getContent(),
            'user' => (array)$user
        ]);
        return new HttpFoundation\Response('Bad Request', 400);
    }

    /**
     * Update an existing user
     *
     * @param int $id
     * @param HttpFoundation\Request $request
     * @return HttpFoundation\JsonResponse|HttpFoundation\Response
     */
    public function putIndex($id, HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\User',
            'method' => 'putIndex',
            'type' => 'request',
        ]);

        //If this request validated then the userId should be in the request.
        $userId = $request->request->get('userId');
        if ($userId === $id) {
            $user = $this->repo->getById($userId);
            $this->log->addDebug(print_r($user, true), [
                'namespace' => 'HackTheDinos\\Controllers\\User',
                'method' => 'putIndex',
                'type' => 'user'
            ]);

            //It's almost impossible for this to happen but it's good defensive coding.
            if (!empty($user)) {
                $user = $this->converter->entityArrayToModel(json_decode($request->getContent(), true), new Models\User());
                $user->id = $userId;
                if (isset($user->password)) {
                    $user->password = password_hash($user->password, PASSWORD_DEFAULT);
                }

                if ($this->repo->save($user)) {
                    $this->log->addInfo('Updated user', [
                        'namespace' => 'HackTheDinos\\Controllers\\User',
                        'method' => 'putIndex',
                        'user' => (array)$user
                    ]);
                    return new HttpFoundation\JsonResponse($user, 200);
                }

                //Otherwise we couldn't save the user for some reason
                $this->log->addWarning('Unable to update user', [
                    'namespace' => 'HackTheDinos\\Controllers\\User',
                    'method' => 'putIndex',
                    'request' => $request->getContent(),
                    'user' => (array)$user
                ]);
                return new HttpFoundation\Response('Bad Request', 400);
            }
        }

        //We didn't find a user to update.
        $this->log->addWarning('No user found', [
            'namespace' => 'HackTheDinos\\Controllers\\User',
            'method' => 'putIndex',
            'id' => $id,
            'userId' => $userId
        ]);

        return new HttpFoundation\Response('Not Found', 404);
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
            'namespace' => 'HackTheDinos\\Controllers\\User',
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
