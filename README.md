# gstbooks
WebTechnology 3rd sem Project 'GST Books'

Create following database:
CREATE DB;
CREATE TABLE `users` (
 `username` text NOT NULL,
 `password` text NOT NULL,
 `company_name` text NOT NULL,
 `state` text NOT NULL,
 `com_add` text,
 `GSTIN` text NOT NULL,
 `db_name` int(11) NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`db_name`)
);
