<?php 

// File json yang akan dibaca (full path file)
$file = "blog.json";

// Mendapatkan file json
$blog = file_get_contents($file);

// Mendecode blog.json
$data = json_decode($blog, true);

// Data array baru
$data [] = array(
    'id'     => hexdec( uniqid() ),
    'judul'   => $_POST['title'],
    'author'   => $_POST['author'],
    'tanggal' => $_POST['datetime'],
    'content' => $_POST['content']
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam blog.json
$blog = file_put_contents($file, $jsonfile);

header("location:index.php?pesan=input");
?>