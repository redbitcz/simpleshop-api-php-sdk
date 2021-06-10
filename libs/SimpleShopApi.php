<?php
/**
 * @package Redbitcz\SimpleShop\Api
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

namespace Redbitcz\SimpleShop\Api;
use VyfakturujAPI;
use VyfakturujAPIException;

/**
 * Třída pro práci s API SimpleShop
 */
class SimpleShopApi extends VyfakturujAPI
{
    /** @var string */
    protected $endpointUrl = 'https://api.simpleshop.cz/2.0/';

    /**
     * Vrátí seznam všech produktu
     *
     * @param array $args Data pro vyhledání faktur
     * @return array
     * @throws VyfakturujAPIException
     */
    public function getProducts($args = [])
    {
        return $this->fetchGet('product/?' . http_build_query($args));
    }

    /**
     * @param int $product_id
     * @param array $args
     * @return mixed|array
     */
    public function getExportWhoBought($product_id, $args = [])
    {
        return $this->fetchGet('export/who-bought/product/' . $product_id . '/?' . http_build_query($args));
    }
}
