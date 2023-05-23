<?php

function site_url($url = false): string
{
    return URL.'/'.$url;
}
function public_url($url = false): string
{
    return URL.'/public/'.$url;
}