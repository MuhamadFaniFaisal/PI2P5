<?php
$No = $_GET['id'];
include 'model.php';
$model = new Model();
$rslt = $model->edit_kontrak_mk($No);
?>
<!doctype html>
<html lang="eng">
<head>
    <title>Edit Kontrak_Mk</title>
</head>
<body>
    <h1>Edit Kontrak_Mk</h1>
    <a href="kontrak_mk.php">Kembali</a>
    <form action="process.php" method="post">
        <label>MK_ID</label>
        <br>
         <input type="text" name="mk_id" value="<?php echo $rslt->mk_id ?>">
        <br>
         <label>MHS_ID</label>
        <br>
        <input type="text" name="mhs_id" value="<?php echo $rslt->mhs_id ?>">
        <br><br>
        <button type="submit" name="submit_edit_kontrak_mk">submit</button>
    </form>
</body>
<html>