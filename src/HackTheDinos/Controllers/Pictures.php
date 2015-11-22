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
     * @param Interfaces\Users $repo
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

        $path = __DIR__.'/../../../upload/';
        $newfilename = date('Y-m-d_H:i:s') . '.' . $file->guessExtension();
        $file->move($path, $newfilename);

        // TODO create a model object

        // TODO save to DB

        // TODO return picture db id
        return new HttpFoundation\Response($newfilename, 200);
    }
}
