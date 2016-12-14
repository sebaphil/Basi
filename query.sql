DROP TABLE IF EXISTS Utenti CASCADE;
DROP TABLE IF EXISTS Corsi CASCADE;
DROP TABLE IF EXISTS Lezioni CASCADE;
DROP TABLE IF EXISTS Appunti CASCADE;

/*CREAZIONE DELLE TABELLE*/

CREATE TABLE Utenti(
    Username CHAR[14] NOT NULL,
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
    Docente CHAR[14] NOT NULL,
    PRIMARY KEY (IdLezioni)
);

CREATE TABLE Appunti(
    IdAppunti SERIAL NOT NULL,
    Username CHAR[14] NOT NULL,
    Lezioni SERIAL NOT NULL,
    Nome TEXT NOT NULL,
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
