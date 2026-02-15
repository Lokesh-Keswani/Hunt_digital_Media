<?php

/**
 * Laravel Application Helpers
 */

if (!function_exists('asset')) {
    /**
     * Generate an asset path for the application.
     */
    function asset($path, $secure = null)
    {
        return app('url')->asset($path, $secure);
    }
}

if (!function_exists('route')) {
    /**
     * Generate the URL to a named route.
     */
    function route($name, $parameters = [], $absolute = true)
    {
        return app('url')->route($name, $parameters, $absolute);
    }
}

if (!function_exists('url')) {
    /**
     * Generate a fully qualified URL to the given path.
     */
    function url($path = null, $parameters = [], $secure = null)
    {
        if (is_null($path)) {
            return app('url');
        }

        return app('url')->to($path, $parameters, $secure);
    }
}

if (!function_exists('config')) {
    /**
     * Get / set the specified configuration value.
     */
    function config($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('config');
        }

        if (is_array($key)) {
            return app('config')->set($key);
        }

        return app('config')->get($key, $default);
    }
}

if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     */
    function env($key, $default = null)
    {
        $value = getenv($key);

        if ($value === false) {
            return $default;
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return;
        }

        if (strlen($value) > 1 && $value[0] === '"' && $value[strlen($value) - 1] === '"') {
            return substr($value, 1, -1);
        }

        return $value;
    }
}

if (!function_exists('auth')) {
    /**
     * Get the available auth instance.
     */
    function auth($guard = null)
    {
        if (is_null($guard)) {
            return app('auth');
        }

        return app('auth')->guard($guard);
    }
}

if (!function_exists('view')) {
    /**
     * Get the evaluated view contents for the given view.
     */
    function view($view = null, $data = [], $mergeData = [])
    {
        $factory = app('view');

        if (is_null($view)) {
            return $factory;
        }

        return $factory->make($view, $data, $mergeData);
    }
}
