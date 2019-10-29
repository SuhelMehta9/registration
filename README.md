# registration
User login and registration system using mysql as database and speech recognition.

# Installation

### Clone project
> git clone https://github.com/SuhelMehta9/registration.git

### Move it to document root of apache
> sudo mv registration /var/www/html

### Prepare database
Make a database with any name and provide its name in config.php and other database credential
``` bash
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
---
# How to use
Now just run apache and open browser and type
> http://localhost/registration

#### You must register yourself by clicking on `sign up` or by typing in browser
> http://localhost/registration/register/register.php
