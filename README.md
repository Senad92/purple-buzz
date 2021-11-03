### Purple Buzz theme demo project with Wordpress

##### Short project description
The goal of this demo project is a short simulation of integrating Wordpress with this bootstrap theme. This primarily includes integrating index.html and about.html. 

### Requirements
- PHP version 7.3+
- XAMPP Control Panel

### Installation
Clone GitHub repo locally (if using XAMPP that should be in your xampp-->htdocs folder)

	 git clone https://github.com/Senad92/purple-buzz.git

Open the folder

	In your database folder (located in purple-buzz) upload the database to your local phpmyadmin
  In the wp-config.php file, add your database information to allow Wordpress to connect to the database (e.g.):
  
	DB_HOST=localhost
	DB_DATABASE=purple_buzz_db2021
	DB_USERNAME=root
	DB_PASSWORD=

Theme should now be running. URL for this particular setup: http://localhost/purple-buzz/

Login information are included in the database folder. When logged, you can create your own user.

Navigate to Pages > All pages in your admin panel and customize to taste.
