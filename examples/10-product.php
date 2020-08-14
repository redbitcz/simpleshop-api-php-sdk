<?php

require_once __DIR__ . '/00-config.php';

echo "<h2>Vyhledání produktů</h2>\n";

$simpleshop_api = new SimpleShopAPI(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

$opt = array(
    'date_created_from' => '2016-10-01',
    'date_created_to' => '2016-10-31',
);


$ret = $simpleshop_api->getProducts($opt);

echo '<h5>Načetli jsme tyto produkty:</h5>';
echo '<pre><code class="json">' . json_encode($ret, JSON_PRETTY_PRINT) . '</code></pre>';
