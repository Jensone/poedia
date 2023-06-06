-- Création de la base de données

CREATE DATABASE IF NOT EXISTS poedia DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Création des tables

USE poedia;

-- Auteurs (1)
CREATE TABLE IF NOT EXISTS poedia.auteurs (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255),
    prenom varchar(255),
    nombreOeuvre JSON NULL,
    dateNaissance date,
    nationalite varchar(255),
    biographie text
);

-- Categories (2)
CREATE TABLE IF NOT EXISTS poedia.categories (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255),
    description text
);

-- clients (3)
CREATE TABLE IF NOT EXISTS poedia.clients (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255),
    prenom varchar(255),
    adresse varchar(255),
    email varchar(255),
    telephone varchar(255),
    ville varchar(255)
);

-- Commandes (4)
CREATE TABLE IF NOT EXISTS poedia.commandes (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idClient int(11),
    idLivre int(11),
    dateDebut date,
    dateRetour date,
    statut BOOLEAN NOT NULL DEFAULT 0
);

-- Livres (5)
CREATE TABLE IF NOT EXISTS poedia.livres (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titre varchar(255),
    idAuteur int(11),
    idCategorie int(11),
    isbn varchar(255),
    dateParution int(11),
    nombrePages int(11),
    format varchar(25),
    stock int(11)
);

-- Utilisateurs (6)
CREATE TABLE IF NOT EXISTS poedia.utilisateurs (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom varchar(25),
    prenom varchar(25),
    email varchar(255),
    password varchar(25),
    role varchar(25)
);

-- Auteurs (1)

INSERT INTO auteurs (nom, prenom, nombreOeuvre, dateNaissance, nationalite, biographie) VALUES
    ('Dupont', 'Alice',null , '1980-02-12', 'Française', 'Alice Dupont est une auteure renommée.'),
    ('Smith', 'Emily',null , '1992-07-25', 'Américaine', 'Emily Smith est une jeune auteure prometteuse.'),
    ('Garcia', 'Sofia',null, '1975-11-06', 'Espagnole', 'Sofia Garcia a remporté de nombreux prix littéraires.'),
    ('Müller', 'Lena',null , '1988-04-19', 'Allemande', 'Lena Müller écrit des romans captivants.'),
    ('Rossi', 'Giulia',null , '1983-09-30', 'Italienne', 'Giulia Rossi est connue pour ses histoires romantiques.'),
    ('Lefebvre', 'Camille',null , '1990-06-15', 'Française', 'Camille Lefebvre mélange habilement réalité et fiction.'),
    ('Lee', 'Ji-hyun',null , '1985-03-22', 'Coréenne', 'Ji-hyun Lee écrit des thrillers palpitants.'),
    ('Andersen', 'Emma',null, '1978-01-09', 'Danoise', 'Emma Andersen est une auteure à succès dans son pays.'),
    ('Fernandez', 'Ana',null, '1982-12-04', 'Espagnole', 'Ana Fernandez explore des thèmes profonds dans ses livres.'),
    ('Cohen', 'Sarah',null , '1993-08-17', 'Israélienne', 'Sarah Cohen écrit des romans historiques.'),
    ('Bianchi', 'Maria',null, '1987-05-20', 'Italienne', 'Maria Bianchi est une auteure talentueuse et polyvalente.'),
    ('Nguyen', 'Linh',null , '1991-10-11', 'Vietnamienne', 'Linh Nguyen est une écrivaine émergente.'),
    ('Gonzalez', 'Carla',null, '1989-07-03', 'Argentine', 'Carla Gonzalez écrit des romans engagés.'),
    ('Kawamura', 'Ayumi', null, '1984-12-26', 'Japonaise', 'Ayumi Kawamura est une auteure populaire au Japon.');

-- Livres (2)

INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('The Lord of the Rings', 4, 3, '9780544003415', 1954, 1178, 'Broché', 15);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('To the Lighthouse', 5, 2, '9780156907392', 1927, 209, 'Poche', 10);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('Moby-Dick', 6, 1, '9780142437247', 1851, 704, 'Broché', 10);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('Crime and Punishment', 3, 4, '9780679734505', 1866, 671, 'Broché', 15);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('The Hobbit', 2, 3, '9780261103306', 1937, 366, 'Poche', 10);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('Jane Eyre', 1, 2, '9780141441146', 1847, 594, 'Broché', 15);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('The Alchemist', 1, 1, '9780062315007', 1988, 197, 'Poche', 10);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('The Odyssey', 2, 4, '9780140268867', 2022, 541, 'Broché', 15);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('Frankenstein', 3, 3, '9780486282114', 1818, 280, 'Poche', 10);
INSERT INTO livres (titre, idAuteur, idCategorie, isbn, dateParution, nombrePages, format, stock) VALUES ('The Great Gatsby', 4, 2, '9780743273565', 1925, 180, 'Broché', 15);

-- Categories (3)

