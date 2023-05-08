# **Blockchain**
## IChain.php
- Třída **IChain** je interface pro Třídu Chain.
- Třída **IChain** obsahuje veřejné funkce addBlock, getBlock, getLastBlock a isValid.

## Chain.php
- Třída **Chain** implementuje interface IChain.
- Obsahuje privtaní pole $blocks
- Funkce **addBlock** přidává nové blocky do chainu.
- Funkce **getBlock** bere jednu celočíselnou hodnotu id jako vstupní parametr a vrací odpovídající prvek block z pole "blocks". Funkce vrací objekt typu "Block" nebo null, protože je definován jako možný návratový typ       pomocí otazníku (?). Pokud se nepodaří najít blok s daným ID, funkce vrátí hodnotu null.
- Funkce **isValid** slouží k ověření, zda je řetězec bloků (Blockchain) platný. Funkce vrací hodnotu typu bool - true, pokud platí, a false, pokud neplatí. Funkce porovnává současné a předchozí bloky v pořadí a ověřuje se   platnost hashe (hashovací funkce) obou bloků.
- Funkce **calculateHash** slouží k výpočtu a vrácení hash hodnoty pro konkrétní blok. Funkce vrací řetězec (string) s hodnotou hash. Funkce používá funkci hash() s parametrem 'md5', což je algoritmus pro výpočet hash         hodnoty. Parametrem hash() je také vstupní data bloku, která se získávají pomocí volání metody "getData" bloku.

## Block.php
- Obsahuje čtyři veřejné atributy **$id**, **$dttm**, **$hash**, **$data**.
- Funkce **__construct**  je konstruktor pro třídu **Block**. Konstruktor bere jeden vstupní parametr typu řetězec (string), který je datovou informací, kterou blok ukládá. Při vytváření nové instance třídy **Block** pomocí   konstruktoru se data předaná vstupním parametrem uloží do vlastnosti "data" objektu bloku.
- Funkce **getId** slouží k získání hodnoty ID (identifikátoru) pro konkrétní blok. Funkce vrací hodnotu typu integer, která představuje ID bloku.
- Funkce **getDttm** slouží k získání hodnoty data a času vytvoření (timestamp) pro konkrétní blok. Funkce vrací hodnotu typu integer, která představuje datum a čas vytvoření bloku.
- Funkce **getHash** slouží k získání hodnoty hashu pro konkrétní blok. Funkce vrací hodnotu typu řetězec (string), která představuje hash bloku.
- Funkce **getData** slouží k získání datové informace pro konkrétní blok. Funkce vrací hodnotu typu řetězec (string), která představuje datovou informaci bloku.

## test.php
- Soubor jsem použil jako testovací, zda funguje vkládání nových blocků a chainů.

## UML diagram

![desktop](https://raw.githubusercontent.com/nytornn/PHP/main/blockchain/umldiagram.png)
