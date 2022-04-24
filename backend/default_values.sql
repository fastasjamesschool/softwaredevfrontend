--default values for testing php with the tables made in sql

INSERT INTO `MOVIES` (`TITLE`, `MOVIE_KEY`, `GENRE`, `LENGHT`, `PRICE`) VALUES ('The Batman ', '25723957', 'Actoin', '200', '$8.99');

INSERT INTO `USERS` (`USERNAME`, `PASSWD`, `EMAIL`, `FNAME`, `LNAME`, `SIGNUP_DATE`, `USER_KEY`, `ORDERID`) 
VALUES ('fastjames', '123456', 'fastasjames@idk.com', 'James', 'Conlin', '2022-03-30', '0001', '00001');

INSERT INTO `PURCHASE` (`ORDERID`, `USERNAME`, `PRICE`) VALUES ('00001', 'fastjames', '$8.99');

INSERT INTO `USERS` (`USERNAME`, `PASSWD`, `EMAIL`, `FNAME`, `LNAME`, `SIGNUP_DATE`, `USER_KEY`, `ORDERID`) 
VALUES ('fastjames', '123456', 'fastasjames@idk.com', 'James', 'Conlin', '2022-03-30', '0001', '00001');

INSERT INTO `PURCHASE_INFO` (`CNAME`, `CNUM`, `CVV`, `EX_DATE`, `BADDR`, `USERNAME`) 
VALUES ('Sean Shea', '9999999999999999', '000', '2026/4/24', '83 Windham St, Willimantic, CT 06226', 'fastjames')

--above values are work in progress


-- LAST EDITED BY SEAN SHEA APRIL 24th, 4:36 PM EST
