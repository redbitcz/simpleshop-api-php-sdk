<?php

require_once __DIR__ . '/00-config.php';

echo "<h2>Načtení platebních metod</h2>\n";

$simpleshop_api = new SimpleShopAPI(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

$inv = $simpleshop_api->getSettings_paymentMethods();

echo '<h5>Načetli jsme tyto data:</h5>';
echo '<pre><code class="json">' . json_encode($inv, JSON_PRETTY_PRINT) . '</code></pre>';
