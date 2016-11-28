\pagebreak

#Sprint Documentation 

Below are links to respective sprint directories, which contain all documents relevant to that sprint. Each sprint also has a sprint document, specifically over viewing that sprint and the process of its completion. Further, there is a log specifically dedicated to the original break down of the tasks, and recording any change of task delegation. 

**General Workflow for each sprint**

Each sprint can be broken down into a few parts: 

* a sprint meeting, which allows for discussion of upcoming tasks, organization of questions and requirements for the sprint

* development, which includes all formal task completion and submission to the project repository

* documentation, which includes documenting the completion of each task, summary and description where appropriate, and organizing the sprint document to provide easy access to the TAs and Professor to relevant information and code 

##Link to Repository on github

[Group 7 Repo](https://github.com/jaredwelch1/softwareEngFinalProj)


##**Sprint 1**

###Task breakdown 

- [x] Create wiki page [link](https://github.com/jaredwelch1/softwareEngFinalProj/wiki)

	Member: Jared
	
	- Create general wiki page for the project, which details at a high level the sprints, requirements, and work flow

- [x] Sprint Documentation
	
	Member: Jared 
	
	* Sprint document created in [this commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/1ec7601b0af2bfce0c5fa9eeb28b2ea0c4a13b00)
	
	* Many more commits related to this task, as group members updated the sprint document as they worked throughout the sprint

- [x] Set up deployment 
	
	Member: Zach 

	[link to example page for proof of successful deployment](https://mizzou.tech/)
	

- [x] Data base creation 

	[relevant commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/4c96a5cc3606886cc53841bfe110d25a5663538d)

	This page [https://mizzou.tech/view.php](https://mizzou.tech/view.php) shows a successful query to our database to show that it exists and has some data. 

	Just for proof, the code for that page can be found here:
	
	[link](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/webPages/view.php)
	
	The page shows a valid query that is run when the page is loaded, verifying and displaying our data.

	Further, here is a link to the script that was used to create our tables: 

	[link](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/sprint1/script.sql)

	And here is a link to a png file showing the tables in mysql:

	[link](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/sprint1/tabledesc.png)
	
	Member: Geoff	
	
	
- [x] ERD finish 

	[commit link](https://github.com/jaredwelch1/softwareEngFinalProj/commit/f291018ef402767578e6166d4d541ebdfbb19fa7)

	[link to ERD diagram for reference](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/sprint1/ERD.png)
	
	Member: Geoff

	Reviewer: Andrew


- [x] organize repo 
	
	Member: Jared

	* Created some new folders to organize the repo.

	* Created directory for requirements and related docs

	* created directory for currents print

		commits: 
		
		[commit 1](https://github.com/jaredwelch1/softwareEngFinalProj/commit/6c2af192e3f4e0386efb33a45ca033d17e00037d)
		
		[commit 2](https://github.com/jaredwelch1/softwareEngFinalProj/commit/b15b10bf5b5f3c3549c0a10f63b65682405000a1)


- [x] drill down into UI functionality

	 Began initial page design. Outlined each page in php file with general flow and text descriptions for each page that display when viewing the page. Mostly an outline for each page for implementation when the time comes. 
	
	Members: Liz

- [x] create page design document for details on current design decisions
	
	[commit for adding page desing document](https://github.com/jaredwelch1/softwareEngFinalProj/commit/2c363f389fe5b16f60b6cd51336364c48810e4f1)
    
    [adding some small display functionality for searches and displaying user's manifests](https://github.com/jaredwelch1/softwareEngFinalProj/commit/31ba89d3b64870e10eb8f603d2dfd8c636167169)

	[Link to document itself](https://github.com/jaredwelch1/softwareEngFinalProj/wiki/Page-Design-Document)


	 
	

- [x] begin thinking about UNIT tests?
	
	Member: Andrew
	
	[Unit Testing Doc](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/sprint1/UnitTesting.md)
	
	[Commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/be4a86a8a3635a01ec1d2c65bcc2590fe4ee62b2)

- [x] organize links to various documents needed for the sprint

	Jared

##**Sprint 2**

[link to sprint 2 wikipage detailing our sprint2 meeting.](https://github.com/jaredwelch1/softwareEngFinalProj/wiki/Sprint-2-Wiki)

###Task discussion from sprint meeting:

* Requirements analysis fixes

* Have all insert, update, delete queries (should be separate files in directory called DML)

* stub calls for all interactive UI elements
	
	* outline our UI skeleton so to speak; not actual implementation just ensure the plan for its eventual implementation

* Begin UI elements for organizations 
	
	* document and explain how UI elements will be organized for pages

* Management of users/roles 
	
	* Detail what each user can do based on role

* link to sprint 1 information 
	
	* finish requirements analysis

**In case there is any confusion about where each piece of the sprint is present, here is a list, taken from the sprint document itself, of what is being asked for and where the work associated is within the task list. There is a level of interpretation, so this is an attempt to demonstrate how we interpreted the requirements and tried to fill them to the best of our ability.**

###Breakdown of Sprint requirements and their respective tasks for clarity

- Have all insert, update and delete queries required for your application written. They should be separate files in your github REPO under a directory called "DML"

     We have tasks for each query below,

     We have a task dedicated to creating the directory asked for.

- Stub calls for all elements of UI

     According to what we were told in class when we asked, this task equivalent for this year's project is to simply        create the skeleton for each page and have a place for where the eventual UI elements will go. We have a task for that, called stub calls. 

- Begin UI elements for organization 

     This task seems very similar to what we were told to do with stub calls, however, we still have a separate task for it and details with it, based on our interpretation on what might be different from stub calls

- Management of Users / Roles

     Task for this as well, manage users/roles

- Link to Sprint 1 information

     I am not sure what sprint 1 information was exactly asked for, but we have a task for fixing our requirements analysis and we also have a link to the feedback that we were given from sprint 1, converted to a markdown format for reference. 

     We also have an area detailing tasks that we addressed in fixing sprint 1 issues that we were given feedback on, titled backlog for sprint 2.


###Sprint 2 Tasks 

- [x] insert, update, delete queries (Zach)

    * Link to DML directory with all queries in separate files: [DML Directory](https://github.com/jaredwelch1/softwareEngFinalProj/tree/master/DML)

    * [relevant commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/08d62a3d3dc6cf5f9c3dea0c1e53450b2a1a3955)

- [x] update directories - Created a DML directory for our query files (Jared)

    [DML Directory](https://github.com/jaredwelch1/softwareEngFinalProj/tree/master/DML)

    [Commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/6671d8252c8c1ee205010396a11abb0a77301952)


- [x] link to requirements feedback (Jared)

	Put the feedback in a markdown file [here](https://github.com/jaredwelch1/softwareEngFinalProj/wiki/Sprint-1-Feedback)

	[Relevant commit to the repo](https://github.com/jaredwelch1/softwareEngFinalProj/commit/e51a2f54a9294bace16e574ceec806ccc2b8e98c)

- [x] fix requirements analysis (Jared)

	* [Link to new requirements](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/requirements/requirementsFull.pdf)

    	* [Commit for file upload](https://github.com/jaredwelch1/softwareEngFinalProj/commit/e9114b50e3f63b4a789d5a878a9e881f41ed969e)


- [x] Create individual branches
 
 	[Branch (Jared)](https://github.com/jaredwelch1/softwareEngFinalProj/tree/jbwy9b)

 	[Branch (Zach)](https://github.com/jaredwelch1/softwareEngFinalProj/tree/zmd989)

 	[Branch (Liz)](https://github.com/jaredwelch1/softwareEngFinalProj/tree/sprint2-erbmt9-UI-development)

 	[Branch (Andrew)](https://github.com/jaredwelch1/softwareEngFinalProj/tree/aws52b-branch)

 	[Branch (Geoff)](https://github.com/jaredwelch1/softwareEngFinalProj/tree/geoffbranch)

- [x] Stub calls (in our case, we just need to organize the pages, and create space for the calls that will be used within those pages) (Liz)
	
	- [webpages](https://github.com/jaredwelch1/softwareEngFinalProj/tree/master/webPages)
        
	- [sitemap](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/webPages/SEFinalFG7.png)
        
	- [commit for adding major page updates](https://github.com/jaredwelch1/softwareEngFinalProj/commit/a6435181eabe8fb4ff268da3e0145495070c1169)
        
	- [stub calls are at the top of each page](https://github.com/jaredwelch1/softwareEngFinalProj/commit/63c90e0be50efa0c6c6b9142a6ba43d141db0b5f)
        
	- pages will continue to update, with functionality being added continuously
	
- [x] Begin organization of UI elements (Geoff)

	* This will require two things: 
			
        - Make sure our page design doc reflects the overall lay out of each UI element that will be in place

        - Make sure that the elements are described in detail with what their purpose is for a user
          [link to document](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/UIElements.md)

- [x] Manage users and roles (Andrew)

	* Create document that outlines what users our system has and their access
         [Link to Document](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/sprint2/UserManagement.md)

         [Commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/dff0db003c33937c946ea60202a00ebdaef56426)
		
	* Maybe begin log in and log out?(reviewed by Geoff)
          [Commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/82e01cc957ce361dd7696e477657d102c7b6d3a9)

- [x] link to sprint 1 feedback (Jared)

    * [Link](https://github.com/jaredwelch1/softwareEngFinalProj/wiki/Sprint-1-Feedback)

- [x] All feedback will need to be reflected in our backlog for the sprint (Jared)

    * see below:

###Sprint 2 Backlog From previous sprints:

This section is dedicated to the tasks that were inherited from the previous sprint. These tasks were addressed this sprint in order to maintain the project and address the areas that were lacking from the preceding sprints. 

####Tasks

- [x] Fix test Document

    * Referring to the feedback received, our testing document has been updated. It can be viewed here:

    [link to document](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/sprint1/UnitTesting.md)

    [commit 1](https://github.com/jaredwelch1/softwareEngFinalProj/commit/4a914c6b050fc3297bfcaa20f5c7e5dab845b138)

    [commit 2](https://github.com/jaredwelch1/softwareEngFinalProj/commit/b146618fee84c461c1a3702e43bb739e9e4abad9)

    [merge branch to master](https://github.com/jaredwelch1/softwareEngFinalProj/commit/597e2bd34a8079c22512316f6942c3945fb47f03)

- [x] Fix ERD

    * Need to update User table fields

    * [link to updated ERD](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/sprint1/ERD.png)

- [x] Give access to the page prototypes that were designed in sprint1

     * We have a wiki page dedicated to discussing our page design, with images embedded within it here:
     
     [Page Design Document](https://github.com/jaredwelch1/softwareEngFinalProj/wiki/Page-Design-Document)

##Sprint 3

###Sprint Kickoff meeting:

[link to wikipage for our sprint 3 meeting](https://github.com/jaredwelch1/softwareEngFinalProj/wiki/Sprint-3-Kickoff-meeting)

###Task List 

- [x] Testing fix ups (Jared)

    * Add section for our edge case testing plan

    * general fixes from sprint 2 feedback

    [link to commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/c04cbdeacca9acd61194c75347129c0b2bab4f9a)

    [link to testing page](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/testing/testingDoc.md)

- [x] Allow file uploads (Zach) (**BACKLOG**)

- [x] Get log in working on database (Zach)

    * Login at: https://mizzou.tech/v2.0/

    * Username : admin@missoui.edu

    * Password : CS4320FG7

- [x] Get session variables for login working (Geoff)

[link to code](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/v2.0/login.php)

- [x] link an example manifest for reference (Jared)

    * [Link to example manifest](https://github.com/OCDX/OCDX-Specification/blob/master/manifest(example).json)

- [X] draft user documentation (Jared)

    * [Link to User Documentation Draft]
(https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/UserDocumentation.md)

    * [Commit for draft creation](https://github.com/jaredwelch1/softwareEngFinalProj/commit/cedfdaab9978987b832779423f1e0a8f04e85371)

- [X] Finish up the temporal logic (Web page diagram) (Liz)
    
    * [Current Web Page Mapping](https://github.com/jaredwelch1/softwareEngFinalProj/blob/erbmt9-sprint3-again-dammit/SEFinalFG7.png)
    
    * [Commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/ebc37a484525bc0c656ff65447560887af32999a)

- [X] clean up styling (Liz)
    
    * [Completely updated webpages from 2.0](https://github.com/jaredwelch1/softwareEngFinalProj/commit/9f4da5c04f240bf6aebd4c54a329b6c3c39c1abf) Special thanks to Zach for his help
    
    * [Web page folder](https://github.com/jaredwelch1/softwareEngFinalProj/tree/master/v2.0)

- [x] creating account (Andrew)

    * [Link to Code] (https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/v2.0/userregistration.php)

    * [Commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/dff0db003c33937c946ea60202a00ebdaef56426)

    * Can only register if logged in for now, will have to update later

- [x] account info page working (Andrew)

    Not able to complete before travelling for break. Move into sprint 4 backlog.

- [x] User forgot password page (Geoff)

   * [Link to Code](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/v2.0/userResetPW.php)

   * [Commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/a590273a19232f2913c9ddbd30733c19519aa262)

- [x] Fix styling, add Version 2 code to repo. 

    * [link to v2 code](https://github.com/jaredwelch1/softwareEngFinalProj/tree/master/v2.0)

    * [commit](https://github.com/jaredwelch1/softwareEngFinalProj/commit/f17e8a4869f493b0465e84c2d91ffad88707c4e5)

###Sprint 3 Backlog Tasks 

- [ ] Fix testing based on feedback from sprint 2