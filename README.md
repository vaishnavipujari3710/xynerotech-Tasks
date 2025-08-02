# Household Services Booking Platform

This repository contains the front-end and initial backend structure for a household services booking platform, designed to be user-friendly and efficient.

## Project Overview

The platform allows users to browse various household services (e.g., AC repair, cleaning, plumbing), book appointments, and manage their bookings. It features user authentication (login/registration) and a dashboard to track personal activities.

## Technologies Used

* **Frontend:**
    * HTML (for page structure)
    * CSS (for styling, likely includes Tailwind CSS based on previous discussions)
    * JavaScript (for interactive elements and dynamic content loading)
* **Backend (Initial Structure):**
    * PHP (for server-side logic, user management, and form submissions)
    * SQL (for database operations, indicated by `homeease.sql`)

## File Structure

The project is organized as follows:

├── css/                  # Contains custom CSS stylesheets.
│   └── (e.g., styles.css)
├── fonts/                # Stores custom font files (if any).
├── images/               # Holds all project images (icons, service images, etc.).
├── js/                   # Contains JavaScript files for client-side interactivity.
│   └── (e.g., main.js, header-loader.js)
├── about.html            # Information about the platform/company.
├── book.html             # The main service booking form.
├── contact.html          # Contact us page.
├── dashboard.php         # User dashboard to view/manage bookings and profile.
├── homeease.sql          # SQL script for database setup (tables, initial data).
├── index.html            # The main home page of the platform.
├── login_register.html   # A combined page for login and registration forms (or links to separate pages).
├── login_user.php        # PHP script to handle user login authentication.
├── logout.php            # PHP script to handle user logout.
├── register_user.php     # PHP script to handle new user registration.
├── service.html          # Page detailing the available services.
├── submit_booking.php    # PHP script to process and save new service bookings.
└── (other HTML/PHP files as needed for specific functionalities)

## Getting Started

To set up and run this project locally, follow these steps:

### Prerequisites

* A web server with PHP support (e.g., Apache, Nginx)
* MySQL or MariaDB database server
* A web browser (e.g., Google Chrome, Mozilla Firefox)

### Installation

1.  **Clone the repository (or download the files):**

    ```bash
    git clone [your-repository-url]
    # Or simply download the zip and extract
    ```

2.  **Place files on your web server:**
    Move all the project files into your web server's document root (e.g., `htdocs` for Apache, `www` for Nginx).

3.  **Database Setup:**
    * Create a new database (e.g., `homeease`) in your MySQL/MariaDB server.
    * Import the `homeease.sql` file into your newly created database. This will set up the necessary tables (e.g., `users`, `bookings`, `services`). You can typically do this using phpMyAdmin or a command-line tool:
        ```bash
        mysql -u your_username -p your_database_name < homeease.sql
        ```
    * **Configure Database Connection:** Open your PHP files (e.g., `login_user.php`, `register_user.php`, `submit_booking.php`, `dashboard.php`) and update the database connection details (hostname, username, password, database name) to match your local setup.

4.  **Access the Application:**
    Open your web browser and navigate to the URL where your web server hosts the project.
    For example: `http://localhost/your-project-folder/index.html`

## Features (Planned/Implemented)

* **Homepage:** Attractive landing page (`index.html`).
* **Service Listings:** Detailed page for available services (`service.html`).
* **Booking System:** Form to book services (`book.html`, `submit_booking.php`).
* **User Authentication:**
    * Registration (`register_user.php`)
    * Login (`login_user.php`)
    * Logout (`logout.php`)
* **User Dashboard:** Personalized area for users (`dashboard.php`).
* **About Us & Contact Us:** Informational pages (`about.html`, `contact.html`).
* **Responsive Design:** (Implicitly with Tailwind CSS) Adapts to various screen sizes.

## Future Enhancements

* Service search and filtering.
* Admin panel for managing services, users, and bookings.
* Payment gateway integration.
* User reviews and ratings for services.
* Advanced date/time slot selection.
* Real-time notifications.

## Contributing

Feel free to contribute to this project by submitting bug reports or feature requests via GitHub Issues.

## License

[Specify your project's license here, e.g., MIT, Apache 2.0, etc.]
