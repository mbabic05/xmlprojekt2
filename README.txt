# Projekt: Web trgovina boksačke opreme

**Autor:** Mate Babić

## Opis projekta

Ova web aplikacija predstavlja jednostavnu internetsku trgovinu boksačke opreme. Korisnicima omogućuje pregled proizvoda, informiranje o ponudi te kontaktiranje trgovine putem kontakt forme.

Stranica se sastoji od tri glavne cjeline:

* Početna stranica (Home)
* Ponuda proizvoda (Ponuda)
* Kontakt stranica (Kontakt)

Posebnost projekta je korištenje XML i XSLT tehnologija za dinamičko prikazivanje proizvoda. Podaci o proizvodima pohranjeni su u XML datoteci, dok se XSLT koristi za pretvaranje XML sadržaja u HTML prikaz koji korisnik vidi u pregledniku.

## Korištene tehnologije

### HTML5

HTML je korišten za izradu strukture svih stranica web aplikacije. Pomoću HTML elemenata definirani su sadržaji poput navigacije, zaglavlja, kartica proizvoda, kontakt forme i podnožja stranice.

### CSS3

CSS je korišten za oblikovanje izgleda stranice. Definirani su stilovi za boje, raspored elemenata, veličine slika, tipografiju i responzivni prikaz sadržaja.

### Bootstrap 5

Bootstrap framework korišten je za:

* responzivan dizajn
* navigacijsku traku (Navbar)
* raspored kartica proizvoda
* gumbe i forme
* prilagodbu stranice različitim veličinama ekrana

Korištenjem Bootstrapa ubrzan je razvoj korisničkog sučelja te je osigurana moderna i pregledna struktura stranice.

### XML

XML datoteka koristi se za pohranu podataka o proizvodima.

Za svaki proizvod definirani su:

* naziv proizvoda
* kategorija
* opis
* cijena
* putanja do slike

Na taj način proizvodi se mogu jednostavno dodavati ili uređivati bez promjene HTML koda.

### XSLT

XSLT je korišten za transformaciju XML podataka u HTML prikaz.

Njegova uloga je:

* čitanje XML datoteke
* generiranje HTML kartica proizvoda
* prikaz podataka korisniku u preglednom obliku

Ovakav pristup odvaja podatke od prezentacije te olakšava održavanje projekta.

## Funkcionalnosti

* Prikaz boksačke opreme
* Dinamičko učitavanje proizvoda iz XML datoteke
* Transformacija XML podataka pomoću XSLT-a
* Responzivan dizajn pomoću Bootstrapa
* Kontakt forma za slanje upita
* Jednostavno dodavanje novih proizvoda kroz XML datoteku

## Zaključak

Projekt demonstrira korištenje modernih web tehnologija zajedno s XML i XSLT pristupom za upravljanje sadržajem. Korištenjem Bootstrapa postignut je responzivan i profesionalan izgled stranice, dok XML i XSLT omogućuju jednostavno upravljanje podacima o proizvodima bez potrebe za izmjenama HTML koda.
