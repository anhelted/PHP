<!DOCTYPE HTML>
<html>
<head>
    <title>Read Data</title>
    <link rel="stylesheet" type="text/css" href="../assets/cms_style.css">
</head>
<body>
<h1>READ DATA</h1>
<table border="1" cellspacing="0">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Jurusan</td>
        <td>Option</td>
    </tr>
<?php
    include("library.php");
    $no = 0;
    $library = new library();
    $read = $library->readData();
    while($data = $read->fetch(PDO::FETCH_OBJ)){
    $no++;
        echo "
            <tr>
                <td>$no</td>
                <td>$data->nama</td>
                <td>$data->kelas</td>
                <td>$data->jurusan</td>
                <td>
                    <a href='edit.php?id=$data->id'><button>Edit</button></a>
                    ||
                    <a href='index.php?delete=$data->id'><button>Delete</button></a>
                </td>
            </tr>
        ";
    }
?>
</table>
<a href="create.php"><button>Create</button></a>
</body>
</html>

<?php
    if(isset($_GET['delete'])){
        $delete = $library->deleteData($_GET['delete']);
        header("location:index.php");
    }
?>