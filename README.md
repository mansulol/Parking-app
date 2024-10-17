# Parking Management App
---
A web application for managing parkings, created with Laravel. This app allows users to create, view, update, and delete parking records, including the ability to upload and update images stored in Base64 format and show the ubication of the car in a map using LeafletJS.

![Img app](/public/images/app.png)

## Features 💫

- **CRUD Operations for Parkings**: Create, view, update, and delete parking records.
- **Image Management**: Upload and update parking images, stored in the database as Base64.
- **User-Friendly Interface**: Clean and easy-to-use UI with a responsive design.

## Technologies 👨🏾‍💻

- **Backend**: Laravel 11, PHP 8
![Static Badge](https://img.shields.io/badge/LARAVEL-FF0000?style=for-the-badge&logo=laravel&logoColor=laravel&labelColor=black)
![Static Badge](https://img.shields.io/badge/PHP-595c87?style=for-the-badge&logo=php&logoColor=laravel&labelColor=black)
  
- **Frontend**: HTML5, CSS, JS
![Static Badge](https://img.shields.io/badge/HTML5-F80?style=for-the-badge&logo=html5&logoColor=F80&labelColor=black)
![Static Badge](https://img.shields.io/badge/CSS-0000FF?style=for-the-badge&logo=css3&logoColor=blue&labelColor=black)
![Static Badge](https://img.shields.io/badge/javascript-f7df1e?style=for-the-badge&logo=javascript&logoColor=dark&labelColor=black)

- **Database**: MySQL
![Static Badge](https://img.shields.io/badge/MYSQL-C7A20F?style=for-the-badge&logo=mysql&logoColor=yellow&labelColor=black)
  
- **ORM**: Eloquent (Laravel)
![Static Badge](https://img.shields.io/badge/ELOQUENT-FF0000?style=for-the-badge&logo=laravel&logoColor=laravel&labelColor=black)

- **Dependencies**: Bootstrap, Leaflet. Node Js
![Static Badge](https://img.shields.io/badge/BOOTSTRAP-7952b3?style=for-the-badge&logo=bootstrap&logoColor=dark&labelColor=black)
![Static Badge](https://img.shields.io/badge/LEAFLET-ofo?style=for-the-badge&logo=leaflet&logoColor=0f0&labelColor=black)
![Static Badge](https://img.shields.io/badge/NODE_JS-5fa04e?style=for-the-badge&logo=node.js&logoColor=5fa04e&labelColor=black&color=5fa04e)


## Installation ⚙️

1. Clone the repository:
    ```bash
    git clone git@github.com:mansulol/Parking-app.git
    cd Parking-app
    ```

2. Install Composer dependencies:
    ```bash
    composer require laravel/installer
    ```

3. Install npm dependencies:
    ```bash
    npm install
    ```

4. Configure the database in the `.env` file:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. Run database migrations:
    ```bash
    php artisan migrate
    ```

6. Test with database seeds
   ```bash
    php artisan db:seed --class=CarsTableSeeder
    
    php artisan db:seed --class=UbicationsTableSeeder
    ```

## Usage 🕹️

1. **Home**:
   - Access the main page to view the list of parkings.
2. **Create a New Parking**:
   - Go to the "Create Parking" section to add a new parking record. Optionally upload an image.
3. **Update a Parking**:
   - Select a record from the list to update its information. You can update the image by uploading a new one.
4. **Delete a Parking**:
   - Click the delete button to remove a record from the list.
5. **Car info**
    - Click in the card/img card to get the info of the car and its location

## Author ✒️

- **Mansour**

## Licencia 📄

No license

## Thanks 🎁

- Thanks to my teacher [Tiburcio](https://github.com/tcrurav) for this experience
- Thanks to all my classmate
- Thanks to [Villanuevand](https://github.com/Villanuevand) for the template of this readme

---
⌨️ with ❤️ by Mansour
