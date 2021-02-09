create user dbaTDSI identified by "Passe@2019";

create database tdsi;

grant all on tdsi.* to dbaTDSI;

use tdsi;

create table etudiant (
	
	num_carte varchar(50) primary key,

        nom    varchar(50) not null,

	prenom varchar(50) not null,

	email varchar(50) unique not null,

	photo varchar(50) unique not null,

	mot_de_passe varchar(50) not null

);

