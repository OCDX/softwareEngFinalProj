**VIEW**

--View all users: 

SELECT * FROM `user`

--View all items in manifest (newest first selected):

SELECT * FROM `manifest` ORDER BY `upload_date` DESC

--View all items in manifest (oldest first selected):

SELECT * FROM `manifest` ORDER BY `upload_date`

--View manifests from specific manifest id:

SELECT * FROM `manifest` WHERE `manifest_id` = ?

--View manifests from specific category (newest first selected):

SELECT * FROM `manifest` WHERE `category` = ? ORDER BY `upload_date` DESC

--View manifests from specific category (oldest first selected):

SELECT * FROM `manifest` WHERE `category` = ? ORDER BY `upload_date`

--View manifests from specific date:

SELECT * FROM `manifest` WHERE `upload_date` = ? ORDER BY `upload_date` DESC

--View most recent manifests written by specific users:

SELECT * FROM `manifest` WHERE `ownerID` = ? ORDER BY `upload_date` DESC

--View oldest manifests written by specific users:

SELECT * FROM `manifest` WHERE `ownerID` = ? ORDER BY `upload_date`

--View previous editions of a manifest:

SELECT * FROM `manifest` WHERE `version` = ?

 - List item