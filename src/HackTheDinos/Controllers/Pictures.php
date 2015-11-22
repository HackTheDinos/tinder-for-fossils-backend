<?php namespace HackTheDinos\Controllers;

use HackTheDinos\Repositories\Interfaces;
use HackTheDinos\Services;
use HackTheDinos\Models;
use Symfony\Component\HttpFoundation;

class Pictures
{
    /**
     * @var Interfaces\Pictures
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
     * @param Interfaces\Pictures $repo
     * @param Services\Converter $converter
     * @param \Monolog\Logger $log
     */
    public function __construct(Interfaces\Pictures $repo, Services\Converter $converter, \Monolog\Logger $log)
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
    public function postIndex(HttpFoundation\Request $request)
    {
        $this->log->addDebug(print_r($request, true), [
            'namespace' => 'HackTheDinos\\Controllers\\Pictures',
            'method' => 'postIndex',
            'type' => 'request',
        ]);

        // first, get the image file and store it to our upload directory.
        $file = $request->files->get('picture');

        $path = __DIR__.'/../../../uploads/';
        $newfilename = date('Y-m-d_H:i:s') . '.' . $file->guessExtension();
        $file->move($path, $newfilename);

        // TODO create a model object
        $picture = new Models\Picture($newfilename);

        // TODO save to DB
        if ($this->repo->save($picture)) {
            $this->log->addInfo('Created new picture', [
                'namespace' => 'HackTheDinos\\Controllers\\Picture',
                'method' => 'postIndex',
                'picture' => (array)$picture
            ]);
            // TODO return picture db id
            return new HttpFoundation\JsonResponse($picture, 201);
        }
        $this->log->addWarning('Unable to create picture', [
            'namespace' => 'HackTheDinos\\Controllers\\Picture',
            'method' => 'postIndex',
            'request' => $request->getContent(),
            'picture' => (array)$picture
        ]);
        return new HttpFoundation\Response('Bad Request', 400);
    }
}
