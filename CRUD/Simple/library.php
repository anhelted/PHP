<?php
	class library {
		public function __construct() {
			$this->con = new PDO("mysql:host=localhost;dbname=lks","root","");
		}

		public function createData($nama,$kelas,$jurusan,$foto) {
			$query = $this->con->prepare("INSERT INTO kelas (nama,kelas,jurusan,foto) VALUES ('$nama','$kelas','$jurusan','$foto')");
			$query->execute();
		}

		public function editData($id) {
			$query = $this->con->prepare("SELECT * FROM kelas WHERE id = :id");
			$query->execute(array(":id" => $id));
			$row = $query->fetch(PDO::FETCH_ASSOC);
			return $row;
		}

		public function updateData($id,$nama,$kelas,$jurusan,$foto) {
			$query = $this->con->prepare("UPDATE kelas SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan', foto = '$foto' WHERE id = '$id'");
			$query->execute();
		}

		public function readData() {
			$query = $this->con->prepare("SELECT * FROM kelas");
			$query->execute();
			return $query;
		}

		public function deleteData($id) {
			$query = $this->con->prepare("DELETE FROM kelas WHERE id = '$id'");
			$query->execute();
		}
	}