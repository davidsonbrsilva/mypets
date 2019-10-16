# Mypets
Mypets is a simple social network and e-commerce for pet shops.

## Pre-requisites

### Technologies
- PHP version 7.0.0 or above. Checked with version 7.3.7;
- A Database Management System (DMS). We used MySQL by default;
- Composer Package Manager (we used version 1.9.0);
- REST client to test API routes (we recommend Insomnia);

### Setup
- Create a empty database called `mypets` through your DMS;

## Installation
- Clone this repository;
- Browse to the project root folder;
- Open the `.env` file in your text editor to input your database configurations. The default values are:

  ```
  DB_CONNECTION: mysql
  DB_USERNAME: root
  DB_PASSWORD: 123456
  ```
  
- Open your terminal in root folder and type the follow commands:

  - `php artisan migrate`.  
     This creates the project tables in database);
     
  - `php artisan db:seed` (optional).  
     This creates random data to feed the database.
     
  - `php artisan serve`.  
     This start the development server to listen our requests in specified ip and port (localhost:8000 by default).
     
## Usage
Open your REST client. We recommend Insomnia, but feel free to choose yours. Send requests as per API specification to retrieve data in JSON format.

## Support
Send an email to <davidsonbruno@outlook.com>.

## Roadmap
- We intend create the visual concept of this app soon.

## License
This project is guarded by MIT License.
