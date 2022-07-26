<!DOCTYPE HTML>
<html>
<head>
    <title>Create Data</title>
    <link rel="stylesheet" type="text/css" href="../assets/cms_style.css">
</head>
<body>
<h1>CREATE DATA</h1>
<form action="create.php" method="post">
<table border="1" cellspacing="0">
    <input type="hidden" name="id">
    <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
    <tr><td>Kelas</td><td><input type="text" name="kelas"></td></tr>
    <tr><td>Jurusan</td><td><input type="text" name="jurusan"></td></tr>
</table>
<input type="submit" name="create" value="Create">
<a href="index.php"><input type="button" value="Cancel"></a>
</form>
</body>
</html>

<?php
    include("library.php");
    if(isset($_POST['create'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        $library = new library();
        $create = $library->createData($id,$nama,$kelas,$jurusan);
        if($create){
            header("location:index.php");
        }
    }
?>