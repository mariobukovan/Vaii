# Fitify - fitness aplikácia

Mário Bukovan 

5ZYI34

## Stručný opis projektu
Fitify je dynamická webová aplikácia určená na plánovanie a sledovanie silového tréningu. Hlavným cieľom aplikácie je umožniť používateľom vytvárať vlastné tréningové plány (splity), evidovať jednotlivé cviky a zaznamenávať vykonané tréningy vrátane váhy, počtu opakovaní a dátumu.

Aplikácia je určená fitness nadšencov či rekreačných fanúšikov cvičenia, ktorí chcú mať prehľad o svojom progrese na jednom mieste. Okrem evidencie tréningov ponúka aj základné štatistiky a históriu výkonu. Aplikácia obsahuje rôzne používateľské role a bude spustiteľná v prostredí Docker.
## Role v projekte
- **Neprihlásený používateľ** – môže si prehliadať zoznam existujúcich cvikov a základné informácie o aplikácii.
- **Prihlásený používateľ** – môže si vytvárať a spravovať vlastné tréningové plány, zaznamenávať tréningy, sledovať svoj progres a štatistiky.
- **Administrátor** - má plné práva na správu celej aplikácie.

## Prípady použitia podľa rolí
### Neprihlásený používateľ
- Prehliadanie verejného zoznamu cvikov (názov, popis, kategória)
- Zobrazenie úvodnej stránky s informáciami o aplikácii
- Registrácia nového používateľského účtu
- Prihlásenie do systému

### Prihlásený používateľ
- Vytvorenie nového tréningového plánu 
- Úprava a zmazanie vlastného tréningového plánu
- Pridávanie a odoberanie dní v rámci plánu 
- Priraďovanie cvikov k jednotlivým dňom plánu
- Zaznamenávanie vykonaného tréningu – výber cviku, dátum, váha, počet opakovaní a sérií
- Úprava a mazanie vlastných záznamov o tréningoch
- Prezeranie vlastnej histórie tréningov
- Prezeranie základných štatistík a progresu
- Prehliadanie katalógu cvikov

### Administrátor
- Kompletná správa katalógu cvikov 
- Prehliadanie všetkých používateľov v systéme
- Prehliadanie a správa tréningových plánov a záznamov ostatných používateľov
- Mazanie nevhodného alebo chybného obsahu
- Správa celého obsahu aplikácie
## Plánované entity
- **User** – používateľ systému  
  Atribúty: id, meno, email, heslo (hashované), rola  
  Účel: autentifikácia a autorizácia

- **Exercise** – cvik  
  Atribúty: id, názov, popis, kategória (napr. prsia, chrbát, nohy)  
  Účel: katalóg všetkých dostupných cvikov

- **Split** – tréningový plán  
  Atribúty: id, názov, popis, id_user  
  Účel: osobný tréningový program používateľa

- **SplitDay** – deň v rámci tréningového plánu  
  Atribúty: id, id_split, názov dňa (napr. Pondelok – Push), poradie  
  Účel: rozdelenie plánu na jednotlivé tréningové dni

- **ExerciseEntry** – záznam o vykonaní cviku  
  Atribúty: id, id_user, id_exercise, dátum, váha, opakovania, počet sérií  
  Účel: evidencia reálne vykonaných tréningov a sledovanie progresu

## Vzťahy medzi entitami
- User **1:N** Split (jeden používateľ môže mať viacero tréningových plánov)
- Split **1:N** SplitDay (jeden plán obsahuje viacero dní)
- SplitDay **M:N** Exercise (jeden deň obsahuje viacero cvikov, jeden cvik môže byť v viacerých dňoch)
- User **1:N** ExerciseEntry (používateľ má svoje vlastné záznamy tréningov)
- Exercise **1:N** ExerciseEntry (jeden cvik má veľa záznamov o jeho vykonaní)

## Hlavné stránky aplikácie
- **Homepage** – úvodná stránka s prehľadom aplikácie a rýchlym prístupom k najdôležitejším funkciám
- **Auth** – stránka na registráciu a prihlásenie používateľa
- **Cviky** – zoznam všetkých cvikov s možnosťou filtrovania a (pre admina) správy
- **Plan** – vytváranie, úprava a prehliadanie vlastných tréningových plánov (splity + dni)
- **Štatistiky** – prehľad vlastného progresu, história tréningov a základné štatistiky

## Rozdelenie funkcionality

### Základné funkcie (povinné minimum)
- Aplikačná logika oddelená od prezentačnej vrstvy
- Minimálne 5 dynamických stránok
- CRUD operácie nad entitou **Exercise** 
- CRUD operácie nad entitou **ExerciseEntry**
- Registrácia a prihlásenie používateľa
- Autorizácia podľa rolí
- Vytváranie a správa tréningových plánov (Split + SplitDay)
- Prezeranie vlastného progresu
- Responzívny dizajn
- Aplikácia spustiteľná cez Docker s predpripravenými dátami

### Rozširujúce funkcie
- Pokročilé štatistiky a grafy progresu
- Filtrovanie a vyhľadávanie cvikov
- Vlastné kategórie cvikov
- Možnosť exportu histórie tréningov
- Pokročilejšia správa plánov (kopírovanie plánov, šablóny)