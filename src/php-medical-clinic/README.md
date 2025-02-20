# php-medical-clinic/php-medical-clinic/README.md

# PHP Medical Clinic

This project is a simple PHP application for managing clinical data. It allows users to input patient information and stores it in a MySQL database.

## Project Structure

```
php-medical-clinic
├── src
│   ├── create_database.php      # Contains a PHP function to create a MySQL database and table for clinical data.
│   ├── index.php                 # Main entry point for the application with a form for inputting patient data.
│   └── styles
│       └── styles.css           # CSS styles for the application.
├── config
│   └── db_config.php            # Database configuration settings.
├── .gitignore                    # Specifies files and directories to be ignored by version control.
└── README.md                     # Documentation for the project.
```

## Setup Instructions

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd php-medical-clinic
   ```

2. **Configure the database:**
   - Open `config/db_config.php` and update the database connection settings (host, username, password, database name).

3. **Create the database:**
   - Run the `src/create_database.php` file to create the MySQL database and the necessary table for storing clinical data.

4. **Access the application:**
   - Open `src/index.php` in your web browser to access the application.

## Usage Guidelines

- Fill out the form with patient data including Name, Age, Heart Rate, Blood Pressure, Diagnosis, and Prescription.
- Submit the form to save the data into the database.
- The application will handle the data insertion and display any relevant messages.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue for any suggestions or improvements.

## License

This project is licensed under the MIT License. See the LICENSE file for more details.