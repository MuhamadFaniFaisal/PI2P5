<?php
$No = $_GET['id'];
include 'model.php';
$model = new Model();
$rslt = $model->edit_matakuliah($No);
?>
<!doctype html>
<html lang="eng">
<head>
    <title>Edit Matakuliah</title>
</head>
<body>
    <h1>Edit Matakuliah</h1>
    <a href="matakuliah.php">Kembali</a>
    <form action="process.php" method="post">
        <label>ID</label>
        <br>
         <input type="text" name="id" value="<?php echo $rslt->id ?>">
        <br>
         <label>Nama_Mk</label>
        <br>
        <input type="text" name="nama_mk" value="<?php echo $rslt->nama_mk ?>">
        <br><br>
        <button type="submit" name="submit_edit_matakuliah">submit</button>
    </form>
</body>
<html>