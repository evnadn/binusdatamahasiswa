## TP 1 Web Programming - Binus University
- EVAN ADRIAN

### Case
Didalam sebuah aplikasi pendataan mahasiswa ingin terdapat halaman web untuk mengunggah file. Programmer diminta untuk membuatkan halaman web tersebut dengan ketentuan sebagai berikut:
- Unggah 3 file: gambar (.jpg, .jpeg atau .png), file attachement sertifikat (zip atau rar), dan file cv (curriculum vitae) (.pdf).
- File Gambar wajib untuk diupload dan dua lainnya opsional.
- Jika file gambar tidak ada maka diberikan alert warning file belum dimasukkan
- Hanya ada dua tombol dalam aplikasi ini yang pertama untuk mengirim (mengunggah) dan yang kedua untuk reset jika terdapat kesalahan input. 
- Tampilan aplikasi web yang dikehendaki adalah:
  - Satu kotak teks untuk nama (nama lengkap)
  - Tombol grup radio untuk gender 
  - Inputan untuk tempat dan tanggal lahir
  - Unggahan 3 file.

### Step by step using this project
- Clone project ini
- Tambahkan database dengan nama "binusdatamahasiswa" dan lakukan migrate database "php artisan migrate" 
- Jalankan "php artisan serve" 
    - Jika error silahkan lakukan "composer install" 
    - Copy .env.example menjadi .env dan sesuaikan pengaturan databasenya
    - Lakukan generate key "php artisan key:generate"
    
