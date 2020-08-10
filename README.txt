Hal-hal yang perlu dilakukan

 1. Setting file .env
 	 - ubah APP_ENV menjadi: production
 	 - ubah APP_DEBUG menjadi: false
 	 - sesuaikan APP_ADMIN_NAME (jangan dikosongkan, ini untuk nama admin)
 	 - sesuaikan konfigurasi terkait database/DB (_HOST, _PORT, _DATABASE, _USERNAME, _PASSWORD)
 	 - sesuaikan MAIL_USERNAME dan MAIL_PASSWORD dengan akun Gmail

 2. Setting database. Pastikan semua konfigurasi di poin 1 sudah sesuai,
 	lalu jalankan migrasi/migration database.
 	(Untuk langkah ini biasanya memerlukan akses ke terminal, silahkan
 	 disesuaikan dengan panduan dari hosting terkait).

 3. Jika semua settingan konfigurasi di atas sudah sesuai, aplikasi bisa dijalankan.

 4. Buat akun user dengan nama yang sesuai dengan APP_ADMIN_NAME di poin 1
 	(akun ini yang akan menjadi akun admin).

 5. Jika sudah, silahkan dicoba-coba semua fiturnya, seperti:
 	- buat akun baru
 	- buat pertanyaan
 	- buat pertanyaan yang melampirkan gambar
 	- ganti gambar profil
 	- buat kegiatan mentoring
 	- daftar mentoring
 	  ...
 	- dan lain-lain

 6. Sudah, sepertinya itu saja (?)


Pastikan semua fitur sudah berjalan sebagaimana mestinya, lebih baik masalah
terdeteksi di awal dan segera diperbaiki daripada terdeteksi ketika sudah di
tengah jalan.

Jika terdapat masalah/bug, jangan ragu untuk segera menghubungi kami.

Semoga sukses selalu (Excaver)