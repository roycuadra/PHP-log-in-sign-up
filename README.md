

# Log In and Sign Up System using 

![PHP](https://img.shields.io/badge/PHP-%3C%2F%3E-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-%3C%2F%3E-4479A1?logo=mysql&logoColor=white)


This is a simple log in and sign up system using PHP, designed to provide a basic authentication mechanism for web applications. It allows users to register for an account, log in with their credentials, and securely log out when they are done.

## Features
- User Registration: Users can register for a new account by providing a unique username and a password. Passwords are hashed using PHP's built-in password_hash function for enhanced security.
- User Login: Registered users can log in with their username and password. Passwords are verified using PHP's password_verify function to ensure correct credentials.
- Session Management: User authentication is managed using PHP sessions, which securely store user information across multiple pages of the website.
- Error Handling: Appropriate error messages are displayed to users for invalid inputs or failed authentication attempts, helping to enhance user experience and security.
- Secure Password Storage: Passwords are hashed and stored in the database using PHP's password_hash function, which provides industry-standard password hashing techniques for increased security.
- Database Interaction: User information is stored in a MySQL database, and the system uses prepared statements to protect against SQL injection attacks.
- Logout Functionality: Users can securely log out of their accounts, clearing their session data and protecting their information.

## Installation
1. Ensure that you have PHP and MySQL installed on your web server.
2. Clone or download the repository to your local development environment.
3. Create a new MySQL database and import the included "users.sql" file to create the necessary table structure.
4. Update the "config.php" file with your MySQL database credentials.
5. Upload the files to your web server or run the application locally using a local development environment like XAMPP or WAMP.
6. Access the "index.php" file in your web browser to start using the log in and sign up system.

## Usage
- Register: On the homepage, click the "Sign Up" link to access the registration page. Provide a unique username and password, and click the "Sign Up" button to register for a new account.
- Log In: After registration, you can log in with your username and password on the homepage. If the credentials are valid, you will be redirected to the welcome page.
- Logout: To securely log out of your account, simply click the "Log Out" link on the welcome page or any other authenticated page. This will clear your session data and log you out of the system.

## Contributing
If you would like to contribute to this project, feel free to fork the repository and submit a pull request with your changes. We welcome contributions to improve the security, functionality, and usability of this log in and sign up system.

## License
This project is released under the [MIT License](LICENSE), which allows for free use, modification, and distribution, subject to the terms and conditions outlined in the license file.

## Credits
This log in and sign up system was created by Roy Cuadra and is based on PHP and MySQL. It uses industry-standard password hashing techniques, error handling, and session management to provide a basic authentication mechanism for web applications.
