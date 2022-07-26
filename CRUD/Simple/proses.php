<?php
include("library.php");
$action = $_GET['action'];

	if($action == "create") {
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$jurusan = $_POST['jurusan'];
		$foto = $_FILES['foto']['tmp_name'];
		$nama_foto = $_FILES['foto']['name'];
		$directory = "../assets/upload/";
		$move = move_uploaded_file($foto, $directory.$nama_foto);

		if($move) {
			$library = new library();
			$library->createData($nama,$kelas,$jurusan,$nama_foto);
			header("location:index.php");
		}
	}

	if($action == "edit") {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$jurusan = $_POST['jurusan'];
		$foto_lama = $_POST['foto_lama'];
		$foto = $_FILES['foto']['tmp_name'];
		$nama_foto = $_FILES['foto']['name'];
		$directory = "../assets/upload/";
		$library = new library();

		if(empty($_FILES['foto']['tmp_name'])) {
			$library->updateData($id,$nama,$kelas,$jurusan,$foto_lama);
			header("location:index.php");
		}else{
			move_uploaded_file($foto, $directory.$nama_foto);
			unlink("../assets/upload/".$foto_lama);
			$library->updateData($id,$nama,$kelas,$jurusan,$nama_foto);
			header("location:index.php");
		}
	}

	if($action == "delete") {
		$library = new library();
		$library->deleteData($_GET['id']);
		header("location:index.php");
	}
?>