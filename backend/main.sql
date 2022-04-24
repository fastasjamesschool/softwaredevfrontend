CREATE TABLE PURCHASE(
ORDERID VARCHAR(25) PRIMARY KEY
); -- Table to track Order IDs for USERS table

-- VARCHAR2 is not a valid data type in MySQL

CREATE TABLE USERS (USERNAME VARCHAR (10) PRIMARY KEY,
PASSWD VARCHAR (16) NOT NULL,
EMAIL VARCHAR (30) NOT NULL,
FNAME VARCHAR (25) NOT NULL,
LNAME VARCHAR (25) NOT NULL, 
SIGNUP_DATE DATE,
USER_KEY VARCHAR (25) NOT NULL
); -- Table to hold user data such as login info, signup date, and userkey. 

-- DATE DEFAULT SYSDATE is not acceptable format for MySQL, just use DATE

CREATE TABLE MOVIES (
TITLE VARCHAR (25) PRIMARY KEY,
MOVIE_KEY VARCHAR (25) NOT NULL,
GENRE VARCHAR (20) NOT NULL, 
LENGHT VARCHAR (300) NOT NULL
); -- Holds data about the movie, from lenght, to genre and title. 

--add png to MOVIES table, holds link in form of text for the movie 

ALTER TABLE USERS ADD ORDERID VARCHAR (25) NOT NULL; 

ALTER TABLE USERS ADD CONSTRAINT FOREIGN KEY (ORDERID) 
REFERENCES PURCHASE (ORDERID);

-- Updated foreign key to USERS table

ALTER TABLE MOVIES ADD PRICE VARCHAR (6) NOT NULL; -- adds movie price row to show price of the film

ALTER TABLE PURCHASE ADD USERNAME VARCHAR(10) NOT NULL; -- adds username to table so username can be tracked to orderid
ALTER TABLE PURCHASE ADD PRICE VARCHAR(6) NOT NULL; -- adds price to PURCHASE table to show price on table

-- Used phpMyAdmin to input values into table to test php code, held in default_values file

ALTER TABLE PURCHASE DROP FOREIGN KEY USERNAME;

ALTER TABLE MOVIES ADD PNG varchar(50);

CREATE TABLE PURCHASE_INFO(
    CNAME VARCHAR (25) NOT NULL,
    CNUM VARCHAR (16) PRIMARY KEY, 
    CVV INTEGER (3) NOT NULL, 
    EX_DATE DATE NOT NULL,
    BADDR VARCHAR (100) NOT NULL,
    USERNAME VARCHAR (10) NOT NULL,
    FOREIGN KEY (USERNAME) REFERENCES USERS(USERNAME)); 

-- LAST EDITED BY SEAN SHEA, SUN APRIL 24th, 4:21 PM EST 
