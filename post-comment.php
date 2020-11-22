<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pbo_db';

$con = mysqli_connect($host, $username, $password, $dbname);

if (isset($_POST['post-form'])) {
    $comment = $_POST['comment'];
    if (!empty($comment)) {

        
        
        $query = "INSERT INTO comments (comment) VALUES (\"".$comment."\")";
        
        if (mysqli_query($con, $query)) {
            header('Location: ./');
        } else {
            header('Location: ./?e=Terjadi kesalahan pada database, mohon untuk diperiksa');
        }
    } else {
        header('Location: ./?e=Kolom komentar tidak boleh kosong');
    }
}