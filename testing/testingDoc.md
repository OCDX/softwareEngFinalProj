Testing

##Procedure

Testing will need to occur at every stage of new features, and along with those features, tests should be made to test those things before they are added to the software. These tests will remain recorded to be retested when newer changes are added. 


###Database Tests
We need to:

- Test that we are able to insert new data into all tables.
  
    - Failure scenarious for test:
    
        - Insertion into User table does not have the required fields (ID, email, first_name, permission_level, last_name) 
        
        - Insertion into Manifest Table does not have all required fields (version, manifest_id, category, last_edit, data, ownerID, title, upload_date)
        
        - Failure if any of supplied data does not match a valid data type for that field (i.e., string for an integer data field)

- Test that we can select data from all tables

     - Failure cases for this test:
         
          - A valid selection on a test row that will exist for each table with expected test values does not return the expected test values. (i.e., we have a row for id 1 that we created with test data and when we query that test row we do not get the data we should)
             
- Ensure that foreign keys work properly. (Should be unable to assign a value that does not exist in the linked table.)

    - Failure case:
        
        - Successful creation of a row in a table that does not have a forgein key that matches an existing value; If we can create such a row then our foreign keys are not linked as intended so the test failes

- Test that files don't change upon being uploaded and then downloaded.

    - Failure case:
    
        - Flow for test: upload a file, then download the same file. If the two files do not match **exactly** test fails.
        
- Ensure that any sql scripts we need to run on the site works on the server first. (i.e. run any insert, update, delete, etc. statements directly in the database.)

    - Failure case:
    
      - If a query to an existing table does not return expected test data for that test, this test fails. Test queries will need to exist for each unit test that covers this functionality, with test data respective to the test query. If a test query returns invalid data, data that does not match exactly, or some other unexpected behavior other than successful returned data, the test fails.
      
###User Interface
We need to:

- Test buttons and links to make sure that they direct to the proper page
  
  - Workflow:
      
      - Must create a list of buttons and their expected function, then starting from the beginning of the list, all buttons must be tested for their functionaltiy. 

  - Failure case:
  
      - Button clicked does not lead to intended place; 

- Compare filled forms to actual database entry to make sure all fields populated correctly.

    - Failure:
    
       - Form filled out and successful upload occurs, but database does not properly reflect the data supplied by the user

- Ensure that admin functions and features can only be seen by admins.

    - Workflow:
    
        - List of admin privileges to reference, using a normal user account, test that those features are unavailable.

    - Failure:
    
        - A user that does not have admin privileges is allowed access to admin functionality.
        
        

###Data Entry

Our forms should:

- Be able to handle invalid data entry. (i.e. invalid data types, exceeds the length we can process, etc.)

  - Workflow:
  
      - User attempts to submit a form that is either not filled out completely OR filled out with improper data.
      
   - Failure:
   
      - Form is submitted without error message and without preventing an invalid submission
      
##Regression Testing Plan

In order to ensure that all new functionality does not invalidate previously working pieces of our software, we must implement regression testing. This refers to testing of old features in an organized way to ensure nothing has been broken by new additions.

The plan for our regression testing is as follows

- Following all new features being finished and integrated into the application, a series of both unit tests and manual workflow tests (such as clicking all buttons for example) will be conducted. All tests that are created during the work for that sprint, uplon successful completion of that function, will then be added to the already existing regression tests. By creating a specific suite of tests, and both adding and maintening those tests as we progress, we can esnure that previously tested functionality will be tested again at ever iteration of the application.

- Workflow: 

* Test login

* test search works and displays results

* test clicking a displayed manifest result leads user to that manifest page

* Test download and upload of manifest

* Test user account infor

##Integration Testing

Our plan for integration testing is to organize our tests by 3 main categories:

- User Interface

- Database and Data Access

- Controller testing (those features which send request from the front end to attempt to access back end data)

Those categories will allow us to organize our tests and testing procedure in a way that allows to to test the application in terms of its overall funcionality at a high level.

Within each larger group, we will divide up testing based upon sprints that the tests and features were written. An example would be as follows:

- User Interface:

    - Sprint 1 features
    
    - Sprint 2 features
    
    - Sprint 3 features
    
Further specifying testing groups within our larger classification will allow us to not only keep features and testing in an organized workflow, but also help us isolate where the feature was originally working chronologically to help us fix issues as they arise more effectively, by giving us a specific place to look for the original working version.

##User acceptance Testing

As part of our testing workflow, we have tests in place to ensure things are working as expected. However, when the product is finished by us, we will still need to verfiy the users of the software are satisfied with the work. The end user for our purpose will be those who will be using the Manifest sharing site. We will have them test the software and verify that it works for their needs

* We will list use cases and document how to access that funcionality. Then the end user will test the software live, attempting to use it to be all the use ca

* The system should be thoroughly tested, from creating a new user, logging in, creating a manifest, uploading files for that manifest, then searching for that manifest, then editing, then downloading. All of those should be possible for every new user, and verified working with the live testing. 

* Take feedback from the end user. If they are not satisfied, make the improvements required. If they are satisifed, but would like quality of life fixes for the next project version release, they will be noted for future development. 

##Unit Testing

We have a document, [linked here](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/testing/readme.md), that outlines our procedure and plans for unit tests. We will use unit tests to test our application on the smallest level on functionality. We will try to create unit tests for basic features, such as valid log in cases, valid queries, and other low level, single step functionaltiy such as those will be covered as best as we can by unit testing. Refer to the document for more specific details. 

##Edge Cases

Edge cases refer to those situations which only occur rarely, which may be hard to think of through the traditional manner of testing. Edge cases should test the boundaries of our application, trying to find as many weaknesses in the software which are due to mishandling some behavior that is traditionally not common in the work flow. In other words, edge case testing is important as it is designed to test the software outside of the obvious testing. Regression testing and integeration testing will not be exhaustive, and it is up to us to think of and test edge cases in our software.

Our plan for approaching test cases is to try our best to test the high end and low end of our functions and methods. If the extreme cases work, we can be reasonably confident that it will also cover those cases within the bounds of the upper and lower ends. A good similie is boundary conditions. We will try to found the furthest acceptable boundary, and test those boundaries, in order to try to cover all the edge case behavior as effectively as possible. 

##Verification/Validation

- Validation refers to ensuring that our requirements are met by the features of our software. This is accomplished through User Acceptance Testing. Ulimately, the end User is who we must go to for Validation of the software. Their feedback will determine whether we meet the end user's requirements.

- Verification refers to ensuring that our software does what it is designed to do. While validation tests that we meet our requirements, verification tests that our software does what we intend it to do, separate from what the requirements asked. This is covered by regression testing, integration testing, and unit testing. 

##Testing Procedure

- Login Testing

    * Test valid username/valid password
    
        - should result in successful login
        
    * Test valid username/invalid passwordt
    
        - should result in error message to user
        
    * Test invalid username, valid password
    
        - should result in error message to user
        
    * Test invalid username/invalid password
    
        - should result in error message to user
        
- Logout testing

    * Test logging out actually logs user out and ends session
    
        - logout, then attempt to go through pages. All should redirect to login, and not allow user to see content
        
- Account creation testing 

    * Test valid completion of account creation form and valid submission
    
        - should result in new account created, tested by logging in with it after account creation. 
        
    * Test invalid form completion, attempt submit, verify it fails and database doesn't get any new information
    
        - should result in error message to user, should also verify that database is unchanged 
        
    * Test 

