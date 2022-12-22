CREATE TABLE tb_personne
(
    id int(11) PRIMARY KEY NOT NULL COMMENT 'cle primaire' AUTO_INCREMENT,
    email varchar(255) NOT NULL COMMENT 'email',
    mdp varchar(255) NOT NULL COMMENT 'user password',
    level  int(11) NOT NULL COMMENT 'droit d''accès'
);

CREATE TABLE tb_articles
(
    id int(11) PRIMARY KEY NOT NULL COMMENT 'cle primaire' AUTO_INCREMENT,
    categorie int NOT NULL COMMENT 'email',
    descr varchar(255) NOT NULL COMMENT 'description',
    prix float  NOT NULL COMMENT 'prix d''article',
    img   varchar(255) NOT NULL COMMENT 'image'
);

INSERT INTO tb_personne (email, mdp, level) VALUES ('a@jura.ch', 'pass1', 3);
INSERT INTO tb_personne (email, mdp, level) VALUES ('b@jura.ch', 'pass2', 2);
INSERT INTO tb_personne (email, mdp, level) VALUES ('c@jura.ch', 'pass3', 1);
INSERT INTO tb_personne (email, mdp, level) VALUES ('d@jura.ch', 'pass4', 4);
INSERT INTO tb_personne (email, mdp, level) VALUES ('e@jura.ch', 'pass1', 5);

INSERT INTO tb_articles (categorie, descr, prix,img) VALUES ('2', 'tournivis', 20.75,'img002');
INSERT INTO tb_articles (categorie, descr, prix,img) VALUES ('1', 'tandeuse', 105.55,'img003');
INSERT INTO tb_articles (categorie, descr, prix,img) VALUES ('4', 'machine a lavé', 350.75,'img004');

