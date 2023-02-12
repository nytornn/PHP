#V PHP existuje typová kontrola vstupních a výstupních parametrů funkcí, kde lze deklarovat datový typ (např. int, float, string, bool, array, mixed, object, ...). Tyto typy lze také kombinovat (např. int|bool).

|Očekávaný vstup|Přijatý vstup        |Chování funkce                                                                               |
|:-------------:|:-------------------:|:-------------------------------------------------------------------------------------------:|
| int           | float               |PHP zaokrouhlí float na celé číslo a bude s ním pracovat jako s int                          |
| float         | int                 |PHP převede int na float a funkce s ním bude pracovat jako s float                           |
| string        | boolean             |PHP převede bool na string (true => "1", false => "") a pracuje jako string                  |
| boolean       | string              |PHP převede string na bool (pouze pokud string obsahuje "1" nebo "0", jinak dojde k chybě)   |
| array         | jiný datový typ     |PHP způsobí chybu                                                                            |
| object        | jiný datový typ     |PHP způsobí chybu                                                                            |
| mixed         | jakýkoliv datový typ|Funkce pracuje bez problémů                                                                  |
