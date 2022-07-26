<?php
	include("library.php");
	$library = new library();
	$id = $_GET['id'];
	extract($library->editData($id));
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/cms_style.css">
</head>
<body>
<h1>EDIT DATA</h1>
<form action="proses.php?action=edit" method="post" enctype="multipart/form-data">
<table border="1" cellspacing="0">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="foto_lama" value="<?php echo $foto; ?>">
	<tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama; ?>"></td></tr>
	<tr><td>Kelas</td><td><input type="text" name="kelas" value="<?php echo $kelas; ?>"></td></tr>
	<tr><td>Jurusan</td><td><input type="text" name="jurusan" value="<?php echo $jurusan; ?>"></td></tr>
	<tr>
		<td>Foto</td>
		<td>
			<img src="../assets/upload/<?php echo $foto; ?>" width="100" height="100"><br>
			<input type="file" name="foto">
		</td>
	</tr>
</table>
<input type="submit" value="Save">
<a href="index.php"><input type="button" value="Cancel"></a>
</form>
</body>
</html>