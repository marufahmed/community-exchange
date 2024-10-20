## Community Exchange

<p>This is a program created to serve members within a community to exchange materials related to that community. The initial program was created as a course assignment and this program is extends the functionalities and is re-implemented using Laravel MVC framework.</p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Docker Setup

To run this application using Docker, follow these steps:

1. **Build the Docker images**:

    ```bash
    docker-compose build
    ```

2. **Start the Docker containers**:

    ```bash
    docker-compose up -d
    ```

3. **Run database migrations**:

    ```bash
    docker-compose exec app php artisan migrate
    ```

4. **Access the application**:
   Open your browser and go to `http://localhost:8000`.

5. **Stop the Docker containers**:
    ```bash
    docker-compose down
    ```

### Notes

-   Ensure Docker and Docker Compose are installed on your machine.
-   Replace `YOUR_APP_KEY` in the `docker-compose.yml` with your actual Laravel application key. You can generate one using `php artisan key:generate`.
