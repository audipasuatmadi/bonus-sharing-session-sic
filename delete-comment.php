<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pbo_db';

$con = mysqli_connect($host, $username, $password, $dbname);

$id = $_POST['comment-id'];
if (!empty($id)) {
    echo "NICE";
    $query = "DELETE FROM comments WHERE id=".$id;
    
    if (mysqli_query($con, $query)) {
        header('Location: ./');
    } else {
        header('Location: ./?e=Terjadi kesalahan pada database, mohon untuk diperiksa');
    }
} else {
    header('Location: ./?e=Komentar tidak dapat ditemukan');
}
