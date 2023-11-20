CREATE TABLE UTILISATEUR(
   iduser VARCHAR(30) ,
   nomuser VARCHAR(30)  NOT NULL,
   passuser VARCHAR(10)  NOT NULL,
   mailuser VARCHAR(50)  NOT NULL,
   prenomuser VARCHAR(30)  NOT NULL,
   PRIMARY KEY(iduser)
);

CREATE TABLE CATEGORIE(
   idcategorie VARCHAR(30) ,
   nomcat VARCHAR(30)  NOT NULL,
   PRIMARY KEY(idcategorie)
);

CREATE TABLE SUJET(
   idsujet VARCHAR(30) ,
   nomsujet VARCHAR(30)  NOT NULL,
   iduser VARCHAR(30)  NOT NULL,
   idcategorie VARCHAR(30)  NOT NULL,
   PRIMARY KEY(idsujet),
   FOREIGN KEY(iduser) REFERENCES UTILISATEUR(iduser),
   FOREIGN KEY(idcategorie) REFERENCES CATEGORIE(idcategorie)
);

CREATE TABLE MESSAGE(
   idmess VARCHAR(30) ,
   nommessage VARCHAR(100)  NOT NULL,
   idsujet VARCHAR(30)  NOT NULL,
   iduser VARCHAR(30)  NOT NULL,
   PRIMARY KEY(idmess),
   FOREIGN KEY(idsujet) REFERENCES SUJET(idsujet),
   FOREIGN KEY(iduser) REFERENCES UTILISATEUR(iduser)
);

CREATE TABLE IMAGE(
   idimage VARCHAR(30) ,
   urlimage VARCHAR(50)  NOT NULL,
   iduser VARCHAR(30)  NOT NULL,
   PRIMARY KEY(idimage),
   FOREIGN KEY(iduser) REFERENCES UTILISATEUR(iduser)
);
