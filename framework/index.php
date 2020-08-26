<?php
require 'vendor/autoload.php';

$app = new App\App;
$container = $app->getContainer();

$container['errorHandler'] = function () {
    die('Page does not exist');
};

//var_dump($container);

$container['config'] = function () {
    return [
        'db_driver' => 'mysql',
        'db_host' => 'localhost',
        'db_name' => 'project',
        'db_user' => 'inchoo',
        'db_pass' => 'password',
    ];
};
//var_dump($container->has('config'));
//var_dump($container->config);
//var_dump($container);

$container['db'] = function ($c) {
    return new PDO(
        $c->config['db_driver'] . ':host=' . $c->config['db_host'] . ';dbname=' . $c->config['db_name'],
        $c->config['db_user'], 
        $c->config['db_pass']
    );
};

/*
$app->get('/', function() {
    echo 'Home section';
    echo 'Home';
});

$app->get('/welcome', function() {
    echo 'Welcome';
});

$app->post('/signup', function() {
    echo 'Sign up!';
});

$app->map('/users', function() {
    echo 'Users';
}, ['GET', 'POST']);
*/

$app->get('/', [App\Controllers\HomeController::class, 'index']);

$app->get('/home', function ($response) {
    var_dump($response);
    die();
});

$app->run();