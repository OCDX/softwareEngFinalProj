##Use Cases and Requirements
This section outlines in detail the requirements of the overall system and its users, broken down by use case. Each use case has functional and nonfunctional requirements, as well as system requirements and user requirements. Some overlap between these categories is present, but it is important to document them from different perspectives for the sake of clarity.




###**Use Case: Search Manifest**


Summary: A user should be able to search available manifests by given keywords. Upon entering a search request, a user should be able to view all manifests related. This will allow filtering of the numerous manifests to a more specific subset that the user is interested in.


####Users:

- Researchers
- Students 
- Data Scientists
- System Administrators


####Functional Requirements:

- View manifests in an organized manner based upon an executed search.

- User interface is easy to use and tailored to intuitive functionality. In other words, a user should be able to quickly understand what elements on the page are designed to do, rather than needing specific instructions or know-how in order to interface with searching manifests. This includes a search field for a user to input search items and a button to execute a search.

- Valid Display of all relevant datasets to a given search. A user should not be shown irrelevant items to their search, invalid manifests, nor should a user be unable to view manifests that are relevant. For example, if a user searches for manifests based on keyword “twitter”, all manifests related to twitter should be displayed. If any relevant manifests are not displayed, the search itself would not be valid to the user.

- Security should be enforced by the system to protect manifest data and system features from unauthorized access. This will be accomplished through the following methods:
  - All searches will query the data, so user input must be sanitized before being queried directly to the database. 
  - No user will have access to manifests that they do not have permission for. For example, a user may be able to view a manifest, but not edit if they do have the necessary access to do so. 

####Non-functional Requirements:

- Search should occur in less than 10 seconds, to ensure a user gets fast response. Should search take longer than 10 seconds, give an error message.
- Search should display up to 25 manifests; more than 25 will result in a button to prompt a user to display more. 

####Technical Requirements:
- Script or query to search manifests for keywords.


####Pre-conditions:
- User wants to search site for data


####Main Success Scenario:

Manifests on server have been searched and all relevant manifests are displayed to user in an ordered fashion.

####Failed End Condition:
Search takes longer than expected OR no manifests to display with given search terms. 

####Trigger:

User clicks to initiate a search.

####Dependent Use Cases:
- Upload Dataset
- Generate/Upload Manifest
- Contribute to Existing Dataset
- Browse Manifest


###**Use Case: Browse Manifest**

####Users:

- Researchers
- Students 
- Data Scientists
- System Administrators


####Functional Requirements:

- User should be able to view manifests, multiple at a time, with a small subset of manifest information to help identify that manifest.
- Display should be organized in a way that makes it clear to a user where one manifest begins, where the next begins, and what information is related to each respective manifest.
- Date uploaded will be the differentiating factor for multiple sets of SNC files for the same data set. Date uploaded is a required column for information that will be displayed withe the manifest.

####Non-functional Requirements:

- No more than 25 manifests should be displayed at a time. 
- Pressing "view more" should load another 25 manifests.
- The display for the manifests should be no more than 70 percent of the width of the displayed page. 

####Technical Requirements:
- Button to download each manifest
- Options to sort the displayed manifests by date and relevance 


####Pre-conditions:
- User has searched for manifest


####Main Success Scenario:

Up to 25 manifests are displayed relevant to search, with options to download and view respective manifests, with option to view more if user wishes

####Failed End Condition:

No manifests found for given search, so none are displayed

####Trigger:

User clicks to initiate a search.

####Dependent Use Cases:

- Search Manifests

###**Use Case: Contribute to existing Dataset**

####Users:

- Researchers
- Students 
- Data Scientists
- System Administrators

####Functional Requirements:

- Place to upload link to data
- Place to upload scripts (if provided)

####Non-functional Requirements:

- Redirect to page for contributing to existing dataset should take no more than 5 seconds (provided a decent internet connection)

####Technical Requirements:
- Working web server 

####Pre-conditions:

- User wishes to upload SNC files

####Main Success Scenario:

- Dataset has been found on server and files have been successfully uploaded to site and connected to respective manifest 

####Failed End Condition:

- User is unable to upload OR dataset not found on server

####Trigger:

- User clicks contribute to existing database

####Dependent Use Cases:
NONE

###**Use Case: Download Dataset/SNC**

####Users:

- Researchers
- Students 
- Data Scientists
- System Administrators


####Functional Requirements:

- provide access to different formats, if applicable, for files to be downloaded
- display size of download requested

####Non-functional Requirements:

- Download should allow up to 1GB size 

####Technical Requirements:

- copying files to local machine

####Pre-conditions:

- User has searched and selected a given manifest

####Main Success Scenario:

- Copy of SNC/dataset files are on user local machine

####Failed End Condition:

- download fails and copy is not made on local machine

####Trigger:

-  user clicks download manifest 

####Dependent Use Cases:

- search manifest
- browse manifest

###**Use case: Generate or Upload manifest**

####Users:

- Researchers
- Students 
- Data Scientists
- System Administrators

####Functional Requirements:

- Buttons to generate manifest and upload manifest
- include any input fields for all manifest specifications for generation of a new manifest
- dataset exists and has been contributed 

####Non-functional Requirements:

- If user opts to generate a manifest, redirect should take less than 10 seconds
- form for generating a new manifest should take up no more than 70 percent of screen width

####Technical Requirements:

- database for storing manifest files

####Pre-conditions:

- user has shared any Dataset and SNC files

####Main Success Scenario:

- Manifest generated or present, uploaded manifest, dataset, and snc files that are present

####Failed End Condition:

- user does not have a complete manifest

####Trigger:

- user clicks upload manifest or create manifest after uploading dataset 

####Dependent Use Cases:

- upload dataset 
