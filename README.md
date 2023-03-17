# Web Application of IoT Devices Project
Website and database codes for the capstone project (2015).

## WEBSITE: 
- account.php: this is where we submit the detected IP address and where we RENAME the network. 
- ipserver.php: this is the BRIDGE that we use to connect to the database. 
- errors.php: where the errors would be counted and then displayed on the website.
- main_style.css: style of the website.

## DATABASE: 
users.sql: this is where the information would be saved

1. All the files must be in the htdocs of XAMPP
2. Use XAMPP to connect to the server. (Start Apache and MySQL)
3. Go to localhost:
4. Click phpMyAdmin
5. Create 'registration' database then import users.sql table.

NOTE: The IP address is not saving on the database. Still working on the php script for this.
Though, the data entered from the login/create account forms are going into the database.
