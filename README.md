# Project KP - Website Arsip & Checklist

## Table of Contents
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)

## Getting Started

- siapkan sebuah folder untuk menjadi folder induk dari project.
- lakukan inisiasi git dengan `git init`

### Prerequisites

- PHP (v8.0^)
- Composer (v2.5.x^)
- Node.js (v19.x^)
- npm (v9.0^)
- MySQL (XAMPP)

### Installation

1. Clone repository: `git clone https://github.com/pukiskun/KP-PCS.git`
2. Masuk ke project directory: `cd KP-PCS`
3. Install Composer dependencies: `composer install`
4. Duplicate file .env.example dan ubah menjadi .env
   
   ![image](https://github.com/pukiskun/KP-PCS/assets/80185724/4aae9997-ca5f-4eae-aa96-222800a57fc1)
   
6. Ubah nama database dalam .env
   
   ![image](https://github.com/pukiskun/KP-PCS/assets/80185724/98daac9a-fbfd-4282-ab7e-f58c4578a9a6)
   
9. Generate application key: `php artisan key:generate`
10. Jalakan migrasi database: `php artisan migrate`
11. Lakukan seeding database: `php artisan db:seed`
12. Install npm packages: `npm install`

## Usage

1. Buka XAMPP
2. Nyalakan modul APACHE dan MYSQL

   ![image](https://github.com/pukiskun/KP-PCS/assets/80185724/89fb01be-8858-407e-860f-5b1cdc1b5a19)
   
4. Buka 2 terminal
5. Pada terminal pertama jalankan `php artisan serve`
6. Pada terminal kedua jalankan `npm run dev`

## Contributing

Untuk kontribusi dan workflow, ikuti _guideline_ berikut

- Fork github project
- Buatlah branch baru
- Lakukan perubahan
- Simpan pekerjaan dengan `git add .`
- Lakukan `git commit -m "pesan commit"` jika sudah siap untuk apply
- Jika ingin push perubahan, lakukan pada branch yang telah dibuat dengan `git push origin nama_branch` (Jangan langsung push ke master `git push origin master`)
- Submit pull request pada repository github
- Pull request hanya boleh diACC oleh master