INSERT INTO categories (nom,description) VALUES ('Nouvelle',"La nouvelle littéraire est un bref récit fictif qui fait appel à la réalité et qui, la plupart du temps, ne comporte pas de situation finale. Généralement, elle se termine avec un dénouement inattendu qu'on appelle la chute.");
INSERT INTO categories (nom,description) VALUES ('Conte',"Le mot conte désigne à la fois un récit de faits ou d'aventures imaginaires1 et le genre littéraire (avant tout oral) qui relate lesdits récits");
INSERT INTO categories (nom,description) VALUES ('Mythe',"Les mythes sont des récits symboliques à l'origine transmis oralement. Ils peuvent expliquer des phénomènes (le tonnerre, les saisons, etc.), fixer des règles de conduite ou raconter la créati on du monde ou la fondati on de villes ou de sociétés. Liés au sacré, ils sont à la fois des histoires et des théories de la connaissance. Si les mythes sont propres à une culture, il n'est pas rare de trouver des ressemblances et des points communs entre des mythes d'origines diverses.");
INSERT INTO categories (nom,description) VALUES ('Légende',"Une légende, à l'origine, est un récit mis par écrit pour être lu publiquement, ce qui signifie qu'une légende s'est d'abord imposée dans la tradition orale avant de s'ancrer dans la tradition écrite. Dans ce genre de littérature, l'intention se veut souvent moralisatrice.");
INSERT INTO categories (nom,description) VALUES ('Biographie',"La biographie est le récit d'une vie. Contrairement à l'autobiographie, l'auteur n'est pas celui qui a vécu les faits rapportés. Ce genre littéraire a des origines très anciennes et se rencontre déjà dans l'Égypte et la Rome antiques.");
INSERT INTO categories (nom,description) VALUES ('Aubiographie',"Le récit rétrospectif en prose qu'une personne réelle fait de sa propre existence, lorsqu'elle met l'accent sur sa vie individuelle, en particulier sur l'histoire de sa personnalité");
INSERT INTO categories (nom,description) VALUES ('Chronique',"Une chronique est un récit historique des faits et événements classés par ordre chronologique, comme dans une chronologie.");
INSERT INTO categories (nom,description) VALUES ('Apologue',"L'apologue est un récit allégorique : le lecteur doit opérer une transposition entre l'image et sa signification");
INSERT INTO categories (nom,description) VALUES ('Journal',"il s'agit d'une forme nouvelle d'expression de soi destinée au public, donc à des lecteurs anonymes, par le moyen d'une publication posthume ou ayant lieu du vivant de l'auteur.");
INSERT INTO categories (nom,description) VALUES ('Roman sentimentaux',"Un genre littéraire du XVIII e siècle qui célèbre les concepts émotionnels et intellectuels du sentiment, du sentimentalisme et de la sensibilité.");
INSERT INTO categories (nom,description) VALUES ('Roman moeur', "Une forme littéraire appartenant au genre romanesque qui a pour but de décrire un milieu ou un problème social. Il propose une vision non idéalisée du monde.");
INSERT INTO categories (nom,description) VALUES ('Roman apprentissage'," Une forme de récit qui raconte l'histoire d'un personnage qui traverse un certain nombre d'épreuves initiatiques pour se former à la vie adulte, pour se construire.");
INSERT INTO categories (nom,description) VALUES ('Roman science-fiction',"La science-fiction est un genre narratif, principalement littéraire, cinématographique et vidéo-ludique. Comme son nom l'indique, elle consiste à raconter des fictions reposant sur des progrès scientifiques et techniques obtenus dans un futur plus ou moins lointain, parfois dans un passé fictif ou dans un univers parallèle au nôtre.");
INSERT INTO categories (nom,description) VALUES ('Roman aventure',"Un récit où l'on trouve de l'action et du suspense. Le héros est confronté à des situations dangereuses ou effrayantes et doit tenter de s'en sortir en passant par de nombreuses péripéties.");
INSERT INTO categories (nom,description) VALUES ('Roman philosophique',"Désigne plutôt une collection de manières différentes d'hybrider philosophie et littérature, selon des genres différents (roman-mémoires, récit utopique, etc.). Ces manières ne vont jamais de soi, car il est toujours délicat de mêler dissertatif et narratif.");
INSERT INTO categories (nom,description) VALUES ('Roman picaresque',"Un roman picaresque se compose d'un récit sur le mode autobiographique de l'histoire de héros miséreux, généralement des jeunes gens vivant en marge de la société et à ses dépens.");
INSERT INTO categories (nom,description) VALUES ('Roman policier',"Un genre littéraire dans lequel l'histoire est généralement centrée sur un drame, une intrigue, ainsi que sur le déroulement d'une enquête menée par un détective privé ou un policier.");
INSERT INTO categories (nom,description) VALUES ('Roman historique',"Œuvre de fiction historique, elle prend pour toile de fond un épisode (parfois majeur) de l'Histoire, auquel elle mêle généralement des événements et des personnages réels et fictifs.");
INSERT INTO categories (nom,description) VALUES ('Roman horreur',"Un genre qui essaye de suciter de la peur, de l'angoisse ou de le mettre mal à l'aise");
INSERT INTO categories (nom,description) VALUES ('Ballade',"un petit poème narratif écrit en strophes contenant un refrain et terminant par un envoi, c'est-à-dire une strophe plus courte.");
INSERT INTO categories (nom,description) VALUES ('Epopé',"Une épopée est un long poème d'envergure nationale narrant les exploits historiques ou mythiques d'un héros ou d'un peuple.");
INSERT INTO categories (nom,description) VALUES ('Ode',"Poème lyrique divisé en strophes semblables entre elles par le nombre et la mesure des vers et destiné soit à célébrer de grands événements ou de hauts personnages (ode héroïque), soit à exprimer des sentiments plus familiers (ode anacréontique).");

