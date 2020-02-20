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
A database has to be created: CREATE DATABASE 'IT-Ausleihe';
In the directory "config", the file "config.php.dist" needs to be renamed to "config.php".
This file is needed to create the database connection.
Next create the tables: use the SQL-script which can be find in the directory "install".
USE it-ausleihe to run the script on the right database then import the SQL-script.

## Class dependencies
The _autoload.php file loads all class dependencies.

## Main classes
The basic structure consists of five different classes to handle all functionalities.
They are called: "Borrower", "Cart", "Device", "Loan" and "Database".

## Connection to the database
How to connect to the database can be inferred in the file "classes\database.php".
This class has a constructor which creates the database connection by executing a query with prepared statements.

The user data needed to connect has been provided in the "config.php.dist" file.
Required are "databasename", "user", "password" and "host". After defining your database credentials, remove the ".dist".

## Control of the database
We control the access to the databse with an abstract class called "ActiveRecord".
If we want to modify some data, the ActiveRecord class will manage all db operations (like save(), delete(), insert(),update()).
This behavior is consistent with the singelton pattern.
The file can be found under "classes\ActiveRecord.php".

## Structure
For a better understanding of the database structure, we created an updated ER-Model.
Further documentation has been created using a class-diagram based on the UML notation.
All relevant documentation can be found in the folder "docs".
There you also can find the sql-script which creates the database.

## Design
The webpage design has originally been craeted using "Bootstrap".
Later, the "Fontawesome" framework was implemented to improve visualization further.
The code and icons can be find into the "public/assets" folder.

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
