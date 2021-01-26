create database flowerpowerdb;
use flowerpowerdb;

create table klant(
    klantcode int(10),
    voorletters text(20),
    tussenvoegsels text(20),
    achternaam text(20),
    adres varchar(20),
    postcode varchar(255),
    woonplaats varchar(255),
    geboortedatum date,
    gebruikersnaam VARCHAR(255),
    wachtwoord CHAR(60),
    PRIMARY KEY (klantcode)
);
create table bestelling(
    winkelcode INT(20),
    artikelcode varchar(255),
    aantal INT(10),
    klantcode INT(10),
    medewerkerscode INT(20),
    FOREIGN KEY (winkelcode) REFERENCES winkel(winkelcode),
    FOREIGN KEY (artikelcode) REFERENCES artikel(artikelcode),
    FOREIGN KEY (klantcode) REFERENCES klant(klantcode),
    FOREIGN KEY (medewerkerscode) REFERENCES medewerker(medewerkerscode),
);
create table artikel(
    artikelcode INT(20),
    artikel VARCHAR(255),
    prijs decimal,
    PRIMARY KEY (artikelcode)
);
create table factuur(
    factuurnummer int(10),
    factuurdatum smalldatetime,
    klantcode int(10),
    FOREIGN KEY (klant) REFERENCES klant(klantcode),
);
create table factuurregel(
    factuurnummer int(10),
    artikelcode INT(20),
    aantal INT(10),
    prijs decimal,
    FOREIGN KEY (factuurnummer) REFERENCES factuur(factuurnummer),
    FOREIGN KEY (artikelcode) REFERENCES artikel(artikelcode)
);
create table winkel(
    winkelcode INT(20),
    winkelnaam VARCHAR(255),
    winkeladres varchar(255),
    winkelpostcode varchar(255),
    vestigingsplaats varchar(255),
    telefoonnummer varchar(15)
);
create table medewerker(
    medewerkerscode INT(20),
    voorlettersmed text(20),
    tussenvoegselsmed text(20),
    achternaammed text(20),
    gebruikersnaam VARCHAR(255),
    wachtwoord CHAR(60)
);

