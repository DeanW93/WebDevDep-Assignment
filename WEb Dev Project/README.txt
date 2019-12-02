Project README Documentation 
----------------------------------------------------------------------------------------------------------
DEPLOYMENT 
----------------------------------------------------------------------------------------------------------
To use the website all  that has to be done is making sure that xammp Mysql and Apache is turned on.
The files generate a new database called "project" and populates with the tables and entries 
used automatically. The connection username and password used are the default once 
that are used in xammp so username being localhost and password being root. The database 
name used is "project" so the databases will either be automatically created or 
the tables and inserts will be put into one that already exists under that name. 
So overall the website generates the database and tables and also populates them automatically 
meaning that it will create a product and a user table and then also a table for every user.


When deploying the website make sure to put all the files in a directory at
C:\xampp\htdocs or where ever your xaamp htdocs folder is located  and then
To access the website simply just type in localhost/ and then the name of the directory 
where u have put the website files.
----------------------------------------------------------------------------------------------------------
FILE BRAKE DOWN 
----------------------------------------------------------------------------------------------------------
the website consits of 15 PHP Files the main files that the user actually sees being 

index.php - Main page of the website (the first website the user sees ) 
info.php - Its the page that gets loaded when the user goes into My Account
cart.php - It is the page that gets loaded when the user goes into my shopping cart 

The rest of the following php files were used for functionality purposes 

action.php - This php file gets the data that was past through ajax ( the data being 
the box thats currently ticked) and returns query display based on the box thats ticked
so if microsoft is ticked it will only display microsoft product if its microsoft and sony
it will display both microsoft and sony ... etc 

add.php - The php file used to create a table name for each user that named after their user name
and store what ever items that have chosen to add to their cart.

cart.php - displays from a tables that created by the users username which contains products
they have added to the cart

checkuser.php - this php file checks if the username of the person trying to log in exists
on the system by searching through the user table 

connect.php - file used as a require in other files to establish a connection 

delete.php - file used to delete entries from users shopping cart 

deleteprofile.php - file used to delete profile from the system 

edit.php - file used to edit users details that they have entred into the system 
i e their address name etc .. 

fetch.php - file used for the live search mechanic 

index.php - main page that displays products to the user. allows user to log in /create account 
and log out. The user can also search for specific products by either using live search 
or ticking the boxes on the side and specifying categories they want to search for.

info.php - file used to display user information and let them change their profile picture . Also
links to the delete.php and edit.php when the user decides to either delete profile or edit 
information 

logout.php - file used when the user presses log out to re initialise the seession variable 
used to check if their logged in to '' meaning to user is logged in

newuser.php- creates a user table if dosnt exists and inputs information of a new user into that table

prepare.php - used for prepared sql statements to prevent sql injection, creates the table that stores
products and inserts entries into the table

upload.php - file used for the upload profile picture mechanics where the user changes their profile pic 
entry in the database and also displays their profile pic back to them

we have an attemp at MVC but its not functional so its just to show we attempted 

----------------------------------------------------------------------------------------------------------
REFERENCES 
----------------------------------------------------------------------------------------------------------

The main recourses used for making of the website come from the following sources 

www.webslesson.info
www.w3schools.com
www.getbootstrap.com/docs/4.3/getting-started/introduction/

And for some more specific functions. 

live search - https://www.webslesson.info/2016/03/ajax-live-data-search-using-jquery-php-mysql.html

ajax advance search - https://www.youtube.com/watch?v=6UfPmrD4VWI&list=PL6u82dzQtlfv3dm_duiZUbXkiFigoMaft&index=3&t=0s

 
