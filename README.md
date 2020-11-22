# Bonus Web Aplikasi Bootstrap 4 Sharing Session Perdana SIC

## Cara Penggunaan
1. Install `XAMPP`.
2. Setelah `XAMPP` terinstall, hidupkan `XAMPP` dan buka `phpmyadmin` dan buat `database` baru bernama `sic_db`.
3. Buat tabel bernama `comments` yang berisi `id` (`primary key`) dan `comment` (`varchar / text`).
   - Atau dengan memasukkan query ini pada bagian SQL Query:
        ```sql
        CREATE TABLE comments (
            id BIGINT PRIMARY KEY AUTO_INCREMENT,
            comment TEXT NOT NULL
        )
        ```
4. Taruh proyek yang telah di download/clone ke file `htdocs` pada tempat `XAMPP` di install.
5. Buka proyek melalui `localhost` pada browser masing - masing.
   
___
by Putu Audi Pasuatmadi