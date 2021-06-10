# PHP knihovna pro SimpleShop API

## Dokumentace

**Dokumentace API** je publikována na Apiary: https://simpleshopcz.docs.apiary.io/

## Instalace

Nainstalujte knihovnu pomocí Composeru (doporučujeme):

```shell
composer require redbitcz/simpleshop-api-php-sdk
```

a následně na začátek vašeho projektu (nejčastěji `index.php`) přidejte kód pro načtení závislostí:

```php
require __DIR__ . '/vendor/autoload.php';
```

**Důležité:** Pokud ve svém projektu již používáte [Vyfakturuj](https://www.vyfakturuj.cz/api/), nebo
[SimpleShop](https://www.simpleshop.cz/)(např. [WordPress plugin](https://www.simpleshop.cz/category/wordpress-plugin/)),
ujistěte se, že nemáte knihovnu v projektu vícekrát.

Ve své aplikaci pak jednoduše vytvoříte objekt `SimpleShopApi`:

```php
$simpleshop = new \Redbitcz\SimpleShop\Api\SimpleShopApi('login', 'API klíč');
```

Váš `login` a `API klíč` najdete v [nastavení API v SimpleShop](https://app.simpleshop.cz/nastaveni/api/) aplikaci.

Nad tímto objektem pak můžete přímo volat metody:

```php
$invoice = $simpleshop->getInvoice(12345);
```

## Požadavky

Knihovna pro správné fungování potřebuje:

- PHP verze 7.3 a vyšší
- Rozšíření cURL
- Rozšíření JSON

## Příklady použití

Příklady použití knihovny jsou [popsány ve složce `examples`](/examples/#readme).

## Changelog

Přehled verzí a změn: https://github.com/redbitcz/simpleshop-api-php-sdk/releases