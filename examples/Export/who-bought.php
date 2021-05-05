<?php
/**
 * @package Redbitcz\Vyfakturuj\SimpleShopAPI
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

require_once __DIR__ . '/../config_login.php';

$simpleshop_api = new SimpleShopAPI(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY, 'https://api.simpleshop.cz/2.0/');

/**
 * Zadejte informace o exportu
 *
 * Seznam dostupných parametrů je popsán v dokumentaci:
 * @link https://simpleshopcz.docs.apiary.io/#reference/export
 */

$product_id = 7288;
$args = ['strict' => 1];

$export = $simpleshop_api->getExportWhoBought($product_id, $args);

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="Kdo_koupil_export_' . date('d.m.Y') . '.csv";');
die($export['csv']);
