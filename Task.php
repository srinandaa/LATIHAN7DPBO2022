<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// Menambah data
	function add(){
		$Name = $_POST['tname'];
		$Deadline = $_POST['tdeadline'];
		$Detail = $_POST['tdetails'];
		$Subject = $_POST['tsubject'];
		$Priority = $_POST['tpriority'];

		// Query mysql insert data ke tb_to_do
		$query = "INSERT INTO tb_to_do (name_td, deadline_td, details_td, subject_td, priority_td, status_td) 
				VALUES ('$Name', '$Deadline', '$Detail', '$Subject', '$Priority', 'Belum')";
		
		// Mengeksekusi query
		return $this->execute($query);
	}

	// Menghapus data
	function delete(){
		// GET "id_hapus".
		$id_hapus = $_GET['id_hapus'];

		// Query mysql delete data ke tb_to_do berdasar id nya.
		$query = "DELETE FROM tb_to_do WHERE id = '$id_hapus'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Mengubah data dari "Belum" ke "Sudah".
	function update(){
		// GET "id_status".
		$id_status = $_GET['id_status'];

		// Query mysql update data ke tb_to_do berdasar id nya
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$id_status'";

		// Mengeksekusi query
		return $this->execute($query);
	}
}

?>