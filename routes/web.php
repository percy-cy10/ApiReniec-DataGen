<?php

$router->get('/', function () use ($router) {
    return view('consultas', ['mensaje' => ""]);
});

require __DIR__.'/api.php';
