<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# ARRE ASET - Sistem Inventaris Barang

Aplikasi web berbasis Laravel untuk mencatat dan mengelola data inventaris barang.  
Dibuat untuk Tes Magang ARRE Tech.

## Fitur

- Register, login, dan logout
- CRUD barang: daftar, tambah, detail, edit, hapus
- Informasi kondisi barang (Baik, Perbaikan, Rusak)
- Validasi input
- Dashboard ringkasan (total aset, kondisi barang)
- Halaman login dan register dengan desain modern
- Tampilan responsif

## Teknologi

- PHP 8.2+ / Laravel 11 atau 12
- MySQL
- Tailwind CSS
- Laravel Breeze (autentikasi)
- Blade Template

## Cara Menggunakan

1. Daftar akun lewat halaman **Register**, lalu login.
2. Dashboard menampilkan ringkasan data barang.
3. Buka menu **Data Aset** untuk melihat semua barang.
4. Klik **Tambah Barang**, isi form, lalu simpan.
5. Gunakan tombol **Edit** untuk mengubah data dan **Hapus** untuk menghapus.
6. Gunakan filter/kondisi untuk melihat status barang.
7. Klik **Logout** untuk keluar.

## Struktur Proyek

| File / Folder                                  | Fungsi                                     |
| ---------------------------------------------- | ------------------------------------------ |
| `app/Models/Barang.php`                        | Model barang                               |
| `app/Http/Controllers/BarangController.php`    | Logika CRUD barang                         |
| `app/Http/Controllers/DashboardController.php` | Logika dashboard                           |
| `app/Http/Requests/`                           | Request autentikasi dan validasi           |
| `database/migrations/`                         | Struktur tabel                             |
| `resources/views/admin/barang/`                | Tampilan CRUD barang (index, create, edit) |
| `resources/views/auth/`                        | Tampilan login dan register                |
| `resources/views/layouts/`                     | Layout dan sidebar                         |
| `routes/web.php`                               | Daftar route aplikasi                      |

## Struktur Database

**barangs**  
`id`, `kode_barang`, `nama_barang`, `kategori`, `kondisi`, `timestamps`

## Instalasi

```bash
git clone https://github.com/abaycoding-bot/kondisi-barang.git
cd kondisi-barang
composer install
npm install
cp .env.example .env
php artisan key:generate