-- Commandes (4)

INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (1, 3, '2023-06-02', '2023-06-09', 1);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (2, 5, '2023-05-28', '2023-06-04', 0);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (3, 2, '2023-06-05', '2023-06-12', 1);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (4, 1, '2023-06-10', '2023-06-17', 0);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (5, 4, '2023-06-15', '2023-06-22', 1);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (1, 6, '2023-05-25', '2023-06-01', 1);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (3, 9, '2023-06-08', '2023-06-15', 0);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (2, 8, '2023-05-30', '2023-06-06', 1);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (5, 7, '2023-06-03', '2023-06-10', 0);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (4, 1, '2023-06-12', '2023-06-19', 1);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (3, 2, '2023-06-20', '2023-06-27', 0);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (2, 1, '2023-05-22', '2023-05-29', 1);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (5, 4, '2023-06-01', '2023-06-07', 0);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (1, 3, '2023-06-05', '2023-06-12', 1);
INSERT INTO commandes (idClient, idLivre, dateDebut, dateRetour, statut) VALUES (4, 6, '2023-06-10', '2023-06-17', 0);

-- Utilisateurs (5)

INSERT INTO utilisateurs (nom, prenom, email, password, role) VALUES 
    ('Dupont', 'Alice', 'a.dupont@gmail.com', '123456', 'admin'),
    ('Smith', 'Emily', 'e.smith@gmail.com', '123456', 'admin'),
    ('Garcia', 'Sofia', 's.garcia@gmail.com', '123456', 'admin');

-- clients (6)

INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (1, 'Dubois', 'Jean', '12 Rue des Fleurs', 'jean.dubois@example.com', '0123456789', 'Paris');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (2, 'Lefebvre', 'Emma', '8 Avenue du Soleil', 'emma.lefebvre@example.com', '0234567891', 'Marseille');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (3, 'Martin', 'Lucas', '22 Rue de la Paix', 'lucas.martin@example.com', '0345678912', 'Lyon');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (4, 'Dupont', 'Camille', '5 Boulevard des Arts', 'camille.dupont@example.com', '0456789123', 'Bordeaux');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (5, 'Bernard', 'Chloé', '16 Avenue des Champs', 'chloe.bernard@example.com', '0567891234', 'Nice');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (6, 'Robert', 'Maxime', '9 Rue du Commerce', 'maxime.robert@example.com', '0678912345', 'Toulouse');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (7, 'Petit', 'Manon', '3 Rue de la Liberté', 'manon.petit@example.com', '0789123456', 'Lille');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (8, 'Moreau', 'Léo', '11 Avenue Victor Hugo', 'leo.moreau@example.com', '0891234567', 'Strasbourg');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (9, 'Roux', 'Léa', '7 Rue de la Gare', 'lea.roux@example.com', '0912345678', 'Nantes');
INSERT INTO clients (id, nom, prenom, adresse, email, telephone, ville) VALUES (10, 'Fournier', 'Hugo', '4 Boulevard Voltaire', 'hugo.fournier@example.com', '0123456789', 'Rennes');

-- Ajout d'InnoDB

ALTER TABLE livres ENGINE=InnoDB;
ALTER TABLE categories ENGINE=InnoDB;
ALTER TABLE commandes ENGINE=InnoDB;
ALTER TABLE clients ENGINE=InnoDB;
ALTER TABLE auteurs ENGINE=InnoDB;
ALTER TABLE utilisateurs ENGINE=InnoDB;

-- Relation entre les tables

ALTER TABLE livres ADD CONSTRAINT fk_idauteur FOREIGN KEY (idAuteur) REFERENCES auteurs(id);
ALTER TABLE livres ADD CONSTRAINT fk_idcategorie FOREIGN KEY (idCategorie) REFERENCES categories(id);
ALTER TABLE commandes ADD CONSTRAINT fk_idclient FOREIGN KEY (idClient) REFERENCES clients(id);
ALTER TABLE commandes ADD CONSTRAINT fk_idlivre FOREIGN KEY (idLivre) REFERENCES livres(id);
