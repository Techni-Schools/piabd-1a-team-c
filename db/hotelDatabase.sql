CREATE DATABASE Hotel

USE [Hotel]
GO

CREATE TABLE Person (
	id INT PRIMARY KEY IDENTITY(1,1),
	[name] VARCHAR(50) NOT NULL,
	surname VARCHAR(50) NOT NULL,
	phone_number INT NOT NULL,
	email_address VARCHAR(50) NOT NULL,
	date_of_birth DATE NOT NULL,
	payment_method VARCHAR(50),
	 CONSTRAINT check_date_of_birth CHECK (date_of_birth < GETDATE()),
);


CREATE TABLE [Address] (
	id INT IDENTITY(1,1), 
	street  VARCHAR(50) NOT NULL,
	city  VARCHAR(50) NOT NULL,
	[state] VARCHAR(50) NOT NULL,
	postal_code CHAR(5) NOT NULL,
	country VARCHAR(50) NOT NULL,
	person_id INT,
	 CONSTRAINT pk_address_id PRIMARY KEY(id),
	 CONSTRAINT fk_person_id FOREIGN KEY(person_id)
		REFERENCES Person(id),
);


CREATE TABLE Reservation (
	id INT IDENTITY(1,1),
	check_date DATE,
	check_out_date DATE,
	reservation_status VARCHAR(50),
	number_of_guests SMALLINT,
	confirm_by VARCHAR(50),
	person_id INT,
	 CONSTRAINT pk_reservation_id PRIMARY KEY(id),
	 CONSTRAINT fk_person_id FOREIGN KEY(person_id)
		REFERENCES Person(id),
);


CREATE TABLE Hotel_Personel (
	id INT IDENTITY(1,1),
	[login] VARCHAR(50) UNIQUE,
	[password] VARCHAR(20),
	[name] VARCHAR(50), 
	surname VARCHAR(50),
	[role] VARCHAR(30),
	reservation_id INT,
	 CONSTRAINT fk_hotel_person_id FOREIGN KEY(reservation_id)
		REFERENCES Reservation(id),
);


CREATE TABLE Room (
	id INT IDENTITY(1,1),
	room_number INT,
	for_how_many_guests SMALLINT, 
	room_availability_status VARCHAR(20) DEFAULT('NO') CHECK (room_availability_status='YES'),	
	reservation_id INT,
	 CONSTRAINT pk_room_id PRIMARY KEY(id),
	 CONSTRAINT fk_room_ok_id FOREIGN KEY(reservation_id)
		REFERENCES Reservation(id),
);


CREATE TABLE Cleaning_Service (
	id INT IDENTITY(1,1),
	cleaning_status VARCHAR(50) DEFAULT('Not Cleaned') CHECK (cleaning_status='Cleaned'),
	clean_up_date DATE,
	room_id INT,
	 CONSTRAINT pk_cleaning_service_id PRIMARY KEY(id),
	 CONSTRAINT fk_room_id FOREIGN KEY(room_id)
		REFERENCES Room(id),
);
