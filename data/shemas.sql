-- TABLE USER 
-- TABLE BORROW 
-- TABLE BOOK

create table user (
    ID int auto_increment primary key not null,
    nom varchar (100) not null,
    prenom varchar (100) not null,
    nationalite varchar (100) not null,
    email varchar (150) unique not null,
    pwd varchar(100) not null,
    desc text,
    role varchar(100)
);

create table book (
    ID int auto_increment primary key not null,
    titre varchar (100) not null,
    autor_name varchar (150) not null,
    date_publication DATE not null,
    descr text not null,
    dispo boolean DEFAULT TRUE 
);
create table borrow (
    user_id int, 
    book_id int,
    unique (book_id),
    date_emp DATETIME DEFAULt CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES user(ID),
    FOREIGN KEY (book_id) REFERENCES book(ID)
);