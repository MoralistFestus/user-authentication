
# User Authentication System
A simple user authentication system with input validation and Email verification feature. Made with PHP and SQL.
User authentication is a standard security mechanism, It allows identified users to access any digital application or website. It strictly prevents unidentified users from accessing web or mobile application


## Features
Features include:
- Signin and Signup forms with Bootstrap 4
- MySQL database connection with PHP 7 project
- User data management in session
- PHP server-side validation
- Handling error messages
- Sending user verification email using SwiftMailer plugin
- Securing a password with the password hash mechanism
- Password verification
- URL redirection based on user’s logged-in state
- Display logged-in user’s data using PHP 7 session
- Logout and destroying the session

## File structure
How project is been structured:
- `config/db.php`: Contains function for database connection
- `controllers/login.php`: Contains function for login authentication
- `controllers/register.php`: Contains function for Signup authentication
- `controllers/user_activation.php`: Contains function for user email authentication
- `css/style.css`: Minimal style
- `css/bootstrap.min.css`: Bootstrap library styles
- `js/bootstrap.min.js`: Bootstrap JS lib
- `js/jquery.min.js`: Jquery JS lib
- `lib`: Contains 3rd party library
- `dashboard.php`: Display user info after verification
- `db.sql`: SQL command
- `index.php`: Login form page
- `logout.php`: User logout command
- `signup.php`: Sign up form page
- `user_verification.php`: Display user account was successfully verified. 





## 3rd party library
SwiftMailer PHP library was used here in this project for user email verification after
sign up. 

Install the SwiftMailer php plugin to send the verification mail to the user, i used the following composer command to install the SwiftMailer library. Make sure you have composer installed on your development machine.

```
composer require "swiftmailer/swiftmailer:^6.0"
Bash
```

You need to import the SwiftMailer library and add the SwiftMailer script also define the email template that will be sent to the user.

Or alternatively, I have zipped up the SwiftMailer library. Check the `lib` folder and extract the `lib.zip` file.

## installation

Make sure you're running a local server on your computer system. Use XAMP or WAMP.

- Clone the repo
- Unzip inside the htdocs or www directory
- Create a database and name it `userauth` or you can decide to edit the `config/db.php` file to specify
your database information.
- import the db.sql file in the database
- Run the project. I use `localhost:8080/php-user-authentication`


You can modify this project to your need since it is open source.

Star 🌟 if you love this project and follow. 🚀
