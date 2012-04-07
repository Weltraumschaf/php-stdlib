<?php

namespace de\weltraumschaf\stdlib;

/**
 * Autoloader for the php stdlib.
 *
 * Does only loads classes within the namespace de\weltraumschaf\stdlib.
 *
 * @author Sven Strittmatter <weltraumschaf@googlemail.com>
 * @license http://www.weltraumschaf.de/the-beer-ware-license.txt THE BEER-WARE LICENSE
 */
class Autoloader {

    /**
     * Registers the autoloader.
     */
    public static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Extracts the file name and requires the file.
     *
     * @param string $className The class name with namespace.
     * @return boolean Returns false if not responsible.
     */
    public static function autoload($className) {
        $namespace = __NAMESPACE__ . '\\';
        if (0 !== strpos($className, $namespace)) {
            // Not our busines here.
            return false;
        }

        $baseName = str_replace($namespace, '', $className);
        require_once "{$baseName}.php";
        return true;
    }
}
