<?php
/**
 * @package Redbitcz\SimpleShop\Api
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

/**
 * Script pro ruční instalaci
 * @see https://github.com/redbitcz/simpleshop-api-php/blob/master/manual-installation.md (Nápověda)
 */
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/libs/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
});