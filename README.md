
# Project Structure

\-- php-user-authentication
  |-- config
      |--- db.php
  |-- controllers
      |--- login.php
      |--- register.php
      |--- user_activation.php
  |-- css
      |--- style.css
  |-- lib
      |--- 3rd party plugins
  |-- dashboard.php
  |-- index.php
  |-- logout.php
  |-- signup.php
  |-- user_verification.php
 

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