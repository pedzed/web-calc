<?php

Route::get('/', [
    'controller' => 'HomeController',
    'method' => 'renderPage',
    'alias' => 'home'
]);

Route::notFound([
    'controller' => 'ErrorNotFoundController',
    'method' => 'renderPage',
    'alias' => 'error-404'
]);
