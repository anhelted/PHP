<!DOCTYPE HTML>
<html>
<head>
	<title>Read Data</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/cms_style.css">
</head>
<body>
<h1>READ DATA</h1>
<a href="create.php"><button>Create</button></a>
<table border="1" cellspacing="0">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Kelas</td>
		<td>Jurusan</td>
		<td>Foto</td>
		<td>Option</td>
	</tr>
<?php
	include("library.php");
	$library = new library();
	$read = $library->readData();
	$no = 0;
	while($data = $read->fetch(PDO::FETCH_OBJ)) {
	$no++;
?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $data->nama; ?></td>
		<td><?= $data->kelas; ?></td>
		<td><?= $data->jurusan; ?></td>
		<td><img src="../assets/upload/<?= $data->foto; ?>" width="100" height="100"></td>
		<td>
			<a href="edit.php?id=<?= $data->id; ?>"><button>Edit</button></a>
			||
			<a href="proses.php?action=delete&id=<?= $data->id; ?>"><button>Delete</button></a>
		</td>
	</tr>
<?php } ?>
</table>
</body>
</html>