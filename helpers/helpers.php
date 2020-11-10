<?php

if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        if (in_array($_ENV[$key], ['true', 'false'])) {
            return filter_var($_ENV[$key], FILTER_VALIDATE_BOOLEAN);
        }

        return $_ENV[$key] ?: $default;
    }
}
