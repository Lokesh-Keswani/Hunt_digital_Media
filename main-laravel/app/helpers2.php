<?php

/**
 * Laravel Application Additional Helpers
 */

if (!function_exists('response')) {
    /**
     * Return a new response from the application.
     */
    function response($content = '', $status = 200, array $headers = [])
    {
        $factory = app('Illuminate\Contracts\Routing\ResponseFactory');
        return $factory->make($content, $status, $headers);
    }
}

if (!function_exists('redirect')) {
    /**
     * Create a new redirect response.
     */
    function redirect($to = null, $status = 302, $headers = [], $secure = null)
    {
        if (is_null($to)) {
            return app('redirect');
        }

        return app('redirect')->to($to, $status, $headers, $secure);
    }
}

if (!function_exists('back')) {
    /**
     * Create a new redirect response to the previous location.
     */
    function back($status = 302, $headers = [], $fallback = false)
    {
        return app('redirect')->back($status, $headers, $fallback);
    }
}

if (!function_exists('request')) {
    /**
     * Get an instance of the current request or an input item from the request.
     */
    function request($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('request');
        }

        return app('request')->__get($key) ?? $default;
    }
}

if (!function_exists('session')) {
    /**
     * Get / put an item in the session.
     */
    function session($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('session');
        }

        if (is_array($key)) {
            return app('session')->put($key);
        }

        return app('session')->get($key, $default);
    }
}

if (!function_exists('csrf_token')) {
    /**
     * Get the CSRF token value.
     */
    function csrf_token()
    {
        $session = app('session.store');
        return $session->token();
    }
}

if (!function_exists('csrf_field')) {
    /**
     * Generate a CSRF token form field.
     */
    function csrf_field()
    {
        return new \Illuminate\Support\HtmlString(
            '<input type="hidden" name="_token" value="' . csrf_token() . '">'
        );
    }
}

if (!function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     */
    function dd(...$args)
    {
        if (!function_exists('dump')) {
            return;
        }

        foreach ($args as $x) {
            dump($x);
        }

        die(1);
    }
}

if (!function_exists('abort')) {
    /**
     * Throw an HttpException with the given data.
     */
    function abort($code, $message = '', array $headers = [])
    {
        return app('Illuminate\Contracts\Debug\ExceptionHandler')->abort($code, $message, $headers);
    }
}
