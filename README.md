# simple-php-request

ini adalah simple php request yang dibuat hanya menggunakan explode dan str_replace dan dibantu oleh rewrite htaccess .
awal ide ini berasal dari PHP REQUEST URI yang mengambil Request dari user.

penggunaan nya sangat simple, salin ke root folder apache/nginx atau localhost milik kalian, lalu kalian akses path yang kalian inginkan, akan bertuliskan
notfound page, namun jika mengakses path yang sudah ditentukan dalam file system.php, itu tidak akan menampilkan halaman notfound page, namun menghasilkan string yang
sudah dibuat dalam system.php itu sendiri, disana (didalam file system.php) terdapat request dari user yang sudah ditetapkan sebagai string berupa "news" jika mengakses
localhost/news akan memunculkan string "All News" namun jika ditambah satu string lagi berupa "Dunia-tidak-bersatu-lagi" itu akan memunculkan sebuah kata "Dunia tidak bersatu lagi" dikarenakan string/request yang diberikan sama dengan variabel yang ditentukan dalam file system.php

penjelasan simpel nya seperti ini :

localhost/test => halaman notfound (request tidak/belum ditentukkan)

localhost/news => halaman listing berita (request yang sudah ditentukan)

localhost/news/Dunia-tidak-bersatu-lagi => Berita yang ditemukan dalam variabel. (2 request yang sudah ditentukan)

jika ingin melemparkan pertanyaan, silahkan hubungi saya :

telegram : @ubaii_id

instagram : @ubaii.id

facebook : kakko.go.id

whatsapp : 085692259063

