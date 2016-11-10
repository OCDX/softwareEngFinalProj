#Unit Testing

##Procedure

Tests need to occur whenever "big" changes happen to source code. Since "big" is subjective, tests should also be conducted the night before the end of any sprint/on a weekly basis (Sunday nights).

Tests related to the web application definitely need to occur every week, whereas tests on the database only need to occur whenever changes are made to the structure of the tables, which should be stable by the end of sprint 2. New SQL queries will have to be tested in the database environment before use in webpages, but this will occur on a need basis.

If any test should produce unexpected results, the entire group needs to be made aware of the issue via the #issues channel on Slack and the issues tab on github. The problem will be assigned to the person who has worked the most with the area raising the issue. 

-----------------------


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

As part of our testing workflow, we have manual tests which will be performed by those of us working on the software. However, to ensure as close to an accurate user test as possible, we will have those members who did not actively work on the function being tests perform user acceptance tests.

This serves the purpose of allowing a person less familiar with the code itself to test it, using their natural thought process and expectations of the software without having knowledge of the specific design will allow for more diverse viewpoints on the software and hopefully expose issues that otherwise would go unnoticed. 

Optionally, if we can find volunteers to perform user acceptance tests, they would be given a work flow, as generic as possible, as asked to use the software as they see reasonable. This will allow for a real user to interface with our software in a natural way and reveal any things that may not have been considered through the intial design and testing scenarious. 

Examples of such testing would include:

- Asking a user to perform a manifest download. Allowing them to download a manifest, test that they are able to do so, and see how the user feels about downloading a manifest. (i.e., are they able to easily figure out how to do it)

- Asking a user to search manifests based no a keyword, and testing that the results are consistent with the search entered. This will also similary test if a user is able to easily figure out how to use this feature

- All use cases should have such tests as these in order to ensure that we meet our requirements. 

##Verification/Validation

- Validation refers to ensuring that our requirements are met by the features of our software. This is accomplished through User Acceptance Testing. Refer to that section for information about how we plan to validate our software.

- Verification refers to ensuring that our software does what it is designed to do. While validation tests that we meet our requirements, verification tests that our software does what we intend it to do, separate from what the requirements ask. Of course, if we have validated our software, verification would ensure that the requirements we meet work correctly. The unit testing and testing suites will ensure we verify our software works. 


