<?php

$app['login.service'] = $app->share(function () use ($app) {
    return new \HackTheDinos\Services\LoginChecker(
        $app['users.repository']
    );
});

$app['pdo.service'] = $app->share(function () use ($app) {
    return new \PDO(
        $app['database']['pdo']['connection'],
        $app['database']['pdo']['user'],
        $app['database']['pdo']['password']
    );
});

$app['converter.service'] = $app->share(function () {
    return new \HackTheDinos\Services\Converter();
});

$app['log.service'] = $app->share(function () use ($app) {
    $handlers = [
        //TODO: Uncomment whichever handler you want to use for logging.
        //new \Monolog\Handler\RedisHandler($app['redis.service'], $app['log']['key'], $app['log']['level']),
        //new \Monolog\Handler\DynamoDbHandler($app['dynamodb.service'], $app['log']['key'], $app['log']['level'])
        new \Monolog\Handler\RotatingFileHandler($app['log']['file'], 1)
    ];
    return new \Monolog\Logger($app['log']['name'], $handlers);
});

$app['oauth2.storage.service'] = $app->share(function () use ($app) {
    //return new \OAuth2\Storage\DynamoDB($app['dynamodb.service'], $app['database']['dynamodb']['oauth']);
    //return new OAuth2\Storage\Memory();
    return new OAuth2\Storage\Pdo($app['pdo.service'], [
        'client_table' => 'oauth_clients',
        'access_token_table' => 'oauth_access_tokens',
        'code_table' => 'oauth_authorizations',
        'refresh_token_table' => 'oauth_refresh_tokens',
        'scope_table' => 'oauth_scopes'
    ]);
});

$app['oauth2.service'] = $app->share(function () use ($app) {
    return new \OAuth2\Server($app['oauth2.storage.service']);
});
