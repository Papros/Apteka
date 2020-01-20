create database Apteka;

ALTER DATABASE Apteka DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use Apteka;

CREATE USER 'aptekauser'@'localhost' IDENTIFIED BY 'aptekapassword';

GRANT ALL PRIVILEGES ON Apteka.* TO aptekauser@localhost identified by 'aptekapassword';

FLUSH PRIVILEGES;

create table Locations ( LocationID int NOT NULL AUTO_INCREMENT, NameL varchar(255), PRIMARY KEY (LocationID), UNIQUE (NameL) );

create table Clients ( ClientID int NOT NULL AUTO_INCREMENT, FirstName varchar(255), LastName varchar(255), Sex bool, Birthdate date, Email varchar(255), Phone varchar(255), DescriptionC varchar(1000), Login varchar(255), PasswordC varchar(255), Banned bool, LocationID int NOT NULL, PRIMARY KEY (ClientID), FOREIGN KEY (LocationID) REFERENCES Locations(LocationID), UNIQUE (Login) );

create table Interests ( InterestID int NOT NULL AUTO_INCREMENT, NameI varchar(255), PRIMARY KEY (InterestID), UNIQUE (NameI) );

create table Choices ( ChoiceID int NOT NULL AUTO_INCREMENT, ClientID int NOT NULL, InterestID int NOT NULL, PRIMARY KEY (ChoiceID), FOREIGN KEY (ClientID) REFERENCES Clients(ClientID), FOREIGN KEY (InterestID) REFERENCES Interests(InterestID) );

create table Links ( LinkID int NOT NULL AUTO_INCREMENT, SourceClientIDL int NOT NULL, TargetClientIDL int, Interested bool NOT NULL, PRIMARY KEY (LinkID), FOREIGN KEY (SourceClientIDL) REFERENCES Clients(ClientID), FOREIGN KEY (TargetClientIDL) REFERENCES Clients(ClientID) );

create table Reports ( ReportID int NOT NULL AUTO_INCREMENT, SourceClientIDR int NOT NULL, TargetClientIDR int NOT NULL, DescriptionR varchar(1000), PRIMARY KEY (ReportID), FOREIGN KEY (SourceClientIDR) REFERENCES Clients(ClientID), FOREIGN KEY (TargetClientIDR) REFERENCES Clients(ClientID) );

create table Administrators ( AdministratorID int NOT NULL AUTO_INCREMENT, NameA varchar(255), PasswordA varchar(255), PRIMARY KEY (AdministratorID), UNIQUE (NameA) );

create table Logs (LogID int NOT NULL AUTO_INCREMENT, Date datetime NOT NULL, AdministratorID int NOT NULL, ActionType enum('client', 'location', 'interest', 'report') NOT NULL, ActionTargetID int NOT NULL, PRIMARY KEY (LogID), FOREIGN KEY (AdministratorID) REFERENCES Administrators(AdministratorID) );

INSERT INTO Administrators(NameA, PasswordA) VALUES ("admin", "finder");


create database apteka;

ALTER DATABASE apteka DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use apteka;

create table Users ( ClientID int NOT NULL AUTO_INCREMENT, FirstName varchar(255), LastName varchar(255), Birthdate date,Adress varchar(255),Zipcode varchar(10),City varchar(40), Email varchar(255), Phone varchar(255), Login varchar(255), Password varchar(255),PRIMARY KEY (ClientID), UNIQUE (Login) );
create table Rodzaje(RodzajID int NOT NULL AUTO_INCREMENT, NazwaR varchar(255), PRIMARY KEY (RodzajID), UNIQUE (NazwaR));
create table Producenci(ProducentID int NOT NULL AUTO_INCREMENT, NazwaP varchar(255), PRIMARY KEY (ProducentID));
create table Kategorie(KategoriaID int NOT NULL AUTO_INCREMENT, NazwaK varchar(255),PRIMARY  KEY (KategoriaID),UNIQUE (NazwaK));
create table Items( ItemID int NOT NULL AUTO_INCREMENT,NazwaI varchar(255),Refund boolean,Recepta boolean,Rodzaj int,Producent int, Kategoria int,PRIMARY KEY (ItemID),FOREIGN  KEY (Rodzaj) REFERENCES Rodzaje(RodzajID),FOREIGN  KEY (Producent) REFERENCES Producenci(ProducentID),FOREIGN KEY (Kategoria) REFERENCES Kategorie(KategoriaID));
create table Ceny(CenaID int NOT NULL AUTO_INCREMENT,ItemID int, Cena1 float, Cena2 float, Cena3 float, PRIMARY KEY(CenaID),FOREIGN KEY (ItemID) REFERENCES Items(ItemID));


INSERT INTO Rodzaje(NazwaR) VALUES ("Tabletki");
INSERT INTO Rodzaje(NazwaR) VALUES ("Kapsułki");
INSERT INTO Rodzaje(NazwaR) VALUES ("Proszek");
INSERT INTO Rodzaje(NazwaR) VALUES ("Czopki");
INSERT INTO Rodzaje(NazwaR) VALUES ("Maść");
INSERT INTO Rodzaje(NazwaR) VALUES ("żel");
INSERT INTO Rodzaje(NazwaR) VALUES ("Roztwór");
INSERT INTO Rodzaje(NazwaR) VALUES ("Zawiesina");
INSERT INTO Rodzaje(NazwaR) VALUES ("Syrop");
INSERT INTO Rodzaje(NazwaR) VALUES ("tabletki powlekane");
INSERT INTO Rodzaje(NazwaR) VALUES ("krople");

INSERT INTO Producenci(NazwaP) VALUES ("Actus Pharma");
INSERT INTO Producenci(NazwaP) VALUES ("Bayer");
INSERT INTO Producenci(NazwaP) VALUES ("Adamed");
INSERT INTO Producenci(NazwaP) VALUES ("Alfofarm");
INSERT INTO Producenci(NazwaP) VALUES ("Colfarm");
INSERT INTO Producenci(NazwaP) VALUES ("Polpharma");

INSERT INTO Kategorie(NazwaK) VALUES ("Dermatologiczne");
INSERT INTO Kategorie(NazwaK) VALUES ("Dietetyczne");
INSERT INTO Kategorie(NazwaK) VALUES ("Hormonalne (bez hormonów) ");
INSERT INTO Kategorie(NazwaK) VALUES ("Układu krążenia");
INSERT INTO Kategorie(NazwaK) VALUES ("Przeciwpasożytnicze");
INSERT INTO Kategorie(NazwaK) VALUES ("Dermatologiczne");
INSERT INTO Kategorie(NazwaK) VALUES ("Przewód pokarmowy");
INSERT INTO Kategorie(NazwaK) VALUES ("Przeciwinfekcyjne");
INSERT INTO Kategorie(NazwaK) VALUES ("Układ oddechowy");
INSERT INTO Kategorie(NazwaK) VALUES ("Suplementy");
INSERT INTO Kategorie(NazwaK) VALUES ("Przeciwbólowe");

INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Węgiel aktywny",False,False,2,1,1);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Avedol",True,True,10,6,4);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Segan",True,True,1,6,2);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Acard",False,False,1,3,7);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Allertec",True,True,10,4,9);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Edalan",False,True,5,6,6);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Etopiryna",False,True,1,6,11);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Flucofast",True,True,2,3,8);

INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Formetic",False,True,5,5,3);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Metafen",False,False,6,3,1);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Oftensin",False,True,10,2,9);
INSERT INTO Items(NazwaI, Refund, Recepta, Rodzaj, Producent,Kategoria) VALUES("Polopiryna",False,False,1,4,11);


