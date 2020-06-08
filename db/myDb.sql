CREATE TABLE Salesforce (
	ExternalID varchar(255) NOT NULL,
	LastName varchar(255),
        FirstName varchar(255),
        Address varchar(255),
    	City varchar(255),
        PRIMARY KEY (ExternalID)
);

CREATE TABLE Dynamics (
	ContactID varchar(255) NOT NULL,
	LastName varchar(255),
        FirstName varchar(255),
        Address varchar(255),
    	City varchar(255),
        PRIMARY KEY (ContactID)
); 

INSERT INTO salesforce (ExternalID, LastName, FirstName, Address, City)
VALUES ('X13', 'Mikos', 'Gage', '13568 W Montebello Ave', 'Phoenix');

INSERT INTO salesforce (externalid, lastname, firstname, address, city)
VALUES
('X14', 'Mikos', 'Cole', '13568 W Montebello Ave', 'Phoenix');

INSERT INTO salesforce (externalid, lastname, firstname, address, city)
VALUES
('X15', 'Mikos', 'Caden', '13568 W Montebello Ave', 'Phoenix');

INSERT INTO dynamics (ContactID, LastName, FirstName, Address, City)
VALUES ('X13', 'Mikos', 'Gage', '13568 W Montebello Ave', 'Phoenix');

INSERT INTO dynamics (ContactID, lastname, firstname, address, city)
VALUES
('X14', 'Mikos', 'Cole', '13568 W Montebello Ave', 'Phoenix');

INSERT INTO dynamics (ContactID, lastname, firstname, address, city)
VALUES
('X15', 'Mikos', 'Caden', '13568 W Montebello Ave', 'Phoenix');

SELECT * FROM Salesforce
INNER JOIN Dynamics ON  Salesforce.externalid = Dynamics.contactid;
