# SQL Audit — Eager Loading

## Tujuan

Audit SQL dilakukan untuk membuktikan bahwa fitur eager loading
pada daftar buku menggunakan `Buku::with('kategori')` sehingga
menghindari N+1 Query Problem.

## Implementasi

Pada `BukuController@index` digunakan:

```php
$bukus = Buku::with('kategori')
    ->latest()
    ->simplePaginate(10);