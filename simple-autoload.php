<?php
/**
 * @package Redbit\Vyfakturuj\SimpleShopAPI
 * @license MIT
 * @copyright 2016-2018 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 * @author Ing. Martin Dostál
 */

/**
 * Script pro ruční instalaci
 * @see https://github.com/redbitcz/simpleshop-api-php/blob/master/manual-installation.md (Nápověda)
 */
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/libs/' . $class . '.class.php';
    if (file_exists($file)) {
        require $file;
    }
});