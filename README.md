# Ricknova Portfolio — Laravel Web Application

A modern, sleek, and professional portfolio website for Ricknova, a full-stack web developer. Built with Laravel 12, Tailwind CSS, and a custom color palette featuring Electric Blue, Neon Purple, and Dark Gray.

---

## 🎨 Features

✅ **Modern Design** — Gradient backgrounds, smooth hover effects, responsive layout  
✅ **Full-Stack Architecture** — Laravel backend with MySQL database  
✅ **Contact System** — Functional contact form with database storage  
✅ **Admin Dashboard** — Secure login and message viewing interface  
✅ **Mobile-First** — Fully responsive across all devices  
✅ **WhatsApp Integration** — Floating action button for instant messaging  
✅ **GitHub Links** — Easy access to developer's GitHub profile  
✅ **SEO Optimized** — Meta tags and structured content

---

## 📄 Pages Included

-   **Home** — Hero section with featured services and testimonials
-   **About** — Profile, mission, and background information
-   **Services** — 6 core services with descriptions
-   **Skills** — Technical skills with proficiency levels
-   **Contact** — Contact information and message form
-   **Send a Message** — Contact form with validation
-   **Admin Login** — Secure admin authentication
-   **Admin Dashboard** — View and manage contact messages

---

## 🚀 Setup Instructions

### Prerequisites

-   PHP 8.1+
-   MySQL/MariaDB
-   Composer
-   Node.js & npm
-   XAMPP (recommended for local development)

### Installation Steps

```powershell
# 1. Navigate to project directory
cd c:\xampp\xampp\htdocs\dashboard\Portfolio

# 2. Install PHP dependencies (if not already done)
composer install

# 3. Generate app encryption key
php artisan key:generate

# 4. Update .env file with database details
#    DB_DATABASE=ricknova_portfolio
#    DB_USERNAME=root
#    DB_PASSWORD=
#    ADMIN_USER=ricknova
#    ADMIN_PASSWORD=changeme

# 5. Create the database
# In MySQL:
# CREATE DATABASE ricknova_portfolio;

# 6. Run migrations to create tables
php artisan migrate

# 7. Install frontend dependencies
npm install

# 8. Build frontend assets
npm run build

# 9. Start the development server
php artisan serve
```

Visit: `http://127.0.0.1:8000`

---

## 🔐 Admin Access

**Login URL:** `http://127.0.0.1:8000/admin/login`

**Default Credentials:**

-   Username: `ricknova`
-   Password: `changeme`

_Change these in the `.env` file for production._

---

## 📊 Database

The application uses a `messages` table to store contact form submissions with fields:

-   id
-   name
-   phone (optional)
-   email
-   service (optional)
-   message
-   read_at (optional)
-   created_at / updated_at

---

## 🎨 Customization

### Colors

Edit `tailwind.config.js` to modify:

-   `electric: '#00aaff'` — Electric Blue
-   `neonpurple: '#9b59ff'` — Neon Purple
-   `darkgray: '#1f2933'` — Dark Gray

### Content

Update Blade templates in `resources/views/`:

-   `home.blade.php` — Homepage content
-   `about.blade.php` — About section
-   `services.blade.php` — Services listing
-   `skills.blade.php` — Technical skills
-   `contact.blade.php` — Contact page
-   `send_message.blade.php` — Message form

---

## 📦 Deployment

### For Free Hosting Platforms

**Railway.app** (recommended)

-   Supports Laravel natively
-   Free tier available
-   MySQL database included

**Render.com**

-   Node.js with custom build commands
-   PostgreSQL or MySQL add-ons

**InfinityFree**

-   Limited but works with Laravel
-   Requires additional configuration

### Steps

1. Push to GitHub repository
2. Connect GitHub repo to hosting platform
3. Set environment variables (`.env`)
4. Run migrations on deployment
5. Deploy!

---

## 🛠️ Tech Stack

-   **Backend:** Laravel 12
-   **Frontend:** Blade templates, Tailwind CSS
-   **Database:** MySQL
-   **Build Tool:** Vite
-   **Package Manager:** Composer, npm

---

## 📝 Contact Information

-   **WhatsApp:** +234 815 441 1519
-   **Email:** odingaeric293@gmail.com
-   **GitHub:** Ricklabs-231

---

## 📄 License

This portfolio is the proprietary work of Odinga Eric (Ricknova). All rights reserved.

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Redberry](https://redberry.international/laravel-development)**
-   **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
