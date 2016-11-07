#Page design plans

##General page features:
* Other than the initial log in page, all pages will have a header that will have buttons for logging out and viewing account information
* All pages will be titled and styled in a consistent way (in other words, overall theme will be the same for each page, including colors and fonts, etc)
* A side bar will also be included in each page, with additional features that are desired to be included page to page. 

##Individual Pages

###Create/Edit 

This page will be designed to allow easy updates and edits to an existing manifest, and will also be used as the starting page for creating and uploading a new manifest. The reason they are considered the same page for the purpose of our design is that if you choose to upload a new manifest, you would be redirected to edit a blank manifest so to speak, so the functionality would be the same. 
Unique buttons included: 

* Update existing/Save
	
	This button will allow a user to save their changes to the manifest they are editing (saving new changes would be the same as saving changes to an existing one, as upon creating a new manifest, it would be implied that you are now adding changes to an existing manifest that has no content, more details to be worked out probably upon actual implementation)

###Basic login page/Home page

This page will be used to prompt a user for log in before allowing them to continue on to viewing and editing manifests. We are still considering whether any further access to the site will be allowed without any login. It is possible viewing other may be possible without an account if that feature seems important, but for now, all users must log in before accessing the other pages. 

Will simply have a field for username and password, and a login button to press when those fields are completed. Error messages for blank fields to prevent calls to the back end without sufficient data to be sent. 

Unique Buttons Included:

**As stated, this page will not include the side bar and header that other pages will include, as it is the portal to the rest of the site, so some functionality should not be included, as dictated by our design.**

* Log In: when required fields have been completed, this button will be pressed to authenticate a user and check their given credentials. Pressing enter with completed fields should yield the same results as pressing this button. 

* Create account
	
	When pressed, either redirect or display page for a user to create an account. Account creation has not been decided if it will be a separate page, or a simple pop up or display for a user. An admin code can optionally be supplied, and if code is correct, created account will have admin status. 

###Search/Browse Manifests

This page will be dedicated to finding a specific manifest of the users choice. It is possible that all manifests will be displayed as a default, sorted by name, before any user interaction with page. However, this detail will be more important when implementation begins, so this may change. A user will have the ability to search available manifests by keyword.

The unique elements of the page will include a search bar, with buttons related to submitting a search and sorting results. The sorting functionality is secondary and may not be included depending on time constraints for the project. After a search for sure, and possibly before any searches have been made, manifests will be displayed in a table format showing a preview of information related to that manifest, including but not limited to, name, author, and date of last change. Clicking on a manifest table entry will take a user to a view page of that manifest. 

Unique buttons

* Submit 
	
	will call functionality to narrow displayed results based on keyword(s) given in search bar. searches without submitted keywords will simply display all results without any filtering. 
* Sorting buttons (**OPTIONAL**)
	
	Even we so choose, these buttons will allow user control of how displayed manifests are sorted, name, date, author(s), etc

###User Manifests/Author manifests 

This page will be dedicated to viewing all manifests tied to that users account (tied to an account would be based on authorship).

**OPTIONAL** might eventually create ability to favorite certain manifests for easy access, regardless of authorship. This is a secondary feature.

The page will consist of a table view of all manifests, similar to the browse page. Each entry will also be a redirect to a view of said manifest. 

Unique buttons:

* Other than title being a clickable item, no other unique buttons at present. 

###Manifest View

This page will be the default for viewing a manifest in more detail. Buttons for editing the manifest and viewing the authors list of manifests will be included in this view. 

Unique Buttons:

* Edit manifest
	
	Button that will redirect user to edit page for that manifest 

###User Account Information

This page will allow user to update their account information. For the scope of this project, this will only include changing their password if they desire, and adding a first and last name. Page will display current username and not much else. If time allows, will have more information unique to that user such as email, birthday, etc. 

Unique Buttons

* Change password

	clicking will create pop up or redirect to allow user to confirm their existing password and supply a new one if old password is correct. 
