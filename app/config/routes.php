<?php

use App\Actions\HomeAction;
use App\Actions\LoginAction;
use Slim\App;

return function (App $app) {
    $app->get('/login', LoginAction::class);
    $app->get('/', HomeAction::class);
};
