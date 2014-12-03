<?php

Route::get('/', [
    'controller' => 'CalcController',
    'method' => 'renderPage',
    'alias' => 'calculator'
]);

Route::post('/', [
    'controller' => 'CalcController',
    'method' => 'postForm',
    'alias' => 'calculator-post'
]);

Route::notFound([
    'controller' => 'ErrorNotFoundController',
    'method' => 'renderPage',
    'alias' => 'error-404'
]);
