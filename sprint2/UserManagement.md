#User Management and User Roles

In our system, we have defined 3 groups of users:

- non-users
- generic users "Users" (researchers, data scientists, students)
- administrators "Admins"

A "Non-User" is a person who has not registered to use our system.

A "User" is a person who has registered to use our system, providing their name, their email, and their desired password.

An "Admin" is a person who has been given special permission to edit any data on the system. Great power, great responsibility, all that jazz. They also must provide a name, email, and password.
_In our current design, we only have one admin account to use for testing and management, with no implementation to add other admin accounts._

###User Roles

----------

####**Registering New User**
**Affects:** Non-User

**What:** If a non-user wants to become a user, they must provide a their name, a valid email, and a password.

**Why:** We can't just let anyone post stuff without any way to tie it back to them.

----------

####**Logging In**
**Affects:** Users, Admins

**What:** In order for a User or Admin to see any content other than the login page or the registration page, they must first login, using their email and password, and start a session.

**Why:** This is a neccesary role, as it maintains that we can track and control what users can create and change.

**Differences between User and Admin:** None

--------

####**Browse Manifest**

**Affects:** Users, Admins

**What:** A User or Admin should be able to browse through all available manifests.

**Why:** This allows users to navigate to any manifest to examine it in further detail.

**Differences between User and Admin:** None

------------

####**Search Manifest**

**Affects:** Users, Admins

**What:** A user should be able to search available manifests by given keywords. Upon entering a search request, a user should be able to view all manifests related. This will allow filtering of the numerous manifests to a more specific subset that the user is interested in.

**Why:** This allows any user to quickly search for any manifest following desired criteria to examine in further detail.

**Differences between User and Admin:** None

------------


####**Contribute to Existing Dataset**

**Affects:** Users, Admins

**What:** The User who created the manifest is able to add or remove files tied to the manifest.

**Why:** As Users collaborate and discuss results, the user with the initial findings may find that he needs to share more relevant material.

**Differences between User and Admin:** A User may only edit a manifest that they created. Admins may edit any manifest. (Perhaps a document is rumored to have malicious content when downloaded)

------------

####**Delete Existing Dataset**

**Affects:** Users, Admins

**What:** The User who created the manifest is able to delete the entire manifest.

**Why:** If a user finds out that their work is too shameful to share, they may wish to remove it from the world.

**Differences between User and Admin:** A User may only delete a manifest that they have created. And Admin may delete any manifest. Pray that the admin gods aren't against you.

------------

####**Download Dataset/SNC**

**Affects:** Users, Admins

**What:** Any user can download any files related to any manifest.

**Why:** We want to collaborate, don't we? This distributes files so that results can be analyzed and reproduced.

**Differences between User and Admin:** None

------------


####**Generate or Upload Manifest**

**Affects:** Users, Admins

**What:** Any user can choose to upload a manifest. The manifest requires the data used, and can also take other related files, such as the scripts used to analyze the data.

**Why:** This is kind of the point of this system, to allow users to share their work.

**Differences between User and Admin:** None

------------
