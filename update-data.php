<?php

// File json yang akan dibaca (full path file)
$file = "blog.json";

// Mendapatkan file json
$blog = file_get_contents($file);

// Mendecode blog.json
$data = json_decode($blog, true);

// Membaca data array menggunakan foreach
foreach ($data as $key => $d) {
    // Perbarui data
    if ($d['id'] == $_POST['id']) {
        $data[$key]['judul'] = $_POST['title'];
        $data[$key]['author'] = $_POST['author'];
        $data[$key]['tanggal'] = $_POST['datetime'];
        $data[$key]['content'] = $_POST['content'];
    }
}

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam blog.json
$blog = file_put_contents($file, $jsonfile);

header("location:index.php?pesan=update");
