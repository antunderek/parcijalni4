<?php

namespace classes;

class ConfHandler {
    public static function get($file='') {
        $conf = __DIR__ . "/../../config/{$file}.php";
        if(file_exists($conf)) {
            return require($conf);
        }
        return false;
    }
}