<?php

namespace de\weltraumschaf\stdlib;

error_reporting(E_ALL | E_STRICT);
set_include_path(implode(PATH_SEPARATOR, array(
    dirname(__DIR__) . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR . "stdlib",
    PATH_SEPARATOR . get_include_path()
)));

define("STDLIB_TESTS_FIXTURS", __DIR__ . DIRECTORY_SEPARATOR . "fixtures");

require_once 'vfsStream/vfsStream.php';
require_once 'Autoloader.php';

Autoloader::register();
