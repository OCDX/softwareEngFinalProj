/*scripts*/

use SEFinalProject;

/*table creation*/
CREATE TABLE user ( 
ID int NOT NULL AUTO_INCREMENT, 
last_name varchar(255), 
first_name varchar(255), 
email varchar(255), 
permission_level int, 
PRIMARY KEY (ID));

CREATE TABLE manifest( 
manifest_id int NOT NULL AUTO_INCREMENT, 
version int, category VARCHAR(255), 
last_edit DATE, upload_date DATE, 
title VARCHAR(255), 
ownerID int NOT NULL, 
PRIMARY KEY (manifest_id), 
FOREIGN KEY (ownerID) REFERENCES user(ID),
data BLOB NOT NULL);

/*constraints*/

ALTER TABLE user ADD CONSTRAINT
permission_constraint CHECK (permission_level = '0' OR permission_level = '1');

/*inserting data into user table*/
INSERT INTO user (ID, last_name, first_name, email, permission_level)
VALUES ('<int>', '<varchar>', '<varchar>', '<varchar>', '<int>');


/*deleting data from user table. delete by ID*/

DELETE FROM user WHERE ID = <int>

/*insert data into manifest*/
insert into manifest (manifest_id, version, category, last_edit, upload_date, title, ownerID, data) 
VALUES ('2', '1', 'test', '2016-10-31', '2016-10-31', 'test2', '1', 'this is also a test');

/*delete manifest. delete by manifest_id*/

DELETE FROM manifest WHERE manifest_id = <int>