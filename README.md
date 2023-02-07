<p align="center"><a href="https://symfony.com" target="_blank">
    <img src="https://symfony.com/logos/symfony_black_02.svg">
</a></p>




Beschrijving van het project
------------
Pizzaketen Sopranos breidt uit. Daardoor onstaat de behoefte aan een website voor online-bestellingen.

De heer Varleone is hoofd automatisering van Sopranos Pizza. Hij is op zoek naar uitvoerders voor het maken en onderhouden van een website voor online-bestellingen.
Jij gaat deze applicatie zelfstandig ontwerpen en programmeren als beginnend applicatie-ontwikkelaar.

### Notitie: in dit project zitten de technieken: Twig, Route, Annotations, Doctrine, inloggen

Project eisen:
-------------
* Website met navigatiebalk naar het home, contactgegevens en inlogpagina
* In de homepagina zie je 3 categorien pizza's:
  * Vegetarische Pizza (eeeeuw)
  * Vlees Pizza (Yum)
  * Vis Pizza (Yak)
* De klant kiest 1 pizza
* De klant kiest uit: medium pizza (25cm), large pizza (35cm) of calzone
* De klant vult een bestelformulier in, waarna de bestelling geplaatst wordt
* De pizzabakker logt in
* De pizzabakker ziet alle bestellingen met bestelstatus

Extra:
* De pizzabakker verandert de bestelstatus (to do, in progress, done)
* De klant kan per bestelling meerdere pizza's bestellen

Leerdoelen:
----------------------
- De student neemt verantwoordelijkheid voor eigen taken
- De student vertaalt de user stories naar to do's
- De student bepaald de user stroies voor de sprint backlog
- De student maakt een wireframe
- De student maakt een ERD gebaseerd op de opdracht
- De student maakt een datadictionary
- De student programmeert een inlogscherm
- De student kan ingelogde pizzabakker laten uitloggen
- De student haalt de pizza categorien uit de oven (database)
- De student laat de bijbehoorende pizza's bij een categorie zien
- De student programmeeert een orderformulier met een geselecteerde pizza en een dropdown van sizes
- De student slaat de orders op in de database
- De student haalt de orders op om aan de pizzabakker te tonen
- <b>EXTRA</b>: De student programmeert een pagina waarbij de pizzabakker de status van de order kan wijzigen
- De student test de pizza applicatie door gebruik te maken van de testtool JosF
- De student noteert in een logboek review en retro
- De student presenteert de pizza website
- De student kan de code uitleggen
- De student verbeterd zichzelf naar aanleiding van feedback
- De student werkt met github
- De student houdt zich aan de gedragsregels in de lessen


## Release Planning:

```
Klaar voor de start
- Projectwijzer bespreken
- Beoordeling houding bespreken
```
```
Start met project
- De student vertaalt de user stories naar to do's
- De student bepaald de user stroies voor de sprint backlog
- De student maakt een wireframe
- De student maakt een ERD gebaseerd op de opdracht
- De student maakt een datadictionary

Sprint oplevering:
- Funcioneel ontwerp
- Technisch ontwerp
- Extra: Behoefte analyse
```

``` 
Nieuw project
https://symfonycasts.com/screencast/symfony
introductie video 1 t/m 12

Sprint oplevering:
- Starten van een nieuw project met routes en twig pagina
- 2 pagina's af, de home pagina en contact pagina
```
``` 
Database aanmaken

database video 1 t/m 5
https://symfonycasts.com/screencast/symfony4-doctrine/install

Documentatie:
https://symfonycasts.com/docs/5.4/doctrine.html

Sprint oplevering:
- Database aanmaken
- Category entity maken
- Homepage met categorien uit database
```
``` 
Database relaties

database relaties video 1 t/m 4
https://symfonycasts.com/screencast/symfony4-doctrine-relations

Sprint oplevering:
- Pizza entity maken
- Relatie aanmaken tussen Category en Pizza
- Pizza's per category laten zien
```
``` 
Formulieren

video 1 t/m 5 + lezen video 7
https://symfonycasts.com/screencast/symfony-forms

Documentatie:
https://symfonycasts.com/docs/5.4/forms.html

Sprint oplevering:
- Order entity maken
- Order formulier maken
- Order in de database opslaan
```
```  
Inloggen en Pizzabakker

Security video 1 t/m 7
https://symfonycasts.com/screencast/symfony4-security

Documentatie:
Security (Symfony 5.4 docs)
Database and the Doctrine ORM (Symfony 5.4 Docs)

Sprint oplevering:
- Inlog pagina maken
- Pizzabakker laten inloggen op een pagina
- Wachtwoord encoderen en decoderen
- Pizzabakker redirecten naar een overzichten pagina
```
``` 
Testen en opleveren

- De student test de pizza applicatie door gebruik te maken van de testtool Josf inloggen

Sprint oplevering:
- Functioneel ontwerp
- Technisch ontwerp
- JosF test inloggen
- github adres van de applicatie (internet adres)
- geexporteerde database (code)
```

# Wat lever je op aan het eind van dit project

- Scrumdocumenten (logboek)
- Functioneel ontwerp
  - User stories
- Technisch ontwerp
  - ERD
  - Datadictionary
- Applicatie Pizza Sopranos
- JosF met test inloggen
- Presentatie
- Git: per US een branch
- Scrumdocumenten:
  - Retro/Review
- Gedrag/Houding:
  - Aanwezigheid
  - Deelnemen aan les
  - Meedoen met les
  - Huiswerk maken
  - Les verstoring

