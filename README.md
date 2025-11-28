# Initial Folder structure setup with Laravel + Inertia + Vue 3 + Bootstrap 5

This project is a custom-configured **Laravel + Inertia.js + Vue 3** application using **Bootstrap 5** without Breeze, Jetstream, or any pre-built scaffolding.  
Everything is lightweight, flexible, and intentionally simple so developers can extend or modify the structure as needed.

---

## 🚀 Features

- Fully manual setup (no Breeze / no Jetstream)
- Inertia.js pages with Vue 3
- Bootstrap 5 styling with placeholders

This setup provides a **basic foundation**. Developers are free to extend, improve, or swap parts of the system later as needed.

---

## 🔧 Tech Stack

| Layer        | Technology |
|--------------|------------|
| Backend      | Laravel |
| Frontend     | Vue 3 + Inertia.js |
| Styling      | Bootstrap 5 |
| Bundler      | Vite |
| Database     | MySQL/Postgres/SQLite (your choice) |

---

## 📁 Project Structure

### Frontend (`resources/js`)
```
resources/js/
├── Pages/
│ ├── Home.vue
```

### Backend (Laravel default)
```
app/
├── Http/
│ ├── Controllers/
│ └── Middleware/
|       |__ HandleInertiaRequests.php
```

## 📥 Installation Guide

### 1. Clone the project
```bash
git clone https://github.com/mmrahmanwritescode/laravel-inertia-vue-setup
cd laravel-inertia-vue-setup
```


## 🧰 Backend Setup
### 2. Install dependencies

```
composer install
```

### 3. Configure environment
```
cp .env.example .env
php artisan key:generate
```

### mysql sample database configuration inside .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-sample-db
DB_USERNAME=your-mysql-server-username
DB_PASSWORD=your-mysql-server-pwd
```

## 🎨 Frontend Setup 

### 4. Install JavaScript dependencies 

```
npm install
```



## Running the project 

Finally, you can run the project with herd or simply with artisan command below 

```
php artisan serve
```

### Run frontend Dev Server

```
npm run dev
```

⭐ **If this project helped you, please give it a star!** ⭐