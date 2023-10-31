<?php
//koneksi ke database
$conn = mysqli_connect("127.0.0.1:3308","root","","wad_project3");

//ambil data dari table database / query data students
$result = mysqli_query($conn,"SELECT * FROM students");

//var_dump($result);
var_dump(mysqli_fetch_object($result));
?>