# IT-Ausleihe
A web application for managing the borrowing of materials from IT support.

## Genesis
Since the IT department of the Eckener-Schule in Flensburg provides equipment for teachers and students, a kind of organization is necessary. 
Since there is more and more equipment and it is not well documented who is lending devices, a new project was born.

## How to borrow a device
1 A teacher or student goes to the IT department and asks if he/she can borrow a device.

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
In the directory "config", the file "example.php" needs to be renamed to "config.php" and edited. 
This file must contain the access data for the database. 
Finally the database must be maintained.  

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
