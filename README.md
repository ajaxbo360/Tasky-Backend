# Tasky-Backend: Dockerized Laravel Application

This repository contains a Dockerized Laravel application using Nginx, PHP-FPM, MySQL, and phpMyAdmin.

## Prerequisites

Ensure you have the following installed:
- [Docker](https://www.docker.com/products/docker-desktop)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Setup and Run

1. **Clone the Repository**
    ```sh
    git clone git@github.com:ajaxbo360/Tasky-Backend.git
    cd Tasky-Backend
    ```

2. **Create the `.env` File**
    Create a `.env` file in the root of your project with the following content:
    ```env
    DB_DATABASE=task_management
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_db_password
    DB_ROOT_PASSWORD=your_root_password
    ```
    Replace `your_db_user`, `your_db_password`, and `your_root_password` with your desired database credentials.

3. **Build and Run the Containers**
    ```sh
    docker-compose up --build -d
    ```

4. **Access the Application**
    - Open your browser and navigate to `http://localhost:8081` to access your Laravel application.
    - Navigate to `http://localhost:8080` to access phpMyAdmin.

## Services

- **Nginx**: Serves the Laravel application (accessible at `http://localhost:8081`).
- **PHP-FPM**: Runs the PHP application.
- **MySQL**: Database service (accessible at `localhost:3306`).
- **phpMyAdmin**: Database management tool (accessible at `http://localhost:8080`).

## Stopping the Containers

To stop the running containers, use:
```sh
docker-compose down
