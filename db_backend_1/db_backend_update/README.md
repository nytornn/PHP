# Aplikace pro evidenci knih v knihovně

Tato aplikace pro evidenci knih je jednoduchý webový systém navržený pro správu a udržování záznamů knih a autorů v knihovně. Poskytuje přidávání, úpravu a mazání záznamů knih, stejně jako prohlížení dostupných knih a jejich autorů.

## Funkce

- **Přidání nových záznamů**: Snadno přidejte nové knihy do knihovní databáze poskytnutím jména autora, názvu knihy a roku vydání.
- **Úprava existujících záznamů**: Aktualizujte údaje knihy, včetně jména autora, názvu knihy a roku vydání.
- **Mazání záznamů**: Odstraňte nepotřebné knihy z knihovní databáze prostřednictvím jednoduchého procesu mazání.
- **Prohlížení záznamů**: Procházejte knihy a jejich autory v jednoduchém seznamu.

## Použité technologie

Aplikace pro evidenci knih je postavena pomocí následujících technologií:

- **PHP**: Serverový skriptovací jazyk použitý pro zpracování dat a provádění operací s databází.
- **MySQL**: Relační databázový systém použitý pro ukládání a správu záznamů knihovny.
- **HTML**: Značkovací jazyk použitý pro vytváření struktury a obsahu webových stránek.
- **CSS**: Stylovací jazyk použitý pro zlepšení vizuální prezentace webové aplikace.

## První kroky

Pro nastavení a spuštění aplikace pro evidenci knih v knihovně postupujte podle těchto kroků:

1. Ujistěte se, že na vašem počítači nebo hostovacím prostředí máte nainstalovaný webový server s podporou PHP a MySQL.
2. Importujte poskytnutou schému databáze do vašeho MySQL serveru, abyste vytvořili potřebné tabulky a strukturu.
3. Aktualizujte přihlašovací údaje pro připojení k databázi v PHP souborech (`index.php`, `newRecord.php`, `editRecord.php`, `deleteRecord.php`) tak, aby odpovídaly konfiguraci vašeho MySQL serveru.
4. Umístěte všechny PHP soubory, spolu s potřebnými CSS a JavaScript soubory, do složky přístupné vaším webovým serverem.
5. Přistupte k aplikaci prostřednictvím webového prohlížeče přejítím na příslušnou URL adresu.

## Použití

Jakmile je aplikace nastavena, můžete provádět následující úkoly:

- **Přidání nových záznamů**: Klikněte na "Nový záznam" a vyplňte požadované informace (jméno autora, název knihy, rok vydání) ve formuláři a odešlete ho pro přidání nové knihy do knihovny.
- **Úprava existujících záznamů**: Klikněte na tlačítko "Upravit záznam" vedle záznamu knihy, který chcete upravit, a změňte její podrobnosti, jako je jméno autora, název knihy nebo rok vydání.
- **Mazání záznamů**: Klikněte na tlačítko "Smazat záznam" vedle záznamu knihy, kterou chcete odstranit z knihovny.
- **Prohlížení záznamů**: Procházejte seznam dostupných knih a jejich autorů.

## Screenshoty
Seznam knih

![seznam](https://raw.githubusercontent.com/nytornn/PHP/main/db_backend_1/db_backend_update/seznam.png)
### Nový záznam

![new](https://raw.githubusercontent.com/nytornn/PHP/main/db_backend_1/db_backend_update/new.png)
### Smazat záznam

![delete](https://raw.githubusercontent.com/nytornn/PHP/main/db_backend_1/db_backend_update/delete.png)
### Upravit záznam

![edit](https://raw.githubusercontent.com/nytornn/PHP/main/db_backend_1/db_backend_update/edit.png)
### Lighthouse skóre

![lighthouse](https://raw.githubusercontent.com/nytornn/PHP/main/db_backend_1/db_backend_update/lighthouse.png)

## Licence

Tento projekt je licencován pod [MIT licencí](LICENSE), která vám umožňuje volně používat, upravovat a distribuovat kód.

Můžete si přizpůsobit aplikaci dále, aby vyhovovala vašim konkrétním požadavkům a rozšířit její funkčnost dle potřeby.

Pro podrobné informace o struktuře kódu aplikace, třídách a schématu databáze se odkazujte na jednotlivé skriptové soubory a dokumentaci databáze.

