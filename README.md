# Abynntech Admin

Aplikasi Admin Panel berbasis framework [Laravel 12](https://laravel.com).

---

## 📋 Prasyarat (Prerequisites)

Sebelum menginstal project ini, pastikan sistem Anda telah memenuhi prasyarat berikut:

- **PHP** `>= 8.3` (dengan ekstensi standard Laravel seperti `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`)
- **Composer** `>= 2.x`
- **Node.js** `>= 18.x` & **NPM**
- **Database Server** (MySQL / MariaDB / PostgreSQL / SQLite)
- **Git**

---

## 🚀 Panduan Instalasi (Installation Guide)

Ikuti langkah-langkah di bawah ini untuk mengklon dan menjalankan project di lingkungan lokal.

### 1. Clone Repository

Buka terminal atau Command Prompt / PowerShell, lalu jalankan perintah:

```bash
git clone https://github.com/username/abynntech-admin.git
cd abynntech-admin
```

> **Catatan:** Ganti URL repository di atas dengan URL repository Git Anda yang sesuai.

---

### 2. Opsi A: Instalasi Otomatis (Rekomendasi)

Project ini telah dilengkapi dengan script `setup` bawaan di `composer.json`. Anda bisa menjalankan satu perintah berikut:

```bash
composer run setup
```

Script ini akan otomatis melakukan:
1. `composer install` (Instalasi dependensi PHP)
2. Membuat file `.env` dari `.env.example` (jika belum ada)
3. `php artisan key:generate` (Generate Application Key)
4. `php artisan migrate --force` (Menjalankan migrasi database)
5. `npm install --ignore-scripts` (Instalasi paket JavaScript/Vite)
6. `npm run build` (Build aset frontend)

---

### 3. Opsi B: Instalasi Manual (Langkah demi Langkah)

Jika Anda ingin melakukan setup secara manual:

#### A. Install Dependensi PHP
```bash
composer install
```

#### B. Install Dependensi Frontend
```bash
npm install
```

#### C. Konfigurasi Environment (`.env`)
Salin file `.env.example` menjadi `.env`:

- **Linux / macOS / Git Bash:**
  ```bash
  cp .env.example .env
  ```
- **Windows (PowerShell):**
  ```powershell
  copy .env.example .env
  ```

#### D. Generate Application Key
```bash
php artisan key:generate
```

#### E. Konfigurasi Database
Buka file `.env` di editor teks Anda dan sesuaikan kredensial database (contoh MySQL):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=abynntech_admin
DB_USERNAME=root
DB_PASSWORD=
```

#### F. Jalankan Migrasi Database
Pastikan nama database yang ditentukan di file `.env` sudah dibuat di MySQL server Anda, lalu jalankan:

```bash
php artisan migrate
```

*(Opsional)* Jika ada seeder data awal:
```bash
php artisan migrate --seed
```

---

## 💻 Menjalankan Aplikasi (Development)

Untuk menjalankan server development (Laravel Backend, Queue Listener, dan Vite Frontend sekaligus):

```bash
composer run dev
```

Atau Anda dapat menjalankannya secara terpisah:

1. **Server Laravel Backend:**
   ```bash
   php artisan serve
   ```
   Aplikasi dapat diakses melalui browser di: `http://127.0.0.1:8000`

2. **Vite Frontend Server:**
   ```bash
   npm run dev
   ```

---

## 🛠️ Perintah Tambahan

- **Menjalankan Pengujian (Testing - Pest PHP):**
  ```bash
  composer test
  # atau
  php artisan test
  ```

- **Build Aset Production:**
  ```bash
  npm run build
  ```

- **Format Code Style (Laravel Pint):**
  ```bash
  ./vendor/bin/pint
  ```

---

## 📄 Lisensi

Project ini dilisensikan di bawah [MIT License](LICENSE).
