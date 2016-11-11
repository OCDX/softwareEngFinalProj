**INSERT**

--Insert all fields into new manifest:

INSERT INTO `manifest`(`manifest_id`, `version`, `category`, `last_edit`, `upload_date`, `title`, `ownerID`, `data`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

--Insert a new user's registration data:

INSERT INTO `user` (`ID`, `salt`, `hashed_password`, `permission_level`, `email`, `first_name`, `last_name`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])