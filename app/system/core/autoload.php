<?php

spl_autoload_register(function ($class) {
    if (is_file(CORE . $class . '.php')) {
        require CORE . $class . '.php';
    } else {
        echo CORE . $class . '.php';
    }
});
