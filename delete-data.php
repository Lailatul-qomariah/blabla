<?php

// File json yang akan dibaca (full path file)
$file = "blog.json";

// Mendapatkan file json
$blog = file_get_contents($file);

// Mendecode blog.json
$data = json_decode($blog, true);

// Membaca data array menggunakan foreach
foreach ($data as $key => $d) {
    // Hapus data 
    if ($d['id'] == $_GET['id']) {
        // Menghapus data array sesuai dengan index
        // Menggantinya dengan elemen baru
        array_splice($data, $key, 1);
    }
}

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam blog.json
$blog = file_put_contents($file, $jsonfile);

header("location:index.php?pesan=hapus");
