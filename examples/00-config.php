<?php

/*
 * Interní nastavení nezbytné pro běh příkladů
 */
require_once __DIR__ . '/../simple-autoload.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/assets/example-layout.php';
if (!defined('JSON_PRETTY_PRINT')) {
    define('JSON_PRETTY_PRINT', 128); // PHP 5.3 compatibility
}
/* ================================================================
 * Nastavení SimpleShop API - níže prosím vyplňte váš e-mail a klíč
 */
define('SIMPLESHOP_API_LOGIN', 'demo@simpleshop.cz');  // E-mail, kterým se přihlašujete do SimpleShop
define('SIMPLESHOP_API_KEY', 'owOmRdjNrpvJZWY1vdaunaQezwEe1K4kG9labzyM');    // API klíč, který najdete v Nastavení -> API
