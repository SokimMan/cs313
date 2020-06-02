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

INSERT INTO Salesforce (ExternalID, LastName, FirstName, Address, City)
VALUES ('X13', 'Mikos', 'Gage', '13568 W Montebello Ave', 'Phoenix');

INSERT INTO Dynamics (ContactID, LastName, FirstName, Address, City)
VALUES ('X13', 'Mikos', 'Gage', '13568 W Montebello Ave', 'Phoenix');