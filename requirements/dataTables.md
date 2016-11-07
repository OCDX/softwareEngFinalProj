###Tables and their data:

|User|
-----------
| 	Username <br> Password <br> IDs for manifests by this user <br> test |

|Manifest Search Data|
-----------
| Title <br> contributors <br> SNC search tags <br> related categories|

**NOTE: this is a first pass, will need to think more and gather more information in this. 
For example, it might not be useful to have search tags in the database itself, 
maybe that is a different type of data**

|Manifest Data|
------------
| Owner <br> User Accesses <br> time of upload <br> time of last change <br> version <br> dataset (json? not sure) <br> SNC files (if present) |

Current Iteration of ERD:

![erd](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/sprint1/erd.png)


###Classes

user: {
  
  first_name: string
  
  last_name: string
  
  email: string
  
  ID (internal tracking ID): int
  
  permission_level: int
  
  }
  
Manifest: {

  ID: int
  
  version : int
  
  category: enum
  
  last_edit: date
  
  upload_date: date
  
  title: sting
  
  ownderID: int (match userId)
  
  data: string (this will be a file path to the file on our server)
  
  }
 
 User-Owns_manifest {
 
  userID: int
  
  manifestID: int
  
  upload_date: date
  
  last_edit: date
 
 }
