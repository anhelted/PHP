<?php
    include("library.php");
    if(isset($_GET['id'])){
        $library = new library();
        $edit = $library->editData($_GET['id']);
        $data = $edit->fetch(PDO::FETCH_OBJ);
        echo '
            <!DOCTYPE HTML>
            <html>
            <head>
                <title>Edit Data</title>
                <link rel="stylesheet" type="text/css" href="../assets/cms_style.css">
            </head>
            <body>
            <h1>EDIT DATA</h1>
            <form action="edit.php" method="post">
            <table border="1" cellspacing="0">
                <input type="hidden" name="id" value="'.$data->id.'">
                <tr><td>Nama</td><td><input type="text" name="nama" value="'.$data->nama.'"></td></tr>
                <tr><td>Kelas</td><td><input type="text" name="kelas" value="'.$data->kelas.'"></td></tr>
                <tr><td>Jurusan</td><td><input type="text" name="jurusan" value="'.$data->jurusan.'"></td></tr>
            </table>
            <input type="submit" name="update" value="Save">
            <a href="index.php"><input type="button" value="Cancel"></a>
            </form>
            </body>
            </html>
        ';
    }
?>

<?php
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        $library = new library();
        $update = $library->updateData($id,$nama,$kelas,$jurusan);
        if($update){
            header("location:index.php");
        }
    }
?>