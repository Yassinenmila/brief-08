-- TABLE READER 
-- TABLE USER 
-- TABLE BORROW 
-- TABLE WALLET 
-- TABLE BOOK

create table user (
    ID int auto_increment primary key not null,
    nom varchar (100) not null,
    prenom varchar (100) not null,
    nationalite varchar (50) not null,
    email varchar (150) unique not null,
    pwd varchar(100)unique not null,
    description text,
    roles varchar(100)
);

create table book (
    ID int auto_increment primary key not null,
    titre varchar (100) not null,
    autor_name varchar (150) not null,
    date_publication DATETIME not null,
    description text not null,
    dispo 
);
create table borrow (
    user_id int, 
    book_id int,
    date_emp DATETIME DEFAULt CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES USER(ID),
    FOREIGN KEY (book_id) REFERENCES book(ID)
);