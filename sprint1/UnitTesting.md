#Unit Testing

##Procedure

Tests need to occur whenever "big" changes happen to source code. Since "big" is subjective, tests should also be conducted the night before the end of any sprint/on a weekly basis (Sunday nights).

Tests related to the web application definitely need to occur every week, whereas tests on the database only need to occur whenever changes are made to the structure of the tables, which should be stable by the end of sprint 2. New SQL queries will have to be tested in the database environment before use in webpages, but this will occur on a need basis.

If any test should produce unexpected results, the entire group needs to be made aware of the issue via the #issues channel on Slack and the issues tab on github. The problem will be assigned to the person who has worked the most with the area raising the issue. 

-----------------------


###Database Tests
We need to:

- Test that we are able to insert new data into all tables.
- Test that we can select data from all tables
- Ensure that foreign keys work properly. (Should be unable to assign a value that does not exist in the linked table.)
- Test that files don't change upon being uploaded and then downloaded.
- Ensure that any sql scripts we need to run on the site works on the server first. (i.e. run any insert, update, delete, etc. statements directly in the database.)

###User Interface
We need to:

- Test buttons and links to make sure that they direct to the proper page
- Compare filled forms to actual database entry to make sure all fields populated correctly.
- Ensure that admin functions and features can only be seen by admins.

###Data Entry
Our forms should:

- Be able to handle invalid data entry. (i.e. invalid data types, exceeds the length we can process, etc.)
- Properly handle blank fields, whether by returning an error, or inputting default data.

###General Testing
We need to check:

- If a user can url hack to a page he shouldn't be able to get into. (Maybe he's not logged in or is trying to see admin features.)
