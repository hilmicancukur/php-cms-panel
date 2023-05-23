<?php

function admin_controller($controllerName): string
{
    $controllerName = strtolower($controllerName);
    return PATH.'/admin/controller/'.$controllerName.'.php';
}

function admin_view($viewName): string
{
    return PATH.'/admin/view/'.$viewName.'.php';
}

function admin_url($url = false): string
{
    return URL.'/admin/'.$url;
}
function admin_public_url($url = false): string
{
    return URL.'/admin/public/'.$url;
}