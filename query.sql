DROP TABLE IF EXISTS Utenti CASCADE;
DROP TABLE IF EXISTS Corsi CASCADE;
DROP TABLE IF EXISTS Lezioni CASCADE;
DROP TABLE IF EXISTS Appunti CASCADE;

/*CREAZIONE DELLE TABELLE*/

CREATE TABLE Utenti(
    Username TEXT NOT NULL,
    Password TEXT NOT NULL,
    Nome TEXT NOT NULL,
    Cognome TEXT NOT NULL,
    AnnoNascita DATE NOT NULL,
    Email TEXT NOT NULL,
    Tipo INT NOT NULL,
    PRIMARY KEY (Username)
);

CREATE TABLE Corsi(
    Codice SERIAL NOT NULL,
    Nome TEXT NOT NULL,
    NomeDocente TEXT NOT NULL,
    CognomeDocente TEXT NOT NULL,
    AnnoAccademico TEXT NOT NULL,
    CorsoLaurea TEXT NOT NULL,
    PRIMARY KEY (Codice)
);

CREATE TABLE Lezioni(
    IdLezioni SERIAL NOT NULL,
    Data DATE NOT NULL,
    Corso SERIAL NOT NULL,
    NomeDocente TEXT NOT NULL,
    CognomeDocente TEXT NOT NULL,
    PRIMARY KEY (IdLezioni)
);

CREATE TABLE Appunti(
    IdAppunti SERIAL NOT NULL,
    Username TEXT NOT NULL,
    Lezioni SERIAL NOT NULL,
    Titolo TEXT NOT NULL,
    UltimaModifica DATE NOT NULL,
    Testo TEXT NOT NULL,
    PRIMARY KEY (IdAppunti)
);

/*AGGIUNTA CHIAVI ESTERNE*/

ALTER TABLE Appunti
    ADD FOREIGN KEY (Username) REFERENCES Utenti
        ON DELETE CASCADE,
    ADD FOREIGN KEY (Lezioni) REFERENCES Lezioni
        ON DELETE CASCADE;

ALTER TABLE Lezioni
    ADD FOREIGN KEY (Corso) REFERENCES Corsi
        ON DELETE CASCADE,
    ADD FOREIGN KEY (Docente) REFERENCES Utenti
        ON DELETE CASCADE;

INSERT INTO Utenti (Username, Password, Nome, Cognome, AnnoNascita, Email, Tipo) VALUES
    ('User1', 'pw1', 'Nome1','Cognome1', '01/01/01','email1','0'),
    ('User2', 'pw2', 'Nome2','Cognome2', '02/02/02','email2','0'),
    ('User3', 'pw3', 'Nome3','Cognome3', '03/03/03','email3','0'),
    ('User4', 'pw4', 'Nome4','Cognome4', '04/04/04','email4','0'),
    ('User5', 'pw5', 'Nome5','Cognome5', '05/05/05','email5','0'),
    ('User6', 'pw6', 'Nome6','Cognome6', '06/06/06','email6','0');

INSERT INTO Corsi VALUES
    ('001','Corso1','Nome1','Cognome1','2015/2016','informatica'),
    ('002','Corso2','Nome2','Cognome2','2015/2016','psicologia'),
    ('003','Corso3','Nome3','Cognome3','2015/2016','informatica');

INSERT INTO Lezioni VALUES
    ('01','15/12/15','001','Nome1','Cognome1'),
    ('02','16/12/15','001','Nome1','Cognome1'),
    ('03','17/12/15','001','Nome1','Cognome1'),
    ('04','15/12/15','002','Nome2','Cognome2'),
    ('05','15/12/15','002','Nome2','Cognome2'),
    ('06','15/12/15','002','Nome2','Cognome2'),
    ('07','15/12/15','002','Nome2','Cognome2');

INSERT INTO Appunti VALUES
    ('1','User1','01','titolo1','15/12/15','lorem ipsum'),
    ('2','User1','01','titolo2','15/12/15','fuori frigo'),
    ('3','User2','01','titolo3','16/12/15','lupus lucio');