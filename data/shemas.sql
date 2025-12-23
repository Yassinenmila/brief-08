-- TABLE READER 
-- TABLE USER 
-- TABLE BORROW 
-- TABLE WALLET 
-- TABLE BOOK

create table reader (
    ID int auto_encrement primary key not null,
    nom varchar (100) not null,
    prenom varchar (100) not null,
    nationalite varchar (50) not null,
    email varchar (150) unique not null,
);

create table book (
    ID int auto_encrement primary key not null,
    titre varchar (100) not null,
    autor_name varchar (150),
    date_publication DATETIME,
    description text not null,

);
