# IT-Ausleihe
A web application for managing the borrowing of materials from IT support.

## Genesis
Since the IT department of the Eckener-Schule in Flensburg provides equipment for teachers and students, a kind of organization is necessary. 
Since there is more and more equipment and it is not well documented who is lending devices, a new project was born.

## How to borrow a device
1. A teacher or student goes to the IT department and asks if he/she can borrow a device.

2. A member of the IT department opens the main page of the project and can immediately see which devices are available.

3. To lend a device, the user clicks the button "Ausleihen" (to lend) on the UI.

4. The user will be prompted to fill in some basic information such as name, class, teacher, device ID and loan time.

5. The student or teacher can then take the device and borrow it for the specified period.

6. At the end of the loan period, the teacher or student returns the device to it support. A member of the IT department can then use the botton "Rücknahme" (to take back) on the UI of the project's main page and only needs to enter the device ID.

## Requirements
Since the project is programmed in PHP and the data is stored in a MySQL database, a server is ideal to host it.  
The server requires git for updates of the project, PHP, MySQL and a web server.  
Since there is no user authentication yet, it is necessary to set up BASICAuth via .htaccess and .htpasswd.  

## Installation
Once the requirements are met, continue with the following steps.

First the project is presented under [https://github.com/Eckener-Schule/it-ausleihe/](https://github.com/Eckener-Schule/it-ausleihe/) in the desired target directory (Git must be installed).
```Bash
$ git clone https://github.com/Eckener-Schule/it-ausleihe.git
```
The scheme of the database is then imported. 
A database has to be created: CREATE DATABASE `it-ausleihe`;  
In the directory "config", the file "config.php.dist" needs to be renamed to "config.php".  
This file is needed to create the database connection.  
Next create the tables: use the SQL-script which can be found in the directory "install".  
USE it-ausleihe to run the script on the right database then import the SQL-script.  
Create a user for the database with the same name as that from the config.php file.  
If you are a developer, then you have the option to import some test data. Look into the "docs\test data" directory. 

## Require classes
The _autoload.php file require all classes.

## Main classes
We created five classes which build our basic structure.
They called: "Borrower", "Cart", "Device", "Loan", "Database".

## Connection to the database
How to connect to the database can be look up into the folder "classes".
Here is an class "database".
This class have a constructor which creates the database connection by execute a query with prepared statements.

The data which are needed to connect have to set into the config.php.dist file.
Like databasename, user, password and the host. After define your db credentials, remove the ".dist".

## Control of the database
We control the access to the databse with an abstract class called "ActiveRecord".  
So we want to modify some data, the ActiveRecord class will manage it (save(), delete(), insert(),update()).  
This class is created by the singelton pattern.  
It can be find into the folder "classes".

## Structure
For a better understanding of the databasestructur, we created an ER-Modell.  
Furtheremore we created a class-diagram based on the UML notation.  
This can be finding into the folder "docs".  
There you also can find the sql-script which created the database.

## Design
The webpage is designed by "Bootstrap" and "Fontawesome". The code and icons can be find into the "public\assets" folder.

## Templates
There are templates in the "view" directory for "footer", "header" and the "navbar".
Furthermore there is a folder "modal". There are the templates for adding, delete, admin or a history of a device or a cart.

## Authors
Maximilian Lembke  
Rouven Klomfaß  
Jan-Philip Link  
Laura Wiegand  
Leon Vagnoni  
Marcel Möller  
Cedric Fleiter  
Tobias Lang  
Jacob Prütz  
Tim Ermecke  
Daniel Volquardsen  
