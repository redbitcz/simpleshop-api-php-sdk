<?php
/**
 * @package Redbitcz\Vyfakturuj\SimpleShopAPI
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 *
 * Interní nastavení nezbytné pro běh SimpleShop API příkladů
 */

require_once __DIR__ . '/../simple-autoload.php';
require_once __DIR__ . '/assets/example-loader.php';

/**
 * Nastavení SimpleShop API - níže prosím vyplňte vaše přihlašovací údaje, které najdete na stránce:
 * https://app.simpleshop.cz/nastaveni/api/
 */

/** Zadejte přilhašovací jméno (email) */
define('SIMPLESHOP_API_LOGIN', 'demo@simpleshop.cz');  // E-mail, kterým se přihlašujete do SimpleShop

/** Zadejte API klíč */
define('SIMPLESHOP_API_KEY', 'NkJP6q35yw27WVxWdjQHlOzNBlYznRa8gdo9Om1B');
