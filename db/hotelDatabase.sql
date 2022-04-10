CREATE DATABASE Hotel

USE [Hotel]
GO

CREATE TABLE Person (
	id INT PRIMARY KEY IDENTITY(1,1),
	-- add IDENTITY
	[name] VARCHAR(50) NOT NULL,
	surname VARCHAR(50) NOT NULL,
	phone_number INT NOT NULL,
	email_address VARCHAR(50) NOT NULL,
	date_of_birth DATE NOT NULL,
	-- change type
	payment_method VARCHAR(50),
	 CONSTRAINT check_date_of_birth CHECK (date_of_birth < GETDATE()),
	-- add CHECK for past dates only
);


CREATE TABLE [Address] (
	id INT IDENTITY(1,1), 
	-- add IDENTITY
	street  VARCHAR(50) NOT NULL,
	city  VARCHAR(50) NOT NULL,
	[state] VARCHAR(50) NOT NULL,
	postal_code CHAR(5) NOT NULL,
	country VARCHAR(50) NOT NULL,
	person_id INT,
	 CONSTRAINT pk_address_id PRIMARY KEY(id),
	 CONSTRAINT fk_person_id FOREIGN KEY(person_id)
		REFERENCES Person(id),
	-- add named CONSTRAINT
);


CREATE TABLE Reservation (
	id INT IDENTITY(1,1),
	-- add IDENTITY
	check_date DATE,
	check_out_date DATE,
	reservation_status VARCHAR(50),
	number_of_guests SMALLINT,
	-- change type
	confirm_by VARCHAR(50),
	person_id INT,
	 CONSTRAINT pk_reservation_id PRIMARY KEY(id),
	 CONSTRAINT fk_person_id FOREIGN KEY(person_id)
		REFERENCES Person(id),
	-- add named CONSTRAINT
);


CREATE TABLE Hotel_Personel (
	id INT IDENTITY(1,1),
	-- add IDENTITY/AUTOINCREMENT
	[login] VARCHAR(50) UNIQUE,
	-- add UNIQUE
	[password] VARCHAR(20),
	[name] VARCHAR(50), 
	surname VARCHAR(50),
	[role] VARCHAR(30),
	reservation_id INT,
	 CONSTRAINT fk_reservation_id FOREIGN KEY(reservation_id)
		REFERENCES Reservation(id),
);


CREATE TABLE Room (
	id INT IDENTITY(1,1),
	room_number INT,
	for_how_many_guests INT, 
	-- !change type 
	room_availability_status VARCHAR(20) DEFAULT('NO'),	
	-- !add CHECK with predefined values
	reservation_id INT,
	 CONSTRAINT pk_room_id PRIMARY KEY(id),
	 CONSTRAINT fk_reservation_id FOREIGN KEY(reservation_id)
		REFERENCES Reservation(id),
	-- add named CONSTRAINT 
);


CREATE TABLE Cleaning_Service (
	id INT IDENTITY(1,1),
	cleaning_status VARCHAR(50) DEFAULT('Not Cleaned'),
	-- !add CHECK with predefined values
	clean_up_date DATE,
	-- change type
	room_id INT,
	 CONSTRAINT pk_cleaning_service_id PRIMARY KEY(id),
	 CONSTRAINT fk_room_id FOREIGN KEY(room_id)
		REFERENCES Room(id),
);


-- komentarz z wykrzyknikiem jest informacją o rzeczy, którą należy zmienić (-- !treść)
