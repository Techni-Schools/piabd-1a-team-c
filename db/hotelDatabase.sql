CREATE DATABASE Hotel
GO

USE Hotel
GO

CREATE TABLE [Address] (
	address_id INT PRIMARY KEY, 
	-- add IDENTITY/AUTOINCREMENT 
	person_id INT FOREIGN KEY REFERENCES Person (person_id),
	street  VARCHAR(50) NOT NULL,
	city  VARCHAR(50) NOT NULL,
	[state] VARCHAR(50) NOT NULL,
	postal_code CHAR(5) NOT NULL,
	country VARCHAR(50) NOT NULL,
	-- add named CONSTRAINT
);

CREATE TABLE Person (
	person_id INT PRIMARY KEY,
	-- add IDENTITY
	[name] VARCHAR(50) NOT NULL,
	surname VARCHAR(50) NOT NULL,
	phone_number INT NOT NULL,
	email_address VARCHAR(50) NOT NULL,
	date_of_birth DATA NOT NULL,
	-- DATE not DATA, add CHECK for past dates only
	payment_method VARCHAR(50),
);

CREATE TABLE Reservation (
	reservation_id INT PRIMARY KEY,
	-- add IDENTITY/AUTOINCREMENT
	person_id INT FOREIGN KEY REFERENCES Person (person_id),a
	room_id INT FOREIGN KEY REFERENCES Room (room_id),
	-- add named CONSTRAINT
);

CREATE TABLE Hotel_Personel (
	hotel_personel_id INT PRIMARY KEY,
	-- add IDENTITY/AUTOINCREMENT
	[login] VARCHAR(50),
	-- can be null ? maybe should be UNIQUE
	[password] VARCHAR(20),
	[name] VARCHAR(50), 
	surname VARCHAR(50),
	[role] VARCHAR(30),
);

CREATE TABLE Room (
	-- where is PK ?
	room_number INT,
	-- change type 
	for_how_many_guests INT,
	-- chane type
	room_availability_status VARCHAR(20) DEFAULT('NO'),	
	-- add CHECK with predefined values
);

CREATE TABLE Cleaning_Service (
	cleaning_service_id INT PRIMARY KEY,
	room_id INT FOREIGN KEY REFERENCES Room (room_id),	
	cleaning_status VARCHAR(50) DEFAULT('Not Cleaned'),
	-- add CHECK with predefined values
	clean_up_date DATA,
	-- DATE not DATA
);
