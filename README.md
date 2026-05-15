# 🛒 POS System - Backend API

A RESTful API for a Point of Sale (POS) System built with **Laravel 11**.

---

## 🚀 Tech Stack

- **Framework:** Laravel 11
- **Language:** PHP
- **Database:** MySQL
- **API:** REST API (JSON)
- **Auth:** Laravel Sanctum

---

## 📋 Features

- ✅ Category Management (CRUD)
- ✅ Product Management (CRUD)
- ✅ Order & Order Items Management
- ✅ Dashboard Statistics
- ✅ CORS enabled for React frontend

---

## 🔧 Installation & Setup

```bash
git clone https://github.com/fayazahmedsaand123/pos-backend.git
cd pos-backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

---

## 📡 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/categories` | Get all categories |
| POST | `/api/categories` | Create category |
| GET | `/api/products` | Get all products |
| POST | `/api/products` | Create product |
| GET | `/api/orders` | Get all orders |
| POST | `/api/orders` | Create order |
| GET | `/api/dashboard` | Dashboard stats |

---

## 🔗 Frontend

React frontend: [pos-frontend](https://github.com/fayazahmedsaand123/pos-frontend)

---

## 👨‍💻 Developer

**Fayaz Ahmed**
Full Stack Web Developer (Laravel | React | MySQL)
📧 Fayazahmedsaand93@gmail.com
🐙 [GitHub](https://github.com/fayazahmedsaand123)
