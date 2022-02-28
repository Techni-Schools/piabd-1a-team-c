CREATE DATABASE Hotel
GO

USE Hotel
GO

CREATE TABLE [Address] (
	address_id INT PRIMARY KEY,
	person_id INT FOREIGN KEY REFERENCES Person (person_id),
	street  VARCHAR(50) NOT NULL,
	city  VARCHAR(50) NOT NULL,
	[state] VARCHAR(50) NOT NULL,
	postal_code CHAR(5) NOT NULL,
	country VARCHAR(50) NOT NULL,
);

CREATE TABLE Person (
	person_id INT PRIMARY KEY,
	[name] VARCHAR(50) NOT NULL,
	surname VARCHAR(50) NOT NULL,
	phone_number INT NOT NULL,
	email_address VARCHAR(50) NOT NULL,
	date_of_birth DATA NOT NULL,
	payment_method VARCHAR(50),
);

CREATE TABLE Reservation (
	reservation_id INT PRIMARY KEY,
	person_id INT FOREIGN KEY REFERENCES Person (person_id),a
	room_id INT FOREIGN KEY REFERENCES Room (room_id),
);

CREATE TABLE Hotel_Personel (
	hotel_personel_id INT PRIMARY KEY,
	[login] VARCHAR(50),
	[password] VARCHAR(20),
	[name] VARCHAR(50), 
	surname VARCHAR(50),
	[role] VARCHAR(30),
);

CREATE TABLE Room (
	room_number INT,
	for_how_many_guests INT, 
	room_availability_status VARCHAR(20) DEFAULT('NO'),	
);

CREATE TABLE Cleaning_Service (
	cleaning_service_id INT PRIMARY KEY,
	room_id INT FOREIGN KEY REFERENCES Room (room_id),	
	cleaning_status VARCHAR(50) DEFAULT('Not Cleaned'),
	clean_up_date DATA,
);
