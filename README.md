Lugas Anegah Bahalwan

Cara Instalisasi :
1. clone project
2. Jalankan command 'composer install'
3. Hidupkan server xampp/wampp anda
4. Membuat Database Baru
5. Konfigurasi .env untuk koneksi database dan API RajaOngkir
6. Jalankan command 'php artisan migrate:fresh'
7. Jika Belum memiliki Package rajaonline Laravel, Jalankan command 'composer require rizalafani/rajaongkirlaravel'
8. Jika Belum memiliki Package Passport Laravel, Jalankan command 'composer require laravel/passport'
9. Jalankan command 'php artisan fetch:data'
10. Jalankan command 'php artisan serve'
11. Buka di dalam browser anda

ROUTE Untuk beberapa fungsi API :
1. Login : [GET] http://localhost:8000/oauth/token
2. Register : [GET] http://localhost:8000/api/register
3. Cari Provinsi : [GET] http://localhost:8000/api/search/provinsi
4. Cari Kota : [GET] http://localhost:8000/api/search/kota
