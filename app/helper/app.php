<?php

function controller($controllerName): string
{
    $controllerName = strtolower($controllerName);
    return PATH.'/app/controller/'.$controllerName.'.php';
}

function view($viewName): string
{
    return PATH.'/app/view/'.$viewName.'.php';
}

function route($index): bool|string
{
    global $route;
    return $route[$index] ?? false;
}