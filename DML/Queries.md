## SQL Queries for Sprint 2:##

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


----------


**INSERT**

--Insert all fields into new manifest:

INSERT INTO `manifest`(`manifest_id`, `version`, `category`, `last_edit`, `upload_date`, `title`, `ownerID`, `data`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

--Insert a new user's registration data:

INSERT INTO `user` (`ID`, `salt`, `hashed_password`, `permission_level`, `email`, `first_name`, `last_name`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])


----------


**UPDATE**

--Update a user's email address:

UPDATE `user` SET `email` = [value-1] WHERE `ID` = [value-2]

--Update manifest title:

UPDATE `manifest` SET `title` = [value-1] WHERE `manifest_id` = [value-2]

--Update manifest data:

UPDATE `manifest` SET `data` = [value-1]  WHERE `manifest_id` = [value-2]

--Update manifest category

UPDATE `manifest` SET `category` =  [value-1] WHERE `manifest_id` = [value-s]


----------
**DELETE**

--Delete manifest:

DELETE FROM `manifest` WHERE `manifest_id` = ?

--Delete user:

DELETE FROM `user` WHERE `ID` = ?


----------
**LOGGING IN**

SELECT `salt`, `hashed_password`, `permission_level` FROM `user` WHERE `ID`=?

----------
**INDEXING**

--Index manifest categories for improved query return speed:

CREATE INDEX category_index ON `manifest` (`category`);


