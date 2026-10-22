# 🏍️ MOTORHUB

### Motorcycle Inventory Management System

**Tugas 7 | CRUD Laravel + Framework Bootstrap**

MOTORHUB merupakan aplikasi berbasis web yang dirancang untuk mengelola data inventaris sepeda motor menggunakan **Laravel 13, MySQL, dan Bootstrap 5**.

Aplikasi ini menerapkan sistem **CRUD (Create, Read, Update, Delete)** yang memungkinkan pengguna menambahkan, menampilkan, memperbarui, dan menghapus data sepeda motor melalui dashboard yang modern dan responsif.

---

## 👨‍🎓 Identitas Mahasiswa

| Keterangan           | Informasi                         |
| -------------------- | --------------------------------- |
| **Nama**             | Danendra Althaf                   |
| **NIM**              | 2503321050                        |
| **Perguruan Tinggi** | Politeknik Negeri Jakarta         |
| **Program Studi**    | D3 Elektronika Industri           |
| **Tugas**            | Tugas 7: CRUD Laravel + Bootstrap |

---

## 🖥️ Tampilan Aplikasi

### MOTORHUB | Motorcycle Dashboard

![MOTORHUB Dashboard](public/screenshots/photo%20website.jpg)

Dashboard MOTORHUB dirancang menggunakan Bootstrap 5 dengan tema otomotif modern yang menggabungkan warna charcoal, merah, dan putih.

Dashboard menampilkan informasi inventaris secara langsung dari database MySQL.

**Informasi yang ditampilkan:**

* **Total Motorcycles:** Jumlah jenis sepeda motor yang terdaftar.
* **Total Stock:** Total stok seluruh kendaraan.
* **Inventory Value:** Total nilai inventaris sepeda motor.
* **Motorcycle Inventory:** Tabel data sepeda motor.
* **Actions:** Tombol Edit dan Delete untuk pengelolaan data.

---

## 🚀 Fitur Utama

| Fitur                 | Deskripsi                                             |
| --------------------- | ----------------------------------------------------- |
| **Create**            | Menambahkan data sepeda motor baru ke database.       |
| **Read**              | Menampilkan seluruh data sepeda motor.                |
| **Update**            | Memperbarui informasi kendaraan yang sudah tersimpan. |
| **Delete**            | Menghapus data sepeda motor dari database.            |
| **Dashboard**         | Menampilkan statistik inventaris kendaraan.           |
| **Responsive Design** | Tampilan antarmuka menggunakan Bootstrap 5.           |

---

## 🛠️ Teknologi yang Digunakan

| Teknologi          | Fungsi                        |
| ------------------ | ----------------------------- |
| Laravel 13         | Framework backend             |
| PHP                | Bahasa pemrograman server     |
| MySQL              | Sistem database               |
| Bootstrap 5        | Framework frontend            |
| HTML & CSS         | Struktur dan desain website   |
| JavaScript         | Interaksi antarmuka           |
| Laragon            | Local development environment |
| Visual Studio Code | Code editor                   |
| Git & GitHub       | Version control               |

---

## 🗄️ Struktur Database

**Nama Database:** `crud_laravel_sepedamotor`

**Nama Tabel:** `tb_sepeda_motor`

| Nama Kolom      | Tipe Data       | Keterangan                  |
| --------------- | --------------- | --------------------------- |
| id_sepeda_motor | BIGINT UNSIGNED | Primary Key, Auto Increment |
| nama_produk     | VARCHAR(255)    | Nama sepeda motor           |
| spesifikasi     | TEXT            | Spesifikasi kendaraan       |
| harga_produk    | BIGINT UNSIGNED | Harga sepeda motor          |
| jumlah_produk   | INT UNSIGNED    | Jumlah stok kendaraan       |

---

## ⚙️ Instalasi dan Cara Menjalankan

### 1. Clone Repository

```bash
git clone https://github.com/RBXRazer/Tugas-7-2503321050-Danendra-Althaf.git
```

### 2. Masuk ke Direktori Proyek

```bash
cd Tugas-7-2503321050-Danendra-Althaf
```

### 3. Instal Dependensi

```bash
composer install
```

### 4. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`.

Kemudian jalankan:

```bash
php artisan key:generate
```

### 5. Konfigurasi Database

Buat database MySQL:

```text
crud_laravel_sepedamotor
```

Sesuaikan file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_laravel_sepedamotor
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Jalankan Migration

```bash
php artisan migrate
```

### 7. Jalankan Server Laravel

```bash
php artisan serve
```

### 8. Akses Website

Buka browser:

```text
http://127.0.0.1:8000/motor
```

---

## 📁 Struktur Proyek

```text
MOTORHUB/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── SepedaMotorController.php
│   └── Models/
│       └── SepedaMotor.php
│
├── database/
│   └── migrations/
│
├── public/
│   └── screenshots/
│       └── photo website.jpg
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── motor/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
│
├── routes/
│   └── web.php
│
├── composer.json
└── README.md
```

---

## 📚 Tujuan Pengembangan

Proyek MOTORHUB dibuat sebagai implementasi pembelajaran pengembangan aplikasi web menggunakan framework Laravel dan Bootstrap.

Melalui proyek ini, diterapkan beberapa konsep utama pengembangan web, yaitu:

* Model-View-Controller (MVC)
* Laravel Routing
* Eloquent ORM
* Database Migration
* CRUD Operations
* Blade Templating
* Bootstrap Components
* Database Integration

---

## 👨‍💻 Developer

**Danendra Althaf**
**NIM:** 2503321050
**Program Studi:** D3 Elektronika Industri
**Institusi:** Politeknik Negeri Jakarta

**GitHub:** [@RBXRazer](https://github.com/RBXRazer)

---

© 2026 MOTORHUB | Laravel CRUD Project
