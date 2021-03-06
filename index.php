<?php

require __DIR__.'/bootstrap.php';

//Add some out of the box grant types.
$app['oauth2.service']->addGrantType(new \OAuth2\GrantType\UserCredentials($app['login.service']));
$app['oauth2.service']->addGrantType(new \OAuth2\GrantType\RefreshToken($app['oauth2.storage.service']), [
    'always_issue_new_refresh_token' => true
]);

$app['oauth2.controller'] = $app->share(function () use ($app) {
    return new \HackTheDinos\Controllers\OAuth2(
        $app['oauth2.service'],
        $app['log.service']
    );
});

//Set up routing with OAuth middleware that will be run before each secured request
$validateUser = function (\Symfony\Component\HttpFoundation\Request $request, \Silex\Application $app) {
    return $app['oauth2.controller']->validateRequest($request, 'user');
};

$app['user.controller'] = $app->share(function() use ($app) {
    return new \HackTheDinos\Controllers\Users(
        $app['users.repository'],
        $app['converter.service'],
        $app['log.service']
    );
});

$app['picture.controller'] = $app->share(function() use ($app) {
    return new \HackTheDinos\Controllers\Pictures(
        $app['pictures.repository'],
        $app['converter.service'],
        $app['log.service']
    );
});

$app['fossil.controller'] = $app->share(function() use ($app) {
    return new \HackTheDinos\Controllers\Fossils(
        $app['fossils.repository'],
        $app['votes.repository'],
        $app['converter.service'],
        $app['log.service']
    );
});

$addCorsHeaders = function (\Symfony\Component\HttpFoundation\Request $request,
                            \Symfony\Component\HttpFoundation\Response $response) use ($app) {

    //$response->headers->set('Access-Control-Allow-Origin', $app['cors.domains'], true);
    return $response;
};

//Pre-flight responses should include the needed CORS headers.
$addOptionsHeaders = function (\Symfony\Component\HttpFoundation\Request $request,
                               \Symfony\Component\HttpFoundation\Response $response) use ($app) {

    $response->headers->set('Access-Control-Allow-Methods', 'POST, PUT, GET, DELETE, OPTIONS', false);
    $response->headers->set('Access-Control-Allow-Headers', 'Origin, Accept, Authorization, Content-Type, X-Requested-With', false);
    return $response;
};

$app->post('/token', 'oauth2.controller:postToken')
    ->after($addCorsHeaders);
$app->options('/token', 'oauth2.controller:optionsToken')
    ->after($addCorsHeaders)
    ->after($addOptionsHeaders);

$app->get('/users/{id}', 'user.controller:getIndex')
    ->value('id', null)
    ->after($addCorsHeaders);
$app->post('/users', 'user.controller:postIndex')
    ->after($addCorsHeaders);
$app->put('/users/{id}', 'user.controller:putIndex')
    ->before($validateUser)
    ->after($addCorsHeaders);
$app->options('/users/{id}', 'user.controller:optionsIndex')
    ->value('id', null)
    ->after($addCorsHeaders)
    ->after($addOptionsHeaders);

$app->post('/pictures', 'picture.controller:postIndex')
    ->after($addCorsHeaders);

$app->get('/fossils/{id}', 'fossil.controller:getIndex')
    ->value('id', null)
    ->after($addCorsHeaders);
$app->post('/fossils', 'fossil.controller:postIndex')
    ->after($addCorsHeaders);
$app->options('/fossils/{id}', 'fossil.controller:optionsIndex')
    ->value('id', null)
    ->after($addCorsHeaders)
    ->after($addOptionsHeaders);

$app->post('/fossils/{fossilId}/votes', 'fossil.controller:postVotes')
    ->after($addCorsHeaders);
$app->get('/fossils/{fossilId}/votes', 'fossil.controller:getVotes')
    ->after($addCorsHeaders);
$app->options('/fossils/{id}/votes', 'fossil.controller:optionsIndex')
    ->after($addCorsHeaders)
    ->after($addOptionsHeaders);

$app->run();
