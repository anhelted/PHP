<!DOCTYPE HTML>
<html>
<head>
	<title>Create Data</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/cms_style.css">
</head>
<body>
<h1>CREATE DATA</h1>
<form action="proses.php?action=create" method="post" enctype="multipart/form-data">
<table border="1" cellspacing="0">
	<tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
	<tr><td>Kelas</td><td><input type="text" name="kelas"></td></tr>
	<tr><td>Jurusan</td><td><input type="text" name="jurusan"></td></tr>
	<tr><td>Foto</td><td><input type="file" name="foto" required></td></tr>
</table>
<input type="submit" value="Create">
<a href="index.php"><input type="button" value="Cancel"></a>
</form>
</body>
</html>