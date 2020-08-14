<?php

require_once __DIR__ . '/00-config.php';

echo "<h2>Vytvoření a úpravy šablony</h2>\n";

$simpleshop_api = new SimpleShopAPI(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

#
#
#####################################################################################
#####################################################################################
#####                                                                           #####
#####                                  Úprava                                   #####
#####                                                                           #####
#####################################################################################
#####################################################################################
#
#
$template = $simpleshop_api->getTemplates()[0];
$_ID_ITEM = $template['id'];

$opt_template = array(
    'name' => '#API + Test pravidelné faktury',// změníme název
    'items' => array(
        array(
            'text' => 'Stěrač na ponorku',
            'unit_price' => 990.25,
            'vat_rate' => 21,// změníme DPH
        ),
        array(
            'text' => 'Kapalina do ostřikovačů 250 ml',
            'unit_price' => 59,
            'vat_rate' => 21,// změníme DPH
        )
    )
);

$ret2 = $simpleshop_api->updateTemplate($_ID_ITEM, $opt_template);    // upravíme zaznam

echo '<h5>Upravili jsme pravidelnou fakturu:</h5>';
echo '<pre><code class="json">' . json_encode($ret2, JSON_PRETTY_PRINT) . '</code></pre>';


#
#
#####################################################################################
#####################################################################################
#####                                                                           #####
#####                                   Čtení                                   #####
#####                                                                           #####
#####################################################################################
#####################################################################################
#
#


$ret3 = $simpleshop_api->getTemplate($_ID_ITEM);
// $ret3 = $simpleshop_api->getTemplates(); // vrati vsechny sablony a pravidelné faktury
// $ret3 = $simpleshop_api->getTemplates(array('type' => 2,'end_type' => 1)); // vrati vsechny pravidelné faktury, které nemají nastaveno datum ukončení

echo '<h5>Načetli jsme data o pravidelné faktuře faktuře ze systému:</h5>';
echo '<pre><code class="json">' . json_encode($ret3, JSON_PRETTY_PRINT) . '</code></pre>';


#
#
#####################################################################################
#####################################################################################
#####                                                                           #####
#####                                  Smazání                                  #####
#####                                                                           #####
#####################################################################################
#####################################################################################
#
#
exit;   // zablokování smazání

$ret4 = $simpleshop_api->deleteTemplate($_ID_ITEM);
$ret5 = $simpleshop_api->deleteContact($_ID_CONTACT);

echo '<h5>Načetli jsme data o průběhu smazání faktury ze systému:</h5>';
echo '<pre><code class="json">' . json_encode($ret4, JSON_PRETTY_PRINT) . '</code></pre>';
echo '<h5>Načetli jsme data o průběhu smazání kontaktu ze systému:</h5>';
echo '<pre><code class="json">' . json_encode($ret5, JSON_PRETTY_PRINT) . '</code></pre>';
