# Inventory App

This is a simple inventory management application built with Laravel on the backend and Alpine.js on the frontend.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The Inventory App is designed to help you manage your inventory efficiently. It leverages the power of Laravel for the backend, providing a robust and scalable server-side solution. On the frontend, Alpine.js is used to enhance user interactivity and create a seamless user experience.

## Features

- **User Authentication**: Secure user authentication system powered by Laravel's built-in authentication features.
- **Product Management**: Easily add, edit, and delete products from your inventory.
- **Inventory Reports**: Generate and view reports to gain insights into your inventory levels, sales, and other key metrics.
- **Search and Filters**: Quickly find products using the search functionality and apply filters to narrow down results.
- **Responsive Design**: The application is designed to be responsive, ensuring a consistent experience across different devices.

## Installation

Follow these steps to set up the Inventory App on your local machine:

1. Clone the repository:
   
   ```bash
   git clone https://github.com/demigod66/inventory.git
   
2. Navigate to the project directory:
   
   ```bash
   cd inventory
   
3. install dependencies:
   
   ```bash
   composer install
   
4. Create a copy of the .env.example file and rename it to .env. Update the database configuration and other relevant settings.
   
5. Generate the application key:
    
   ```bash
   php artisan key:generate
   
6. Migrate & seed the database:
    
   ```bash
   php artisan migrate --seed

7. Install frontend dependencies:
   ```bash
   npm install

8. Build the frontend assets:

   ```bash
   npm run dev
9. Start the development server:
   ```bash
   php artisan serve
