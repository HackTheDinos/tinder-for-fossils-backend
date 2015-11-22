<?php

$app['users.repository'] = $app->share(function () use ($app) {
    return new \HackTheDinos\Repositories\Pdo\Users(
        $app['pdo.service'],
        $app['converter.service']
    );
});
