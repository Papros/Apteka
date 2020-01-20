create database apteka;

ALTER DATABASE apteka DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use apteka;

CREATE USER 'aptekauser'@'localhost' IDENTIFIED BY 'aptekapassword';

GRANT ALL PRIVILEGES ON apteka.* TO aptekauser@localhost identified by 'aptekapassword';

FLUSH PRIVILEGES;

create table Users ( ClientID int NOT NULL AUTO_INCREMENT, FirstName varchar(255), LastName varchar(255), Birthdate date,Adress varchar(255),Zipcode varchar(10),City varchar(40), Email varchar(255), Phone varchar(255), Login varchar(255), Login varchar(255),PRIMARY KEY (ClientID), UNIQUE (Login) );

create table Items( ItemID int NOT NULL AUTO_INCREMENT,NazwaI varchar(255),Refund bool,Recepta bool,Rodzaj varchar(255),Producent varchar(255),PRIMARY KEY (ClientID));

create table Rodzaje(RodzajID int NOT NULL AUTO_INCREMENT, NazwaR varchar(255), PRIMARY KEY (RodzajID), UNIQUE (NazwaR));
create table Producenci(ProducentID int NOT NULL AUTO_INCREMENT, ProducentR varchar(255), PRIMARY KEY (ProducentID));
create table Kategorie(KategoriaID int NOT NULL AUTO_INCREMENT, NazwaK varchar(255),PRIMARY  KEY (KategoriaID),UNIQUE (NazwaK))
create table Ceny(CenaID int NOT NULL AUTO_INCREMENT,ItemID int, Cena1 float, Cena2 float, Cena3 float, PRIMARY KEY(CenaID),FOREIGN KEY (ItemID) REFERENCES Items(ItemID));

INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent) VALUES("WitaminaC",False,False,"Tabletki","BaYern");


