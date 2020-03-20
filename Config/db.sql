-- table professeur --
create table Professeur (

	id int   primary key AUTO_INCREMENT ,
	nom varchar(44),
	prenom varchar(44),
	email varchar(44) ,
	prefession varchar(44) ,
	universite varchar(44) ,
	etablissement varchar(44) ,
	tel varchar(44) ,
	password varchar(44) 
)
-- table student -- 
create table Student (

	id int  primary key AUTO_INCREMENT ,
	nom varchar(44),
	prenom varchar(44),
	email varchar(44) ,
	filiere varchar(44) ,
	semestre varchar(44) ,
	cycle varchar(44),
	universite varchar(44) ,
	etablissement varchar(44) ,
	tel varchar(44) ,
	password varchar(44) 
)
-- table examen -- 
-- table admin --
-- table role --