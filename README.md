# SIPUS-Del

Sistem Informasi Perpustakaan Kampus Del (SIPUS-Del) merupakan aplikasi
pengelolaan data buku dan kategori buku berbasis Laravel.

## Teknologi

- Laravel 13
- PHP 8.4
- SQLite
- Eloquent ORM
- Blade
- Bootstrap 5

## Fitur

### Buku
- Menampilkan daftar buku
- Menambahkan buku
- Melihat detail buku
- Mengedit buku
- Menghapus buku
- Pagination
- Validasi ISBN unik
- Validasi judul minimal 5 karakter
- Validasi stok minimal 0

### Kategori
- Menampilkan daftar kategori
- Menambahkan kategori
- Melihat detail kategori
- Mengedit kategori
- Menghapus kategori
- Menampilkan jumlah buku setiap kategori

## Relasi Eloquent

- Kategori memiliki banyak Buku (`hasMany`)
- Buku memiliki satu Kategori (`belongsTo`)
- Daftar buku menggunakan eager loading `with('kategori')`

## Struktur MVC

- **Model**: Mengelola data dan relasi database.
- **View**: Menggunakan Blade untuk tampilan.
- **Controller**: Mengatur alur request, validasi, dan response.

## Keamanan

- CSRF protection menggunakan `@csrf`
- Method spoofing menggunakan `@method`
- Server-side validation
- Proteksi XSS melalui escaping Blade

## SQL Audit

Aplikasi menggunakan `DB::listen()` untuk mencatat query SQL
ke `storage/logs/laravel.log`.

Eager loading pada daftar buku menghasilkan query terpisah untuk
data buku dan kategori yang dibutuhkan, sehingga menghindari
N+1 query problem.

## Menjalankan Project

```bash
php artisan serve