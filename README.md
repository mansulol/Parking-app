Here's the `README.md` for your Parking Management App in English:

---

# Parking Management App

A web application for managing parkings, created with Laravel. This app allows users to create, view, update, and delete parking records, including the ability to upload and update images stored in Base64 format.

## Table of Contents

- [Parking Management App](#parking-management-app)
  - [Table of Contents](#table-of-contents)
  - [Features](#features)
  - [Technologies Used](#technologies-used)
  - [Requirements](#requirements)
  - [Installation](#installation)
  - [Configuration](#configuration)
  - [Usage](#usage)
  - [Project Structure](#project-structure)
  - [Contributing](#contributing)
  - [License](#license)

## Features

- **CRUD Operations for Parkings**: Create, view, update, and delete parking records.
- **Image Management**: Upload and update parking images, stored in the database as Base64.
- **User-Friendly Interface**: Clean and easy-to-use UI with a responsive design.

## Technologies Used

- **Backend**: Laravel 9.x
- **Frontend**: HTML, CSS, Bootstrap 5.x
- **Database**: MySQL
- **ORM**: Eloquent (Laravel)
- **Dependencies**: jQuery, Bootstrap, Laravel Mix

## Requirements

- PHP >= 8.0
- Composer
- MySQL
- PHP Extensions: `fileinfo`, `mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`
- Node.js and npm (for compiling CSS/JS files using Laravel Mix)

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/mansulol/Lomotor-V2.git
    cd Lomotor-V2
    ```

2. Install Composer dependencies:
    ```bash
    composer install
    ```

3. Install npm dependencies:
    ```bash
    npm install
    ```

4. Compile the assets:
    ```bash
    npm run dev
    ```

5. Set up your `.env` file:
    ```bash
    cp .env.example .env
    ```

6. Generate the application key:
    ```bash
    php artisan key:generate
    ```

7. Configure the database in the `.env` file:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

8. Run database migrations:
    ```bash
    php artisan migrate
    ```

## Configuration

- Make sure to enable the `fileinfo` PHP extension.
- Images are stored in the `picture` column of the `cars` table as Base64 encoded strings.

## Usage

1. **Home**:
   - Access the main page to view the list of parkings.
2. **Create a New Parking**:
   - Go to the "Create Parking" section to add a new parking record. Optionally upload an image.
3. **Update a Parking**:
   - Select a record from the list to update its information. You can update the image by uploading a new one.
4. **Delete a Parking**:
   - Click the delete button to remove a record from the list.

## Project Structure

```plaintext
Lomotor-V2/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── CarsController.php
│   └── Models/
│       └── Cars.php
│
├── resources/
│   └── views/
│       ├── cars/
│       │   ├── create.blade.php
│       │   ├── edit.blade.php
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       └── layouts/
│           └── app.blade.php
│
├── public/
│   ├── css/
│   └── js/
│
├── routes/
│   └── web.php
│
├── database/
│   └── migrations/
│
├── .env
├── composer.json
└── package.json
```

## Contributing

Contributions are welcome! Feel free to submit pull requests or open issues with suggestions for improvements.

1. Fork the project.
2. Create a branch for your feature (`git checkout -b feature/new-feature`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push your branch (`git push origin feature/new-feature`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

This `README.md` provides a clear and comprehensive guide to your app, along with instructions on how to install and use the project. Feel free to modify it as needed to suit your specific implementation.
