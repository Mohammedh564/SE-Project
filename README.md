# Library Management System Project Structure

This is the folder structure for the **Library Management System** MVC-based web application. Below is an explanation of each folder and file in the project:

---

## **Root Directory**
- **`README.md`**  
  This file. It contains the project's description, setup instructions, and additional details.
  
- **`.gitignore`**  
  Tells Git which files and directories to ignore when committing code. It typically includes system files and dependencies that don't need to be tracked in version control (e.g., `vendor/`, `.env`, etc.).

- **`composer.json`**  
  If using **Composer** for dependency management, this file defines all the PHP packages required for the project.

- **`.env`**  
  Contains environment-specific variables, such as database credentials and other configurations that vary by environment (e.g., local development, production).

---

## **`/app`**
The **app** directory contains the core logic of the application, including controllers, models, and views, following the **MVC architecture**.

- **`/app/controllers`**  
  Contains all the controller classes that handle user requests, process business logic, and return appropriate views.  
  Example: `BookController.php` handles the actions related to books, such as borrowing and returning.

- **`/app/models`**  
  Contains model classes, which are responsible for interacting with the database and encapsulating business logic.  
  Example: `Book.php` handles database interactions related to books, such as fetching book details and updating their availability.

- **`/app/views`**  
  Contains all the HTML/PHP files that render the user interface (UI). Views display data passed from the controllers.  
  Example: `books_index.php` displays a list of books in the system.

---

## **`/config`**
The **config** directory contains configuration files that define global settings for the project.

- **`/config/database.php`**  
  This file contains database connection settings, such as the database host, username, password, and database name.

- **`/config/routes.php`**  
  This file defines the application's routes (URL patterns) and maps them to specific controller actions.

---

## **`/public`**
The **public** directory contains all publicly accessible files, including assets like CSS, JavaScript, and images, as well as the entry point for the application.

- **`/public/assets`**  
  Stores images, fonts, and other static assets.

- **`/public/css`**  
  Stores CSS stylesheets that define the look and feel of the application.

- **`/public/js`**  
  Stores JavaScript files for client-side interactivity.

- **`/public/index.php`**  
  The main entry point for the application. All requests go through this file to initiate the application logic and route to the appropriate controller and action.

---

## **`/storage`**
This directory is used for storing logs, file uploads, and other data that the application needs to write to disk.

---

## **MVC Architecture Overview**
This structure follows the **MVC (Model-View-Controller)** pattern, which helps to separate concerns and organize the code in a maintainable way:

- **Model**: Contains business logic and interacts with the database.
- **View**: Handles presentation and user interface.
- **Controller**: Manages user input, communicates with models, and updates the view.

---

This structure is clean, modular, and scalable, allowing for easy maintenance and expansion as the project grows.
