<?php 
include 'model.php'; 
if (isset($_POST['submit_simpan'])) { 
    $nim = $_POST['nim']; 
    $nama = $_POST['nama']; 
    $uts = $_POST['uts']; 
    $uas = $_POST['uas']; 
    $tugas = $_POST['tugas']; 
    $model = new Model(); 
    $model->insert($nim,$nama,$uts,$uas,$tugas); 
    header('location:index.php'); 
} 
if (isset($_POST['submit_edit'])) { 
    $nim = $_POST['nim']; 
    $nama = $_POST['nama']; 
    $uts = $_POST['uts']; 
    $uas = $_POST['uas']; 
    $tugas = $_POST['tugas']; 
    $model = new Model(); 
    $model->update($nim,$nama,$uts,$tugas,$uas); 
    header('location:index.php'); 
} 
if (isset($_GET['nim'])) { 
    $id = $_GET['nim']; 
    $model = new Model(); 
    $model->delete($id); 
    header('location:index.php'); 
}  

if (isset($_POST['submit_simpan_mahasiswa'])) { 
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $semester = $_POST['semester']; 
    $alamat = $_POST['alamat']; 
    $no_tlp = $_POST['no_tlp']; 
    $model = new Model(); 
    $model->insert_mahasiswa($id,$nama,$semester,$alamat,$no_tlp); 
    header('location:mahasiswa.php'); 
} 

if (isset($_POST['submit_edit_mahasiswa'])) { 
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $semester = $_POST['semester']; 
    $alamat = $_POST['alamat']; 
    $no_tlp = $_POST['no_tlp']; 
    $model = new Model(); 
    $model->update_mahasiswa($id,$nama,$semester,$alamat,$no_tlp); 
    header('location:mahasiswa.php'); 
} 
if (isset($_GET['id'])) { 
    $No = $_GET['id']; 
    $model = new Model(); 
    $model->delete_mahasiswa($No); 
    header('location:mahasiswa.php'); 
}

if (isset($_POST['submit_simpan_absen'])) { 
    $id = $_POST['id']; 
    $mhs_id = $_POST['mhs_id']; 
    $matakuliah_id = $_POST['matakuliah_id']; 
    $waktu_absen =$_POST['waktu_absen'];
    $status=$_POST['status'];
    $model = new Model(); 
    $model->insert_absen($id,$mhs_id,$matakuliah_id,$waktu_absen,$status); 
    header('location:absen.php'); 
}

if (isset($_POST['submit_edit_absen'])) { 
    $id = $_POST['id']; 
    $mhs_id = $_POST['mhs_id']; 
    $matakuliah_id = $_POST['matakuliah_id']; 
    $waktu_absen =$_POST['waktu_absen'];
    $status =$_POST['status'];
    $model = new Model(); 
    $model->update_absen($id,$mhs_id,$matakuliah_id,$waktu_absen,$status); 
    header('location:absen.php'); 
}

if (isset($_GET['id'])) { 
    $no = $_GET['id']; 
    $model = new Model(); 
    $model->delete_absen($no); 
    header('location:absen.php'); 
}

if (isset($_POST['submit_simpan_matakuliah'])) { 
    $id = $_POST['id']; 
    $nama_mk = $_POST['nama_mk']; 
    $model = new Model(); 
    $model->insert_matakuliah($id,$nama_mk); 
    header('location:matakuliah.php'); 
}

if (isset($_POST['submit_edit_matakuliah'])) { 
    $id = $_POST['id']; 
    $nama_mk = $_POST['nama_mk']; 
    $model = new Model(); 
    $model->update_matakuliah($id,$nama_mk); 
    header('location:matakuliah.php'); 
}

if (isset($_GET['id'])) { 
    $no = $_GET['id']; 
    $model = new Model(); 
    $model->delete_matakuliah($no); 
    header('location:matakuliah.php'); 
}

if (isset($_POST['submit_simpan_kontrak_mk'])) { 
    $mk_id = $_POST['mk_id']; 
    $mhs_id = $_POST['mhs_id']; 
    $model = new Model(); 
    $model->insert_kontrak_mk($mk_id,$mhs_id); 
    header('location:kontrak_mk.php'); 
}

if (isset($_POST['submit_edit_kontrak_mk'])) { 
    $mk_id = $_POST['mk_id']; 
    $mhs_id = $_POST['mhs_id']; 
    $model = new Model(); 
    $model->update_kontrak_mk($mk_id,$mhs_id); 
    header('location:kontrak_mk.php'); 
}

if (isset($_GET['id'])) { 
    $no = $_GET['id']; 
    $model = new Model(); 
    $model->delete_kontrak_mk($no); 
    header('location:kontrak_mk.php'); 
}

