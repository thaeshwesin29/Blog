# Blog Project

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-logomark/5x20SVG/5x20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/thaeshwesin29/blog-project/actions">
    <img src="https://github.com/thaeshwesin29/blog-project/workflows/CI/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## About the Blog Project

The **Blog Project** is a simple and elegant content management system built using Laravel. It allows users to create, edit, and manage blog posts. This project serves as a platform to share knowledge and ideas with an intuitive interface for both administrators and readers.

### Features
- 🖋 **Create, Edit, and Delete Blog Posts**
- 🧑‍💻 **User Authentication and Authorization**
- 🗂 **Categorized Posts**
- 🌐 **SEO-Friendly URLs**
- 📊 **Blog Statistics**
- 📱 **Responsive Design**

### Tech Stack
- **Frontend:** Blade, Bootstrap
- **Backend:** Laravel Framework
- **Database:** MySQL
- **Authentication:** Laravel Breeze
- **Hosting:** [Vercel](https://vercel.com/) / [Heroku](https://heroku.com/)

## Installation

Follow these steps to set up the project locally:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/thaeshwesin29/blog-project.git
   cd blog-project
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Environment Configuration**
   - Copy the `.env.example` file and rename it to `.env`.
   - Set up your database credentials:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Start the Server**
   ```bash
   php artisan serve
   ```

Visit `http://127.0.0.1:8000` in your browser.

## Usage

- **Admin Panel:** Log in to access the admin panel to manage blog posts.
- **User View:** Visitors can browse blog posts, search by category, and read content.

## Screenshots

### Homepage
![Homepage Screenshot](https://via.placeholder.com/800x400?text=Homepage+Screenshot)

### Admin Panel
![Admin Panel Screenshot](https://via.placeholder.com/800x400?text=Admin+Panel+Screenshot)

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch.
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes.
   ```bash
   git commit -m "Add new feature"
   ```
4. Push the branch.
   ```bash
   git push origin feature-name
   ```
5. Open a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

- **Developer:** Thae Shwe Sin
- **Email:** [thaeshwesin2000@gmail.com]
- **LinkedIn:** [Thae Shwe Sin](https://linkedin.com/in/thaeshwesin29)
