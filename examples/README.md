# Příklady použití [PHP knihovny SimpleShop API](https://github.com/redbitcz/simpleshop-api-php)

## Příprava pro použití příkladů

Aby Vám níže uvedené příklady fungovaly, nastavte si nejdříve přihlášení do vašeho účtu.

V souboru [config_login.php](config_login.php) doplňte na označené místo Váš `login` a `API klíč`, které najdete
v [nastavení API v SimpleShop](https://app.simpleshop.cz/nastaveni/api/).

Soubor [config.php](config.php) je interní nastavení nezbytné pro běh SimpleShop API příkladů.

## Příklady

### Test spojení na server

> Soubor: [test-connection.php](test-connection.php)

Otestuje připojení na server (musí se zobrazit welcome zpráva s datumem).

### Produkty

> Adresář [Product](Product)

Ukázky, jak vyhledávat produkty.

### Faktury

> Adresář [Invoice](Invoice)

Ukázky, jak vytvořit, upravit, číst, mazat či jinak pacovat s fakturami.

### Pravidelné faktury

> Adresář [Template](Template)

Ukázky, jak vytvořit, upravit, číst, mazat pravidelné faktury

### Adresář a kontakty

> Adresář [Contact](Contact)

Ukázky jak pracovat s Vaším adresářem a kontakty v něm.

### Nastavení

> Adresář [Settings](Settings)

Práce s číselnou řadou nebo platebními metodami.

### Export Kdo koupil

> Adresář [Export](Export)

Ukázky, jak export vystávené objednávky v CSV

### Ošetření chyb

> Soubor: [error-handle.php](error-handle.php)

Ukázka, jak ošetřit chyby, které mohou při použití knihovny vzniknout.
