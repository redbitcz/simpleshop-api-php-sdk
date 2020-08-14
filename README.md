# PHP knihovna pro SimpleShop API

## Pozor
Knihovna se připravuje, proto některé příklady a funkce můžou nefungovat. 

## Dokumentace
**Dokumentace API** je publikována na Apiary: http://docs.simpleshopcz.apiary.io/

Další informace o SimpleShop API: https://www.simpleshop.cz/api/

## Instalace
Nainstalujte knihovnu pomocí Composeru (doporučujeme):
```shell
composer require vyfakturuj/simpleshop-api-php
```
a následně na začátek vašeho projektu (nejčastěji `index.php`) přidejte kód pro načtení závislostí:
```php
require __DIR__ . '/vendor/autoload.php';
```

Případně si můžete [stáhnout poslední verzi v ZIP souboru](manual-installation.md).

**Důležité:** Pokud ve svém projektu již používáte Vyfakturuj, nebo [SimpleShop](https://www.simpleshop.cz/)
(např. [WordPress plugin](https://www.simpleshop.cz/category/wordpress-plugin/)), ujistěte se, že nemáte knihovnu
v projektu vícekrát. 

Ve své aplikaci pak jednoduše vytvoříte objekt `SimpleShopAPI`:
```php
$simpleshop = new SimpleShopAPI('login', 'API klíč');
```
Váš `login` a `API klíč` najdete v [nastavení API v SimpleShop](https://app.simpleshop.cz/nastaveni/api/).

Nad tímto objektem pak můžete přímo volat metody:
```php
$invoice = $simpleshop->getInvoice(1234567);
```

## Požadavky
Knihovna pro správné fungování potřebuje:
- PHP verze 5.6 a vyšší
- Rozšíření cURL
- Rozšíření JSON

## Příklady použití
Příklady použití knihovny jsou [popsány ve složce `examples`](/examples/#readme).

## Changelog
Přehled verzí a změn: https://github.com/redbitcz/simpleshop-api-php/releases