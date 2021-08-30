# webstatapi

. Ukoliko je moguce, napraviti virtual host: **webstatapi.test** na lokalnoj masini da bi mogle da se koristi Postman kolekcija ruta

. Posle kopiranja fajlova, na root direktorijumu projekta uraditi
```javascript
...dirs/webstatapi.test> composer update
```

. Kreirati bazu tako sto ce se izvrsiti **createDB.SQL** fajl. Namestiti DB user i pass u config\Config.php fajlu (default user je **root** bez passworda) 

. Postman kolekcija ruta je na: https://www.getpostman.com/collections/2b4b2409ef2bf0a86a3e

NAPOMENA: Jedina ruta koja je namestena za sada da radi je GET/webstatapi.test (home ruta)
