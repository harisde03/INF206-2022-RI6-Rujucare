<br>
<p align="center"><img src="https://raw.githubusercontent.com/harisde03/INF206-2022-RI6-Rujucare/main/public/assets/images/rujucare-logo.svg" alt="Rujucare Logo" width="300"></p>
<br>

## About Rujucare
Rujucare adalah aplikasi berbasis website yang dapat membantu fasilitas kesehatan dalam membuat rujukan dengan cepat. Rujucare menyediakan fasilitas pencarian informasi fasilitas kesehatan dan dokter spesialis. Rujucare juga memiliki fitur menampilkan informasi mengenai ketersediaan rujukan dan kamar yang tersedia di fasilitas kesehatan. Pengajuan rujukan dilakukan secara otomatis berdasarkan tingkatan fasilitas kesehatannya, dengan tujuan dapat membantu mengurangi penumpukan dan antrian panjang yang sering terjadi di sebagian besar rumah sakit umum.

## Developers
- Haris Daffa (2008107010059)  
👨‍💻 Maintainer and Fullstack Engineer
- Nadia Rimawati (2008107010005)  
👩‍💻 Frontend Engineer
- Ahmad Chairiansyah (2008107010041)  
👨‍💻 Fullstack Engineer
- Muny Safitri (2008107010064)  
👩‍💻 Database Manager
- Maghfirah ZA (2008107010075)  
👩‍💻 Frontend Engineer

## Documentation
|Halaman Depan|Halaman Faskes|
:-------------------------------------------------------------:|:---------------------------------------------------------------:
|<p><img src="https://raw.githubusercontent.com/harisde03/INF206-2022-RI6-Rujucare/main/documentation/depan.png" alt="Halaman Depan"></p>|<p><img src="https://raw.githubusercontent.com/harisde03/INF206-2022-RI6-Rujucare/main/documentation/faskes.png" alt="Halaman Faskes"></p>|
|Halaman Admin|Halaman Pesan |
|<p><img src="https://raw.githubusercontent.com/harisde03/INF206-2022-RI6-Rujucare/main/documentation/admin.png" alt="Halaman Admin"></p>|<p><img src="https://raw.githubusercontent.com/harisde03/INF206-2022-RI6-Rujucare/main/documentation/pesan.png" alt="Halaman Pesan"></p>  |

## Requirements
1. XAMPP with PHP Version ^8.0.2
2. Composer

## How To Run
### First Run
1. Clone this repository
```bash
git clone https://github.com/harisde03/INF206-2022-RI6-Rujucare.git
```

2. Change current directory to the cloned directory
```bash
cd INF206-2022-RI6-Rujucare
```

3. Install all dependencies with composer
```bash
composer install
```

4. Copy .env.example to .env in the same directory
```bash
cp .env.example .env
```

5. Generate key using artisan
```bash
php artisan key:generate
```

6. Create the symbolic links configured for the application
```bash
php artisan storage:link
```

7. Create a database named `rujucare` through phpMyAdmin

8. Import sqldump from the file `rujucare.sql` through phpMyAdmin

9. Run the server using artisan
```bash
php artisan serve
```

### After First Run
1. Start a terminal / command prompt in the cloned directory
```bash
cd INF206-2022-RI6-Rujucare
```

2. Run the server using artisan
```bash
php artisan serve
```

## Resources
### Fonts:
https://github.com/twbs/icons  
https://github.com/FortAwesome/Font-Awesome  
https://fonts.google.com/specimen/Montserrat  
https://fonts.google.com/specimen/Comfortaa  
