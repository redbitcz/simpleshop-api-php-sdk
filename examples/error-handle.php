<?php

require_once __DIR__ . '/config.php';

/**
 * Ukázka, která je stejná jako v souboru test-connection.php, avšak je záměrně poškozena, aby skončila chybou.
 * V příkladu je simulována situace, kdy se nepodaří připojení na API, například z důvodu vypadku internetu.
 * Při takové chybě dojde k tomu, že kód v daném místě „umře“ a nepokračuje dál, což by mohlo rozbít vaši aplikaci.
 * Tím, že kód zabalíte do try {...} catch, umožníte chybu tzv. zachytit, ošetřit a pokračovat v aplikaci dál.
 */

try {
    // Ukázka stejná, jako v příkladu 01-test.php
    echo "<h2>Ošetření chyb</h2>\n";

    $simpleshop_api = new SimpleShopApi\Client(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

    // Úprava URL pro ukázku, která je záměrně poškozená, aby selhala
    $simpleshop_api->setEndpointUrl('https://invalid.domain.simpleshop.cz/2.0/');

    $result = $simpleshop_api->test();

    echo '<pre><code class="json">' . json_encode($result, JSON_PRETTY_PRINT) . '</code></pre>';
} catch (SimpleShopApi\ClientException $e) {
    // Toto se spustí, pokud kdekoliv v try {...} dojde k chybě (tzv. výjimce)
    // Vypíšeme uživateli omluvu, že se nepodařilo jeho požadavek dokončit
    // Uživatele nezatěžujeme technickými detaily, ty nechme technikovi
    echo "<div class=\"alert alert-danger\">Je nám líto, ale při zpracování došlo k chybě. Zkuste to prosím později, nebo nás kontaktujte.</div>\n";

    // Technikovi zapíšeme chybu do logů, aby věděl, co se děje
    trigger_error($e, E_USER_WARNING);
}

// Aplikace pokračuje dál
echo '<p>Pokračování aplikace…</p>';
