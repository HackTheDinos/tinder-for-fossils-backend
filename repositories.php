<?php

$app['users.repository'] = $app->share(function () use ($app) {
    return new \HackTheDinos\Repositories\Pdo\Users(
        $app['pdo.service'],
        $app['converter.service']
    );
});

$app['pictures.repository'] = $app->share(function () use ($app) {
    return new \HackTheDinos\Repositories\Pdo\Pictures(
        $app['pdo.service'],
        $app['converter.service']
    );
});

$app['fossils.repository'] = $app->share(function () use ($app) {
    return new \HackTheDinos\Repositories\Pdo\Fossils(
        $app['pdo.service'],
        $app['converter.service'],
        $app['pictures.repository']
    );
});

$app['votes.repository'] = $app->share(function () use ($app) {
    return new \HackTheDinos\Repositories\Pdo\Votes(
        $app['pdo.service'],
        $app['converter.service']
    );
});