# Mypets

![Status](https://img.shields.io/badge/status-deprecated-red)

[Ver em Português](README.pt-br.md)

Mypets is a simple social network and e-commerce for pet shops.

## Requirements

### Technologies

- [PHP](https://www.php.net/downloads.php) version 7.0.0 or above. Checked with [version 7.3.7](https://www.php.net/releases/);
- A Database Management System (DMS). We used [MySQL](https://dev.mysql.com/downloads/installer/) by default;
- [Composer](https://getcomposer.org/download/) Package Manager (we used version 1.9.0);
- REST client to test API routes (we recommend [Insomnia](https://insomnia.rest/download/));

### Setup

- Create a empty database called `mypets` through your DMS;

## Installation

- Clone this repository;
- Browse to the project root folder;
- Duplicate the `.env.example` file and rename it to `.env`; 
- Open the `.env` file in your text editor to input your database configuration. The default values are:

  ```
  DB_CONNECTION: mysql
  DB_USERNAME: root
  DB_PASSWORD: 
  ```
  
- Open your terminal in root folder and type the follow commands:

  - `composer install`.  
     This install all dependecies of the application;
     
  - `composer dump-autoload`.  
     This loading the autoload of the application;

  - `php artisan key:generate`.  
     This generates a key for the application;

  - `php artisan migrate`.  
     This creates the project tables in database;
     
  - `php artisan db:seed` (optional).  
     This creates random data to feed the database.
     
  - `php artisan serve`.  
     This starts the development server to listen our requests in specified ip and port (localhost:8000 by default).
     
##### Note:

If you get the error
```
'Could not scan for classes inside "database/factories" which does not appear to be a file nor a folder'
```
creates 'factories' in 'database' folder.

## Usage
- Open your REST client. We recommend Insomnia, but feel free to choose yours.
- Send requests as per [API specification](https://github.com/davidsonbrsilva/mypets/wiki/Api) to retrieve data in JSON format.

## Support

See our [Wiki](https://github.com/davidsonbrsilva/mypets/wiki).

## Contact

Send an email to <davidsonbruno@outlook.com>.

## License

This project is guarded by [MIT License](LICENSE.md).
