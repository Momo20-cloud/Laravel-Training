<?php

if (!function_exists('page_title')){
    function page_title(?string $Title = null): string{
        return $Title 
        ? $Title . '  |  ' . config('app.name') 
        : config('app.name');
    }
}