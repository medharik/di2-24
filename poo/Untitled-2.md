base de donnees (SQL) :  ensemble de donnees (SOUS FORME DE TABLES RELATIONELLES ) 
- persistentes
- structurees (base de donnees : tables (contienent des lignes ) en relation, NOSQL : collections (contiennent des documents json), base de donnees XML, CSV) 
- integres 


base de donnees SQL 
ensemble de tables en relations
 geree par SGBDR (exemple sql server, access , mysql server, Oracle server, postpresql,...)

 SQL  : structured query language 

 les 5 sous langages de SQL :
 LDD : langage de definitions / structures (table,relation, colonnes et les contraintes) de donnees  : create , alter (add , drop, modify/change, rename) et drop 
 LMD : L. manipulation D : insert , update et delete
 LID : L. Interogation D : select 
 LCD : L. controle D :  (roles et privilleges ) : create user , grant select, insert on produit  to hasnaa, revoke , alter user et drop user, , create role , ...
 LTD  : L. Transction D : savepoint  , rollback et commit 
 savepoint A 
 insert 
 delete 

  
 les contraintes SGBD:
  primary key : unique + not null  
  foreign key : 
  not null : champs obloigatoire
  unique  : pas de doublons
  check : condition 


CREATE TABLE departement(
id INT PRIMARY KEY  AUTO_INCREMENT,
nom VARCHAR(30) NOT NULL ,
ville VARCHAR(10) ,
CONSTRAINT uq_nom_dep UNIQUE(nom,ville)
)

CREATE TABLE employee(
id INT PRIMARY KEY  AUTO_INCREMENT,
nom VARCHAR(30) NOT NULL ,
prenom VARCHAR(10) ,
salaire FLOAT ,
departement_id INT ,
CONSTRAINT ck_sal4 CHECK (salaire >= 2000),
CONSTRAINT fk_em_dep3 FOREIGN KEY(departement_id)
REFERENCES departement(id) 
 
)

ALTER TABLE departement 
ADD adresse VARCHAR(250)

DELETE FROM employee WHERE id=1;
UPDATE employee SET salaire=salaire*1.10
WHERE id=3

INSERT INTO employee(nom,prenom,salaire, departement_id)
VALUES('alal','sss',9000,1)


indentifiant : cle primaire / primary key => information unique et obligatoire

CREATE   TABLE employee(
matricule INT  PRIMARY KEY AUTO_INCREMENT ,
nom VARCHAR(20),
prenom VARCHAR(30),
salaire FLOAT 
)
drop table employee