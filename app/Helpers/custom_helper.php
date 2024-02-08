<?php

if (!function_exists('dd')) {
    function dd($param)
    {
        // Your custom functionality here
        echo "<pre>";
        print_r($param);
        die();
    }
}

if (!function_exists('custom_function')) {
    function custom_function($param)
    {
        // Your custom functionality here
        return 'Custom helper function called with parameter: ' . $param;
    }
}


if (!function_exists('module_url'))
{
    function module_url($path) {
        return SYSTEMPATH;
        return ROOTPATH.$path;
    }
}



