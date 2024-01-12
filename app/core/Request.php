<?php
class Request {
    static public function getPath() {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        return strpos($path, '?') !== false ? explode('?', $path)[0] : $path;
    }

    static public function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }

    // static public function getCleanUri() {
    //     $path = $_SERVER['REQUEST_URI'] ?? '/';
    //     return explode('?', $path)[0];
    // }
}
