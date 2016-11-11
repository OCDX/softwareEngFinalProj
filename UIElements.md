#UI Elements

##Login Page
  The login page is pretty straight forward, with the only major elements being the username and password text boxes and then the login button itself. Entering correct information should direct the user to their user info page. After that, there is the register button, so users can create an account.
  
##User Registration
  If the user doesn't have a login already, the user is instructed to register on the login page. That redirects to the register page, where the user is propmpted to enter thier information to create an account.
  
##Side Navigation Bar
  All of the pages other than the login and registration pages have a side bar in commom for navigation. The top of the side bar has a search box and corresponding button. After that is the user account button. It links to the user info page. Then there is the manifest editor button, which goes to the page where the user can create new maifests and edit the manifests that they have made. Finally, there is a logout button, which destroys the session that is created upon login and then redirects to the login page.

##[User Info](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/webPages/userInfo.php)
  The main UI element on the user info page is the table where all of the manifests that have been created by the user are displayed in a scroll box. The user can look through their own mainfests without having to search through the whole database. 

##[Search](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/webPages/search.php)
  Search has a main search box at the top of the page. This includes a text box for a search term, radio buttons to specify which type of term they are searching through, like titles or categories, and the ever important submit button for the user to submit their query.
  
##[View](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/webPages/view.php)
  View is designed to view all of the elements specific to a manifest. Not much UI is intended to be on this page outside of basic browsing needs, such as scrolling down the manifest to view more of it.

##[Create Edit](https://github.com/jaredwelch1/softwareEngFinalProj/blob/master/webPages/create-edit.php)

  This page will have two main buttons, the create button and the edit button. Each button is intended to display a different form for each. The create button will give all blank fields for the user to create a new manifest. This includes the title, version, category, keywords, a brief description, the scripts, and then the dataset. The edit button will bring up a search for the manifests that are owned by the user. Upon selection, the fields will become editable. The user can upload a new set of files as well.
    *This is subject to change to match the database should the database change.
