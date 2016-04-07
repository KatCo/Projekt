#DB Geschenkmanager

SET AUTOCOMMIT=0;


create table Login
(
Login_id int (20)unsigned NOT NULL AUTO_INCREMENT,#mit php user hinzufügen
Name varchar (45) collate utf8_unicode_ci NOT NULL,
Password varchar (45)collate utf8_unicode_ci NOT NULL,
PRIMARY KEY (`Login_id`),
UNIQUE KEY `Name`(`Name`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Daten speichern ,später mit php check Name ,Password.

insert into Login(`Login_id`,`Name`,`Password`)values();


#TABLE CATEGORY

create table Category(
 Category_id int (2) Not NULL AUTO_INCREMENT,
 name varchar (45) Not null,
 primary key (`Category_id`)
 
 )
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 
 #Daten
 
 Insert into Category (category_id,name)
 values(1,`Familie`),
 (2,`Freunde`);

create table Daten(
 Daten_id int NOT NULL AUTO_INCREMENT,
 Category_id int NOT NULL,
 Vorname varchar (45) NOT NULL,
 Nachname varchar (45) NOT NULL,
 Geschlecht enum('F','M') NOT NULL,
 Geburtsdatum Datetime Not null,# MYSQL hat yyyy-mm-dd Format man kann aber mit PHP umwandeln
 Age tinyint(3) NOT NULL, #automatisch berechnen durch curdate-birthdate unten folgt code
 Hobby varchar(45) Null,
 primary key (Daten_id ,Daten_id),
 unique key (`Daten_id`)

 )
 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 
 #Daten
 
 Insert into Daten(Daten_id,Vorname,Nachname,Geschlecht,Geburtsdatum,
 Age,Hobby,Category_id,name)Values();#VAlues werden von user eingetragen<--PHP
 
 
 Create table Daten_Category(
Daten_id smallint(5)unsigned NOT NULL  AUTO_INCREMENT,
Category_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (Daten_id,Category_id)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 
 #FOREIGN KEY 
 
 #TABLE LOGIN
 Alter table Login
 ADD foreign key  (`Category_id`)references Category(Category_id);
 
 Alter table Daten_Category
 ADD foreign key (`Daten_id`)references Daten(Daten_id),
 ADD foreign key (`Category_id`)references Category(Category_id);
 
 #TABLE DATEN
 Alter table Daten
 ADD foreign key (category_id)references Category(category_id);
 
 #AUTO INCREMENT ,VALUE
 ALTER TABLE Login AUTO_INCREMENT = 1 ;
 ALTER TABLE Category AUTO_INCREMENT = 1 ;
 ALTER TABLE Daten AUTO_INCREMENT = 1 ;
 
start transaction

Select*, Daten_id ,Vorname,Nachname,Geschlecht,Geburtsdadum,year(currdate())-year(Geburtsdatum)AS Age ,Hobbys From Daten
inner join Category  on Daten_id .Category_Category_id= Category_Category_id
ORDER BY Daten_id;# php <--$sql
# select *from Daten_Category;
#select *from Category; 
