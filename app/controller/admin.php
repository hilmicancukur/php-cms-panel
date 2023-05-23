<?php

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    return require view('404');
}

require admin_controller(route(1));