<?php

Route::get('/', [
    'controller' => 'CalcController',
    'method' => 'renderPage',
    'alias' => 'calc'
]);

Route::post('/', [
    'controller' => 'CalcController',
    'method' => 'calc'
]);

Route::notFound([
    'controller' => 'ErrorNotFoundController',
    'method' => 'renderPage',
    'alias' => 'error-404'
]);
