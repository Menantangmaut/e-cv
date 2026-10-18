<<<<<<< HEAD
# E-CV Achmad Haitsam

Portofolio satu halaman berbasis Laravel dan Blade. Konten portofolio tersedia dari `config/portfolio.php`, sehingga website tidak memerlukan login atau database untuk menampilkan halaman.

## Persyaratan lingkungan

- PHP 8.3 atau lebih baru dengan ekstensi yang dibutuhkan Laravel, termasuk Ctype, cURL, DOM, Fileinfo, Filter, Hash, Mbstring, OpenSSL, PCRE, PDO, Session, Tokenizer, dan XML.
- Composer 2.
- Node.js dan npm untuk build aset frontend.
- Untuk hosting, pastikan paket PHP hosting kompatibel dengan versi Laravel di `composer.json` (Laravel 13.x, PHP `^8.3`). Ketersediaan PHP dan Composer berbeda pada setiap penyedia hosting gratis.

## Instalasi dan konfigurasi lokal

```sh
composer install
copy .env.example .env
php artisan key:generate
npm install
npm run build
```

Perintah `copy` di atas untuk PowerShell/Windows. Di macOS/Linux, gunakan `cp .env.example .env`.

Website ini hanya menyajikan halaman statis dan tidak memakai database. Untuk pengembangan lokal, jalankan:

```sh
php artisan serve
```

Buka alamat yang ditampilkan Artisan, biasanya `http://127.0.0.1:8000`. Saat mengubah CSS/JavaScript, jalankan `npm run dev` di terminal terpisah. Untuk menyiapkan aset produksi, jalankan `npm run build`.

## Catatan deployment shared hosting gratis

Pilih penyedia yang secara eksplisit mendukung Laravel 13 dan PHP 8.3+, akses Composer atau cara unggah `vendor` yang sesuai, serta document root khusus. Shared hosting gratis tidak selalu menyediakan kemampuan tersebut.

1. Pasang dependensi produksi dengan `composer install --no-dev --optimize-autoloader` dan bangun aset menggunakan `npm ci && npm run build` di lingkungan build yang sesuai.
2. Unggah aplikasi Laravel ke direktori privat di luar `public_html`. Arahkan document root domain ke folder `public` Laravel bila panel hosting mengizinkan.
3. Jika provider memaksa `public_html`, tempatkan isi folder Laravel `public` di `public_html`, lalu sesuaikan `public/index.php` agar memuat `vendor/autoload.php` dan `bootstrap/app.php` dari direktori privat aplikasi. Jangan salin seluruh proyek ke dalam `public_html`.
4. Isi `.env` hanya di server dengan nilai produksi: `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL` yang benar, dan `APP_KEY` yang unik. Pastikan direktori `storage` dan `bootstrap/cache` dapat ditulis oleh PHP.
5. Jangan unggah `.env`, kredensial, log, cache, direktori `.git`, `node_modules`, atau file pengembangan ke web root. Jangan publikasikan isi `storage`, `vendor`, `config`, atau source aplikasi melalui URL.
6. Setelah deployment, jalankan `php artisan optimize` jika tersedia dan periksa homepage melalui domain hosting.

Lokasi direktori privat, document root, versi PHP, dan cara menjalankan Composer berbeda menurut provider. Sesuaikan langkah di atas dengan dokumentasi provider yang dipilih.

## Memperbarui konten

Edit informasi profil, pendidikan, keahlian, pengalaman, atau proyek di `config/portfolio.php`. Tambahkan tautan GitHub atau demo hanya setelah URL publik yang valid tersedia. Proyek saat ini dicantumkan sebagai dalam pengembangan dan dibuat dengan bantuan Codex/tools AI.

## Catatan keamanan

Jangan menambahkan password, API key, atau kredensial ke README maupun source control. File `.env` lokal tidak boleh dipublikasikan; gunakan `.env.example` hanya untuk nama variabel tanpa nilai rahasia.
=======
# e-cv
>>>>>>> 00c2e34dbc1ebf55d4da14921883be2aec4eda7a
