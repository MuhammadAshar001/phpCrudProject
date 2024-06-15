# User Management System

This project is a simple User Management System built using PHP and MySQL. It allows users to add, update, and delete user information, including uploading a profile picture.

## Features

- Add new users with name, email, mobile number, password, and profile picture.
- View a list of users with their details.
- Update user information.
- Delete users.
- Display profile pictures in the user list.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/xyz.git
    ```

2. Navigate to the project directory:

    ```bash
    cd xyz
    ```

3. Set up the database:

    - Create a database named `crud` in phpMyAdmin.
    - create `crudoperations` table in phpMyAdmin.

4. Update the database connection settings in `connect.php`:

    ```php
    <?php
    $con = mysqli_connect("localhost", "your_username", "your_password", "user_management");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    ```

5. Make sure you have a folder named `Pictures` in the project directory to store uploaded profile pictures.

## Usage

1. Start your local server (e.g., XAMPP, WAMP).

2. Open your browser and go to:

    ```bash
    http://localhost/xyz
    ```

3. Add, update, or delete users using the interface provided.

## File Structure

- `connect.php`: Handles database connection.
- `user.php`: Handles the form submission for adding new users.
- `display.php`: Displays the list of users.
- `update.php`: Handles updating user information.
- `delete.php`: Handles deleting users.
- `Pictures/`: Directory to store uploaded profile pictures.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contributing

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/fooBar`).
3. Commit your changes (`git commit -am 'Add some fooBar'`).
4. Push to the branch (`git push origin feature/fooBar`).
5. Create a new Pull Request.

## Acknowledgements

- [Bootstrap](https://getbootstrap.com/) - for the CSS framework.
- [Font Awesome](https://fontawesome.com/) - for icons.

---

Feel free to contribute to this project by submitting issues or pull requests!
