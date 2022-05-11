CREATE DATABASE IF NOT EXISTS eaedgington_artgallery;
USE eaedgington_artgallery;

CREATE TABLE IF NOT EXISTS gallery
(
g_id		 VARCHAR(50) NOT NULL 	PRIMARY KEY,		
g_name 		 VARCHAR(50) NULL,
location 	 VARCHAR(50) NULL
);

CREATE TABLE IF NOT EXISTS customer
(
cust_id 	VARCHAR(50) NOT NULL 	PRIMARY KEY,
g_id		VARCHAR(50) NULL, 		
art_id 		VARCHAR(50) NULL,
f_name		CHAR(30) 	NULL,
l_name		CHAR(30)	NULL,
address 	CHAR(30) 	NULL,
dob 		DATE		NULL
);

CREATE TABLE IF NOT EXISTS artist
(
artist_id 	VARCHAR(30) NOT NULL 	PRIMARY KEY,
g_id 		VARCHAR(30) NULL,
cust_id 	VARCHAR(30) NULL,
f_name1 	CHAR(30) 	NULL,
l_name1 	CHAR(30) 	NULL,
birthplace 	CHAR(30) 	NULL,
style 		CHAR(30) 	NULL
);

CREATE TABLE IF NOT EXISTS artwork
(
art_id 		VARCHAR(30) NOT NULL 	PRIMARY KEY,
title 		VARCHAR(30) NULL,
year 		VARCHAR(30) NULL,
medium 		VARCHAR(30) NULL,
price 		VARCHAR(30) NULL,
g_id 		VARCHAR(30) NULL,
artist_id 	VARCHAR(30) NULL
);

CREATE TABLE IF NOT EXISTS contacts
(
cust_id 	VARCHAR(30) NULL,
phone 		VARCHAR(10) NULL
);