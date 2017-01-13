DROP TABLE  IF EXISTS client;

CREATE TABLE IF NOT EXISTS client (
  idclient int(11) NOT NULL AUTO_INCREMENT,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  login varchar(255) NOT NULL,
  nom varchar(255),
  code_postal varchar(255),
  ville varchar(255),
  adresse varchar(255),
  valide tinyint NOT NULL,
  droit varchar(255) NOT NULL,
  PRIMARY KEY (idclient)
) DEFAULT CHARSET=utf8;

INSERT INTO client (idclient,login,password,email,valide,droit) VALUES
  (1, 'admin', 'admin', 'admin@gmail.com',1,'DROITadmin'),
  (2, 'client', 'client', 'client@gmail.com',1,'DROITclient'),
  (3, 'client2', 'client2', 'client2@gmail.com',1,'DROITclient'),
  (4, 'client3', 'client3', 'client3@gmail.com',1,'DROITclient');

CREATE TABLE proprietaire(
  idProprio INT(10),
  nomProprio VARCHAR(10),
  PRIMARY KEY (idProprio)
)DEFAULT CHARSET=utf8;

INSERT INTO proprietaire (idProprio, nomProprio) VALUE
  (1,"Roger"),
  (2,"Bob");

CREATE TABLE IF NOT EXISTS bars(
  idBar INT(10),
  nomBar VARCHAR(10),
  adresseBar VARCHAR(15),
  idProprio INT(10),
  PRIMARY KEY (idBar)
)DEFAULT CHARSET=utf8;


INSERT INTO bars (idBar, nomBar, adresseBar, idProprio) VALUE
  (1,"Le chemin de traverse","3 rue de la vigne",1),
  (2,"Le bar à Roger","quelque part",1),
  (3,"Skieurmabite","la base de données de Rémy",2);

CREATE TABLE IF NOT EXISTS evenement(
  idEvent INT(10),
  libelleEvent VARCHAR(10),
  idBar INT(10),
  PRIMARY KEY (idEvent),
  CONSTRAINT fk_evenement_bars FOREIGN KEY (idBar) REFERENCES bars (idBar)
)DEFAULT CHARSET=utf8;

INSERT INTO evenement (idEvent, libelleEvent, idBar) VALUE
  (1,"Lan csgo",3);

CREATE TABLE IF NOT EXISTS client_evenement(
  idClient INT(10),
  idEvent int(10),
  PRIMARY KEY (idEvent),
  PRIMARY KEY (idClient),
  CONSTRAINT fk_client_cl_ev FOREIGN KEY (idClient) REFERENCES client (idclient),
  CONSTRAINT fk_evenement_cl_ev FOREIGN KEY (idEvent) REFERENCES evenement (idEvent)
)DEFAULT CHARSET=utf8;

INSERT INTO client_evenement (idClient, idEvent) VALUE
  (2,1),
  (3,1);
