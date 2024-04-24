# OmniScan Project

## Introduction
OmniScan is a robust web application built using the Laravel framework. It is designed to facilitate the management and reporting of administrative tasks within an organization. The project leverages Laravel's powerful features to provide a seamless and efficient user experience.

## Features
- **Admin User Management**: Manage administrative users, including creation, updates, and deletion.
- **Report Generation**: Generate and manage reports related to administrative activities.
- **Role-Based Access Control**: Implement role-based access control to ensure that users have appropriate permissions based on their roles.

## Technical Stack
- **Laravel**: A PHP framework for building scalable web applications.
- **Livewire**: A full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel.
- **PostgreSQL**: Used for database management.
- **Tailwind**: For responsive and modern UI.

## Installation
1. Clone the repository to your local machine.
2. Run `composer install` to install all the dependencies.
3. Copy `.env.example` to `.env` and configure your environment variables.
4. Run `php artisan key:generate` to generate the application key.
5. Run `php artisan migrate` to create the database schema.
6. Run `php artisan db:seed` to seed the database with initial data.
7. Run `php artisan serve` to start the local development server.

## Usage
Navigate to the local server URL provided by the `php artisan serve` command. Log in with the credentials provided by the database seeder to start using the application.

## Contributing
Contributions to OmniScan are welcome. Please ensure that your pull requests are well-documented and include appropriate tests.

## License
OmniScan is open-sourced software licensed under the MIT license.
