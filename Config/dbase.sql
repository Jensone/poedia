DROP SCHEMA IF EXISTS 'poedia';

CREATE DATABASE IF NOT EXISTS 'poedia';

USE 'poedia';

CREATE TABLE IF NOT EXISTS 'poedia'.'categorie'(
    'id_categorie' INT NOT NULL AUTO_INCREMENT,
    'nom' VARCHAR(50) NOT NULL,
    'description' TEXT NOT NULL,
    PRIMARY KEY ('id_categorie'),
)ENGINE = InnoDB

INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Nouvelle',"La nouvelle littéraire est un bref récit fictif qui fait appel à la réalité et qui, la plupart du temps, ne comporte pas de situation finale. Généralement, elle se termine avec un dénouement inattendu qu'on appelle la chute.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Conte',"Le mot conte désigne à la fois un récit de faits ou d'aventures imaginaires1 et le genre littéraire (avant tout oral) qui relate lesdits récits")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Mythe',"Les mythes sont des récits symboliques à l'origine transmis oralement. Ils peuvent expliquer des phénomènes (le tonnerre, les saisons, etc.), fixer des règles de conduite ou raconter la créati on du monde ou la fondati on de villes ou de
sociétés. Liés au sacré, ils sont à la fois des histoires et des théories de la connaissance. Si
les mythes sont propres à une culture, il n'est pas rare de trouver des ressemblances et des
points communs entre des mythes d'origines diverses.
")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Légende',"Une légende, à l'origine, est un récit mis par écrit pour être lu publiquement, ce qui signifie qu'une légende s'est d'abord imposée dans la tradition orale avant de s'ancrer dans la tradition écrite. Dans ce genre de littérature, l'intention se veut souvent moralisatrice.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Biographie',"La biographie est le récit d'une vie. Contrairement à l'autobiographie, l'auteur n'est pas celui qui a vécu les faits rapportés. Ce genre littéraire a des origines très anciennes et se rencontre déjà dans l'Égypte et la Rome antiques.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Aubiographie',"Le récit rétrospectif en prose qu'une personne réelle fait de sa propre existence, lorsqu'elle met l'accent sur sa vie individuelle, en particulier sur l'histoire de sa personnalité")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Chronique',"Une chronique est un récit historique des faits et événements classés par ordre chronologique, comme dans une chronologie.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Apologue',"L'apologue est un récit allégorique : le lecteur doit opérer une transposition entre l'image et sa signification")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Journal',"il s'agit d'une forme nouvelle d'expression de soi destinée au public, donc à des lecteurs anonymes, par le moyen d'une publication posthume ou ayant lieu du vivant de l'auteur.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman sentimentaux',"Un genre littéraire du XVIII e siècle qui célèbre les concepts émotionnels et intellectuels du sentiment, du sentimentalisme et de la sensibilité.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman moeur', "Une forme littéraire appartenant au genre romanesque qui a pour but de décrire un milieu ou un problème social. Il propose une vision non idéalisée du monde.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman apprentissage'," Une forme de récit qui raconte l'histoire d'un personnage qui traverse un certain nombre d'épreuves initiatiques pour se former à la vie adulte, pour se construire.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman science-fiction',"La science-fiction est un genre narratif, principalement littéraire, cinématographique et vidéo-ludique. Comme son nom l'indique, elle consiste à raconter des fictions reposant sur des progrès scientifiques et techniques obtenus dans un futur plus ou moins lointain, parfois dans un passé fictif ou dans un univers parallèle au nôtre.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman aventure',"Un récit où l'on trouve de l'action et du suspense. Le héros est confronté à des situations dangereuses ou effrayantes et doit tenter de s'en sortir en passant par de nombreuses péripéties.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman philosophique',"Désigne plutôt une collection de manières différentes d'hybrider philosophie et littérature, selon des genres différents (roman-mémoires, récit utopique, etc.). Ces manières ne vont jamais de soi, car il est toujours délicat de mêler dissertatif et narratif.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman picaresque',"Un roman picaresque se compose d'un récit sur le mode autobiographique de l'histoire de héros miséreux, généralement des jeunes gens vivant en marge de la société et à ses dépens.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman policier',"Un genre littéraire dans lequel l'histoire est généralement centrée sur un drame, une intrigue, ainsi que sur le déroulement d'une enquête menée par un détective privé ou un policier.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman historique',"Œuvre de fiction historique, elle prend pour toile de fond un épisode (parfois majeur) de l'Histoire, auquel elle mêle généralement des événements et des personnages réels et fictifs.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Roman horreur',"Un genre qui essaye de suciter de la peur, de l'angoisse ou de le mettre mal à l'aise")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Ballade',"un petit poème narratif écrit en strophes contenant un refrain et terminant par un envoi, c'est-à-dire une strophe plus courte.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Epopé',"Une épopée est un long poème d'envergure nationale narrant les exploits historiques ou mythiques d'un héros ou d'un peuple.")
INSERT INTO 'poedia'.'categorie' (nom,description) VALUES ('Ode',"Poème lyrique divisé en strophes semblables entre elles par le nombre et la mesure des vers et destiné soit à célébrer de grands événements ou de hauts personnages (ode héroïque), soit à exprimer des sentiments plus familiers (ode anacréontique).")