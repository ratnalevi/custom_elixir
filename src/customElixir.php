<?php
/**
 * Created by PhpStorm.
 * User: allamlevi
 * Date: 12/12/16
 * Time: 12:58
 */

namespace customElixir;

class customElixir {

    /**
     * Get the path to a teja versioned Elixir file.
     *
     * @param  string $file
     * @param  string $host
     * @return string
     *
     * @throws \InvalidArgumentException
     */

    public static function teja_elixir($file, $host = '')
    {
        if (env('APP_ENV') == 'local' || env('APP_ENV') == 'staging') {
            $in_host = "";
        } else {
            $in_host = $host;
        }

        return $in_host . elixir($file);
    }
}