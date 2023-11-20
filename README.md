# Account Balance Service

## Introduction

This mini-project demonstrates the implementation of a simple account balance service using PHP and MySQL. It allows users to retrieve the account balance for a specified account ID.

## Project Structure

The project consists of two main PHP files:

- `AccountBalanceService.php`: This file defines the `AccountBalanceService` class, which encapsulates the logic for retrieving account balances from a MySQL database.

- `server.php`: This file handles incoming requests, parses the request body to extract the account ID, creates an instance of the `AccountBalanceService`, retrieves the account balance, and responds with the balance in JSON format.

## Usage

To run the project, follow these steps:

1. **Install PHP:** Ensure PHP is installed on your server. You can download PHP from the official website ([https://www.php.net/downloads.php](https://www.php.net/downloads.php)) and follow the installation instructions for your operating system.

2. **Place the code files:** Save the `AccountBalanceService.php` and `server.php` files in a directory accessible to your web server. For example, you can place them in the `/var/www/html` directory on a Linux server.

3. **Create a web server configuration:** Create a web server configuration file (e.g., `.htaccess` or an Apache virtual host configuration file) to map the `/server.php` URL to the `server.php` file. This will allow you to access the server code through your web browser.

4. **Run the web server:** Start your web server to make it process incoming requests. The specific commands for starting the web server depend on your operating system and web server software.

5. **Send POST requests:** Once the web server is running, you can send POST requests to the `/server.php` endpoint to retrieve account balances. You can use tools like cURL or Postman to send these requests. For example, the following cURL command will send a POST request with an account ID of 12345:
